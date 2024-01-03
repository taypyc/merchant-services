<?php
class FlowHelper {
  private $mockup_debug;
  public $flow;
  public $root;
  public $override_info = [];
  private $available_steps = ['0', '1', '2', '3', 'ds-init'];
  private $signup_steps_url = [
    'id_def' => 'id',
    'step_def' => 's',
    'verify' => 'verify',
    'thx' => 'thank-you',
    'thx_success' => 'thank-you?success',
    'signup_url' => 'quick-start',
  ];
  public $services_info_helper;

  public function __construct($settings) {
    $this->flow = $settings['flow'];
    $this->root = $settings['root'];
    $this->mockup_debug = $settings['mockup_debug'];
    require_once $this->root . '/ServicesInfoHelper.php';
    $this->services_info_helper = new ServicesInfoHelper();
  }

  public function set_signup_steps_data_array($additional_data_array = []) {
    $data = [];

    $data = array_merge($data, $additional_data_array);
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = trim($_POST['step']);
    $data['continue_signup'] = trim($_POST['cs']);
    $data['services'] = [
      [
        'device' => $this->services_info_helper->get_service_name(trim($_POST['service'])), 
        'price' => $this->services_info_helper->get_service_price(trim($_POST['service']))
      ]
    ];

    // 1 step
    $data['business_legal_name'] = trim($_POST['business_legal_name']);
    $data['date_business_started'] = trim($_POST['business_term']);
    $data['business_email'] = trim($_POST['business_email']);
    $data['business_phone'] = trim($_POST['business_phone']);
    $data['annual_volume'] = trim($_POST['annual_cards_vol']);
    // $data['highest_sale'] = trim($_POST['avg_sale']);
    $data['average_ticket'] = trim($_POST['avg_sale']);

    $data['step_short'] = isset($_POST['step_short']) ? true : false;
    if($data['step_short']) {
      return $data;
    }

    // 2 step
    $data['business_dba_name'] = trim($_POST['business_dba_name']);
    $data['products_service_sold'] = trim($_POST['products_service_sold']);
    $data['business_type'] = trim($_POST['business_type']);
    $data['business_tax_id'] = trim($_POST['business_tax_id']);
    $data['business_address_line_1'] = trim($_POST['business_address_street']);
    $data['business_address_line_2'] = trim($_POST['business_address_unit']);
    $data['business_city'] = trim($_POST['business_city']);
    $data['business_state'] = trim($_POST['business_state']);
    $data['business_zip'] = trim($_POST['business_zip']);

    // 3 step
    $data['owner_1_first_name'] = trim($_POST['first_name']);
    $data['owner_1_last_name'] = trim($_POST['last_name']);
    $data['owner_1_title'] = trim($_POST['title_name']);
    $data['owner_1_dob'] = trim($_POST['birth_date']);
    $data['owner_1_email'] = trim($_POST['personal_email']);
    $data['owner_1_phone'] = trim($_POST['personal_phone']);
    $data['owner_1_ownership'] = trim($_POST['ownership_perc']);
    $data['owner_1_ssn'] = trim($_POST['social_security']);
    $data['owner_1_address_line_1'] = trim($_POST['home_address_street']);
    $data['owner_1_address_line_2'] = trim($_POST['home_address_unit']);
    $data['owner_1_city'] = trim($_POST['home_city']);
    $data['owner_1_state'] = trim($_POST['home_state']);
    $data['owner_1_zip'] = trim($_POST['home_zip']);
    $data['account_number'] = trim($_POST['account_number']);
    $data['routing_number'] = trim($_POST['routing_number']);

    return $data;
  }

  public function set_step_proof_data_array() {
    $result = [];

    $id = '';
    $continue_step = '';

    if(isset($_GET['id']) && strlen(trim($_GET['id'])) > 0) {
      $id = trim($_GET['id']);
    }

    if(isset($_GET['s']) && strlen(trim($_GET['s'])) > 0) {
      $continue_step = trim($_GET['s']);
    }

    if(strlen($id) > 0 && strlen($continue_step) > 0 && in_array($continue_step, $this->available_steps)) {
      $result['flow'] = $this->flow;
      $result['id'] = $id;
      $result['step'] = 'proof';
      $result['step_to_proof'] = $continue_step;
    }

    return $result;
  }

  public function set_step_ds_continue_data_array($data, $additional_data_array = []) {
    $result = [];

    $result['flow'] = $this->flow;
    $result['id'] = $data['id'];
    $result['step'] = 'ds';

    $result = array_merge($result, $additional_data_array);

    return $result;
  }

