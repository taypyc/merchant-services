<?php
class MockupTest {
  const MOCKUP_SUCCESS = 'success';
  const MOCKUP_ERROR = 'error';
  const METHOD_STEP_SUCCESS = 'step_success';
  const METHOD_STEP_ERROR = 'step_error';
  const METHOD_STEP_SUCCESS_DELAYED = 'step_success_delayed';
  const METHOD_STEP_STATEMENT_SUCCESS = 'step_statement_success';
  const METHOD_STEP_STATEMENT_FLOW_04_SUCCESS = 'step_statement_04_success';
  const METHOD_GET_FILES_STATEMENT_SUCCESS = 'get_files_success';
  const METHOD_GET_PLAID_LINK_TOKEN_SUCCESS = 'get_plaid_link_token_success';
  
  const STEP_TO_MOCKUP = [
    '0' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    '1' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    '2' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    '3' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_STATEMENT_FLOW_04_SUCCESS],
    '4' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_STATEMENT_SUCCESS],
    'proof' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    'get_step' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    'get_files' => [self::MOCKUP_SUCCESS => self::METHOD_GET_FILES_STATEMENT_SUCCESS],
    'upload_file' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_ERROR],
    'get_plaid_link_token' => [self::MOCKUP_SUCCESS => self::METHOD_GET_PLAID_LINK_TOKEN_SUCCESS],
    'put_plaid_public_token' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS]
  ];

  public static function return_mockup($curl_array, $data) {
    if(is_array($curl_array)) {
      $result = [];
      foreach($curl_array as $k => $curl) {
        $result[$k] = self::build_mockup($data);
      }
      return $result;
    }
    return self::build_mockup($data);
  }

  private static function build_mockup($data) {
    $mockup_type = array_key_exists('mockup_type', $data) ? $data['mockup_type'] : self::MOCKUP_SUCCESS;
    
    if(array_key_exists('step', $data) && in_array($data['step'], array_keys(self::STEP_TO_MOCKUP))) {
      $step = $data['step'];
      $content = self::{self::STEP_TO_MOCKUP[$step][$mockup_type]}($data);
      return self::mockup_array(['content' => $content, 'mockup_type' => $mockup_type]);
    } else if(array_key_exists('data', $data) && isset($data['data'][0]['event_name'])) {
      return self::mockup_array(['content' => null, 'mockup_type' => $mockup_type]);
    }
    return self::mockup_array(['content' => 'unable_to_mockup', 'mockup_type' => self::MOCKUP_ERROR]);
  }

  private static function mockup_array($params) {
    $error_info = ['curl_error' => 'error mockup', 'curl_errno' => '6'];
    return [
      'content' => json_encode($params['content']),
      'url' => 'https://curl.url',
      'code' => array_key_exists('code', $params) ? $params['code'] : ($params['mockup_type'] == self::MOCKUP_SUCCESS ? 200 : 400),
      'error_info' => $params['mockup_type'] == self::MOCKUP_SUCCESS ? null : $error_info
    ];
  }

  private static function step_success() {
    usleep(200000);
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123', 'next_step_url' => 'https://next.step'];
  }

  private static function step_error() {
    sleep(1);
    return ['status' => self::MOCKUP_ERROR, 'description' => 'unable_to_save_file'];
  }

  private static function step_success_delayed() {
    sleep(10);
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123', 'next_step_url' => 'https://next.step'];
  }

  private static function step_statement_success($data = []) {
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123', 'next_step_url' => 'https://next.step', 'plaid_url' => 'https://plaid.url', 'files_url' => 'https://files.url', 'data' => $data];
  }

  private static function step_statement_04_success($data = []) {
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123', 'next_step_url' => 'https://next.step', 'files_url' => 'https://files.url', 'data' => $data];
  }

  private static function get_files_success() {
    return ['status' => self::MOCKUP_SUCCESS, 'id' => '123', 'docs' => [['name' => 'Some File 1', 'id' => '321'],['name' => 'Some File 2', 'id' => '321321'],['name' => 'Some File 3', 'id' => '123123123']]];
  }

  private static function get_plaid_link_token_success($data = []) {
    $link_token = 'link-sandbox-104adad8-1cce-4fcd-9fa6-809238a7668b';
    return [
      'status' => self::MOCKUP_SUCCESS,
      'id' => '123',
      'link_token' => $link_token,
      'data' => $data
    ];
  }
  private static function get_curl_plaid_link_token_success($data = []) {
    $request = [
        'client_id' => 'INSERT_CLIENT_ID_HERE', // TODO: getenv()?
        'secret' => 'INSERT_SECRET_HERE',
        'client_name' => 'vvjh',
        'country_codes' => ['US'],
        'language' => 'en',
        'user' => [ 'client_user_id' => 'unique_user_id' ],
        'products' => ['auth', 'assets'],
        'redirect_uri' => 'https://b2bfunding.net/_dev/files/oauth-response.html'
    ];

    $curl = curl_init('https://sandbox.plaid.com/link/token/create');
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($request));

    $response = curl_exec($curl);
    $responseData = json_decode($response, true);
    $link_token = isset($responseData['link_token']) ? $responseData['link_token'] : '';
    return [
      'status' => self::MOCKUP_SUCCESS,
      'id' => '123',
      'link_token' => $link_token,
      'data' => $data
    ];
  }
}
?>