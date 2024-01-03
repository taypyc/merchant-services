<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$head_data = [
  'title' => 'Clover Station Duo | 0% Credit Card Processing | Slice'
];

$view->page_start($head_data);
?>
      <div role="main" class="main">
        <?php echo $view->markup_builder->build_page(); ?>
      </div>

<?php
$view->page_end();
?>