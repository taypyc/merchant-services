<?php
$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

require_once 'php/scripts/view.class.php';
$view = new ViewControl();

$continue_signup_data = $dapp->process_continue_signup();

$view->page_start(['title' => '0% Card Processing | Quick Start | Slice']);
?>

      <div role="main" class="main">

        <section class="section-signup-steps">
          <div class="container">
            <div class="application-wrap">
              <?php echo $view->markup_builder->get_form_signup($continue_signup_data); ?>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>