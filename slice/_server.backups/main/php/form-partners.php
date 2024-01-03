<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

// $to = 'max@startslice.com';
$to = 'liza@startslice.com';
$subject = "startslice.com Partners";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

if(strlen($name) > 0 && strlen($email) > 0 && strlen($phone) > 0) {

  $cd_i = 0;
	$contact_data = array(
		$cd_i++ => array(
      'text' => 'Name',
      'val' => $name
    ),
    $cd_i++ => array(
      'text' => 'Email',
      'val' => $email
    ),
		$cd_i++ => array(
			'text' => 'Phone',
			'val' => $phone
		)
	);

	$message = "";

	foreach($contact_data as $contact_item) {
		$message .= $contact_item['text'].": " . htmlspecialchars($contact_item['val'], ENT_QUOTES) . "<br>\n";
	}

  $headers = '';
  $headers .= 'From: ' . $name . ' < internal@startslice.com >' . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  if (mail($to, $subject, $message, $headers)) {
    $arrResult = array ('response'=>'success');
  } else {
    $arrResult = array ('response'=>'error');
  }

  echo json_encode($arrResult);

} else {
	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);
}
?>