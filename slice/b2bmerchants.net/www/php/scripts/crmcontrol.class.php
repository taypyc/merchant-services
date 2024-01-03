<?php
class CrmControl {
  public $site_root;
  public $utm = [
    'utm_source' => '',
    'utm_medium' => '',
    'utm_campaign' => '',
    'utm_content' => '',
    'utm_term' => ''
  ];
  
  public function __construct() {
    $this->site_root = getenv('SITE_ROOT');
    $this->set_utm();
  }

  public function set_utm() {
    //utm_source
    if(isset($_GET['us']) && strlen(trim($_GET['us'])) > 0) {
      $this->utm['utm_source'] = trim($_GET['us']);
      setcookie('esc_us', $this->utm['utm_source'], time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE['esc_us']) && strlen(trim($_COOKIE['esc_us'])) > 0) {
      $this->utm['utm_source'] = trim($_COOKIE['esc_us']);
    }
    //utm_medium
    if(isset($_GET['um']) && strlen(trim($_GET['um'])) > 0) {
      $this->utm['utm_medium'] = trim($_GET['um']);
      setcookie('esc_um', $this->utm['utm_medium'], time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE['esc_um']) && strlen(trim($_COOKIE['esc_um'])) > 0) {
      $this->utm['utm_medium'] = trim($_COOKIE['esc_um']);
    }
    //utm_campaign
    if(isset($_GET['uca']) && strlen(trim($_GET['uca'])) > 0) {
      $this->utm['utm_campaign'] = trim($_GET['uca']);
      setcookie('esc_uca', $this->utm['utm_campaign'], time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE['esc_uca']) && strlen(trim($_COOKIE['esc_uca'])) > 0) {
      $this->utm['utm_campaign'] = trim($_COOKIE['esc_uca']);
    }
    //utm_content
    if(isset($_GET['uco']) && strlen(trim($_GET['uco'])) > 0) {
      $this->utm['utm_content'] = trim($_GET['uco']);
      setcookie('esc_uco', $this->utm['utm_content'], time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE['esc_uco']) && strlen(trim($_COOKIE['esc_uco'])) > 0) {
      $this->utm['utm_content'] = trim($_COOKIE['esc_uco']);
    }
    //utm_term
    if(isset($_GET['ut']) && strlen(trim($_GET['ut'])) > 0) {
      $this->utm['utm_term'] = trim($_GET['ut']);
      setcookie('esc_ut', $this->utm['utm_term'], time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE['esc_ut']) && strlen(trim($_COOKIE['esc_ut'])) > 0) {
      $this->utm['utm_term'] = trim($_COOKIE['esc_ut']);
    }
  }
}
?>