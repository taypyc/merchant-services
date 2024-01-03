<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main block-404">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-lg-6 text-center text-lg-left">
                      <h1>404</h1>
                      <p><strong>page not found</strong></p>
                      <p></p>
                  </div>
                  <div class="col-12 col-lg-6 text-center order-lg-first">
                      <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/ca/404.png" width="515" height="607" alt="404" />
                  </div>
              </div>
          </div>
      </div>

<?php
$view->page_end();
?>