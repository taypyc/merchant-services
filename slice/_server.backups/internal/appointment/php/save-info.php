<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp-internal/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

$data = $dapp->set_save_data_array(['step' => '0']);
$zero_step_result = $dapp->send_data($data, true);

$data_files = $dapp->set_save_data_array(['step' => '1', 'lead_id' => $zero_step_result['id']]);
$data_files['files'] = $dapp->set_save_files_array();
$dapp->send_data($data_files);
?>