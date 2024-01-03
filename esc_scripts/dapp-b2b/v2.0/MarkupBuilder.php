<?php
class MarkupBuilder {
  public $markup;

  public function __construct($settings) {
    $markup_class = '/Markup01.php';
    $flow = $settings['flow'];
    $markup_type = $settings['markup'];
    $dapp_root = $settings['dapp_root'];

    if($markup_type == 'markup-02') {
      $markup_class = '/Markup02.php';
    }

    require_once $dapp_root . $markup_class;
    $this->markup = new Markup($settings);
  }

  public function build_header($settings = []) {
    return $this->markup->build_header($settings);
  }

  public function build_footer($settings = []) {
    return $this->markup->build_footer($settings);
  }

  public function get_form_signup($continue_signup_data) {
    return $this->markup->get_form_signup($continue_signup_data);
  }

  public function get_form_files() {
    return $this->markup->get_form_files();
  }

  public function get_thx_content() {
    return $this->markup->get_thx_content();
  }

  public function include_header_assets() {
     return $this->markup->include_header_assets();
  }

  public function include_footer_assets($footer_data = []) {
    return $this->markup->include_footer_assets($footer_data);
  }
}
?>