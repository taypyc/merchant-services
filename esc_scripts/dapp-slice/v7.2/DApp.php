<?php
class DApp extends DAppService {
  public function process_continue_signup() {
    $this->process_continue_signup_ds();

    $step_proof_data = $this->flow_helper->set_step_proof_data_array();
    if(count($step_proof_data) > 0) {
      $response = $this->send_data_to_crm($step_proof_data);
      return $this->process_proof_step_response($response, $step_proof_data);
    }

    return [
      'data_crm' => [],
      'id' => '',
      'current_step' => '0'
    ];

    
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

      return $result;
    } else if($response_content['status'] == 'error' && $response_content['description'] == 'step_incorrect') {
      header("Location: {$response_content['redirect_url']}");
      exit;
    } else {
      $this->process_undefined_result_api_response_with_redirect(
        $this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), 
        $data
      );
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
      $this->process_undefined_result_api_response_with_redirect_thx(
        $this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), 
        $data);
    }
  }

  public function signup($custom_data_array = []) {
    $data = $this->set_signup_steps_data_array($custom_data_array);
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
      $this->echo_error();
    }
  }

  private function set_signup_steps_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_signup_steps_data_array($additional_data_array);
    return $data;
  }

  private function process_signup_response($response, $data) {
    $response = $this->process_signup_response_and_data_for_additional_request($response, $data);

    $response_content = json_decode($response['content'], true);

    if($response_content['description'] == 'step_saved') {
      $this->echo_success('', json_encode($this->set_return_json_data($response_content)));
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

    if($data['step'] != 'ds-init' && $data['step'] != 'ds') {
      $this->echo_success();
    } else {
      $this->echo_success($this->get_signup_step_url(['type' => 'thx']));
    }
  }

  public function process_ds_completed($custom_data_array = []) {
    if($this->page != 'thank-you' && (!isset($_GET['id']) || strlen(trim($_GET['id'])) == 0)) {
      header("Location: {$this->get_signup_step_url(['type' => 'thx'])}");
      exit;
    }

    $data = $this->set_ds_completed_data_array($custom_data_array);
    if(count($data) > 0) {
      $response = $this->send_data_to_crm($data);
      if($response['code'] != 200) {
        $this->set_error_email_and_log($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
      }
    }
  }

  private function set_ds_completed_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_ds_completed_data_array($additional_data_array);
    return $data;
  }

  public function get_requested_files() {
    $data = $this->flow_helper->set_get_files_data_array();
    if($this->check_required_data($data)) {
      $response = $this->send_data_to_crm($data);
      $this->process_get_files_response($response, $data);
    } else {
      $this->process_get_files_status_error($this->build_message_with_trace('Required Data is Not Set', __FILE__, __METHOD__, __LINE__), $data);
    }
  }

  private function process_get_files_response($response, $data) {
    if($response['code'] != 200) {
      $this->process_get_files_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
    }

    $response_content = json_decode($response['content'], true);
    if($response_content['status'] == 'success') {
      $this->echo_success('', $response['content']);
    } else if($response_content['description'] == 'no_requested_files') {
      $response_content['redirect_link'] = $this->get_signup_step_url(['type' => 'thx']);
      $this->echo_success('', json_encode($response_content));
    }
    
    $this->process_get_files_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
  }

  private function process_get_files_status_error($error, $data) {
    $this->set_error_email_and_log($error, $data);
    $this->echo_error($this->get_signup_step_url(['type' => 'thx']));
  }

  public function process_file($compability = '') {
    if ($compability == 'verify') {
      $data = $this->set_verify_file_data_array();
    } else {
      $data = $this->flow_helper->set_file_data_array();
    }
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

  private function set_verify_file_data_array($custom_data_array = []) {
    $additional_data_array = $this->set_additional_data_array($custom_data_array);
    $data = $this->flow_helper->set_verify_file_data_array($additional_data_array);
    return $data;
  }

  private function process_file_upload_response($response, $data, $file_info) {
    if($response['code'] != 200) {
      $this->process_file_upload_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data, $file_info);
    }

    $response_content = json_decode($response['content'], true);
    if($response_content['status'] == 'success') {
      $thx_page = $this->get_signup_step_url(['type' => 'thx_success']);
      $response_content['redirect_link'] = $thx_page;
      $success_redirect_param = $data['step'] == 'verify' ? $thx_page : '';
      $this->echo_success($success_redirect_param, json_encode($response_content)); 
    } else {
      $this->process_file_upload_status_error($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data, $file_info);
    }
  }

  private function process_file_upload_status_error($error, $data, $file_info) {
    $this->set_error_email_and_log($error, $data, $file_info);
    $this->echo_error();
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