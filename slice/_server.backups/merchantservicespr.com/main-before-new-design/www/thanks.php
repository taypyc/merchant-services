<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Thank you!"));
?>

      <div role="main" class="main">

        <section class="section-full-height">
          <div class="container">
            <div class="sfh-content d-flex align-items-center">
              <div>
                <h1 class="block-mb-sm">Thank you!</h1>
                <p class="sub-header">Your information was sent succesfully. We will get back to you shortly.</p>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>