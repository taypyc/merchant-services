<?php
/*if($_POST['step'] != 'ds') {
  exit;
}*/
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$redirect_url_base = 'https://startslice.com/zero-fee/clover';
$to = 'kubrakegor25@gmail.com';
$subject = "startslice.com/zero-fee/clover Signup";

$data = [];
$data['lead_source'] = $subject;

$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/v1.0';
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp($dapp_root);

require_once 'scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$data['esc_flow'] = 'flow-01';
$data['oid'] = trim($_POST['oid']);
$data['oid_decrypted'] = $dapp->crypt_string($data['oid'], 'd');
$data['service'] = trim($_POST['service']);
$data['service_sf'] = $dapp->format_data('service_equipment', $data['service']);
$data['client_source'] = 'esc-zerofee-clover';
$data['step'] = trim($_POST['step']);
$data['potential_savings'] = trim($_POST['potential_savings']);
$data['status_docusign'] = $data['step'] == 'ds' ? 'generated' : ''; // set ds status to 'generated' after user clicks btn on final step

$data['utm_source'] = $crm_control->utm['utm_source'];
$data['utm_medium'] = $crm_control->utm['utm_medium'];
$data['utm_campaign'] = $crm_control->utm['utm_campaign'];
$data['utm_content'] = $crm_control->utm['utm_content'];
$data['utm_term'] = $crm_control->utm['utm_term'];

$data['redirect_url_thx'] = $redirect_url_base . '/thank-you';

// 1 step
$data['business_legal_name'] = trim($_POST['business_legal_name']);
$data['business_term'] = trim($_POST['business_term']);
$data['business_term_sf'] = $dapp->format_data('date_02', $data['business_term']);
$data['business_email'] = trim($_POST['business_email']);
$data['annual_cards_vol'] = trim($_POST['annual_cards_vol']);
$data['avg_sale'] = trim($_POST['avg_sale']);
$data['avg_sale_sf'] = $dapp->format_data('only_digits', $data['avg_sale']);

// 2 step
$data['business_dba_name'] = trim($_POST['business_dba_name']);
$data['products_service_sold'] = trim($_POST['products_service_sold']);
$data['business_type'] = trim($_POST['business_type']);
$data['business_type_sf'] = $dapp->format_data('business_type', $data['business_type']);
$data['business_phone'] = trim($_POST['business_phone']);
$data['business_tax_id'] = trim($_POST['business_tax_id']);
$data['business_tax_id_sf'] = $dapp->format_data('only_digits', $data['business_tax_id']);
$data['business_address_street'] = trim($_POST['business_address_street']);
$data['business_address_unit'] = trim($_POST['business_address_unit']);
$data['business_address_sf'] = $dapp->format_data('address_arr', [$data['business_address_street'], $data['business_address_unit']]);
$data['business_city'] = trim($_POST['business_city']);
$data['business_state'] = trim($_POST['business_state']);
$data['business_zip'] = trim($_POST['business_zip']);
$data['business_full_address'] = $dapp->format_data('address_arr', [$data['business_address_sf'], $data['business_city'], $data['business_state'], $data['business_zip']]);

// 3 step
$data['first_name'] = trim($_POST['first_name']);
$data['last_name'] = trim($_POST['last_name']);
$data['full_name'] = $data['first_name'] . ' ' . $data['last_name'];
$data['title_name'] = trim($_POST['title_name']);
$data['birth_date'] = trim($_POST['birth_date']);
$data['birth_date_sf'] = $dapp->format_data('date_01', $data['birth_date']);
$data['personal_email'] = trim($_POST['personal_email']);
$data['personal_phone'] = trim($_POST['personal_phone']);
$data['ownership_perc'] = trim($_POST['ownership_perc']);
$data['ownership_perc_sf'] = $dapp->format_data('only_digits', $data['ownership_perc']);
$data['social_security'] = trim($_POST['social_security']);
$data['social_security_sf'] = $dapp->format_data('only_digits', $data['social_security']);
$data['home_address_street'] = trim($_POST['home_address_street']);
$data['home_address_unit'] = trim($_POST['home_address_unit']);
$data['home_address_sf'] = $dapp->format_data('address_arr', [$data['home_address_street'], $data['home_address_unit']]);
$data['home_city'] = trim($_POST['home_city']);
$data['home_state'] = trim($_POST['home_state']);
$data['home_zip'] = trim($_POST['home_zip']);

