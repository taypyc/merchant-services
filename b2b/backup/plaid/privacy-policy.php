<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start(array('title' => "Política de privacidad"));
?>

      <div role="main" class="main">

        <?php echo $view->markup_builder->build_page(); ?>
      
      </div>

<?php
$view->page_end();
?>