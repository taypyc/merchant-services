<?php
class Markup {
  public $site_root;
  public $page;
  public $assets_global;
  public $transfer_protocol;
  private $services_info_helper;
  private $services;
  private $default_pages = ['index', 'privacy-policy', 'terms-of-use'];
  
  public function __construct($settings = []) {
    $this->site_root = getenv('SITE_ROOT');
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
    $this->assets_global = getenv('ASSETS_GLOBAL');
    $this->transfer_protocol = $settings['transfer_protocol'];
    $this->services_info_helper = $settings['services_info_helper'];
    $this->services = $this->services_info_helper->services;
  }

  public function build_header($settings) {
    if($this->check_page(['verify', 'files'])) {
      $settings['header_body_css'] = ' header-body-short';
    }

    if(in_array($this->page, ['quick-start', 'files'])) {
      return $this->get_markup_from_file('markup/markup_04_header.php', $settings);
    } else {
      return $this->get_markup_from_file('markup/markup_04_header.php', $settings);
    }
  }

  public function build_footer($settings) {
    $settings['loader'] = $this->build_loader();
    return $this->get_markup_from_file('markup/markup_04_footer.php', $settings);
  }

  private function build_loader() {
    return $this->get_markup_from_file('markup/markup_04_loader.php');
  }

  private function build_page_end_dom() {
    return $this->get_markup_from_file('markup/page_end_dom.php');
  }

  public function build_signup($continue_signup_data) {
    return $this->get_markup_from_file('markup/markup_04_quickstart.php', $continue_signup_data);
  }

  public function build_files($files_data) {
    return $this->get_markup_from_file('markup/markup_01_files.php', $files_data);
  }

  public function build_thx() {
    return $this->get_markup_from_file('markup/markup_04_thx.php');
  }

  public function build_home_page($settings) {
    $type_to_content = [
      'program' => 'markup_01_home_page_program',
      'device' => 'markup_01_home_page_device',
    ];
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
      'title' => 'Merchant Services Puerto Rico',
      'favicons' => $this->get_markup_from_file('markup/markup_04_favicon.php', ['assets_global' => $this->assets_global])
    ];
    switch ($this->page) {
      case 'index':
        $header_settings['title'] = 'Merchant Services Puerto Rico | Credit Card Processing';
        $header_settings['meta_desc'] = "Merchant Services Puerto Rico";
        $header_settings['meta_keys'] = 'Merchant Services, Puerto Rico, Credit Card Processing';

        if($_SERVER['REQUEST_URI'] !== $this->site_root) {
          $header_settings['meta_tags'] = '<link rel="canonical" href="' . $this->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $this->site_root . '">';
        }
        break;
      case 'quick-start':
        $header_settings['title'] = 'Credit Card Processing | Quick Start';
        break;
      case 'files':
        $header_settings['title'] = 'Upload Files | Merchant Services Puerto Rico';
        break;
      case 'thank-you':
        $header_settings['title'] = 'Thank You!';
        break;
      case 'privacy-policy':
        $header_settings['title'] = 'Merchant Services Puerto Rico | Privacy Policy';
        break;
      case 'terms-of-use':
        $header_settings['title'] = 'Merchant Services Puerto Rico | General Terms of Service';
        break;
    }

    return $header_settings;
  }

  private function get_states_select_options() {
    return $this->get_markup_from_file('markup/states_options_pr.php');
  }

  public function include_header_assets($settings) {
    $result = '';
    $assets_arr = ['vendors.css', 'main.css', 'styles.04.css'];
    switch ($this->page) {
      case 'files':
        $assets_arr = ['vendors.css', 'main.css', 'files.css', 'styles.04.css'];
        break;
    }
    foreach($assets_arr as $asset) {
      $result .= '<link rel="stylesheet" href="' . $this->assets_global . 'css/' . $asset. '">';
    }
    return $result;
  }

  public function include_footer_assets($settings) {
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

    $result .= $this->build_page_end_dom();
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