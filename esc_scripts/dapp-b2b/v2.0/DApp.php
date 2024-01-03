<?php
class DApp extends DAppService {

  public function process_continue_signup() {
    $this->process_continue_signup_ds();

    $step_proof_data = $this->set_step_proof_data_array();
    if(count($step_proof_data) > 0) {
      $response = $this->send_data_to_crm($step_proof_data);
      return $this->process_proof_step_response($response, $step_proof_data);
    }

    return [
      'data_crm' => [],
      'id' => '',
      'current_step' => '0'
    ];
  }

  private function set_step_proof_data_array() {
    return $this->flow_helper->set_step_proof_data_array();
  }

  private function process_proof_step_response($response, $data) {
    if($response['code'] != 200) {
      $this->process_undefined_result_api_response_with_redirect(
        $this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), 
        $data);
    }

    $response_content = json_decode($response['content'], true);

    if($response_content['status'] == 'success') {

      $result['data_crm'] = $response_content;
      $result['id'] = $data['id'];
      $result['current_step'] = $data['step_to_proof'];

      if(isset($_COOKIE['sf_p_link_token'], $_COOKIE['sf_p_received_state'])) {
        $result['sf_p_link_token'] = $_COOKIE['sf_p_link_token'];
        $result['sf_p_received_state'] = $_COOKIE['sf_p_received_state'];
        setcookie('sf_p_received_state', null, -1, $this->site_root);
      }

      return $result;

    } else if($response_content['status'] == 'redirect_to_step' || ($response_content['status'] == 'error' && $response_content['description'] == 'step_incorrect')) {
      header("Location: {$response_content['redirect_url']}");
      exit;
    } else if($response_content['status'] == 'error' && $response_content['description'] == 'signup_completed') {
      header("Location: {$this->get_signup_step_url(['type' => 'thx'])}");
      exit;
    } else {
      $this->process_undefined_result_api_response_with_redirect(
        $this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), 
        $data);
    }
  }

  private function process_continue_signup_ds() {
    $data_for_step_ds_continue = $this->flow_helper->check_data_for_step_ds_continue();
    if($data_for_step_ds_continue['status'] == false) {
      return;
    }

    $step_ds_continue_data = $this->set_step_ds_continue_data_array($data_for_step_ds_continue['data']);
    $response = $this->send_data_to_crm($step_ds_continue_data);
    $this->process_continue_signup_ds_response($response, $step_ds_continue_data);
  }

  private function set_step_ds_continue_data_array($data, $custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_step_ds_continue_data_array($data, $additional_data_array);
    return $data;
  }

  private function process_continue_signup_ds_response($response, $data) {
    if($response['code'] != 200) {
      $this->process_undefined_result_api_response_with_redirect_thx(
        $this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), 
        $data);
    }

    $response_content = json_decode($response['content'], true);

    if(array_key_exists('redirect_url', $response_content) && strlen($response_content['redirect_url']) > 0) {
      header("Location: {$response_content['redirect_url']}");
      exit;
    } else {
      $error_message = 'Undefined response after step ds continue - ' . json_encode($response_content) . ' | ' . __FILE__ . ' (' . __LINE__ . ')';
      $this->process_undefined_result_api_response_with_redirect_thx(
        $this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), 
        $data);
    }
  }

  public function signup() {
    $data = $this->set_signup_steps_data_array();

    if($this->check_required_data($data)) {
      $curl_array = [];
      $curl_array['curl_sf'] = $this->build_curl_sf($data);

      $fb_conversation_api_data = $this->flow_helper->set_fb_conversation_api_data_array($data, $this->store_data);
      if(isset($fb_conversation_api_data) && !$this->fb_api_ignore) {
        $curl_array['curl_fb'] = $this->build_curl_fb($fb_conversation_api_data);
      }

      $curl_response = $this->run_curl_multi($curl_array, $data);

      if(isset($fb_conversation_api_data) && !$this->fb_api_ignore) {
        $this->process_signup_result_fb($curl_response['curl_fb'], $data);
      }
      
      $this->process_signup_response($curl_response['curl_sf'], $data);
    } else {
      $this->echo_error('', $data['step']);
    }
  }

  public function set_signup_steps_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_signup_steps_data_array($additional_data_array);
    return $data;
  }
  
  private function process_signup_response($response, $data) {
    $response = $this->process_signup_response_and_data_for_additional_request($response, $data);

    if(!$this->flow_helper->check_continue_signup_availability($data)) {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx_block']));
    }

    $response_content = json_decode($response['content'], true);

    if($response_content['description'] == 'step_saved') {
      $result_parsed_return = $this->set_return_json_data($response_content);
      $this->echo_success('', json_encode($result_parsed_return));
    } else if($response_content['description'] == 'step_redirect' || $response_content['description'] == 'step_incorrect') {
      $this->echo_success($response_content['redirect_url']);
    } else {
      $this->process_signup_steps_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
    }
  }

  private function process_signup_response_and_data_for_additional_request($response, $data) {
    if($response['code'] != 200) {
      $this->process_signup_steps_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
    }

    $response_content = json_decode($response['content'], true);

    if($data['step'] == 'ds-init' && $response_content['description'] == 'step_saved') {
      $data['step'] = 'ds';
      $additional_response = $this->send_data_to_crm($data);
      return $this->process_signup_response_and_data_for_additional_request($additional_response, $data);
    }
    
    return $response;
  }

  private function process_signup_steps_status_error($error, $data) {
    $this->set_error_email_and_log($error, $data);

    if($data['step'] == 'ds-init' || (array_key_exists('step_short', $data) && $data['step_short'])) {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    } else {
      $this->echo_success();
    }
  }

  public function get_requested_files() {
    $data = $this->flow_helper->set_get_files_data_array();
    if($this->check_required_data($data)) {
      $response = $this->send_data_to_crm($data); 
      $this->process_get_files_response($response, $data);
    }
    $this->echo_error();
  }

  private function process_get_files_response($response, $data) {
    if($response['code'] != 200) {
      $this->process_response_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
    }

    $response_content = json_decode($response['content'], true);
    if($response_content['status'] == 'success') {
      $this->echo_success('', $response['content']);
    } else if($response_content['description'] == 'no_requested_files') {
      $response_content['redirect_link'] = $this->get_signup_step_url(['type' => 'thx']);
      $this->echo_success('', json_encode($response_content));
    }
    $this->process_response_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
  }

  public function process_file() {
    $data = $this->flow_helper->set_file_data_array();
    $file_info = $this->set_file_info();
    
    if($this->check_required_data($data, $file_info)) {
      $data_with_file = $this->flow_helper->set_file_data_array($data, $file_info);
      $response = $this->send_data_to_crm($data_with_file);    
      $this->process_file_upload_response($response, $data_with_file, $file_info);
    } else {
      $error_message = $file_info;
      if(is_array($file_info) && count($file_info) > 0) {
        $error_message = '';
        $this->set_error_email_and_log($this->build_message_with_trace('Process file error', __FILE__, __METHOD__, __LINE__), $data, $file_info);
      }
      
      $this->echo_error('', $error_message);
    }
  }

  private function process_file_upload_response($response, $data, $file_info) {
    if($response['code'] != 200) {
      $this->process_file_upload_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data, $file_info);
    }

    $response_content = json_decode($response['content'], true);
    if($response_content['status'] == 'success') {
      $response_content['redirect_link'] = $this->get_signup_step_url(['type' => 'thx_success']);
      $this->echo_success('', json_encode($response_content)); 
    }
    $this->echo_error();
  }

  private function process_file_upload_status_error($error, $data, $file_info) {
    $this->set_error_email_and_log($error, $data, $file_info);
    $this->echo_error();
  }

  public function plaid_initiate_flow() {
    $data = $this->flow_helper->set_plaid_initiate_flow_data_array();
    if($this->check_required_data($data)) {
      $response = $this->send_data_to_crm($data); 
      $this->process_plaid_initiate_flow_response($response, $data);
    }
    $this->echo_error();
  }

  private function process_plaid_initiate_flow_response($response, $data) {
    if($response['code'] != 200) {
      $this->process_response_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
    }

    $response_content = json_decode($response['content'], true);
    if($response_content['status'] == 'success') {
      $sf_p_redirect = $this->flow_helper->get_signup_step_url(
        ['type' => 'plaid_redirect', 'id' => $data['id']]
      );
      setcookie('sf_p_redirect', $sf_p_redirect, time()+60*60*1, '/');
      setcookie('sf_p_site_root', $this->site_root, time()+60*60*1, '/');
      setcookie('sf_id', $response_content['id'], time()+60*60*1, $this->site_root);
      setcookie('sf_p_link_token', $response_content['link_token'], time()+60*60*1, $this->site_root);
      $this->echo_success('', json_encode(['link_token' => $response_content['link_token']]));
    }
    $this->echo_error();
  }

  public function plaid_put_public_token() {
    $data = $this->flow_helper->set_plaid_put_public_token_data_array();
    if($this->check_required_data($data)) {
      $response = $this->send_data_to_crm($data); 
      $this->process_plaid_put_public_token_response($response, $data);
    }
    $this->echo_error();
  }

  private function process_plaid_put_public_token_response($response, $data) {
    if($response['code'] != 200) {
      $this->process_response_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
    }

    setcookie('sf_p_link_token', null, -1, $this->site_root);
    setcookie('sf_id', null, -1, $this->site_root);
    $response_content = json_decode($response['content'], true);
    if($response_content['status'] == 'success') {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    }
    $this->echo_error();
  }

  public function execute_sf_internal_endpoint() {
    $data = $this->flow_helper->set_internal_endpoint_data();
    if($this->flow_helper->check_required_data($data)) {
      $response = $this->curl_request_with_status($this->build_curl_with_redirects_to_get_contents($data['file-url']), $data);
      $output_data = $this->process_execute_sf_internal_endpoint_response($response, $data);
    } else {
      $output_data = [
        'status' => 'error',
        'code' => 404,
        'description' => 'Missing data',
        'url' => isset($data['file-url']) ? $data['file-url'] : ''
      ];
      $this->set_error_email_and_log($this->build_message_with_trace($output_data, __FILE__, __METHOD__, __LINE__), $data);
    }
    http_response_code(200);
    header('Content-type: application/json');
    die(json_encode($output_data));
  }

  private function process_execute_sf_internal_endpoint_response($response, $data) {
    if($response['code'] != 200) {
      $this->set_error_email_and_log($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
      $output_data = [
        'status' => 'error',
        'code' => $response['code'],
        'description' => $response['error_info'],
        'url' => $data['file-url']
      ];
    } else {
      $output_data = [
        'status' => 'success',
        'file-base64' => base64_encode($response['content'])
      ];
    }
    return $output_data;
  }

  private function process_response_status_error($error, $data) {
    $this->set_error_email_and_log($error, $data);
    $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    exit;
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

}
?>