  public function set_ds_completed_data_array($additional_data_array = []) {
    $data = [];

    if(isset($_GET['id']) && strlen(trim($_GET['id'])) > 0 && isset($_GET['event']) && trim($_GET['event']) == 'signing_complete') {
      $data['flow'] = $this->flow;
      $data['id'] = trim($_GET['id']);
      $data['step'] = 'ds-completed';

      $data = array_merge($data, $additional_data_array);
    }

    return $data;
  }

  public function set_file_data_array($data = [], $file_info = []) {
    if(count($data) > 0 && count($file_info) > 0) {
      $data['filename'] = $file_info['file_name'];
      $data['file_base64'] = base64_encode($file_info['file']);
      return $data;
    }

    $data = [];
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = 'verify';
    $data['filename'] = null;
    $data['file_base64'] = null;
    $data['file_type'] = 'void-check';
    return $data;
  }

  public function set_fb_conversation_api_data_array($data, $store_data) {
    $step_to_fb_event = [
      '0' => 'Lead',
      '1' => 'Initiate Checkout',
      '2' => 'Complete Registration',
      'ds-init' => 'Submit Application'
    ];
    $event_name = '';
    if(isset($data['step']) && in_array($data['step'], $this->available_steps) && array_key_exists($data['step'], $step_to_fb_event)) {
      $event_name = $step_to_fb_event[$data['step']];
      $event_source_url = $data['url_source'];
    } else if(isset($data['page_view']) && $data['page_view'] == true) {
      $event_name = 'PageView';
      $event_source_url = $data['page_view_url'];
    }

    if(strlen($event_name) > 0) {
      $store_data->fb['data'][0]['event_name'] = $event_name;
      $store_data->fb['data'][0]['event_source_url'] = $event_source_url;
      return $store_data->fb;
    } else {
      return null;
    }
  }

  public function set_fb_conversation_api_pageview_data() {
    $data = [];
    $data['page_view'] = true;  
    $data['page_view_url'] = trim($_POST['url']);
    return $data;
  }

  public function check_required_data($data, $file_info) {
    if($this->mockup_debug) {
      return true;
    }

    $result = false;
    switch ($data['step']) {
      case '0':
        if(
          $this->check_data_key_length($data, ['business_legal_name', 'business_email', 'date_business_started', 'annual_volume', 'average_ticket'])
        ) {
          $result = true;
        }
        break;

      case '1':
        if(
          $this->check_data_key_length($data, ['business_dba_name', 'products_service_sold', 'business_type', 'business_address_line_1', 'business_city', 'business_state', 'business_zip'])
        ) {
          $result = true;
        }
        break;

      case '2':
        if(
          $this->check_data_key_length($data, ['owner_1_first_name', 'owner_1_last_name', 'owner_1_title', 'owner_1_dob', 'owner_1_email', 'owner_1_phone', 'owner_1_ownership', 'owner_1_ssn', 'owner_1_address_line_1', 'owner_1_city', 'owner_1_state', 'owner_1_zip'])
        ) {
          $result = true;
        }
        break;

      case 'ds-init':
        if(
          count($data['services']) > 0
        ) {
          $result = true;
        }
        break;

      case 'verify':
        if(
          $this->check_data_key_length($data, ['id']) &&
          is_array($file_info)
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

  public function check_data_for_step_ds_continue() {
    $result = ['status' => false, 'data' => null];

    if(isset($_GET['id']) && strlen(trim($_GET['id'])) > 0 && isset($_GET['s']) && trim($_GET['s']) == 'ds') {
      $result['status'] = true;
      $result['data'] = ['id' => trim($_GET['id'])];
    }

    return $result;
  }

  public function set_return_json_data($source_data) {
    $array = [
      'id' => $source_data['id'],
      'potential_savings' => $source_data['potential_savings']
    ];

    if($this->mockup_debug) {
      $array['source_data'] = $source_data;
    }

    return $array;
  }

  public function get_signup_step_url($params) {
    $result = $params['url_base'];

    if($params['type'] == 'signup_url') {
      $result .= $this->signup_steps_url[$params['type']];
    } else if($params['type'] == 'continue_signup') {
      $result .= $this->signup_steps_url['signup_url'] . '?' . $this->signup_steps_url['id_def'] . '=' . $params['id'] . '&' . $this->signup_steps_url['step_def'] . '=' . $params['step'];
    } else if($params['type'] == 'verify') {
      $result .= $this->signup_steps_url[$params['type']] . '?' . $this->signup_steps_url['id_def'] . '=' . $params['id'];
    } else if($params['type'] == 'thx' || $params['type'] == 'thx_success') {
      $result .= $this->signup_steps_url[$params['type']];
    } else if($params['type'] == 'thx_success_id') {
      $result .= $this->signup_steps_url['thx_success'] . '&' . $this->signup_steps_url['id_def'] . '=' . $params['id'];
    }

    return $result;
  }
}
?>