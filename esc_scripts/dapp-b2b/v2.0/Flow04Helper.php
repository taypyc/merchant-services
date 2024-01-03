<?php
class Flow04Helper {
  private $mockup_debug;
  public $flow;
  public $root;
  public $override_info = [];
  private $available_steps = ['0', '1', '2', '3', '4'];
  private $signup_steps_url = [
    'id_param' => 'id',
    'step_def' => 's',
    'thx' => 'thank-you',
    'thx_success' => 'thank-you?success',
    'thx_block' => 'thank-you?qualification',
    'signup_url' => 'quick-start',
    'files' => 'files',
  ];
  public $plaid_received_redirect_uri = 'https://b2bfunding.net/plaid-oauth';

  public function __construct($settings) {
    $this->flow = $settings['flow'];
    $this->root = $settings['root'];
    $this->mockup_debug = $settings['mockup_debug'];
  }

  public function set_signup_steps_data_array($additional_data_array = []) {
    $data = [];
    $data = array_merge($data, $additional_data_array);
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = trim($_POST['step']);

    // 0 step
    $data['business_name'] = trim($_POST['business_name']);
    $data['owner_1_first_name'] = trim($_POST['owner_1_first_name']);
    $data['owner_1_last_name'] = trim($_POST['owner_1_last_name']);
    $data['monthly_sales'] = trim($_POST['monthly_sales']);
    $data['owner_1_cell_phone'] = trim($_POST['owner_1_cell_phone']);
    $data['owner_1_email'] = trim($_POST['owner_1_email']);
    $data['business_email'] = trim($_POST['owner_1_email']);
    $data['language'] = isset($_POST['language']) ? trim($_POST['language']) : '';
    $data['step_short'] = isset($_POST['step_short']) ? true : false;

    if($data['step_short']) {
      return $data;
    }

    // 1 step
    $data['business_legal_name'] = trim($_POST['business_legal_name']);
    $data['industry_type'] = trim($_POST['industry_type']);
    $data['amount_requested'] = trim($_POST['amount_requested']);
    $data['amount_requested_for'] = trim($_POST['amount_requested_for']);
    $data['bankruptcy'] = trim($_POST['bankruptcy']);
    $data['work_from_home'] = isset($_POST['work_from_home']) && trim($_POST['work_from_home']) == 'Yes' ? 'true' : 'false';
    $data['website'] = trim($_POST['website']);
    $data['business_phone'] = trim($_POST['business_phone']);
    $data['physical_address'] = trim($_POST['physical_address']);
    $data['physical_city'] = trim($_POST['physical_city']);
    $data['physical_state'] = trim($_POST['physical_state']);
    $data['physical_zip'] = trim($_POST['physical_zip']);
    $data['different_mailing_address'] = isset($_POST['different_mailing_address']) && trim($_POST['different_mailing_address']) == 'Yes' ? 'true' : 'false';
    $data['mailing_address'] = trim($_POST['mailing_address']);
    $data['mailing_city'] = trim($_POST['mailing_city']);
    $data['mailing_state'] = trim($_POST['mailing_state']);
    $data['mailing_zip'] = trim($_POST['mailing_zip']);

    // 2 step
    $data['owner_1_title'] = trim($_POST['owner_1_title']);
    $data['owner_1_dob'] = trim($_POST['owner_1_dob']);
    $data['owner_1_address'] = trim($_POST['owner_1_address']);
    $data['owner_1_city'] = trim($_POST['owner_1_city']);
    $data['owner_1_state'] = trim($_POST['owner_1_state']);
    $data['owner_1_zip'] = trim($_POST['owner_1_zip']);
    $data['owner_1_own_years'] = trim($_POST['owner_1_own_years']);
    $data['owner_1_own'] = trim($_POST['owner_1_own']);
    $data['owner_1_ssn'] = trim($_POST['owner_1_ssn']);
    $data['owner_2_first_name'] = trim($_POST['owner_2_first_name']);
    $data['owner_2_last_name'] = trim($_POST['owner_2_last_name']);
    $data['owner_2_title'] = trim($_POST['owner_2_title']);
    $data['owner_2_dob'] = trim($_POST['owner_2_dob']);
    $data['owner_2_cell_phone'] = trim($_POST['owner_2_cell_phone']);
    $data['owner_2_email'] = trim($_POST['owner_2_email']);
    $data['owner_2_address'] = trim($_POST['owner_2_address']);
    $data['owner_2_city'] = trim($_POST['owner_2_city']);
    $data['owner_2_state'] = trim($_POST['owner_2_state']);
    $data['owner_2_zip'] = trim($_POST['owner_2_zip']);
    $data['owner_2_own_years'] = trim($_POST['owner_2_own_years']);
    $data['owner_2_own'] = trim($_POST['owner_2_own']);
    $data['owner_2_ssn'] = trim($_POST['owner_2_ssn']);

    // 3 step
    $data['entity_type'] = trim($_POST['entity_type']);
    $data['state_incorporation'] = trim($_POST['state_incorporation']);
    $data['property_ownership'] = trim($_POST['property_ownership']);
    $data['tax_id'] = trim($_POST['tax_id']);
    $data['business_started_date'] = trim($_POST['business_started_date']);
    $data['actual_cash_advance_company'] = trim($_POST['actual_cash_advance_company']);
    $data['actual_balance'] = trim($_POST['actual_balance']);
    $data['bank_credit'] = trim($_POST['bank_credit']);
    $data['line_of_credit'] = trim($_POST['line_of_credit']);
    $data['step_ts'] = isset($_POST['step_ts']) ? trim($_POST['step_ts']) : '';
    $data['merchant_ip'] = $this->get_server_data('ip');
    $data['merchant_user_agent'] = $this->get_server_data('user_agent');
    $data['merchant_agree_additional_data'] = $this->get_server_data('additional');

    return $data;
  }

