<?php
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

require_once 'scripts/Loader.php';
$dapp = Loader::require_dapp();

$dapp->fb_send_event_pageview();
?>