<?php
class Markup {
  public $site_root;
  public $page;
  public $assets_global;
  public $transfer_protocol;
  private $services_info_helper;
  private $services;
  
  public function __construct($settings = []) {
    $this->site_root = getenv('SITE_ROOT');
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
    $this->assets_global = getenv('ASSETS_GLOBAL');
    $this->transfer_protocol = $settings['transfer_protocol'];
    $this->services_info_helper = $settings['services_info_helper'];
    $this->services = $this->services_info_helper->services;
  }

  public function build_header_signup($settings = []) {
    $settings['services'] = $this->services;
    $settings['site_root'] = $this->site_root;
    $settings['page'] = $this->page;
    $settings['assets_global'] = $this->assets_global;
    return $this->get_markup_from_file('markup/markup_01_header.php', $settings);
  }

  public function build_footer() {
    return $this->get_markup_from_file('markup/markup_01_footer.php');
  }

  public function build_signup($continue_signup_data) {
    $continue_signup_data['select_states_options'] = $this->get_states_select_options();
    $continue_signup_data['services'] = $this->services;
    $continue_signup_data['assets_global'] = $this->assets_global;
    return $this->get_markup_from_file('markup/markup_01_quickstart.php', $continue_signup_data);
  }

  public function build_verify($verify_data) {
    $verify_data['assets_global'] = $this->assets_global;
    return $this->get_markup_from_file('markup/markup_01_verify.php', $verify_data);
  }

  public function build_thx() {
    return $this->get_markup_from_file('markup/markup_01_thx.php');
  }

  public function build_home_page($settings) {
    $type_to_content = [
      'program' => 'markup_01_home_page_program',
      'device' => 'markup_01_home_page_device',
    ];
    $settings['services_info_helper'] = $this->services_info_helper;
    $settings['services'] = $this->services;
    $settings['site_root'] = $this->site_root;
    $settings['page'] = $this->page;
    $settings['assets_global'] = $this->assets_global;
    return $this->get_markup_from_file('markup/' . $type_to_content[$settings['type']] . '.php', $settings);
  }

  public function build_privacy_policy() {
    return $this->get_markup_from_file('markup/markup_01_privacy_policy.php');
  }

  public function build_terms_of_use() {
    return $this->get_markup_from_file('markup/markup_01_terms_of_use.php');
  }

  public function build_head_settings($settings) {
    $header_settings = [
      'title' => 'Slice',

    ];
    switch ($this->page) {
      case 'index':
        $header_settings = [
          'title' => '0% Credit Card Processing | Slice',
          'meta_desc' => "Introducing 4 Amazing POS Solutions With 0% card processing. With the Slice 0% Processing plan, you'll never have to worry about processing fees.",
          'meta_keys' => '0% Credit Card Processing, 0 transaction fee, clover, pos, free processing, slice'
        ];

        if($_SERVER['REQUEST_URI'] !== $this->site_root) {
          $header_settings['meta_tags'] = '<link rel="canonical" href="' . $this->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $this->site_root . '">';
        }
        break;
      case 'quick-start':
        $header_settings['title'] = '0% Card Processing | Quick Start | Slice';
        break;
      case 'verify':
        $header_settings['title'] = 'Upload void check | Slice';
        break;
      case 'thank-you':
        $header_settings['title'] = 'Thank You!';
        break;
      case 'privacy-policy':
        $header_settings['title'] = 'Slice | Privacy Policy';
        break;
      case 'terms-of-use':
        $header_settings['title'] = 'Slice | General Terms of Service';
        break;
    }

    return $header_settings;
  }

  private function get_states_select_options() {
    return $this->get_markup_from_file('markup/states_options.php');
  }

  public function include_header_assets() {
    $result = '';
    $assets_arr = ['vendors.css', 'main.css'];
    switch ($this->page) {
      case 'files':
        array_push($assets_arr, 'files.css');
        break;
    }
    foreach($assets_arr as $asset) {
      $result .= '<link rel="stylesheet" href="' . $this->assets_global . 'css/' . $asset. '">';
    }
    return $result;
  }

  public function include_footer_assets() {
    $result = '';
    $assets_arr = ['vendors.js', 'main.js'];
    switch ($this->page) {
      case 'quick-start':
      case 'verify':
        array_push($assets_arr, 'signup.js');
        break;
      case 'files':
        array_push($assets_arr, 'files.js');
        break;
    }
    foreach($assets_arr as $asset) {
      $result .= '<script src="' . $this->assets_global . 'js/' . $asset. '"></script>';
    }
    return $result;
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