  private function get_server_data($key) {
    $attr_array = [
      'ip' => ['REMOTE_ADDR' => '', 'HTTP_X_FORWARDED_FOR' => 'XF', 'HTTP_CLIENT_IP' => 'CI'],
      'user_agent' => ['HTTP_USER_AGENT' => ''],
      'additional' => ['HTTP_ACCEPT_LANGUAGE' => 'LANG', 'HTTP_REFERER' => 'HR', 'REMOTE_PORT' => 'RP', 'REQUEST_TIME_FLOAT' => 'RT']
    ];
    $result = '';
    foreach($attr_array[$key] as $attr => $desc) {
      if(array_key_exists($attr, $_SERVER) && strlen(trim($_SERVER[$attr])) > 0) {
        if(strlen($result) > 0) {
          $result .= '; ';
        }
        $result .= strlen($desc) > 0 ? ($desc . ': ' . $_SERVER[$attr]) : $_SERVER[$attr];
      }
    }
    return $result;
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

    if(strlen($id) > 0) {
      $result['flow'] = $this->flow;
      $result['id'] = $id;
      $result['step'] = 'get_step';

      if(strlen($continue_step) > 0 && in_array($continue_step, $this->available_steps)) {
        $result['step'] = 'proof';
        $result['step_to_proof'] = $continue_step;
      }
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

  public function set_fb_conversation_api_data_array($data, $store_data) {
    $event_name = '';
    if(isset($data['step']) && in_array($data['step'], $this->available_steps)) {
      $event_name = 'Step ' . $data['step'];
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

    $result = true;
    // $result = false;

    switch ($data['step']) {
      case '0':
        if(
          $this->check_data_key_length($data, ['business_name','owner_1_first_name','monthly_sales','owner_1_cell_phone','owner_1_email'])
        ) {
          $result = true;
        }
        break;

      case '1':
        if(
          $this->check_data_key_length($data, ['business_legal_name','industry_type','amount_requested','amount_requested_for','bankruptcy','business_phone','physical_address','physical_city','physical_state','physical_zip'])
        ) {
          $result = true;
        }
        break;

      case '2':
        if(
          $this->check_data_key_length($data, ['owner_1_first_name','owner_1_last_name','owner_1_title','owner_1_dob','owner_1_address','owner_1_city','owner_1_state','owner_1_zip','owner_1_own','owner_1_ssn'])
        ) {
          $result = true;
        }
        break;

      case '3':
        if(
          $this->check_data_key_length($data, ['entity_type','state_incorporation','property_ownership','tax_id','business_started_date','actual_cash_advance_company','bank_credit', 'step_ts'])
        ) {
          $result = true;
        }
        break;

      case 'upload_file':
        if(
          $this->check_data_key_length($data, ['id','doc_id','doc_name']) &&
          is_array($file_info)
        ) {
          $result = true;
        }
        break;

      case 'get_files':
        if(
          $this->check_data_key_length($data, ['id'])
        ) {
          $result = true;
        }
        break;

      case 'get_plaid_link_token':
        if(
          $this->check_data_key_length($data, ['id'])
        ) {
          $result = true;
        }
        break;

      case 'put_plaid_public_token':
        if(
          $this->check_data_key_length($data, ['id', 'link_token', 'public_token'])
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

  public function check_continue_signup_availability($data) {
    if($data['step'] != 'ds-init' && array_key_exists('bankruptcy', $data) && trim($data['bankruptcy']) == 'Yes') {
      return false;
    }
    return true;
  }

  public function set_file_data_array($data = [], $file_info = []) {
    if(count($data) > 0 && count($file_info) > 0) {
      $data['file_name'] = $file_info['file_name'];
      $data['file_base64'] = base64_encode($file_info['file']);
      return $data;
    }

    $data = [];
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = 'upload_file';
    $data['doc_id'] = trim($_POST['doc_id']);
    $data['doc_name'] = trim($_POST['doc_name']);
    $data['file_name'] = null;
    $data['file_base64'] = null;
    return $data;
  }

  public function set_get_files_data_array() {
    $data = [];
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = 'get_files';
    return $data;
  }

  public function set_plaid_initiate_flow_data_array() {
    $data = [];
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = 'get_plaid_link_token';
    $data['redirect_url'] = $this->plaid_received_redirect_uri;
    return $data;
  }

  public function set_plaid_put_public_token_data_array() {
    $data = [];
    $data['flow'] = $this->flow;
    $data['id'] = $_COOKIE['sf_id'];
    $data['step'] = 'put_plaid_public_token';
    $data['link_token'] = $_COOKIE['sf_p_link_token'];
    $data['public_token'] = $_POST['public_token'];
    return $data;
  }

  public function set_return_json_data($source_data) {
    return $source_data;
    $array = [
      'id' => $source_data['id'],
      'next_step_url' => $source_data['next_step_url']
    ];
    if(isset($source_data['plaid_url'])) {
      $array['plaid_url'] = $source_data['plaid_url'];
    }
    if(isset($source_data['files_url'])) {
      $array['files_url'] = $source_data['files_url'];
    }
    if($this->mockup_debug) {
      $array['source_data'] = $source_data;
    }
    return $array;
  }

  public function get_signup_step_url($params) {
    $result = $this->get_url_base();
    $type = isset($params['type']) ? trim($params['type']) : '';

    if($type == 'signup_url' || $type == 'thx' || $type == 'thx_success' || $type == 'thx_block') {
      $result .= $this->signup_steps_url[$type];
    } else if($type == 'thx_success_id') {
      $result .= $this->signup_steps_url['thx_success'] . '&' . $this->signup_steps_url['id_param'] . '=' . $params['id'];
    } else if($type == 'files') {
      $result .= $this->signup_steps_url[$type];
      if(array_key_exists('id', $params)) {
        $result .= '?' . $this->signup_steps_url['id_param'] . '=' . $params['id'];
      }
    } else if($type == 'plaid_redirect') {
      $result .= $this->signup_steps_url['signup_url'] . '?' . $this->signup_steps_url['id_param'] . '=' . urlencode($params['id']) . '&' . $this->signup_steps_url['step_def'] . '=4';
    }

    return $result;
  }

  public function get_url_base() {
    return 'https://' . $_SERVER['SERVER_NAME'] . getenv('SITE_ROOT');
  }

  public function check_data_for_step_ds_continue() {
    $result = ['status' => false, 'data' => null];

    if(isset($_GET['id']) && strlen(trim($_GET['id'])) > 0 && isset($_GET['s']) && trim($_GET['s']) == 'ds') {
      $result['status'] = true;
      $result['data'] = ['id' => trim($_GET['id'])];
    }

    return $result;
  }
}
?>