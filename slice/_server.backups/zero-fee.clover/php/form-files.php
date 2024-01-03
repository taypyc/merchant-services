<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

require_once 'scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/v1.0';
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp($dapp_root);

$redirect_url_base = 'https://startslice.com/zero-fee/clover';

$to = 'kubrakegor25@gmail.com';
$subject = "startslice.com/zero-fee/clover Files";
$data = [];
$data['oid'] = trim($_POST['oid']);
$data['routing_number'] = trim($_POST['routing_number']);
$data['account_number'] = trim($_POST['account_number']);
$data['file_01_s'] = trim($_POST['file_01_s']);
$data['redirect_url'] = $redirect_url_base . '/thank-you?success';

$data['utm_source'] = $crm_control->utm['utm_source'];
$data['utm_medium'] = $crm_control->utm['utm_medium'];
$data['utm_campaign'] = $crm_control->utm['utm_campaign'];
$data['utm_content'] = $crm_control->utm['utm_content'];
$data['utm_term'] = $crm_control->utm['utm_term'];

$data['oid_decrypted'] = $dapp->crypt_string($data['oid'], 'd');

if($data['oid_decrypted'] !== FALSE && strlen($data['oid_decrypted']) > 0 && strlen($data['routing_number']) > 0 && strlen($data['account_number']) > 0) {

  $cd_i = 0;
  $contact_data = array(
    $cd_i++ => ['Opportunity ID', $data['oid_decrypted']],
    $cd_i++ => ['Routing number', $data['routing_number']],
    $cd_i++ => ['Account number', $data['account_number']],
  );

  $message = "";

  foreach($contact_data as $contact_item) {
    $message .= $contact_item[0].': ' . htmlspecialchars($contact_item[1], ENT_QUOTES) . "<br>\n";
  }

  $files_info = [
    ['fieldname' => 'file_01', 'status' => $data['file_01_s'], 'error' => false, 'file' => NULL, 'filename' => '', 'sf' => false],
  ];
  $img_size = ['w' => 1024, 'h' => 1024];

  for($i=0; $i<count($files_info); $i++) {
    $fieldname = $files_info[$i]['fieldname'];

    if($files_info[$i]['status'] != 's' && isset($_FILES[$fieldname]['name']) && strlen($_FILES[$fieldname]['name']) > 0) {
      // filename should be at least i.jpg = 5 chars
      if($_FILES[$fieldname]['error'] !== UPLOAD_ERR_OK || strlen($_FILES[$fieldname]['name']) < 5) {
        $error = 'upload_err';
        if($_FILES[$fieldname]['error'] === UPLOAD_ERR_FORM_SIZE || $_FILES[$fieldname]['error'] === UPLOAD_ERR_INI_SIZE) {
          $error = 'size';
        }
        $files_info[$i]['error'] = $error;

        continue;
      }

      // $filename = $_FILES[$fieldname]['name'];
      // $file_extension = strtolower(pathinfo($filename)['extension']);
      // $file_imagetype = exif_imagetype($_FILES[$fieldname]['tmp_name']);
      // if($file_imagetype != IMAGETYPE_JPEG && $file_imagetype != IMAGETYPE_PNG) {
      /*if($file_extension != 'jpg' && $file_extension != 'jpeg' &&  $file_extension != 'png') {
        $files_info[$i]['error'] = 'ext';
        continue;
      }*/

      $finfo_mime = finfo_open(FILEINFO_MIME_TYPE);
      $whitelist_type = array('image/jpeg', 'image/png');

      if (!in_array(finfo_file($finfo_mime, $_FILES[$fieldname]['tmp_name']), $whitelist_type)) {
        $files_info[$i]['error'] = 'mime';
        continue;
      }

      $files_info[$i]['file'] = $dapp->image_reduce(file_get_contents($_FILES[$fieldname]['tmp_name']));

      $file_description = '-';
      if($files_info[$i]['fieldname'] == 'file_01') {
        $file_description .= 'voided-check';
      }
      $files_info[$i]['filename'] = $data['oid_decrypted'] . $file_description . '.jpg';
    }
  }

  $email_sent = false;
  $email_file_attached = false;
  $boundary_email = bin2hex(random_bytes(12));
  $headers = '';
  $headers .= 'From: Slice Clover (Opportunity files) < notification@startslice.com >' . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; charset=UTF-8; boundary=\"$boundary_email\"";

  $body = "--$boundary_email\n";
  $body .= "Content-type: text/html; charset='utf-8'\n";
  $body .= "Content-Transfer-Encoding: quoted-printable\n\n";
  $body .= $message."\n\n";
  $body .= "--$boundary_email\n";

  for($i=0; $i<count($files_info); $i++) {
    if(isset($files_info[$i]['file']) && $files_info[$i]['error'] === false) {
      $fieldname = $files_info[$i]['fieldname'];
      $text = file_get_contents($_FILES[$fieldname]['tmp_name']);
      $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($files_info[$i]['filename'])."?=\n"; 
      $body .= "Content-Transfer-Encoding: base64\n";
      $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($files_info[$i]['filename'])."?=\n\n";
      $body .= chunk_split(base64_encode($text))."\n";
      $body .= "--".$boundary_email ."--\n";

      $email_file_attached = true;
    }
  }

  if(!$email_file_attached) {
    $body .= "--".$boundary_email ."--\n";
  }

  if(mail($to, $subject, $body, $headers)) {
    $email_sent = true;
  }
  $email_params = ['t'=>$to, 's'=>$subject, 'm'=>$body, 'h'=>$headers];

  $dapp->init_sf();

  $sf_api_credentials = $dapp->sf->get_api_credentials();

  if($sf_api_credentials['status'] == 'error') {
    $email_params['s'] .= ' - ERROR WITH GETTING API CREDENTIALS CRM';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $sf_api_credentials['description'];

    $dapp->error_log($sf_api_credentials['description'] . ' | ' . __FILE__, 'sf', $email_params);
    if($email_sent) {
      // return success because information was sent to email
      $dapp->echo_success($data['redirect_url']);
    } else {
      $dapp->echo_error();
    }
  }

  // update opportunity
  $sf_opportunity = $dapp->sf->update_opportunity($data, 'voided-check');

  if($sf_opportunity['status'] == 'error') {
    $email_params['s'] .= ' - ERROR WITH SAVING TO CRM';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $sf_opportunity['description'];

    $dapp->error_log($sf_opportunity['description'] . ' | ' . __FILE__, 'sf', $email_params);
    // move on and try to save photo
  }
  
  $sf_upload_opportunity_files_error = false;
  $user_upload_opportunity_files_error = false;
  $user_files_response = [];

  for($i=0; $i < count($files_info); $i++) {
    if($files_info[$i]['status'] != 's' && $files_info[$i]['error'] === false && !is_null($files_info[$i]['file'])) {
      $files_info[$i]['sf'] = $dapp->sf->upload_opportunity_file($data['oid_decrypted'], $files_info[$i]);
    }

    if(is_array($files_info[$i]['sf']) && $files_info[$i]['sf']['status'] == 'error') {
      $sf_upload_opportunity_files_error = true;
    }

    // error with user's file - show only to user
    if($files_info[$i]['error'] !== false) {
      $user_upload_opportunity_files_error = true;
    }

    $user_files_response[] = ['field' => $files_info[$i]['fieldname'], 'error' => $files_info[$i]['error']];
  }

  if($sf_upload_opportunity_files_error) {
    $sf_upload_opportunity_files_err_description = '';
    for($i=0; $i < count($files_info); $i++) {
      if(is_array($files_info[$i]['sf']) && $files_info[$i]['sf']['status'] == 'error') {
        // divider
        if(strlen($sf_upload_opportunity_files_err_description) > 0) {
          $sf_upload_opportunity_files_err_description .= ' |[divider]| ';
        }
        $sf_upload_opportunity_files_err_description .= $files_info[$i]['sf']['description'];
      }
    }

    $email_params['s'] .= ' - ERROR WITH UPLOADING FILES TO CRM';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $sf_upload_opportunity_files_err_description;

    $dapp->error_log($sf_upload_opportunity_files_err_description . ' | ' . __FILE__, 'sf', $email_params);
    if($email_sent) {
      // return success because information was sent to email
      $dapp->echo_success($data['redirect_url']);
    } else {
      $dapp->echo_error();
    }
  }

  if($user_upload_opportunity_files_error) {
    $user_error_array = [];
    $dapp->echo_error('', $user_files_response);
  } else {
    // EMAIL DISTRIBUTION - REMOVE USER FROM LEAD TO DEAL DISTRIBUTION LIST
    $email_distribution_data = $dapp->sf->get_opportunity_contact_data($data['oid_decrypted']);
    if($email_distribution_data['status'] == 'success') {
      $edd_arr = $email_distribution_data['description'];

      $email_event_type_key = $edd_arr['status_docusign'] == 'completed' ? 'application-completed' : 'verify-completed';

      $email_distribution = [];
      $email_distribution['event_type_key'] = $email_event_type_key;
      $email_distribution['event_key_value'] = $data['oid'];
      $email_distribution['params'] = [
        ['email', $edd_arr['business_email']],
        ['json', json_encode([
          'CtaUrl' => $redirect_url_base . '/thank-you?success',
          'templateId' => '01',
          'BusinessName' => $edd_arr['business_dba_name'],
        ], JSON_UNESCAPED_SLASHES)]
      ];
      $dapp->event_email_distribution($email_distribution, $email_params);
    } else {
      $dapp->error_log($email_distribution_data['description'] . ' | ' . __FILE__, 'sf', $email_params);
    }
    // EMAIL DISTRIBUTION END
    
    $dapp->echo_success($data['redirect_url']);
  }

} else {
  $dapp->echo_error();
}
?>