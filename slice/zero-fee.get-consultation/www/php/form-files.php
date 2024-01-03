<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

$data = $dapp->set_step_verify_data_array();

if(strlen($data['id']) > 0 && strlen($data['file_01_name']) > 0) {
  $files_info = $dapp->set_files_info($data);
  $email_headers_and_body = $dapp->set_email_headers_and_body_for_files($data, $files_info);

  for($i=0; $i<count($files_info); $i++) {
    $files_info[$i]['file'] = $dapp->image_reduce($files_info[$i]['file']);
  }

  $email_params = $dapp->set_email_params([
    'subject' => $dapp->get_dapp_source() . ' Verify', 
    'message' => $email_headers_and_body['m'],
    'headers' => $email_headers_and_body['h']
  ]);

  //$dapp->email_notification($email_params);

  $upload_files_result = $dapp->upload_files_to_crm($data, $files_info, $email_params);

  foreach($upload_files_result as $file_result) {
    if($file_result['error'] !== false) {
      $dapp->echo_error('', $upload_files_result);
    }
  }

  $dapp->echo_success($dapp->get_signup_step_url(['type' => 'thx_success']));

} else {
  $dapp->set_error_email_and_log('Incorrect ID or filename' . ' | ' . __FILE__ . ' (' . __LINE__ . ')', $data);
  $dapp->echo_error();
}
?>