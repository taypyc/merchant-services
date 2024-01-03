<?php
class ServicesInfoHelper {
  public $all_services = [
    'clover-flex' => ['name' => 'Clover Flex', 'friendly_name' => 'Clover Flex', 'default' => true, 'price' => '49.99', 'old_price' => '90.99'],
    'clover-mini' => ['name' => 'Clover Mini', 'friendly_name' => 'Clover Mini', 'default' => true, 'price' => '59.99', 'old_price' => '119.99'],
    'clover-station' => ['name' => 'Clover Station', 'friendly_name' => 'Clover Station', 'default' => true, 'price' => '99.99', 'old_price' => '180.99'],
    'clover-station-pro' => ['name' => 'Clover Pro Bundle', 'friendly_name' => 'Clover Station Duo', 'default' => true, 'price' => '119.99', 'old_price' => '239.99']
  ];

  public $services = [];
  
  public function __construct($available_services = []) {
    foreach($available_services as $s) {
      if(array_key_exists($s, $this->all_services_info)) {
        $this->services[$s] = $this->all_services[$s];
      }
    }

    if(empty($available_services)) {
      foreach($this->all_services as $s => $i) {
        if($i['default']) {
          $this->services[$s] = $i;
        }
      }
    }
  }

  public function get_service_name($key) {
    return array_key_exists($key, $this->services) ? $this->services[$key]['name'] : '';
  }

  public function get_service_friendly_name($key) {
    return array_key_exists($key, $this->services) ? $this->services[$key]['friendly_name'] : '';
  }

  public function get_service_price($key) {
    return array_key_exists($key, $this->services) ? $this->services[$key]['price'] : '';
  }

  public function get_service_price_params($key, $type, $val) {
    if(!array_key_exists($key, $this->services)) {
      return '';
    }

    if($type == 'current') {
      $price_type = 'price';
    } else if($type == 'old') {
      $price_type = 'old_price';
    } else {
      return '';
    }

    $result = '';
    $price = $this->services[$key][$price_type];
    $price_explode = explode('.', $price, 2);
    if($val == 'dollars') {
      $result = $price_explode[0];
    } else if($val == 'cents') {
      $result = $price_explode[1];
    } else {
      $result = $price;
    }

    return $result;
  }
}
?>