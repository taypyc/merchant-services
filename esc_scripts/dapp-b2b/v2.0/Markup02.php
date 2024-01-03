<?php
class Markup {
  public $site_root;
  public $page;
  public $assets_global;
  private $flow;
  
  public function __construct($settings = []) {
    $this->site_root = getenv('SITE_ROOT');
    $this->assets_global = getenv('ASSETS_GLOBAL');
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
    $this->flow = array_key_exists('flow', $settings) ? $settings['flow'] : '';
  }

  public function build_header($settings = []) {
    return $this->get_markup_from_file('markup/markup_01_header.php', $settings);
  }

  public function build_footer() {
    return $this->get_markup_from_file('markup/markup_01_footer.php');
  }

  public function get_form_signup($continue_signup_data) {
    $continue_signup_data['select_states_options'] = $this->get_states_select_options();
    $continue_signup_data['flow'] = $this->flow;
    return $this->get_markup_from_file('markup/markup_02_quickstart.php', $continue_signup_data);
  }

  public function get_states_select_options() {
    return $this->get_markup_from_file('markup/states_options.php');
  }

  public function get_form_files() {
    return $this->get_markup_from_file('markup/markup_01_files.php');
  }

  public function get_thx_content() {
    return $this->get_markup_from_file('markup/markup_01_thx_content.php');
  }

  public function include_header_assets() {
    $result = '';
    $assets_arr = ['vendors.css'];
    switch ($this->page) {
      case 'quick-start':
      case 'thank-you':
      case 'files':
        array_push($assets_arr, 'signup.css');

      case 'files':
        array_push($assets_arr, 'files.css');
        break;
    }
    foreach($assets_arr as $asset) {
      $result .= '<link rel="stylesheet" href="' . $this->assets_global . 'css/' . $asset. '">';
    }
    return $result;
  }

  public function include_footer_assets($footer_data = []) {
    $result = '';
    $assets_arr = ['vendors.js', 'main.js'];
    switch ($this->page) {
      case 'quick-start':
        array_push($assets_arr, 'signup.js');
        break;
      case 'files':
        array_push($assets_arr, 'files.js');
        break;
    }
    foreach($assets_arr as $asset) {
      $result .= '<script src="' . $this->assets_global . 'js/' . $asset. '"></script>';
    }
    $result .= $this->include_footer_scripts($footer_data);
    return $result;
  }

  private function include_footer_scripts($footer_data) {
    if($this->check_array_key('sf_p_link_token', $footer_data) && $this->check_array_key('sf_p_received_state', $footer_data)) {
      $js_control_params = "{plaidLinkToken:'{$footer_data['sf_p_link_token']}',plaidReceivedState:'{$footer_data['sf_p_received_state']}'}";
      return "<script>stepsControl.setControlParams('plaid', " . $js_control_params . ")</script>";
    }
  }

  private function check_array_key($key, $arr) {
    return array_key_exists($key, $arr) && strlen($arr[$key]) > 0;
  }

  private function check_page($pages_arr) {
    foreach($pages_arr as $page) {
      if($this->page == $page) {
        return true;
      }
    }
    return false;
  }

  private function get_markup_from_file($file_path, $data = []) {
    ob_start();
    require($file_path);
    return ob_get_clean();
  }
}
?>