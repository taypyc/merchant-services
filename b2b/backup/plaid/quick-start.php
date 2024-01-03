<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$connection_data = [];
if(isset($_GET['id'])) {
  $data['id'] = trim($_GET['id']);
  $connection_data = array_merge($data, $dapp->process_plaid_connection_data());
} else {
  header("Location: {$dapp->get_signup_step_url(['type' => 'thx'])}");
}

$view->page_start(['title' => 'B2B Funding | Plaid']);
?>

      <div role="main" class="main">

        <?php echo $view->markup_builder->get_form_plaid($connection_data); ?>
      
      </div>

<?php
$view->page_end($connection_data);
?>