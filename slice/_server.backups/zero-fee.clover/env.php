<?php
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$redirect_url_base = 'https://startslice.com/zero-fee/clover';

if(isset($_GET['eid'], $_GET['oid'])) {
  $dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/v1.0';
  require_once $dapp_root . '/dapp.class.php';
  $dapp = new DApp($dapp_root);

  $oid = trim($_GET['oid']);
  $eid = trim($_GET['eid']);
  $oid_decrypted = $dapp->crypt_string($oid, 'd');

  if($oid_decrypted === FALSE || strlen($oid_decrypted) == 0 || strlen($eid) == 0) {
    $dapp->error_log('Incorrect OID and/or EID | ' . __FILE__ . ' (' . __LINE__ . ')');
    header("Location: {$redirect_url_base}/quick-start");
    exit;
  }

  $dapp->init_sf();

  $sf_api_credentials = $dapp->sf->get_api_credentials();

  if($sf_api_credentials['status'] == 'error') {
    $dapp->error_log($sf_api_credentials['description'] . ' | ' . __FILE__ . ' (' . __LINE__ . ')', 'sf');
    header("Location: {$redirect_url_base}/quick-start");
    exit;
  }
  
  $opportunity_data = $dapp->sf->get_opportunity_contact_data($oid_decrypted);

  if($opportunity_data['status'] == 'error') {
    $dapp->error_log($opportunity_data['description'] . ' | ' . __FILE__ . ' (' . __LINE__ . ')', 'sf');
    header("Location: {$redirect_url_base}/quick-start");
    exit;
  }

  $data = $opportunity_data['description'];
  $data['oid'] = $oid;
  $data['envelope_id'] = $eid;
  $data['redirect_url'] = $redirect_url_base . '/verify?oid=' . urlencode($data['oid']);
  // if verify completed redirect to thank-you page
  if($data['status_verify'] == 'completed') {
    $data['redirect_url'] = $redirect_url_base . '/thank-you?success&oid=' . urlencode($data['oid']);
  }

  // if docusign already completed - go to verify or thank you page
  if($data['status_docusign'] == 'completed') {
    header("Location: {$data['redirect_url']}");
    exit;
  }

  $dapp->init_ds();
  $ds_create_recipient_view = $dapp->ds->create_recipient_view($data);

  if($ds_create_recipient_view['status'] == 'error') {
    $dapp->error_log($ds_create_recipient_view['description'] . ' | ' . __FILE__ . ' (' . __LINE__ . ')', 'ds');
    header("Location: {$data['redirect_url']}");
    exit;
  }

  header("Location: {$ds_create_recipient_view['description']}");
  exit;
}
header("Location: {$redirect_url_base}/quick-start");
exit;
?>