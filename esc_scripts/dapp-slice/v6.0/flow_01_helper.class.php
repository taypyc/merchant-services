<?php
class FlowHelper {
  public $flow;
  public $root;
  public $override_info = [];
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
    require_once $this->root . '/serviсes_info_helper.class.php';
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

    if(strlen($id) > 0 && strlen($continue_step) > 0 && in_array($continue_step, ['0', '1', '2', '3'])) {
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

  public function set_step_verify_data_array($additional_data_array = []) {
    $data = [];

    $data['flow'] = $this->flow;
    $data['id'] = trim($_POST['id']);
    $data['step'] = 'verify';
    // $data['routing_number'] = trim($_POST['routing_number']);
    // $data['account_number'] = trim($_POST['account_number']);
    $data['file_01_name'] = (isset($_FILES['file_01']['name']) && strlen($_FILES['file_01']['name']) > 0) ? $_FILES['file_01']['name'] : 'Empty file';
    $data['file_01_s'] = trim($_POST['file_01_s']);

    $data = array_merge($data, $additional_data_array);

    return $data;
  }

  public function check_required_data_for_step($data) {
    $result = false;
    switch ($data['step']) {
      case '0':
        if(
          strlen($data['business_legal_name']) > 0 &&
          strlen($data['business_email']) > 0 &&
          strlen($data['date_business_started']) > 0 &&
          strlen($data['annual_volume']) > 0 &&
          strlen($data['average_ticket']) > 0
        ) {
          $result = true;
        }
        break;

      case '1':
        if(
          strlen($data['business_dba_name']) > 0 &&
          strlen($data['products_service_sold']) > 0 &&
          strlen($data['business_type']) > 0 &&
          // strlen($data['business_phone']) > 0 &&
          // strlen($data['business_tax_id']) > 0 &&
          strlen($data['business_address_line_1']) > 0 &&
          strlen($data['business_city']) > 0 &&
          strlen($data['business_state']) > 0 &&
          strlen($data['business_zip']) > 0
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
          strlen($data['owner_1_email']) > 0 &&
          strlen($data['owner_1_phone']) > 0 &&
          strlen($data['owner_1_ownership']) > 0 &&
          strlen($data['owner_1_ssn']) > 0 &&
          strlen($data['owner_1_address_line_1']) > 0 &&
          strlen($data['owner_1_city']) > 0 &&
          strlen($data['owner_1_state']) > 0 &&
          strlen($data['owner_1_zip']) > 0
        ) {
          $result = true;
        }
        break;

      case 'ds':
        if(
          count($data['services']) > 0
        ) {
          $result = true;
        }
        break;
    }
    return $result;
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
      'potential_savings' => $source_data['potential_savings']
    ];
  }

  public function get_signup_step_url($params) {
    $result = '';

    if($params['type'] == 'signup_url') {
      $result = $params['base_url'] . $this->signup_steps_url[$params['type']];
    } else if($params['type'] == 'continue_signup') {
      $result = $params['base_url'] . $this->signup_steps_url['signup_url'] . '?' . $this->signup_steps_url['id_def'] . '=' . $params['id'] . '&' . $this->signup_steps_url['step_def'] . '=' . $params['step'];
    } else if($params['type'] == 'verify') {
      $result = $params['base_url'] . $this->signup_steps_url[$params['type']] . '?' . $this->signup_steps_url['id_def'] . '=' . $params['id'];
    } else if($params['type'] == 'thx' || $params['type'] == 'thx_success') {
      $result = $params['base_url'] . $this->signup_steps_url[$params['type']];
    } else if($params['type'] == 'thx_success_id') {
      $result = $params['base_url'] . $this->signup_steps_url['thx_success'] . '&' . $this->signup_steps_url['id_def'] . '=' . $params['id'];
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

  public function set_files_info_source($data) {
    $files_info_source = [
      [
        'fieldname' => 'file_01', 
        'status' => $data['file_01_s'], 
        'error' => false, 
        'file' => NULL, 
        'filename' => '', 
        'file_type' => '', 
        'crm' => false
      ],
    ];

    return $files_info_source;
  }

  public function set_email_headers_and_body_for_files($data, $files_info) {
    $message_body = $this->set_email_body_from_data($data);
    $email_file_attached = false;
    $boundary_email = bin2hex(random_bytes(12));
    $headers = '';
    $headers .= 'From: Slice Verify < notification@startslice.com >' . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; charset=UTF-8; boundary=\"$boundary_email\"";

    $body = "--$boundary_email\n";
    $body .= "Content-type: text/html; charset='utf-8'\n";
    $body .= "Content-Transfer-Encoding: quoted-printable\n\n";
    $body .= $message_body."\n\n";
    $body .= "--$boundary_email\n";

    for($i=0; $i<count($files_info); $i++) {
      if(isset($files_info[$i]['file']) && $files_info[$i]['error'] === false) {
        $text = $files_info[$i]['file'];
        $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($files_info[$i]['filename'])."?=\n"; 
        $body .= "Content-Transfer-Encoding: base64\n";
        $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($files_info[$i]['filename'])."?=\n\n";
        $body .= chunk_split(base64_encode($text))."\n";
        $body .= "--" . $boundary_email . "\n";

        $email_file_attached = true;
      }
    }

    if(!$email_file_attached) {
      $body .= "--".$boundary_email ."--\n";
    }

    $email_params = ['m'=>$body, 'h'=>$headers];

    return $email_params;
  }

  public function format_data($format = NULL, $val = NULL, $default = '') {
    $result = $default;
    if(!isset($val, $format)) {
      return $result;
    }

    if($format == 'annual_volume') {
      $annual_volume_int = intval($val);
      if($annual_volume_int > 0) {
        if($annual_volume_int < 9999) {
          $result = '10000';
        } else if($annual_volume_int < 99999) {
          $result = '100000';
        } else if($annual_volume_int < 249999) {
          $result = '250000';
        } else if($annual_volume_int < 499999) {
          $result = '500000';
        } else if($annual_volume_int < 999999) {
          $result = '1000000';
        } else if($annual_volume_int > 999999) {
          $result = '2000000';
        }
      }
    }

    return $result;
  }
}
?>