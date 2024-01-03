<?php
class DApp {
  public $root;
  public $flow;
  public $store_data;
  public $flow_helper;

  public $api_credentials = [
    'token' => 'securitytoken',
    'endpoint_signup' => 'https://merchantservices.secure.force.com/services/apexrest/signup'
  ];

  public $email_params = [
    'to' => 'kubrakegor25@gmail.com',
    'from_email' => 'notification@startslice.com',
    'from_name' => 'Startslice dapp'
  ];

  public $files_types = [
    'file_01' => 'void-check'
  ];
  
  public function __construct($settings) {
    $this->root = $settings['dapp_root'];
    $this->flow = $settings['flow'];

    $this->base_require();
    $this->flow_helper_require();

    $this->email_params['from_name'] .= ' ' . basename(dirname(__FILE__));
  }

  private function base_require() {
    require_once $this->root . '/store_data.class.php';
    $this->store_data = new StoreData();
  }

  private function flow_helper_require() {
    if($this->flow == 'flow-01') {
      require_once $this->root . '/flow_01_helper.class.php';
      $this->flow_helper = new FlowHelper(['flow' => $this->flow, 'root' => $this->root]);
    }

    $this->flow_overriding();
  }

  private function flow_overriding() {
    if(count($this->flow_helper->override_info) > 0) {
      $override_info = $this->flow_helper->override_info;
      if(array_key_exists('api_endpoint_signup', $override_info)) {
        $this->api_endpoints['endpoint_signup'] = $override_info['api_endpoint_signup'];
      }

      if(array_key_exists('email_to', $override_info)) {
        $this->email_params['to'] = $override_info['email_to'];
      }
    }
  }

  public function get_url_base() {
    return 'https://' . $_SERVER['SERVER_NAME'] . getenv('SITE_ROOT');
  }

  public function get_dapp_source() {
    return rtrim($_SERVER['SERVER_NAME'] . getenv('SITE_ROOT'), '/');
  }

