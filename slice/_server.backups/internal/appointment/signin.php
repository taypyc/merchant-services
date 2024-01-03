<?php
$dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp-internal/' . getenv('DAPP_VER');
require_once $dapp_root . '/dapp.class.php';
$dapp = new DApp(['dapp_root' => $dapp_root, 'flow' => getenv('DAPP_FLOW')]);

require_once "php/scripts/view.class.php";
$view = new ViewControl();

$view->page_start(array('title' => 'Call center Undefined'));
?>

      <div role="main" class="main">

        <form id="form">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 bg-gradient">
                <div class="d-flex flex-column justify-content-center form-side-wrap">
                  <div class="hightlighted-info">
                    <div class="company-logo block-mb-sm">
                      <img src="img/logo-light.svg" alt="">
                    </div>
                    <div class="internal-contacts-info">
                      <h2>Call center <br>Not Found</h2>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="col-md-8">
                <div class="d-flex justify-content-center align-items-center form-side-wrap">
                  <div class="merchant-info-wrap">
                    <h5>Please use correct link for your Call Center</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

      </div>

<?php
$view->page_end();
?>