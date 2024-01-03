<?php
class FlowEndpoint01Helper {
  private $mockup_debug;
  public $flow;
  public $root;
  public $override_info = [];
  private $request_to_keys = [
    'get-file-base64' => ['file-url']
  ];

  public function __construct($settings) {
    $this->flow = $settings['flow'];
    $this->root = $settings['root'];
    $this->mockup_debug = $settings['mockup_debug'];
  }

  public function set_internal_endpoint_data() {  
    $input_data = json_decode(file_get_contents('php://input'), true);
    $request_key = 'request';

    if(!$this->check_data_key_length($input_data, ['request'])) {
      return [];
    }

    $request_value = trim($input_data[$request_key]);
    $keys_for_request = array_merge([$request_key], $this->request_to_keys[$request_value]);

    $data = array_filter(
      $input_data,
      function($key) use ($keys_for_request) {
        return in_array($key, $keys_for_request);
      },
      ARRAY_FILTER_USE_KEY
    );

    return $data;
  }

  public function check_required_data($data) {
    if($this->mockup_debug) {
      return true;
    }

    $result = false;

    switch ($data['request']) {
      case 'get-file-base64':
        if(
          $this->check_data_key_length($data, ['file-url']) && filter_var($data['file-url'], FILTER_VALIDATE_URL)
        ) {
          $result = true;
        }
        break;
    }
    return $result;
  }

  private function check_data_key_length($data, $keys_array) {
    foreach($keys_array as $key) {
      if(!array_key_exists($key, $data) || strlen($data[$key]) == 0) {
        return false;
      }
    }
    return true;
  }
}
?>