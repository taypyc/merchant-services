<?php
class DAppService {
  public $root;
  public $site_root;
  public $flow;
  public $helper;
  public $store_data;
  public $flow_helper;
  public $mockup_debug;
  public $fb_api_ignore;

  private $api_credentials = [
    'token' => 'securitytoken',
    'endpoint_signup' => 'https://merchantservices.secure.force.com/services/apexrest/signup_cash'
    // 'endpoint_signup' => 'https://msdev5-merchantservices.cs28.force.com/services/apexrest/signup_cash'
    // 'endpoint_signup' => 'https://msqa-merchantservices.cs200.force.com/services/apexrest/signup_cash'
  ];

  private $fb_api_credentials = [
    'pr' => [
      'token' => 'EAALzLwkQPx0BAFCYzXaNcMzKu2U2NZAF6gug5eBMCmsa5ci5LfMCtvYEnolckC91ZC7U1jSruOEE1xGZAWpt4yseXSgicPpgOKZBi9oJz2cl9N6GO30u3xociXKSectFOMTldp8tRQP9enPtSxmqvK4C6PATcsTypp0qZCPcAW5m1znPJm6BZActJ0Aor4OYQZD',
      'pixel_id' => '712130906162259'
    ]
  ];

  private $email_params = [
    'to' => 'kubrakegor25@gmail.com',
    'from_email' => 'notification@b2bfunding.net',
    'from_name' => 'B2B dapp'
  ];

  public function __construct($settings) {
    $this->root = $settings['dapp_root'];
    $this->site_root = getenv('SITE_ROOT');
    $this->flow = getenv('DAPP_FLOW');
    $this->mockup_debug = getenv('MOCKUP_DEBUG') == 'true' ? true : false;
    $this->fb_api_ignore = getenv('FB_API') == 'ignore' ? true : false;

    $this->base_require();
    $this->flow_helper_require();

    $this->email_params['from_name'] .= ' ' . basename(dirname(__FILE__));
  }

  private function base_require() {
    require_once $this->root . '/StoreData.php';
    $this->store_data = new StoreData();
  }

  private function flow_helper_require() {
    if($this->flow == 'flow-02') {
      require_once $this->root . '/Flow02Helper.php';
      $this->flow_helper = new Flow02Helper(['flow' => $this->flow, 'root' => $this->root, 'mockup_debug' => $this->mockup_debug]);
    } else if($this->flow == 'flow-03') {
      require_once $this->root . '/Flow03Helper.php';
      $this->flow_helper = new Flow03Helper(['flow' => $this->flow, 'root' => $this->root, 'mockup_debug' => $this->mockup_debug]);
    } else if($this->flow == 'flow-04') {
      require_once $this->root . '/Flow04Helper.php';
      $this->flow_helper = new Flow04Helper(['flow' => $this->flow, 'root' => $this->root, 'mockup_debug' => $this->mockup_debug]);
    } else if($this->flow == 'flow-endpoint-01') {
      require_once $this->root . '/FlowEndpoint01Helper.php';
      $this->flow_helper = new FlowEndpoint01Helper(['flow' => $this->flow, 'root' => $this->root, 'mockup_debug' => $this->mockup_debug]);
    }

    $this->flow_overriding();
  }

  private function flow_overriding() {
    if(count($this->flow_helper->override_info) > 0) {
      $override_info = $this->flow_helper->override_info;
      $endpoint_signup_key = 'endpoint_signup';
      if(array_key_exists($endpoint_signup_key, $override_info)) {
        $this->api_credentials[$endpoint_signup_key] = $override_info[$endpoint_signup_key];
      }

      if(array_key_exists('email_to', $override_info)) {
        $this->email_params['to'] = $override_info['email_to'];
      }
    }
  }

  public function get_dapp_source() {
    return rtrim($_SERVER['SERVER_NAME'] . $this->site_root, '/');
  }

  protected function check_required_data($data, $file_info = []) {
    return $this->flow_helper->check_required_data($data, $file_info);
  }

  protected function set_return_json_data($source_data) {
    return $this->flow_helper->set_return_json_data($source_data);
  }

  public function fb_send_event_pageview() {
    $data = $this->flow_helper->set_fb_conversation_api_data_array($this->flow_helper->set_fb_conversation_api_pageview_data(), $this->store_data);
    if(isset($data) && !$this->fb_api_ignore) {
      $response = $this->curl_request_with_status($this->build_curl_fb($data), $data);
      if($response['code'] != 200) {
        $this->set_error_email_and_log($this->build_message_with_trace($response, __FILE__, __METHOD__, __LINE__), $data);
      }
    }
  }

