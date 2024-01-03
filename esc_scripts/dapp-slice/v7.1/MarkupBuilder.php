<?php
class MarkupBuilder {
  public $markup;
  public $services_info_helper;

  public function __construct($settings) {
    $markup_class = '/Markup01.php';
    $flow = $settings['flow'];
    $markup_type = $settings['markup'];
    $root = $settings['root'];

    if($markup_type == 'markup-02') {
      $markup_class = '/Markup02.php';
    } else if($markup_type == 'markup-03') {
      $markup_class = '/Markup03.php';
    }

    require_once $root . '/ServicesInfoHelper.php';
    $this->services_info_helper = new ServicesInfoHelper();

    require_once $root . $markup_class;
    $this->markup = new Markup([
      'services_info_helper' => $this->services_info_helper, 
      'transfer_protocol' => $settings['transfer_protocol']
    ]);
  }

  public function build_header($settings = []) {
    return $this->markup->build_header($settings);
  }

  public function build_header_signup($settings = []) {
    return $this->markup->build_header_signup($settings);
  }

  public function build_footer($settings = []) {
    return $this->markup->build_footer($settings);
  }

  public function build_signup($continue_signup_data) {
    return $this->markup->build_signup($continue_signup_data);
  }

  public function build_verify($verify_data) {
    return $this->markup->build_verify($verify_data);
  }

  public function build_thx() {
    return $this->markup->build_thx();
  }

  public function build_home_page($settings = []) {
    return $this->markup->build_home_page($settings);
  }

  public function build_page($settings = []) {
    return $this->markup->build_page($settings);
  }

  public function build_privacy_policy($settings = []) {
    return $this->markup->build_privacy_policy($settings);
  }

  public function build_terms_of_use($settings = []) {
    return $this->markup->build_terms_of_use($settings);
  }

  public function build_head_settings($settings = []) {
    return $this->markup->build_head_settings($settings);
  }

  public function include_header_assets($settings = []) {
     return $this->markup->include_header_assets($settings);
  }

  public function include_footer_assets($settings = []) {
    return $this->markup->include_footer_assets($settings);
  }
}
?>