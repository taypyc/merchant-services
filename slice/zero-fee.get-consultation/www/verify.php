<?php
$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

require_once 'php/scripts/view.class.php';
$view = new ViewControl();

$id = '';
if(isset($_GET['id']) && strlen(trim($_GET['id'])) > 0) {
  $id = trim($_GET['id']);
} else {
  header("Location: {$dapp->get_signup_step_url(['type' => 'thx'])}");
  exit;
}

$dapp->process_ds_status_signing_complete();

$view->page_start(array('title' => 'Upload void check | Slice'));
?>

      <div role="main" class="main">

        <section>
          <div class="container">
            <?php echo $view->markup_builder->get_form_verify(['id' => $id]); ?>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>