<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start(array('title' => "Thank you!"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_builder->get_thx_content(); ?>
      </div>

<?php
$view->page_end();
?>