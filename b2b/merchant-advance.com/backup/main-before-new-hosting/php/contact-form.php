<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$to = 'sales@merchant-advance.com';
$subject = "merchant-advance.com Consultation";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$company = trim($_POST['company']);
$comments = trim($_POST['comments']);
$business_years = trim($_POST['business_years']);

if(strlen($name) > 0 && strlen($phone) > 0 && strlen($email) > 0) {

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
		),
		$cd_i++ => array(
			'text' => 'Company Name',
			'val' => $company
		),
		$cd_i++ => array(
			'text' => 'Comments',
			'val' => $comments
		),
		$cd_i++ => array(
			'text' => 'Years in business',
			'val' => (strlen($business_years) > 0) ? $business_years : "-"
		)
	);

	$message = "";

	foreach($contact_data as $contact_item) {
		$message .= $contact_item['text'].": " . htmlspecialchars($contact_item['val'], ENT_QUOTES) . "<br>\n";
	}

  $headers = '';
  $headers .= 'From: ' . $name . ' < info@merchant-advance.com >' . "\r\n";
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