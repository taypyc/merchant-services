<?php
class MockupTest {
  const MOCKUP_SUCCESS = 'success';
  const MOCKUP_ERROR = 'error';
  const METHOD_STEP_SUCCESS = 'step_success';
  const METHOD_STEP_ERROR = 'step_error';
  const METHOD_STEP_SUCCESS_DELAYED = 'step_success_delayed';
  const METHOD_STEP_DOCUSIGN_INIT = 'step_success_docusign_init';
  const METHOD_STEP_DOCUSIGN = 'step_success_docusign';
  const METHOD_GET_FILES_SUCCESS = 'get_files_success';

  const STEP_TO_MOCKUP = [
    '0' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    '1' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    '2' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    'ds-init' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_DOCUSIGN_INIT],
    'ds' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_DOCUSIGN],
    'verify' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_ERROR],
    'proof' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    'get_step' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS],
    'get_files' => [self::MOCKUP_SUCCESS => self::METHOD_GET_FILES_SUCCESS],
    'upload_file' => [self::MOCKUP_SUCCESS => self::METHOD_STEP_SUCCESS_DELAYED]
  ];

  public static function return_mockup($curl_array, $data, $url_base) {
    if(is_array($curl_array)) {
      $result = [];
      foreach($curl_array as $k => $curl) {
        $result[$k] = self::build_mockup($data, $url_base);
      }
      return $result;
    }
    return self::build_mockup($data, $url_base);
  }

  private static function build_mockup($data, $url_base) {
    $mockup_type = array_key_exists('mockup_type', $data) ? $data['mockup_type'] : self::MOCKUP_SUCCESS;

    if(array_key_exists('step', $data) && in_array($data['step'], array_keys(self::STEP_TO_MOCKUP))) {
      $step = $data['step'];
      $content = self::{self::STEP_TO_MOCKUP[$step][$mockup_type]}($data, $url_base);
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

  private static function step_success($data) {
    usleep(200000);
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123', 'potential_savings' => '100000'];
  }

  private static function step_error() {
    sleep(1);
    return ['status' => self::MOCKUP_ERROR, 'description' => 'unable_to_save_file'];
  }

  private static function step_success_delayed() {
    sleep(10);
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123', 'potential_savings' => '100000'];
  }

  private static function step_success_docusign_init($data) {
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_saved', 'id' => '123'];
  }

  private static function step_success_docusign($data, $url_base) {
    return ['status' => self::MOCKUP_SUCCESS, 'description' => 'step_redirect', 'id' => '123', 'redirect_url' => $url_base . 'files?id=123'];
  }

  private static function get_files_success($data) {
    sleep(5);
    return ['status' => self::MOCKUP_SUCCESS, 'id' => '123', 'files' => [['name' => 'Some File 1', 'id' => '321'],['name' => 'Some File 2', 'id' => '321321'],['name' => 'Some File 3', 'id' => '123123123']]];
  }
}
?>