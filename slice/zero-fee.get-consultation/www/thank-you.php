<?php
$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

require_once "php/scripts/view.class.php";
$view = new ViewControl();

$dapp->process_ds_status_signing_complete();

$view->page_start(array('title' => "Thank you!"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_builder->get_thx_content(); ?>
      </div>

<?php
$view->page_end();
?>