<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$to = 'simon@redpayments.net';
$subject = "b2bfunding.net Consultation";

$target = trim($_POST['target']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = (isset($_POST['phone'])) ? trim($_POST['phone']) : "";
$company = (isset($_POST['company'])) ? trim($_POST['company']) : "Unknown";
$program = (isset($_POST['program'])) ? trim($_POST['program']) : "";
$message = (isset($_POST['message'])) ? trim($_POST['message']) : "";

if($target == "consultation" && strlen($name) > 0 && strlen($email) > 0 && strlen($phone) > 0) {
  
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
			'text' => 'Company',
			'val' => $company
		),
		$cd_i++ => array(
			'text' => 'Program',
			'val' => $program
		)
	);

} else if($target == "feedback" && strlen($name) > 0 && strlen($email) > 0 && strlen($message) > 0) {
  
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
			'text' => 'Message',
			'val' => $message
		)
	);
  
} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);
  exit;

}

$message = "";

foreach($contact_data as $contact_el) {
  $message .= $contact_el['text'].": " . htmlspecialchars($contact_el['val'], ENT_QUOTES) . "<br>\n";
}

$headers = '';
$headers .= 'From: ' . $name . ' < info@b2bfunding.net >' . "\r\n";
$headers .= "Reply-To: " .  $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if($program == "Fix and Flip") {
  if (mail($to, $subject, $message, $headers)) {
    mail("alex@b2bfunding.net", $subject, $message, $headers);
    //mail("kubrakegor25@gmail.com", $subject, $message, $headers);
    $arrResult = array ('response'=>'success');
  } else {
    $arrResult = array ('response'=>'error');
  }
} else {
  if (mail($to, $subject, $message, $headers)) {
    mail("rolando@b2bfunding.net", $subject, $message, $headers);
    //mail("kubrakegor25@gmail.com", $subject, $message, $headers);
    $arrResult = array ('response'=>'success');
  } else {
    $arrResult = array ('response'=>'error');
  }
}

$first_name = $name;
$last_name = "Unknown";
if(substr_count($name," ") > 0) {
  $first_name_pos = stripos($name, " ");
  $first_name = substr($name, 0, $first_name_pos);
  $last_name = trim(substr(stristr($name, " "), 1));
}
$data = array(
  'oid' => '00DA0000000gBbb',
  '00NA000000BKPSF' => 'B2BFunding.net Form',
  'lead_source' => "Internet",
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email,
  'phone' => $phone,
  'company' => $company,
  //'debug' => 1
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
if(isset($_SERVER['HTTP_USER_AGENT'])) { curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); }
$server_output = curl_exec($ch);
curl_close ($ch);

echo json_encode($arrResult);
?>