if(strlen($data['business_legal_name']) > 0 && strlen($data['business_email']) > 0 && strlen($data['business_term']) > 0 && strlen($data['annual_cards_vol']) > 0 && strlen($data['avg_sale']) > 0) {
  $cd_i = 0;
  $contact_data = array(
    $cd_i++ => ['Business legal name', $data['business_legal_name']],
    $cd_i++ => ['Year business started', $data['business_term']],
    $cd_i++ => ['Business email', $data['business_email']],
    $cd_i++ => ['Annual Visa/MC/Discover/Amex volume', $data['annual_cards_vol']],
    $cd_i++ => ['Avg sale', $data['avg_sale']],
    $cd_i++ => ['Business DBA name', $data['business_dba_name']],
    $cd_i++ => ['Products or service sold', $data['products_service_sold']],
    $cd_i++ => ['Business entity type', $data['business_type']],
    $cd_i++ => ['Ownership %', $data['ownership_perc']],
    $cd_i++ => ['Business phone number', $data['business_phone']],
    $cd_i++ => ['Federal tax ID', $data['business_tax_id']],
    $cd_i++ => ['Business street address', $data['business_address_street']],
    $cd_i++ => ['Business suit, unit, etc.', $data['business_address_unit']],
    $cd_i++ => ['Business city', $data['business_city']],
    $cd_i++ => ['Business state', $data['business_state']],
    $cd_i++ => ['Business zip', $data['business_zip']],
    $cd_i++ => ['Title', $data['title_name']],
    $cd_i++ => ['First name', $data['first_name']],
    $cd_i++ => ['Last name', $data['last_name']],
    $cd_i++ => ['Owner email', $data['personal_email']],
    $cd_i++ => ['Owner phone', $data['personal_phone']],
    $cd_i++ => ['Owner DOB', $data['birth_date']],
    $cd_i++ => ['Home street address', $data['home_address_street']],
    $cd_i++ => ['Home suit, unit, etc.', $data['home_address_unit']],
    $cd_i++ => ['Home city', $data['home_city']],
    $cd_i++ => ['Home state', $data['home_state']],
    $cd_i++ => ['Home zip', $data['home_zip']],
    $cd_i++ => ['SSN', $data['social_security']],
    $cd_i++ => ['Device', $data['service_sf']],
    $cd_i++ => ['OID', $data['oid']],
    $cd_i++ => ['OID decrypted', $data['oid_decrypted']],
  );

  $message = "";

  foreach($contact_data as $contact_item) {
    $message .= $contact_item[0].': ' . htmlspecialchars($contact_item[1], ENT_QUOTES) . "<br>\n";
  }

  $headers = '';
  $headers .= 'From: ' . preg_replace("/[^A-Za-z \']/", '', $data['business_legal_name']) . ' < notification@startslice.com >' . "\r\n";
  $headers .= "Reply-To: " .  $data['business_email'] . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $email_sent = true;
  $email_params = ['t'=>$to, 's'=>$subject, 'm'=>$message, 'h'=>$headers];
  // if first step and email wasn't send - any crm or docusign issue => show error to user
  if ($data['step'] === '0' && !mail($to, $subject, $message, $headers)) {
    $email_sent = false;
  }

  $dapp->init_sf();

  $sf_api_credentials = $dapp->sf->get_api_credentials();

  if($sf_api_credentials['status'] == 'error') {
    $email_params['s'] .= ' - ERROR WITH GETTING API CREDENTIALS CRM';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $sf_api_credentials['description'];

    $dapp->error_log($sf_api_credentials['description'], 'sf', $email_params);
    if($email_sent) {
      // return success because information was sent to email
      $dapp->echo_success($data['redirect_url_thx']);
    } else {
      $dapp->echo_error();
    }
  }

  if($data['oid_decrypted'] === FALSE || strlen($data['oid_decrypted']) == 0) {
    $sf_opportunity = $dapp->sf->create_opportunity($data);
  } else {
    $sf_opportunity = $dapp->sf->update_opportunity($data);
  }

  if($sf_opportunity['status'] == 'error') {
    $email_params['s'] .= ' - ERROR WITH SAVING TO CRM';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $sf_opportunity['description'];

    $dapp->error_log($sf_opportunity['description'], 'sf', $email_params);
    if($email_sent) {
      // return success because information was sent to email
      $dapp->echo_success($data['redirect_url_thx']);
    } else {
      $dapp->echo_error();
    }
  }

  if($data['oid_decrypted'] === FALSE || strlen($data['oid_decrypted']) == 0) {
    $data['oid'] = $dapp->crypt_string($sf_opportunity['description']);
  }

  // EMAIL DISTRIBUTION START
  $email_distribution = [];
  if($data['step'] === '0') {
    $email_distribution['event_type_key'] = '0';
    $email_distribution['event_key_value'] = $data['oid'];
    $email_distribution['params'] = [
      ['email', $data['business_email']],
      ['json', json_encode([
        'CtaUrl' => $redirect_url_base . '/quick-start?oid=' . urlencode($data['oid']) . '&s=1&utm_content=email',
        'templateId' => '01',
        'BusinessName' => $data['business_dba_name'],
        'PotentialSavings' => $data['potential_savings'],
        'Device' => $data['service_sf']
      ], JSON_UNESCAPED_SLASHES)]
    ];
  } else if($data['step'] === '1') {
    $email_distribution['event_type_key'] = '1';
    $email_distribution['event_key_value'] = $data['oid'];
    $email_distribution['params'] = [
      ['email', $data['business_email']],
      ['json', json_encode([
        'CtaUrl' => $redirect_url_base . '/quick-start?oid=' . urlencode($data['oid']) . '&s=2&utm_content=email',
        'templateId' => '01',
        'BusinessName' => $data['business_dba_name'],
        'PotentialSavings' => $data['potential_savings'],
        'Device' => $data['service_sf']
      ], JSON_UNESCAPED_SLASHES)]
    ];
  } else if($data['step'] === '2') {
    $email_distribution['event_type_key'] = '2';
    $email_distribution['event_key_value'] = $data['oid'];
    $email_distribution['params'] = [
      ['email', $data['business_email']],
      ['json', json_encode([
        'CtaUrl' => $redirect_url_base . '/quick-start?oid=' . urlencode($data['oid']) . '&s=3&utm_content=email',
        'templateId' => '01',
        'BusinessName' => $data['business_dba_name'],
        'PotentialSavings' => $data['potential_savings'],
        'Device' => $data['service_sf'],
        'FirstName' => $data['first_name'],
        'LastName' => $data['last_name']
      ], JSON_UNESCAPED_SLASHES)]
    ];
  }
  // send to email distribution only if all required parameters are set
  if(count($email_distribution) > 2) {
    $dapp->event_email_distribution($email_distribution, $email_params);
  }
  // EMAIL DISTRIBUTION END

  if($data['step'] != 'ds') {
    setcookie('oid', $data['oid'], time()+3600, getenv('SITE_ROOT'));
    $dapp->echo_success('', $data['oid']);
  }

  $data['redirect_url'] = $redirect_url_base . '/verify?oid=' . urlencode($data['oid']);

  // DOCUSIGN
  $dapp->init_ds();

  $ds_create_envelope = $dapp->ds->create_envelope($data);

  // check is envelope was created, if not - redirect to varify bank account page
  if($ds_create_envelope['status'] == 'error') {
    $email_params['s'] .= ' - ERROR WITH GENERATING DOCUSIGN ENVELOPE';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $ds_create_envelope['description'];

    $dapp->error_log($ds_create_envelope['description'], 'ds', $email_params);
    if($email_sent) {
      // return success because information was sent to email
      $dapp->echo_success($data['redirect_url']);
    } else {
      $dapp->echo_error();
    }
  }

  $data['envelope_id'] = $ds_create_envelope['description'];

  if(strlen($data['envelope_id']) > 0) {
    $email_distribution = [];
    $email_distribution['event_type_key'] = 'ds';
    $email_distribution['event_key_value'] = $data['oid'];
    $email_distribution['params'] = [
      ['email', $data['business_email']],
      ['json', json_encode([
        'CtaUrl' => $redirect_url_base . '/env?eid=' . urlencode($data['envelope_id']) . '&oid=' . urlencode($data['oid'] . '&utm_content=email'),
        'templateId' => '01',
        'BusinessName' => $data['business_dba_name'],
        'PotentialSavings' => $data['potential_savings'],
        'Device' => $data['service_sf'],
        'FirstName' => $data['first_name'],
        'LastName' => $data['last_name']
      ], JSON_UNESCAPED_SLASHES)]
    ];
    $dapp->event_email_distribution($email_distribution, $email_params);
  }

  $ds_create_recipient_view = $dapp->ds->create_recipient_view($data);

  // check is url was created, if not - redirect to varify bank account page
  if($ds_create_recipient_view['status'] == 'error') {
    $email_params['s'] .= ' - ERROR WITH GENERATING DOCUSIGN VIEW';
    $email_params['m'] .= "<br>\n" . 'Error: ' . $ds_create_recipient_view['description'];

    $dapp->error_log($ds_create_recipient_view['description'], 'ds', $email_params);
    if($email_sent) {
      // return success because information was sent to email
      $dapp->echo_success($data['redirect_url']);
    } else {
      $dapp->echo_error();
    }
  }

  // no need to save oid to cookie, because it was already saved
  //setcookie('oid', $data['oid'], time()+3600, getenv('SITE_ROOT'));
  $dapp->echo_success($ds_create_recipient_view['description']);

} else {
  $dapp->echo_error();
}
?>