<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$continue_signup_data = $dapp->process_continue_signup();

$view->page_start();
?>

      <div role="main" class="main">
        <?php echo $view->markup_builder->get_form_signup($continue_signup_data); ?>
      </div>

<?php
$view->page_end();
?>
