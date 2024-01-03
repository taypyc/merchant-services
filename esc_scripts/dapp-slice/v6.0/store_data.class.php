<?php
class StoreData {
  public $site_root;
  public $utm = [
    'us' => '',
    'um' => '',
    'uca' => '',
    'uco' => '',
    'ut' => '',
    'ui' => '',
    'usf' => ''
  ];
  
  public function __construct() {
    $this->site_root = getenv('SITE_ROOT');
    $this->set_utm();
  }

  public function set_utm() {
    $this->set_utm_name('us', 'esc_us');
    $this->set_utm_name('um', 'esc_um');
    $this->set_utm_name('uca', 'esc_uca');
    $this->set_utm_name('uco', 'esc_uco');
    $this->set_utm_name('ut', 'esc_ut');
    $this->set_utm_name('ui', 'esc_ui');
    $this->set_utm_name('usf', 'esc_usf');
  }

  private function set_utm_name($utm, $utm_cookie) {
    if(isset($_GET[$utm]) && strlen(trim($_GET[$utm])) > 0) {
      $this->utm[$utm] = trim($_GET[$utm]);
      setcookie($utm_cookie, $this->utm[$utm], time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE[$utm_cookie]) && strlen(trim($_COOKIE[$utm_cookie])) > 0) {
      $this->utm[$utm] = trim($_COOKIE[$utm_cookie]);
    }
  }
}
?>