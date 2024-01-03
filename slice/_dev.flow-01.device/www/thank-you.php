<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$dapp->process_ds_completed();

$view->page_start();
?>

      <div role="main" class="main">
        <?php echo $view->markup_builder->build_thx(); ?>
      </div>

<?php
$view->page_end();
?>