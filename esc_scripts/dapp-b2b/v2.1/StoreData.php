<?php
class StoreData {
  public $site_root;
  public $utm = [];
  public $fb = [];
  
  public function __construct() {
    $this->site_root = getenv('SITE_ROOT');
    $this->set_utm();
    $this->set_fb();
  }

  public function set_utm() {
    $params = [
      'us' => 'esc_us',
      'um' => 'esc_um',
      'uca' => 'esc_uca',
      'uco' => 'esc_uco',
      'ut' => 'esc_ut',
      'ui' => 'esc_ui',
      'usf' => 'esc_usf'
    ];

    foreach($params as $k => $v) {
      $this->set_utm_name($k, $v);
    }
  }

  private function set_utm_name($utm, $utm_cookie) {
    $utm_val = '';
    if(isset($_GET[$utm]) && strlen(trim($_GET[$utm])) > 0) {
      $utm_val = trim($_GET[$utm]);
      setcookie($utm_cookie, $utm_val, time()+(180*24*60*60), $this->site_root);
    } else if(isset($_COOKIE[$utm_cookie]) && strlen(trim($_COOKIE[$utm_cookie])) > 0) {
      $utm_val = trim($_COOKIE[$utm_cookie]);
    }
    $this->utm[$utm] = $utm_val;
  }

  public function set_fb() {
    $this->fb['data'] = array(
      [
        'event_time' => time(),
        'action_source' => 'website',
        'user_data' => [
          'client_ip_address' => $_SERVER['REMOTE_ADDR'],
          'client_user_agent' => $_SERVER['HTTP_USER_AGENT']
        ]
      ]
    );
    // $this->fb['test_event_code'] = 'TEST80963';

    if(isset($_COOKIE['_fbp'])) {
      $this->fb['data'][0]['user_data']['fbp'] = trim($_COOKIE['_fbp']);
    }

    if(isset($_COOKIE['_fbc'])) {
      $this->fb['data'][0]['user_data']['fbc'] = trim($_COOKIE['_fbc']);
    }
  }
}
?>