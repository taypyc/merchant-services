<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$view->page_start();
?>

      <div role="main" class="main">
        <?php echo $view->markup_builder->build_page(); ?>
      </div>

<?php
$view->page_end();
?>
