<?php
if(isset($_GET['success'])) {
?>

        <section class="section-text">
            <div class="container">
                <div class="sh-logo text-center"><img src="<?php echo $this->assets_global; ?>img/markup-06/logo.svg" alt=""></div>
                <div class="block-maw-01 block-mb-sm text-center">
                    <h3>¡Bienvenido a la familia!</h3>
                    <p class="sub-header wrap-br-09">Además de obtener las tarifas de procesamiento de tarjeta de crédito más bajas, ahora tiene acceso a nuestros programas de Financiamiento Empresarial, lo último en equipos de puntos de venta para ayudar a administrar su negocio, y mucho más!</p>
                </div>
                <div class="tile-info">
                    <div class="row">
                        <div class="col-12 col-md-auto ti-header-col">
                            <h5 class="ti-header">Importante:</h5>
                            <p class="ti-sub-header">A continuación lo que debe esperar</p>
                        </div>
                        <div class="col ti-content">
                            <p><strong>Espere una llamada telefónica de parte de uno de nuestros especialistas</strong></p>
                            <p>Nos comunicaremos con usted antes de enviar la solicitud para revisar el programa/equipo y responder cualquier otra pregunta que pueda tener.</p>
                            <p>¡Gracias y esperamos poder hablar con usted pronto y tener una relación exitosa a largo plazo!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
} else {
?>

        <section class="section-hero thank-you">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                      <div class="sh-logo"><img src="<?php echo $this->assets_global; ?>img/markup-06/logo.svg" alt=""></div>
                      <h1>¡Gracias!</h1>
                      <p>Un miembro de nuestro equipo de expansión se comunicará con usted a la mayor brevedad.</p>
                  </div>
                  <div class="col-12 col-md-6  order-md-first">
                      <img src="<?php echo $this->assets_global; ?>img/intro-clover-flex.png" width="921" height="879" alt="">
                  </div>
              </div>
          </div>
        </section>

<?php
}
?>
