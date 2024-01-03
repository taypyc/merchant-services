<?php
require_once "php/scripts/view.class.php";

$view = new ViewControl();
$view->page_start("¡Gracias!");
?>

      <div role="main" class="main">
        <section class="thanks-section">
          <div class="container">
            <h1>¡Gracias!</h1>
            <p>Su información fue enviada con éxito. 
            <br>Estaremos en contacto pronto.</p>
          </div>
        </section>
      </div>
<?php
$view->page_end();
?>