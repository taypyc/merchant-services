<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
$view = Loader::require_view_control();

$view->page_start(['title' => 'B2B Funding | Upload Files']);
?>

      <div role="main" class="main">

        <section class="section-heading">
          <div class="container">
            <div class="application-wrap">
              <?php echo $view->markup_builder->get_form_files(); ?>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>