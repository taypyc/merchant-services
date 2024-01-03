<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Thank You"));
?>

      <div role="main" class="main">

        <section class="section-vh" style="background-image:url(img/bg-thx.jpg)">
          <div class="container">
            <div class="svh-wrap">
              <div>
                <h2>Thank You!</h2>
                <p class="sub-header">Your Request is Received. <br>We will get back to you shortly.</p>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>