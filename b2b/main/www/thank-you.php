<?php
require_once "php/scripts/view.class.php";

$view = new ViewControl();
$view->page_start("Thank You!");
?>

      <div role="main" class="main">
        <section class="thanks-section">
          <div class="container">
            <h1>Thank You!</h1>
            <p>Your information was sent succesfully. <br>We will get back to you shortly.</p>
          </div>
        </section>
      </div>
<?php
$view->page_end();
?>