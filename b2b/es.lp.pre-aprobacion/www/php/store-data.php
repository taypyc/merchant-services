<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$dapp_root = $_SERVER['DOCUMENT_ROOT'] . getenv('DAPP_ROOT');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

$dapp->fb_send_event_pageview();
?>