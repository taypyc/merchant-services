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
    if($this->check_page(['verify', 'files', 'partners'])) {
      $settings['header_body_css'] = ' header-body-short';
    }

    if(in_array($this->page, ['quick-start', 'verify', 'files'])) {
      return $this->get_markup_from_file('markup/markup_06_header.php', $settings);
    } else {
      return $this->get_markup_from_file('markup/markup_06_header.php', $settings);
    }
  }

  public function build_footer($settings) {
    $settings['loader'] = $this->build_loader();
    return $this->get_markup_from_file('markup/markup_06_footer.php', $settings);
  }

  private function build_intercom() {
    return $this->get_markup_from_file('markup/intercom_js.php');
  }

  private function build_loader() {
    return $this->get_markup_from_file('markup/markup_06_loader.php');
  }

  private function build_page_end_dom() {
    return $this->get_markup_from_file('markup/page_end_dom_pr.php');
  }

  public function build_signup($continue_signup_data) {
    return $this->get_markup_from_file('markup/markup_06_quickstart.php', $continue_signup_data);
  }

  public function build_page($settings) {
    $type = $settings['type'] ? $settings['type'] : $this->page;
    $markup_name = '';
    $type_to_markup = [
        'partners' => 'markup_06_partners'
    ];
    foreach ($type_to_markup as $tp => $mrk) {
      if($type == $tp) {
        $markup_name = $mrk;
      }
    }
    return $this->get_markup_from_file('markup/' . $markup_name . '.php', $settings);
  }

  public function build_verify($verify_data) {
    return $this->get_markup_from_file('markup/markup_01_verify.php', $verify_data);
  }

  public function build_files($files_data) {
    return $this->get_markup_from_file('markup/markup_06_files.php', $files_data);
  }

  public function build_thx() {
    return $this->get_markup_from_file('markup/markup_06_thx.php');
  }

  public function build_home_page($settings) {
    $type_to_content = [
      'program' => 'markup_05_home_page_program',
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
      'title' => 'B2B Merchants',
      'favicons' => $this->get_markup_from_file('markup/markup_06_favicon.php', ['assets_global' => $this->assets_global])
    ];
    switch ($this->page) {
      case 'index':
        $header_settings['title'] = '0 % Procesamiento de tarjetas de crédito | B2B Merchants';
        $header_settings['meta_desc'] = "Recauda el 100% de sus ventas de procesamiento";

        if($_SERVER['REQUEST_URI'] !== $this->site_root) {
          $header_settings['meta_tags'] = '<link rel="canonical" href="' . $this->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $this->site_root . '">';
        }
        break;
      case 'quick-start':
        $header_settings['title'] = '1,29% Procesamiento de tarjetas de crédito | Quick Start | B2B Merchants';
        break;
      case 'files':
        $header_settings['title'] = 'Upload Files | B2B Merchants';
        break;
      case 'thank-you':
        $header_settings['title'] = '¡Gracias!';
        break;
      case 'privacy-policy':
        $header_settings['title'] = 'B2B Merchants | Privacy Policy';
        break;
      case 'terms-of-use':
        $header_settings['title'] = 'B2B Merchants | General Terms of Service';
        break;
    }

    return $header_settings;
  }

  private function get_states_select_options() {
    return $this->get_markup_from_file('markup/states_options_pr.php');
  }

  public function include_header_assets($settings) {
    $result = '';
    $assets_arr = ['vendors.css', 'main.css', 'main.06.css'];
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

  public function include_footer_assets($settings) {
    $result = '';
    $assets_arr = ['vendors.js', 'main.js'];
    switch ($this->page) {
      case 'quick-start':
      case 'verify':
      case 'partners':
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
    //$result .= $this->build_intercom();
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
