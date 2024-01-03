<?php
class MarkupBuilder {
  public $markup;
  public $services_info_helper;

  public function __construct($settings) {
    $markup_class = '/Markup01.php';
    $flow = $settings['flow'];
    $markup_type = $settings['markup'];
    $root = $settings['root'];
    $merkup_type_to_class_mapping = [
      'markup-02' => '/Markup02.php',
      'markup-03' => '/Markup03.php',
      'markup-04' => '/Markup04.php',
      'markup-05' => '/Markup05.php',
      'markup-06' => '/Markup06.php',
    ];

    foreach($merkup_type_to_class_mapping as $type => $class) {
      if($markup_type == $type) {
        $markup_class = $class;
        break;
      }
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
  public function build_files($files_data) {
    return $this->markup->build_files($files_data);
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
