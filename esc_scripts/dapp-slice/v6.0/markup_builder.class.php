<?php
class MarkupBuilder {
  public $markup;
  public $services_info_helper;

  public function __construct($settings) {
    $markup_class = '/flow_01_markup_01.class.php';
    $flow = $settings['flow'];
    $markup_type = $settings['markup'];
    $root = $settings['root'];

    if($flow == 'flow-01') {
      if($markup_type == 'default') {
        $markup_class = '/flow_01_markup_01.class.php';
      }
    }

    require_once $root . '/serviсes_info_helper.class.php';
    $this->services_info_helper = new ServicesInfoHelper();

    require_once $root . $markup_class;
    $this->markup = new Markup(['services' => $this->services_info_helper->services]);
  }

  public function build_header_signup($settings = []) {
    return $this->markup->build_header_signup($settings);
  }

  public function get_form_signup($continue_signup_data) {
    return $this->markup->get_form_signup($continue_signup_data);
  }

  public function get_form_verify($verify_data) {
    return $this->markup->get_form_verify($verify_data);
  }

  public function get_thx_content() {
    return $this->markup->get_thx_content();
  }

  public function get_service_price_params($key, $type = '', $val = '') {
    return $this->services_info_helper->get_service_price_params($key, $type, $val);
  }
}
?>