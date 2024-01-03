<?php
class Markup {
  public $site_root;
  public $page;
  public $assets_global;
  public $transfer_protocol;
  private $services_info_helper;
  private $services;
  private $default_pages = ['index', 'clover-flex', 'clover-station', 'clover-station-pro', 'privacy-policy', 'terms-of-use'];
  
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

    if(in_array($this->page, ['quick-start', 'verify', 'files'])) {
      $settings['header_logo'] = 'img/logo-01.svg';
      
      return $this->get_markup_from_file('markup/markup_01_header.php', $settings);
    } else {
      return $this->get_markup_from_file('markup/markup_02_header_default.php', $settings);
    }
  }

  public function build_footer($settings) {
    $settings['loader'] = $this->build_loader();
    return $this->get_markup_from_file('markup/markup_02_footer.php', $settings);
  }

  private function build_intercom() {
    return $this->get_markup_from_file('markup/intercom_js.php');
  }

  private function build_loader() {
    return $this->get_markup_from_file('markup/markup_01_loader.php');
  }

  private function build_page_end_dom() {
    return $this->get_markup_from_file('markup/page_end_dom.php');
  }

  public function build_signup($continue_signup_data) {
    return $this->get_markup_from_file('markup/markup_01_quickstart.php', $continue_signup_data);
  }

  public function build_verify($verify_data) {
    return $this->get_markup_from_file('markup/markup_01_verify.php', $verify_data);
  }

  public function build_files($files_data) {
    return $this->get_markup_from_file('markup/markup_01_files.php', $files_data);
  }

  public function build_thx() {
    return $this->get_markup_from_file('markup/markup_01_thx.php');
  }

  public function build_page($settings) {
    $page_to_content = [
      'index' => 'markup_02_page_clover_mini',
      'clover-flex' => 'markup_02_page_clover_flex',
      'clover-station' => 'markup_02_page_clover_station',
      'clover-station-pro' => 'markup_02_page_clover_station_pro',
    ];

    $settings['services_info_helper'] = $this->services_info_helper;
    $settings['site_root'] = $this->site_root;
    $settings['page'] = $this->page;
    $settings['assets_global'] = $this->assets_global;

    require_once 'markup/markup_02_contents.php';
    $markup_dom_contents = new Markup02Contents($settings);
    $settings['slider'] = $markup_dom_contents->build_content('slider', $settings);
    $settings['testimonials'] = $markup_dom_contents->build_content('testimonials', $settings);
    $settings['device_tiles'] = $markup_dom_contents->build_content('device_tiles', $settings);
    $settings['faq'] = $markup_dom_contents->build_content('faq', $settings);
    return $this->get_markup_from_file('markup/' . $page_to_content[$this->page] . '.php', $settings);
  }

  public function build_privacy_policy() {
    return $this->get_markup_from_file('markup/markup_01_privacy_policy.php');
  }

  public function build_terms_of_use() {
    return $this->get_markup_from_file('markup/markup_01_terms_of_use.php');
  }

  public function build_head_settings($head_data) {
    $header_settings = [
      'title' => 'Slice',
      'favicons' => $this->get_markup_from_file('markup/markup_01_favicon.php')
    ];
    switch ($this->page) {
      case 'index':
        $header_settings['title'] = '0% Credit Card Processing | Slice';
        $header_settings['meta_desc'] = "Introducing 4 Amazing POS Solutions With 0% card processing. With the Slice 0% Processing plan, you'll never have to worry about processing fees.";
        $header_settings['meta_keys'] = '0% Credit Card Processing, 0 transaction fee, clover, pos, free processing, slice';

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
      case 'files':
        $header_settings['title'] = 'Upload Files | Slice';
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

    foreach(['title', 'meta_desc', 'meta_keys'] as $tag) {
      if(array_key_exists($tag, $head_data)) {
        $header_settings[$tag] = $head_data[$tag];
      }
    }

    return $header_settings;
  }

  private function get_states_select_options() {
    return $this->get_markup_from_file('markup/states_options.php');
  }

  public function include_header_assets($settings) {
    $result = '';
    $assets_arr = ['vendors.css', 'main.02.css'];

    if(in_array($this->page, $this->default_pages)) {
      $result .= '<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">';
      $assets_arr = ['swiper.min.css', 'style.css'];
    }
    
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

    if(in_array($this->page, $this->default_pages)) {
      $assets_arr = ['jquery.min.js', 'swiper.min.js', 'scripts.js'];
    }

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
    $result .= $this->build_intercom();
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