  protected function build_curl_fb($data) {
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

  protected function process_signup_result_fb($result, $data) {
    if($result['code'] != 200) {
      $error = $this->build_message_with_trace($result, __FILE__, __METHOD__, __LINE__);
      $this->set_error_email_and_log($error, $data);
    }
  }

  public function send_data_to_crm($data) {
    $curl = $this->build_curl_sf($data);
    return $this->curl_request_with_status($curl, $data);
  }

  public function curl_request_with_status($curl, $data) {
    if($this->mockup_debug) {
      return $this->process_debug($curl, $data);
    }
    $result = [
      'content' => curl_exec($curl),
      'url' => curl_getinfo($curl)['url'],
      'code' => curl_getinfo($curl, CURLINFO_HTTP_CODE),
      'error_info' => $this->build_curl_error_info($curl)
    ];
    curl_close($curl);
    return $result;
  }

  protected function build_curl_sf($data) {
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

  protected function build_curl_with_redirects_to_get_contents($url) {
    $curl = curl_init();
    $options = [
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_CONNECTTIMEOUT => 30,
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HEADER => false,
      
    ];
    curl_setopt_array($curl, $options);
    return $curl;
  }

  protected function run_curl_multi($curl_array, $data) {
    if($this->mockup_debug) {
      return $this->process_debug($curl_array, $data);
    }
    $result = [];

    $curl_multi = curl_multi_init();
    foreach($curl_array as $k => $curl) {
      curl_multi_add_handle($curl_multi, $curl_array[$k]);
    }

    do {
      curl_multi_exec($curl_multi, $running);
    } while($running > 0);

    foreach($curl_array as $k => $curl) {
      $result[$k]['content'] = curl_multi_getcontent($curl_array[$k]);
      $result[$k]['url'] = curl_getinfo($curl_array[$k])['url'];
      $result[$k]['code'] = curl_getinfo($curl_array[$k], CURLINFO_HTTP_CODE);
      $result[$k]['error_info'] = $this->build_curl_error_info($curl_array[$k]);
      curl_multi_remove_handle($curl_multi, $curl);
    }
    curl_multi_close($curl_multi);

    return $result;
  }

  private function build_curl_error_info($curl) {
    return strlen(curl_error($curl)) > 0 || curl_errno($curl) != 0 ? 
      ['curl_error' => curl_error($curl), 'curl_errno' => curl_errno($curl)] : 
      null;
  }

  protected function build_message_with_trace($message, $file, $method, $line) {
    if(is_array($message)) {
      $curl_error_description = '';
      if(is_array($message['error_info'])) {
        $error_info = $message['error_info'];
        $curl_error_description = "| curl_error: {$error_info['curl_error']} | curl_errno: {$error_info['curl_errno']} ";
      }
      $message = "Request failed | url: {$message['url']} | status: {$message['code']} {$curl_error_description}| response: {$message['content']}";
    }
    return $message . ' | ' . $file . ' | ' . $method . ' (' . $line . ')';
  }

  public function set_error_email_and_log($error, $data, $file_info = []) {
    $data['error'] = $error;
    $email_contents = $this->set_email_contents_from_data($data, $file_info);
    $email_params = $this->set_email_params(array_merge($email_contents, ['subject_additional' => 'ERROR']));

    $this->error_log($error, $email_params);
  }

  private function set_email_contents_from_data($data, $file_info) {
    $email_contents = $this->set_email_contents($data);

    if($this->check_if_file_exists_in_data($data, $file_info)) {
      $email_contents = $this->set_email_body_with_file($email_contents['message'], $file_info);
    }

    return $email_contents;
  }

  private function check_if_file_exists_in_data($data, $file_info) {
    if(is_array($file_info) && count($file_info) > 0) {
      return true;
    }
    return false;
  }

  private function set_email_contents($data) {
    $headers = "Content-Type: text/html; charset=UTF-8\r\n";

    $body = '';
    $line_end_divider = "<br>\n";

    foreach($data as $key => $val) {
      if(is_array($val)) {
        $key_val = '';
        for($i = 0; $i < count($val); $i++) {
          $line_start_tab_arr = ($i == 0) ? "<br>&nbsp;&nbsp;&nbsp;\n\t" : "&nbsp;&nbsp;&nbsp;\t";
          $line_end_divider_arr = ($i == count($val) - 1) ? '' : $line_end_divider;

          $key_val .= $line_start_tab_arr;
          foreach($val[$i] as $k => $v) {
            if(is_array($v)) {
              $v = implode(" | ", $v);
            }
            $key_val .= $k . ': ' . htmlspecialchars($v, ENT_QUOTES) . '; ';
          }
          $key_val .= $line_end_divider_arr;
        }
      } else if(is_object($val)) {
        $key_val = '[Object]';
      } else {
        $key_val = htmlspecialchars($val, ENT_QUOTES);
      }
      $body .= $key . ': ' . $key_val . $line_end_divider;
    }

    return $this->return_email_contents($headers, $body);
  }

  private function set_email_body_with_file($email_body, $file_info) {
    $boundary_email = bin2hex(random_bytes(12));
    $headers = "Content-Type: multipart/mixed; charset=UTF-8; boundary=\"$boundary_email\"";

    $body = "--$boundary_email\n";
    $body .= "Content-type: text/html; charset='utf-8'\n";
    $body .= "Content-Transfer-Encoding: quoted-printable\n\n";
    $body .= $email_body."\n\n";
    $body .= "--$boundary_email\n";

    if(isset($file_info['file'])) {
      $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($file_info['file_name'])."?=\n"; 
      $body .= "Content-Transfer-Encoding: base64\n";
      $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($file_info['file_name'])."?=\n\n";
      $body .= chunk_split(base64_encode($file_info['file']))."\n";
      $body .= "--" . $boundary_email . "\n";

      $body .= "--".$boundary_email ."--\n";
    }

    return $this->return_email_contents($headers, $body);
  }

  private function return_email_contents($headers, $message) {
    return [
      'headers_additional' => $headers,
      'message' => $message
    ];
  }

  private function set_email_params($custom_params = []) {
    $to = $this->email_params['to'];
    $from_name = $this->email_params['from_name'];
    $from_email = $this->email_params['from_email'];
    $subject = $this->get_dapp_source();
    $message = '';

    $headers = 'From: ' . $from_name . ' < ' . $from_email . ' >' . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    if(array_key_exists('headers_additional', $custom_params)) {
      $headers .= $custom_params['headers_additional'];
    }

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

  public function error_log($error, $email_params = NULL) {
    $this->log_to_file($error);

    if(!is_array($email_params)) {
      $email_params = $this->set_email_params(['subject_additional' => 'ERROR', 'message' => $error]);
    }

    $this->email_notification($email_params);
  }

  private function log_to_file($error) {
    $logs_path = $this->root . '/logs';
    $error = date('Y-m-d H:i:s') . ' ' . $error . "\n\n";
    file_put_contents($logs_path . '/logs.txt', $error, FILE_APPEND | LOCK_EX);
  }

  public function email_notification($params) {
    return mail($params['t'], $params['s'], $params['m'], $params['h']);
  }

  protected function set_file_info() {
    $whitelist_type_img = ['image/jpeg', 'image/png'];
    $whitelist_type = array_merge(['application/pdf'], $whitelist_type_img);

    $file_key = array_key_first($_FILES);

    if(!is_null($file_key)) {
      $file = $_FILES[$file_key];

      if(!isset($file['name']) || strlen($file['name']) < 5 || $file['error'] !== UPLOAD_ERR_OK) {
        return 'incorrect_file';
      } else if($file['error'] === UPLOAD_ERR_FORM_SIZE || $file['error'] === UPLOAD_ERR_INI_SIZE) {
        return 'incorrect_size';
      } else if(!in_array(finfo_file(finfo_open(FILEINFO_MIME_TYPE), $file['tmp_name']), $whitelist_type)) {
        return 'incorrect_type';
      }

      $file_info['file_name'] = $file['name'];
      $file_content = file_get_contents($file['tmp_name']);

      if(in_array(finfo_file(finfo_open(FILEINFO_MIME_TYPE), $file['tmp_name']), $whitelist_type_img)) {
        $file_content = $this->image_reduce($file_content);
      }

      $file_info['file'] = $file_content;

      return $file_info;
    }

    return 'no_file';
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
      imagejpeg($image, null, $q);
      $image_reduced = ob_get_clean();
      imagedestroy($image);

      return $image_reduced;
    } else {
      return null;
    }
  }

  public function get_signup_step_url($params) {
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

  protected function set_additional_data_array($custom_data_array) {
    $arr = [];
    $arr['url_source'] = $this->get_signup_step_url(['type' => 'signup_url']);
    $arr['files_source'] = $this->get_signup_step_url(['type' => 'files']);
    foreach($this->store_data->utm as $key => $val) {
      $arr[$key] = $val;
    }
    $arr['campaign_name'] = getenv('CAMPAIGN_NAME');
    $arr['lead_source'] = $this->set_source_data($arr);

    $arr = array_merge($arr, $custom_data_array);

    return $arr;
  }

  private function set_source_data($data) {
    if(array_key_exists('campaign_name', $data)) {
      if(strpos($data['campaign_name'], ' Facebook ') !== false) {
        return 'Facebook';
      } else if(strpos($data['campaign_name'], ' Google ') !== false) {
        return 'Google';
      } else if(strpos($data['campaign_name'], ' Youtube ') !== false) {
        return 'Youtube';
      }
    }

    return $this->get_dapp_source();
  }

  private function process_debug($curl_array, $data) {
    require_once $this->root . '/MockupTest.php';
    $result = MockupTest::return_mockup($curl_array, $data);
    return $result;
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