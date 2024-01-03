<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main block-shadow-02">
        <?php echo $view->markup_builder->build_terms_of_use(); ?>
      </div>

<?php
$view->page_end();
?>