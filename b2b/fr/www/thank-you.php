<?php
require_once "php/scripts/view.class.php";

$view = new ViewControl();
$view->page_start("Merci!");
?>

      <div role="main" class="main">
        <section class="thanks-section">
          <div class="container">
            <h1>Merci!</h1>
            <p>Votre information a été envoyée avec succès. 
            <br>Nous vous reviendrons sous peu.</p>
          </div>
        </section>
      </div>
<?php
$view->page_end();
?>