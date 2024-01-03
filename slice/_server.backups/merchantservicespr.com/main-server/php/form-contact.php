<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$to = 'simon@merchantservicespr.com';
$subject = "Merchant Services PR - apply";

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$business_name = trim($_POST['business_name']);
$type = trim($_POST['type']);
$comments = trim($_POST['comments']);

if(strlen($name) > 0 && strlen($phone) > 0) {

  if($type === 'feedback') {
    $subject = "Merchant Services PR - feedback";
  }

  $cd_i = 0;
	$contact_data = array(
		$cd_i++ => array(
			'text' => 'Name',
			'val' => $name
		),
    $cd_i++ => array(
      'text' => 'Phone',
      'val' => $phone
    ),
		$cd_i++ => array(
			'text' => 'Email',
			'val' => $email
		)
	);

  if($type === 'feedback') {
    $contact_data[$cd_i++] = array(
      'text' => 'Comments',
      'val' => $comments
    );
  } else {
    $contact_data[$cd_i++] = array(
      'text' => 'Company name',
      'val' => $business_name
    );
  }

	$message = "";

	foreach($contact_data as $contact_item) {
		$message .= $contact_item['text'].": " . htmlspecialchars($contact_item['val'], ENT_QUOTES) . "<br>\n";
	}

  $headers = '';
  $headers .= 'From: ' . $name . ' < info@merchantservicespr.com >' . "\r\n";
  $headers .= "Reply-To: " .  $email . "\r\n";
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