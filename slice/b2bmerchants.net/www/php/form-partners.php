<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$to = 'rolando@b2bfunding.net';
$subject = "b2bmerchants.com Partners";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

if(strlen($name) > 0 && strlen($phone) > 0) {

  $contact_data = [
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
    ]
  ];

  $message = "";

  foreach($contact_data as $contact_item) {
    $message .= $contact_item['text'].": " . htmlspecialchars($contact_item['val'], ENT_QUOTES) . "<br>\n";
  }

  $headers = '';
  $headers .= 'From: ' . preg_replace("/[^A-Za-z \']/", '', $name) . ' < partners@b2bmerchants.com >' . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  if (mail($to, $subject, $message, $headers)) {
    $arrResult = array('response'=>'success');
  } else {
    $arrResult = array('response'=>'error');
  }

  echo json_encode($arrResult);

} else {
  $arrResult = array('response'=>'error');
  echo json_encode($arrResult);
}
?>