  public function set_signup_steps_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_signup_steps_data_array($additional_data_array);
    return $data;
  }

  public function set_ds_completed_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_ds_completed_data_array($additional_data_array);
    return $data;
  }

  public function set_step_proof_data_array() {
    return $this->flow_helper->set_step_proof_data_array();
  }

  public function set_step_ds_continue_data_array($data, $custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_step_ds_continue_data_array($data, $additional_data_array);
    return $data;
  }

  public function set_step_verify_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_step_verify_data_array($additional_data_array);
    return $data;
  }

  public function set_email_headers_and_body_for_files($data, $files_info) {
    return $this->flow_helper->set_email_headers_and_body_for_files($data, $files_info);
  }

  private function set_additional_data_array($custom_data_array) {
    $arr = [];
    $arr['url_source'] = $this->get_url_base();
    $arr['lead_source'] = $this->get_dapp_source();
    foreach($this->store_data->utm as $key => $val) {
      $arr[$key] = $val;
    }

    $arr = array_merge($arr, $custom_data_array);

    return $arr;
  }

  public function set_return_json_data($source_data) {
    return $this->flow_helper->set_return_json_data($source_data);
  }

  public function get_signup_step_url($params) {
    $params['base_url'] = $this->get_url_base();
    $url = $this->flow_helper->get_signup_step_url($params);
    $pre_get_params = '';
    $get_params = array_key_exists('get', $params) ? $params['get'] : '';
    if(strlen($get_params) > 0) {
      if(strpos($url, '?') === false) {
        $pre_get_params = '?';
      } else {
        $pre_get_params = '&';
      }
    }
    return $url . $pre_get_params . $get_params;
  }

  public function process_continue_signup() {
    $result = [
      'data_crm' => [],
      'id' => '',
      'current_step' => '0'
    ];

    $this->process_continue_signup_ds();

    $step_proof_data = $this->set_step_proof_data_array();
    if(count($step_proof_data) > 0) {
      $step_proof = $this->send_data_to_crm($step_proof_data);
      $step_proof_result = $step_proof['result'];

      if($step_proof['status'] == 'success') {
        if($step_proof_result['status'] == 'success') {
          $result['data_crm'] = $step_proof_result;
          $result['id'] = $step_proof_data['id'];
          $result['current_step'] = $step_proof_data['step_to_proof'];
        } else if($step_proof_result['status'] == 'error' && $step_proof_result['description'] == 'step_incorrect') {
          header("Location: {$step_proof_result['redirect_url']}");
          exit;
        } else {
          $error_message = 'Undefined response after proof step - ' . json_encode($step_proof_result) . ' | ' . __FILE__ . ' (' . __LINE__ . ')';
          $this->process_undefined_result_api_response_with_redirect($error_message, array_merge($step_proof_data, $step_proof_result));
        }
      } else {
        $error_message = 'Error response status after proof step - ' . $step_proof_result . ' | ' . __FILE__ . ' (' . __LINE__ . ')';
        $this->process_undefined_result_api_response_with_redirect($error_message, $step_proof_data);
      }
    }

    return $result;
  }

  private function process_continue_signup_ds() {
    $data_for_step_ds_continue = $this->flow_helper->check_data_for_step_ds_continue();
    if($data_for_step_ds_continue['status'] == false) {
      return;
    }

    $step_ds_continue_data = $this->set_step_ds_continue_data_array($data_for_step_ds_continue['data']);
    $step_ds_continue = $this->send_data_to_crm($step_ds_continue_data);
    $step_ds_continue_result = $step_ds_continue['result'];

    if($step_ds_continue['status'] == 'success') {
      if(array_key_exists('redirect_url', $step_ds_continue_result) && strlen($step_ds_continue_result['redirect_url']) > 0) {
        header("Location: {$step_ds_continue_result['redirect_url']}");
        exit;
      } else {
        $error_message = 'Undefined response after step ds continue - ' . json_encode($step_ds_continue_result) . ' | ' . __FILE__ . ' (' . __LINE__ . ')';
        $this->process_undefined_result_api_response_with_redirect_thx($error_message, array_merge($step_ds_continue_data, $step_ds_continue_result));
      }
    } else {
      $error_message = 'Error response status after step ds continue - ' . $step_ds_continue_result . ' | ' . __FILE__ . ' (' . __LINE__ . ')';
      $this->process_undefined_result_api_response_with_redirect_thx($error_message, array_merge($step_ds_continue_data, $step_ds_continue_result));
    }
  }

  public function check_required_data_for_step($data) {
    return $this->flow_helper->check_required_data_for_step($data);
  }

  public function process_signup_steps($data) {
    if($data['step'] != 'ds') {
      return $this->send_data_to_crm($data);
    }

    $data['step'] = 'ds-init';
    $ds_init = $this->send_data_to_crm($data);

    if($ds_init['status'] == 'success' && $ds_init['result']['description'] == 'step_saved') {
      $data['id'] = $ds_init['result']['id'];
      $data['step'] = 'ds';
      return $this->send_data_to_crm($data);
    } else {
      return $ds_init;
    }
  }

  public function signup($data) {
    $condition_processing = $this->check_required_data_for_step($data);

    if($condition_processing) {
      $send_data = $this->process_signup_steps($data);

      if($send_data['status'] == 'error') {
        $this->process_signup_steps_status_error($send_data['result'] . ' | ' . __FILE__ . ' (' . __LINE__ . ')', $data);
      }

      $send_data_result = $send_data['result'];

      if($send_data_result['description'] == 'step_saved') {
        $step_saved_return = $this->set_return_json_data($send_data_result);
        $this->echo_success('', json_encode($step_saved_return));
      } else if($send_data_result['description'] == 'step_redirect' || $send_data_result['description'] == 'step_incorrect') {
        $this->echo_success($send_data_result['redirect_url']);
      } else {
        $error_message = 'Undefined response after save signup info: ' . json_encode($send_data_result);
        $this->process_signup_steps_status_error($error_message . ' | ' . __FILE__ . ' (' . __LINE__ . ')', $data);
      }
    } else {
      $this->echo_error();
    }
  }

  public function process_ds_status_signing_complete() {
    $data = $this->set_ds_completed_data_array();
    if(count($data) > 0) {
      $update_ds_step = $this->send_data_to_crm($data);

      $error_message_description = '';
      $log_error = false;
      if($update_ds_step['status'] != 'success') {
        $error_message_description = $update_ds_step['result'];
        $log_error = true;
      } else if($update_ds_step['result']['status'] != 'success') {
        $error_message_description = $update_ds_step['result']['result'];
        $log_error = true;
      }
      if($log_error) {
        $error_message = 'Error with updating ds-completed status - ' . $error_message_description . ' | ' . __FILE__ . ' (' . __LINE__ . ')';   
        $this->set_error_email_and_log($error_message, $data);
      }
    }
  }

  public function set_files_info($data) {
    $files_info = $this->flow_helper->set_files_info_source($data);
    
    for($i=0; $i<count($files_info); $i++) {
      $fieldname = $files_info[$i]['fieldname'];

      if($files_info[$i]['status'] != 's' && isset($_FILES[$fieldname]['name']) && strlen($_FILES[$fieldname]['name']) > 0) {
        if($_FILES[$fieldname]['error'] !== UPLOAD_ERR_OK || strlen($_FILES[$fieldname]['name']) < 5) { //at least i.jpg = 5 chars
          $error = 'upload_err';
          if($_FILES[$fieldname]['error'] === UPLOAD_ERR_FORM_SIZE || $_FILES[$fieldname]['error'] === UPLOAD_ERR_INI_SIZE) {
            $error = 'size';
          }
          $files_info[$i]['error'] = $error;

          continue;
        }

        $finfo_mime = finfo_open(FILEINFO_MIME_TYPE);
        $whitelist_type = array('image/jpeg', 'image/png');

        if (!in_array(finfo_file($finfo_mime, $_FILES[$fieldname]['tmp_name']), $whitelist_type)) {
          $files_info[$i]['error'] = 'mime';
          continue;
        }

        $files_info[$i]['file'] = file_get_contents($_FILES[$fieldname]['tmp_name']);

        $file_type = 'undefined';
        foreach($this->files_types as $k => $v) {
          if($k == $files_info[$i]['fieldname']) {
            $file_type = $v;
          }
        }
        $files_info[$i]['filename'] = $_FILES[$fieldname]['name'];
        $files_info[$i]['file_type'] = $file_type;
      }
    }

    return $files_info;
  }

  public function upload_files_to_crm($data, $files_info, $email_params) {
    $upload_files_error = false;
    $user_files_response = [];

    for($i=0; $i < count($files_info); $i++) {
      if($files_info[$i]['status'] != 'undefined' && $files_info[$i]['status'] != 's' && $files_info[$i]['error'] === false && !is_null($files_info[$i]['file'])) {
        $files_info[$i]['crm'] = $this->send_data_to_crm($this->prepare_file_data_for_crm($data, $files_info[$i]));
      }

      if(is_array($files_info[$i]['crm']) && $files_info[$i]['crm']['status'] == 'error') {
        $upload_files_error = true;
      }

      $user_files_response[] = ['field' => $files_info[$i]['fieldname'], 'error' => $files_info[$i]['error']];
    }

    if($upload_files_error) {
      $upload_files_err_description = '';
      for($i=0; $i < count($files_info); $i++) {
        $file_crm = $files_info[$i]['crm'];
        if(is_array($file_crm)) {
          $err_desc_item = '';
          if($file_crm['status'] != 'success') {
            $err_desc_item = $file_crm['result'];
          } else if($file_crm['result']['status'] != 'success') {
            $err_desc_item = $file_crm['result']['result'];
          }
          if(strlen($upload_files_err_description) > 0) {
            $upload_files_err_description .= ' |[divider]| ';
          }
          $upload_files_err_description .= $err_desc_item;
        }
      }

      $email_params['s'] .= ' - ERROR WITH UPLOADING FILES TO CRM';
      // $email_params['m'] .= "<br>\n" . 'Error: ' . $upload_files_err_description;

      $this->error_log($upload_files_err_description . ' | ' . __FILE__ . ' (' . __LINE__ . ')', $email_params);
      $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    }

    return $user_files_response;
  }

  private function prepare_file_data_for_crm($data, $file) {
    $data['file_base64'] = base64_encode($file['file']);
    $data['file_type'] = $file['file_type'];
    $data['filename'] = $file['filename'];

    return $data;
  }

  public function process_signup_steps_status_error($error, $data) {
    $this->set_error_email_and_log($error, $data);

    if($data['step'] != 'ds') {
      $this->echo_success('', '');
    } else {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    }
  }

  public function process_undefined_result_api_response_with_redirect($error, $data) {
    $this->set_error_email_and_log($error, $data);
    header("Location: {$this->get_signup_step_url(['type' => 'signup_url'])}");
    exit;
  }

  public function process_undefined_result_api_response_with_redirect_thx($error, $data) {
    $this->set_error_email_and_log($error, $data);
    header("Location: {$this->get_signup_step_url(['type' => 'thx'])}");
    exit;
  }

  public  function set_error_email_and_log($error, $data) {
    $data['error'] = $error;
    $email_message = $this->set_email_body_from_data($data);
    $email_params = $this->set_email_params(['subject' => $this->get_dapp_source() . ' Signup ERROR', 'message' => $email_message]);

    $this->error_log($error, $email_params);
  }

  public function set_email_body_from_data($data) {
    return $this->flow_helper->set_email_body_from_data($data);
  }

  public function set_email_params($custom_params = []) {
    $to = $this->email_params['to'];
    $from_name = $this->email_params['from_name'];
    $from_email = $this->email_params['from_email'];
    $subject = $from_name;
    $message = '';

    $headers = 'From: ' . $from_name . ' < ' . $from_email . ' >' . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(array_key_exists('to', $custom_params)) {
      $to = $custom_params['to'];
    }

    if(array_key_exists('from_name', $custom_params)) {
      $from_name = $custom_params['from_name'];
    }

    if(array_key_exists('from_name_additional', $custom_params)) {
      $from_name .= ' ' . $custom_params['from_name_additional'];
    }

    if(array_key_exists('from_email', $custom_params)) {
      $from_email = $custom_params['from_email'];
    }

    if(array_key_exists('subject', $custom_params)) {
      $subject = $custom_params['subject'];
    }

    if(array_key_exists('subject_additional', $custom_params)) {
      $subject .= ' ' . $custom_params['subject_additional'];
    }

    if(array_key_exists('message', $custom_params)) {
      $message = $custom_params['message'];
    }

    if(array_key_exists('headers', $custom_params)) {
      $headers = $custom_params['headers'];
    }

    return ['t'=>$to, 's'=>$subject, 'm'=>$message, 'h'=>$headers];
  }

  public function send_data_to_crm($data) {
    return $this->api_request_with_status($data);
  }

  public function api_request_with_status($data) {
    $url = $this->api_credentials['endpoint_signup'];
    $post_fields = json_encode($data);

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Authorization: ' . $this->api_credentials['token'],
      'Content-type: application/json'
    ));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_fields);

    $response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if($status != 200) {
      $description = __FILE__ . " (" . __LINE__ . "): call to URL {$url} failed with status {$status}, response {$response}, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl);
      curl_close($curl);
      return $this->status_error($description);
    }
    curl_close($curl);
    return $this->status_success(json_decode($response, true));
  }

  public function error_log($error, $email = NULL) {
    $logs_path = $this->root . '/logs';
    $error = date('Y-m-d H:i:s') . ' ' . $error . "\n\n";
    file_put_contents($logs_path . '/logs.txt', $error, FILE_APPEND | LOCK_EX);

    if(is_array($email)) {
      $this->email_notification($email);
    } else {
      $email_params = $this->set_email_params(['subject_additional' => 'ERROR', 'message' => $error]);

      $this->email_notification($email_params);
    }
  }

  public function email_notification($params) {
    return mail($params['t'], $params['s'], $params['m'], $params['h']);
  }

  public function image_reduce($img, $w = 1024, $h = 1024, $q = 45) {
    if(isset($img)) {
      $image = imagecreatefromstring($img);

      $width_orig = imagesx($image);
      $height_orig = imagesy($image);
      $ratio_orig = $width_orig/$height_orig;
      if($w/$h > $ratio_orig) {
        $w = $h * $ratio_orig;
      } else {
        $h = $w / $ratio_orig;
      }

      if($width_orig > $w || $height_orig > $h) {
        $image = imagescale($image, $w, $h);
      }

      ob_start();
      imagejpeg($image, NULL, $q);
      $image_reduced = ob_get_clean();
      imagedestroy($image);

      return $image_reduced;
    } else {
      return NULL;
    }
  }

  private function status_success($r = '') {
    return [
      'status' => 'success',
      'result' => $r
    ];
  }

  private function status_error($r = '') {
    return [
      'status' => 'error',
      'result' => $r
    ];
  }

  public function echo_success($redirect_url = '', $data = '') {
    echo json_encode(array('response'=>'success', 'r' => $redirect_url, 'd' => $data));
    exit;
  }
  
  public function echo_error($redirect_url = '', $data = '') {
    echo json_encode(array('response'=>'error', 'r' => $redirect_url, 'd' => $data));
    exit;
  }
}
?>