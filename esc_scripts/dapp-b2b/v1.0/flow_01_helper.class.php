<?php
class FlowHelper {
  public $flow;
  public $root;
  public $override_info = [];
  private $signup_steps_url = [
    'id_def' => 'id',
    'step_def' => 's',
    'thx' => 'thank-you',
    'thx_success' => 'thank-you?success',
    'thx_block' => 'thank-you?qualification',
    'signup_url' => 'quick-start',
  ];

  public function __construct($settings) {
    $this->flow = $settings['flow'];
    $this->root = $settings['root'];
  }

  public function set_signup_steps_data_array($additional_data_array = []) {
    $data = [];
    $data = array_merge($data, $additional_data_array);
    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = trim($_POST['step']);
    $data['campaign_name'] = getenv('CAMPAIGN_NAME');

    // 0 step
    $data['business_name'] = trim($_POST['business_name']);
    $data['owner_1_first_name'] = trim($_POST['owner_1_first_name']);
    $data['owner_1_last_name'] = trim($_POST['owner_1_last_name']);
    $data['monthly_sales'] = trim($_POST['monthly_sales']);
    $data['owner_1_cell_phone'] = trim($_POST['owner_1_cell_phone']);
    $data['owner_1_email'] = trim($_POST['owner_1_email']);
    $data['business_email'] = trim($_POST['owner_1_email']);
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

    if(strlen($id) > 0) {
      $result['flow'] = $this->flow;
      $result['id'] = $id;
      $result['step'] = 'get_step';

      if(strlen($continue_step) > 0 && in_array($continue_step, ['0', '1', '2', '3'])) {
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
    if(isset($data['step']) && in_array($data['step'], ['0', '1', '2', 'ds-init'])) {
      $step = '';
      if($data['step'] == 'ds-init') {
        $step = '3';
      } else {
        $step = $data['step'];
      }
      $event_name = 'Step ' . $step;
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

  public function check_required_data_for_step($data) {
    return true;
    $result = false;
    switch ($data['step']) {
      case '0':
        if(
          strlen($data['business_name']) > 0 &&
          strlen($data['owner_1_first_name']) > 0 &&
          strlen($data['owner_1_last_name']) > 0 &&
          strlen($data['monthly_sales']) > 0 &&
          strlen($data['owner_1_cell_phone']) > 0 &&
          strlen($data['owner_1_email']) > 0
        ) {
          $result = true;
        }
        break;

      case '1':
        if(
          strlen($data['business_legal_name']) > 0 &&
          strlen($data['industry_type']) > 0 &&
          strlen($data['amount_requested']) > 0 &&
          strlen($data['amount_requested_for']) > 0 &&
          strlen($data['bankruptcy']) > 0 &&
          strlen($data['business_phone']) > 0 &&
          strlen($data['business_email']) > 0 &&
          strlen($data['physical_address']) > 0 &&
          strlen($data['physical_city']) > 0 &&
          strlen($data['physical_state']) > 0 &&
          strlen($data['physical_zip']) > 0
        ) {
          $result = true;
        }
        break;

      case '2':
        if(
          strlen($data['owner_1_first_name']) > 0 &&
          strlen($data['owner_1_last_name']) > 0 &&
          strlen($data['owner_1_title']) > 0 &&
          strlen($data['owner_1_dob']) > 0 &&
          strlen($data['owner_1_address']) > 0 &&
          strlen($data['owner_1_city']) > 0 &&
          strlen($data['owner_1_state']) > 0 &&
          strlen($data['owner_1_zip']) > 0 &&
          strlen($data['owner_1_own']) > 0 &&
          strlen($data['owner_1_ssn']) > 0
        ) {
          $result = true;
        }
        break;

      case 'ds':
        if(
          strlen($data['entity_type']) > 0 &&
          strlen($data['state_incorporation']) > 0 &&
          strlen($data['property_ownership']) > 0 &&
          strlen($data['tax_id']) > 0 &&
          strlen($data['business_started_date']) > 0 &&
          strlen($data['actual_cash_advance_company']) > 0 &&
          strlen($data['actual_balance']) > 0 &&
          strlen($data['bank_credit]']) > 0 &&
          strlen($data['line_of_credit']) > 0
        ) {
          $result = true;
        }
        break;
    }
    return $result;
  }

  public function check_continue_signup_availability($data) {
    if($data['step'] != 'ds-init' && array_key_exists('bankruptcy', $data) && trim($data['bankruptcy']) == 'Yes') {
      return false;
    }
    return true;
  }

  public function set_email_body_from_data($data) {
    $message = '';
    $line_end_divider = "<br>\n";

    foreach($data as $key => $val) {
      if(is_array($val)) {
        $key_val = '';
        for($i = 0; $i < count($val); $i++) {
          $line_start_tab_arr = ($i == 0) ? "<br>&nbsp;&nbsp;&nbsp;\n\t" : "&nbsp;&nbsp;&nbsp;\t";
          $line_end_divider_arr = ($i == count($val) - 1) ? '' : $line_end_divider;

          $key_val .= $line_start_tab_arr;
          foreach($val[$i] as $k => $v) {
            $key_val .= $k . ': ' . htmlspecialchars($v, ENT_QUOTES) . '; ';
          }
          $key_val .= $line_end_divider_arr;
        }
      } else if(is_object($val)) {
        $key_val = '[Object]';
      } else {
        $key_val = htmlspecialchars($val, ENT_QUOTES);
      }
      $message .= $key . ': ' . $key_val . $line_end_divider;
    }

    return $message;
  }

  public function set_return_json_data($source_data) {
    return [
      'id' => $source_data['id'],
      'next_step_url' => $source_data['next_step_url']
    ];
  }

  public function get_signup_step_url($params) {
    $result = $params['base_url'];
    $type = isset($params['type']) ? trim($params['type']) : '';

    if($type == 'signup_url' || $type == 'thx' || $type == 'thx_success' || $type == 'thx_block') {
      $result .= $this->signup_steps_url[$type];
    } else if($type == 'thx_success_id') {
      $result .= $this->signup_steps_url['thx_success'] . '&' . $this->signup_steps_url['id_def'] . '=' . $params['id'];
    }

    return $result;
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