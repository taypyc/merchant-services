<?php
header("Status: 301 Moved Permanently");
header("Location: files?". $_SERVER['QUERY_STRING']);
exit;

require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$dapp->process_ds_completed();
$id = trim($_GET['id']);

$view->page_start();
?>

      <div role="main" class="main">
        <?php echo $view->markup_builder->build_verify(['id' => $id]); ?>
      </div>

<?php
$view->page_end();
?>