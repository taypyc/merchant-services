<?php
class Loader {
  const DAPP_FILES = ['DAppService.php', 'DApp.php'];

  public static function require_dapp() {
    $dapp_root = $_SERVER['DOCUMENT_ROOT'] . getenv('DAPP_ROOT');
    foreach(self::DAPP_FILES as $file) {
      require_once $dapp_root . '/' . $file;
    }
    return new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);
  }
}
?>