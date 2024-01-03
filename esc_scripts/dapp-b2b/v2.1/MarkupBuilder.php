<?php
class MarkupBuilder {
  public $markup;
  public $markup_mapping = [
    'markup-02' => '/Markup02.php',
    'markup-03' => '/Markup03.php',
    'markup-04' => '/Markup04.php',
    'markup-05' => '/Markup05.php',
    'markup-06' => '/Markup06.php',
    'markup-07' => '/Markup07.php',
		'markup-08' => '/Markup08.php',
  ];

  public function __construct($settings) {
    $markup_class = '/Markup01.php';
    $flow = $settings['flow'];
    $markup_type = $settings['markup'];
    $dapp_root = $settings['dapp_root'];

    foreach ($this->markup_mapping as $markup => $class) {
      if($markup_type == $markup) {
        $markup_class = $class;
      }
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

  public function get_form_plaid($continue_signup_data) {
    return $this->markup->get_form_plaid($continue_signup_data);
  }

  public function get_form_files() {
    return $this->markup->get_form_files();
  }

  public function get_thx_content() {
    return $this->markup->get_thx_content();
  }

  public function build_page($settings = []) {
    return $this->markup->build_page($settings);
  }

  public function build_head_settings($settings = []) {
    return $this->markup->build_head_settings($settings);
  }

  public function include_header_assets() {
     return $this->markup->include_header_assets();
  }

  public function include_footer_assets($footer_data = []) {
    return $this->markup->include_footer_assets($footer_data);
  }
}
?>
