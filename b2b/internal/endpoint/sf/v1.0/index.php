<?php
require_once 'php/Loader.php';
$dapp = Loader::require_dapp();

$dapp->execute_sf_internal_endpoint();