<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

// $to = 'max@startslice.com';
$to = 'kubrakegor25@gmail.com';
$subject = "startslice.com Careers";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$zip = trim($_POST['zip']);
$job = trim($_POST['job']);
$file_fieldname = 'file';
$file_name = (isset($_FILES[$file_fieldname]['name']) && strlen($_FILES[$file_fieldname]['name']) > 0) ? $_FILES[$file_fieldname]['name'] : 'Not attached';

if(/*strlen($name) > 0 && strlen($email) > 0 && strlen($phone) > 0*/ true) {

	$contact_data = [
    [
      'text' => 'Job',
      'val' => $job
    ],
		[
      'text' => 'Name',
      'val' => $name
    ],
    [
      'text' => 'Email',
      'val' => $email
    ],
		[
			'text' => 'Phone',
			'val' => $phone
		],
    [
      'text' => 'Phone',
      'val' => $phone
    ],
    [
      'text' => 'City',
      'val' => $city
    ],
    [
      'text' => 'State',
      'val' => $state
    ],
    [
      'text' => 'Zip',
      'val' => $zip
    ],
    [
      'text' => 'Resume',
      'val' => $file_name
    ]
	];

	$message = "";

	foreach($contact_data as $contact_item) {
		$message .= $contact_item['text'].": " . htmlspecialchars($contact_item['val'], ENT_QUOTES) . "<br>\n";
	}

  $file_attached = false;
  $file_error = false;
  $file_error_desc = '';
  
  if(isset($_FILES[$file_fieldname]['name']) && strlen($_FILES[$file_fieldname]['name']) > 0) {
    $file_attached = true;

    if($_FILES[$file_fieldname]['error'] !== UPLOAD_ERR_OK || strlen($_FILES[$file_fieldname]['name']) < 5) {
      $file_error = true;
      $file_error_desc = 'upload_err';
      if($_FILES[$file_fieldname]['error'] === UPLOAD_ERR_FORM_SIZE || $_FILES[$file_fieldname]['error'] === UPLOAD_ERR_INI_SIZE) {
        $file_error_desc = 'size';
      }
    }

    if(!$file_error) {
      $finfo_mime = finfo_open(FILEINFO_MIME_TYPE);
      $whitelist_type = array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',  'application/pdf');

      if (!in_array(finfo_file($finfo_mime, $_FILES[$file_fieldname]['tmp_name']), $whitelist_type)) {
        $file_error = true;
        $file_error_desc = 'mime';
      }
    }
  }

  if($file_error && $file_error_desc != '') {
    $arrResult = ['response'=>'error', 'd' => 'incorrect-file', 'fed' => $file_error_desc];
    echo json_encode($arrResult);
    exit;
  }

  $email_file_attached = false;
  $boundary_email = bin2hex(random_bytes(12));
  $headers = '';
  $headers .= 'From: Slice Careers Signup < notification@startslice.com >' . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; charset=UTF-8; boundary=\"$boundary_email\"";

  $body = "--{$boundary_email}\n";
  $body .= "Content-type: text/html; charset='utf-8'\n";
  $body .= "Content-Transfer-Encoding: quoted-printable\n\n";
  $body .= $message."\n\n";
  $body .= "--{$boundary_email}\n";

  if($file_attached) {
    $file_contents = file_get_contents($_FILES[$file_fieldname]['tmp_name']);
    $body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($file_name)."?=\n"; 
    $body .= "Content-Transfer-Encoding: base64\n";
    $body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($file_name)."?=\n\n";
    $body .= chunk_split(base64_encode($file_contents))."\n";
    $body .= "--{$boundary_email}\n";

    $email_file_attached = true;
  }

  if(!$email_file_attached) {
    $body .= "--{$boundary_email}--\n";
  }

  if (mail($to, $subject, $message, $headers)) {
    $arrResult = ['response'=>'success'];
  } else {
    $arrResult = ['response'=>'error'];
  }

  echo json_encode($arrResult);

} else {
	$arrResult = ['response'=>'error'];
	echo json_encode($arrResult);
}
?>