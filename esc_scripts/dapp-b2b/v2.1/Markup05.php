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
    return $this->get_markup_from_file('markup/markup_05_header.php', $settings);
  }

  public function build_footer() {
    return $this->get_markup_from_file('markup/markup_05_footer.php');
  }

  public function get_form_signup($continue_signup_data) {
    $continue_signup_data['select_states_options'] = $this->get_states_select_options();
    $continue_signup_data['flow'] = $this->flow;
    return $this->get_markup_from_file('markup/markup_04_quickstart.php', $continue_signup_data);
  }

  public function get_form_plaid($continue_signup_data) {
    $continue_signup_data['select_states_options'] = $this->get_states_select_options();
    $continue_signup_data['flow'] = $this->flow;
    return $this->get_markup_from_file('markup/markup_04_plaid.php', $continue_signup_data);
  }

  public function get_form_files() {
    return $this->get_markup_from_file('markup/markup_04_files.php');
  }

  public function get_thx_content() {
    return $this->get_markup_from_file('markup/markup_05_thx_content.php');
  }

  public function get_states_select_options() {
    return $this->get_markup_from_file('markup/states_options.php');
  }

  public function build_page($settings) {
    $page_to_content = [
      'privacy-policy' => 'markup_04_privacy_policy',
    ];
    $page = $this->page;

    if(array_key_exists('page', $settings)) {
      $page = $settings['page'];
    }
    
    return $this->get_markup_from_file('markup/' . $page_to_content[$page] . '.php', $settings);
  }

  public function include_header_assets() {
    $result = '';
    $assets_arr = ['vendors.css'];
    switch ($this->page) {
      case 'quick-start':
      case 'thank-you':
      case 'files':
      case 'privacy-policy':
        array_push($assets_arr, 'signup.css');
        break;
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
        array_push($assets_arr, 'signup.en.js');
        break;
      case 'files':
        array_push($assets_arr, 'files.en.js');
        break;
    }
    foreach($assets_arr as $asset) {
      $result .= '<script src="' . $this->assets_global . 'js/' . $asset. '"></script>';
    }
    $result .= $this->include_footer_scripts($footer_data);
    $result .= $this->build_page_end_dom();
    return $result;
  }

  private function include_footer_scripts($footer_data) {
    $footer_scripts = '';
    if($this->check_array_key('sf_p_link_token', $footer_data) && $this->check_array_key('sf_p_received_state', $footer_data)) {
      $js_control_params = "{plaidLinkToken:'{$footer_data['sf_p_link_token']}',plaidReceivedState:'{$footer_data['sf_p_received_state']}'}";
      $footer_scripts .= "<script>stepsControl.setControlParams('plaid', " . $js_control_params . ")</script>";
    }

    if($this->page == 'quick-start') {
      $footer_scripts .= "<script>if(stepsControl.form[0].hasAttribute('data-form-plaid')) stepsControl.loadDynamicScripts(0);</script>";
    }
    
    return $footer_scripts;
  }

  private function build_page_end_dom() {
    return $this->get_markup_from_file('markup/page_end_dom.php');
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