<?php
if(isset($_GET['qualification'])) {
  $page_content = <<<EOD

        <section class="section-text">
          <div class="container">
            <div class="wrap-01">
              <div class="text-center block-mb-md">
                <h4>En este momento no podemos someter su solicitud debido a que se encuentra en proceso de Bancarrota</h4>
              </div>
              <div class="hero-img-circle"></div>
            </div>
          </div>
        </section>
EOD;
} else {
  $page_content = <<<EOD

        <section class="section-text">
          <div class="container">
            <div class="wrap-01">
              <div class="text-center block-mb-md">
                <div class="block-mb-xsm"><div class="checkmark-circle"></div></div>
                <h4>Gracias por haber llenado la solicitud, nos estaremos comunicando con usted a la mayor brevedad.</h4>
              </div>
              <div class="hero-img-circle"></div>
            </div>
          </div>
        </section>
EOD;
}
echo $page_content;
?>