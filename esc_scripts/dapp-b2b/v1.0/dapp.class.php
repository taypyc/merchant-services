<?php
class DApp {
  public $root;
  public $flow;
  public $store_data;
  public $flow_helper;

  public $api_credentials = [
    'token' => 'securitytoken',
    'endpoint_signup' => 'https://merchantservices.secure.force.com/services/apexrest/signup_cash'
    // 'endpoint_signup' => 'https://msdev4-merchantservices.cs91.force.com/services/apexrest/signup_cash'
    // 'endpoint_signup' => 'https://msqa-merchantservices.cs96.force.com/services/apexrest/signup_cash'
  ];

  private $fb_api_credentials = [
    'pr' => [
      'token' => 'EAALzLwkQPx0BAFCYzXaNcMzKu2U2NZAF6gug5eBMCmsa5ci5LfMCtvYEnolckC91ZC7U1jSruOEE1xGZAWpt4yseXSgicPpgOKZBi9oJz2cl9N6GO30u3xociXKSectFOMTldp8tRQP9enPtSxmqvK4C6PATcsTypp0qZCPcAW5m1znPJm6BZActJ0Aor4OYQZD',
      'pixel_id' => '712130906162259'
    ]
  ];

  public $email_params = [
    'to' => 'kubrakegor25@gmail.com',
    'from_email' => 'notification@b2bfunding.net',
    'from_name' => 'B2B dapp'
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

  public function set_step_proof_data_array() {
    return $this->flow_helper->set_step_proof_data_array();
  }

  public function set_step_ds_continue_data_array($data, $custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_step_ds_continue_data_array($data, $additional_data_array);
    return $data;
  }

  private function set_additional_data_array($custom_data_array) {
    $arr = [];
    $arr['url_source'] = $this->get_signup_step_url(['type' => 'signup_url']);
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
        } else if($step_proof_result['status'] == 'redirect_to_step' || ($step_proof_result['status'] == 'error' && $step_proof_result['description'] == 'step_incorrect')) {
          header("Location: {$step_proof_result['redirect_url']}");
          exit;
        } else if($step_proof_result['status'] == 'error' && $step_proof_result['description'] == 'signup_completed') {
          header("Location: {$this->get_signup_step_url(['type' => 'thx'])}");
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

  public function fb_send_event_pageview() {
    $data = $this->flow_helper->set_fb_conversation_api_data_array($this->flow_helper->set_fb_conversation_api_pageview_data(), $this->store_data);
    $result = $this->curl_request_with_status($this->build_curl_fb($data));
    if($result['status'] == 'error') {
      $this->set_error_email_and_log($result['result'], $data);
    }
  }

  public function check_required_data_for_step($data) {
    return $this->flow_helper->check_required_data_for_step($data);
  }

  public function signup($data) {
    $condition_processing = $this->check_required_data_for_step($data);

    if($condition_processing) {
      $curl_array = [];
      $curl_array['curl_sf'] = $this->build_curl_sf($data);

      $fb_conversation_api_data = $this->flow_helper->set_fb_conversation_api_data_array($data, $this->store_data);
      if(isset($fb_conversation_api_data)) {
        $curl_array['curl_fb'] = $this->build_curl_fb($fb_conversation_api_data);
      }

      $curl_result = $this->run_curl_multi($curl_array);

      if(isset($fb_conversation_api_data)) {
        $this->process_signup_result_fb($curl_result['curl_fb'], $data);
      }
      
      $this->process_signup_result_sf($curl_result['curl_sf'], $data);
    } else {
      $this->echo_error();
    }
  }

  private function run_curl_multi($curl_array) {
    $result = [];

    $curl_multi = curl_multi_init();
    foreach($curl_array as $k => $curl) {
      curl_multi_add_handle($curl_multi, $curl_array[$k]);
    }

    do {
      curl_multi_exec($curl_multi, $running);
    } while($running > 0);

    foreach($curl_array as $k => $curl) {
      $result[$k]['status'] = curl_getinfo($curl_array[$k], CURLINFO_HTTP_CODE);
      $result[$k]['content'] = curl_multi_getcontent($curl_array[$k]);
      if($result[$k]['status'] != 200) {
        $result[$k]['error_description'] = __FILE__ . " (" . __LINE__ . "): call to {$k} failed with status {$result[$k]['status']}, response {$result[$k]['content']}, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl);
      }
      curl_multi_remove_handle($curl_multi, $curl);
    }
    curl_multi_close($curl_multi);

    return $result;
  }

  private function process_signup_result_fb($result, $data) {
    if(array_key_exists('error_description', $result)) {
      $this->set_error_email_and_log($result['error_description'], $data);
    }
  }

  private function process_signup_result_sf($result, $data) {
    if($result['status'] != 200) {
      $this->process_signup_steps_status_error($result['error_description'] . ' | ' . __FILE__ . ' (' . __LINE__ . ')', $data);
    }

    if(!$this->flow_helper->check_continue_signup_availability($data)) {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx_block']));
    }

    $result_parsed = $this->parse_signup_result_sf($result, $data)['result'];

    if($result_parsed['description'] == 'step_saved') {
      $result_parsed_return = $this->set_return_json_data($result_parsed);
      $this->echo_success('', json_encode($result_parsed_return));
    } else if($result_parsed['description'] == 'step_redirect' || $result_parsed['description'] == 'step_incorrect') {
      $this->echo_success($result_parsed['redirect_url']);
    } else {
      $error_message = 'Undefined response after save signup info: ' . json_encode($result_parsed);
      $this->process_signup_steps_status_error($error_message . ' | ' . __FILE__ . ' (' . __LINE__ . ')', $data);
    }
  }

  private function parse_signup_result_sf($result, $data) {
    $result_formatted = json_decode($result['content'], true);
    if($data['step'] == 'ds-init' && $result_formatted['description'] == 'step_saved') {
      $data['step'] = 'ds';
      return $this->send_data_to_crm($data);
    } else {
      return $this->status_success($result_formatted);
    }
  }

  private function build_curl_fb($data) {
    $access_token = $this->fb_api_credentials[getenv('FB_API')]['token'];
    $pixel_id = $this->fb_api_credentials[getenv('FB_API')]['pixel_id'];

    $curl = curl_init('https://graph.facebook.com/v10.0/' . $pixel_id . '/events?access_token=' . $access_token);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Content-type: application/json'
    ));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    return $curl;
  }

  private function build_curl_sf($data) {
    $curl = curl_init($this->api_credentials['endpoint_signup']);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Authorization: ' . $this->api_credentials['token'],
      'Content-type: application/json'
    ));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    return $curl;
  }

  public function send_data_to_crm($data) {
    $curl = $this->build_curl_sf($data);
    return $this->curl_request_with_status($curl);
  }

  public function curl_request_with_status($curl) {
    $response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if($status != 200) {
      $curl_info = curl_getinfo($curl);
      $description = __FILE__ . " (" . __LINE__ . "): call to URL {$curl_info['url']} failed with status {$status}, response {$response}, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl);
      curl_close($curl);
      return $this->status_error($description);
    }
    curl_close($curl);
    return $this->status_success(json_decode($response, true));
  }

  public function process_signup_steps_status_error($error, $data) {
    $this->set_error_email_and_log($error, $data);

    if($data['step'] == 'ds-init' || (array_key_exists('step_short', $data) && $data['step_short'])) {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    } else {
      $this->echo_success('', '');
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
    $email_params = $this->set_email_params(['subject' => $this->get_dapp_source() . ' ERROR', 'message' => $email_message]);

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

  public function error_log($error, $email = NULL) {
    $this->log_to_file($error);

    if(is_array($email)) {
      $this->email_notification($email);
    } else {
      $email_params = $this->set_email_params(['subject_additional' => 'ERROR', 'message' => $error]);

      $this->email_notification($email_params);
    }
  }

  private function log_to_file($error) {
    $logs_path = $this->root . '/logs';
    $error = date('Y-m-d H:i:s') . ' ' . $error . "\n\n";
    file_put_contents($logs_path . '/logs.txt', $error, FILE_APPEND | LOCK_EX);
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