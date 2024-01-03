<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Nuestras soluciones'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle solutions">
          <div class="container">
            <div class="page-hero-text-container phtc-04 d-flex align-items-center justify-content-center">
              <h1>Nuestras<br>soluciones</h1>
            </div>
        </section>

        <section class="devices">
          <div class="container">
              <div class="devices__row row align-items-center mb-3">
                  <div class="col-12 col-md-6 devices__text">
                      <h3>Clover® Flex</h3>
                      <p>Clover Flex es un dispositivo de punto de venta móvil con todas las funciones que ofrece características sólidas para ayudar a que su negocio opere y crezca. La flexibilidad de aceptar pagos sobre la marcha a través de opciones de deslizamiento, chip o toque significa que puede aceptar pagos en cualquier lugar e imprimir recibos de clientes a través de la impresora integrada.</p>
                      <div class="text-right text-md-left">
                          <a href="clover-flex" class="link-angle">APRENDE MÁS</a>
                      </div>
                  </div>

                  <div class="col-12 col-md-6 wrap-03-img devices__image">
                      <a href="clover-flex">
                          <img src="img/clover-flex-equal.png" alt="Clover Flex" width="694" height="586">
                      </a>
                  </div>

              </div>

              <div class="row align-items-center mb-3">
                  <div class="col-12 col-md-6 wrap-03-img devices__image">
                      <a href="clover-station-duo">
                          <img src="img/clover-duo-equal.png" alt="Clover Station Duo" width="694" height="586">
                      </a>
                  </div>

                  <div class="col-12 col-md-6 devices__text">
                      <h3>Clover® Station Duo</h3>
                      <p>Con su hermoso diseño moderno, pantalla externa orientada al cliente, cajón de efectivo adjunto e impresora de recibos y capacidades de nube a gran escala, se preguntará cómo funcionaría su negocio sin él.</p>
                      <div class="text-right text-md-left">
                          <a href="clover-station-duo" class="link-angle">APRENDE MÁS</a>
                      </div>
                  </div>

              </div>

              <div class="row align-items-center mb-3">
                  <div class="col-12 col-md-6 devices__text">
                      <h3>Clover® Mini</h3>
                      <p>Con su tamaño pequeño, puede caber en cualquier lugar. Pero no deje que su tamaño lo engañe, es un sistema POS con todas las funciones. Conéctelo a través de Wi-Fi o su red ethernet cableada y estará listo para procesar pagos, generar informes, usar Clover App Market y hacer crecer su negocio en muy poco tiempo. Ah, y la impresora de recibos está integrada. Las opciones para enviar recibos por correo electrónico o mensajes de texto son, por supuesto, una opción.</p>
                      <div class="text-right text-md-left">
                          <a href="clover-mini" class="link-angle">APRENDE MÁS</a>
                      </div>
                  </div>

                  <div class="col-12 col-md-6 wrap-03-img devices__image">
                      <a href="clover-mini">
                          <img src="img/clover-mini-equal.png" alt="Clover Mini" width="694" height="586" />
                      </a>
                  </div>
              </div>

              <div class="row align-items-center mb-3">
                  <div class="col-12 col-md-6 wrap-03-img devices__image">
                      <a href="dejavoo-qd3">
                          <img src="img/dejavoo-qd2-equal.png" alt="Dejavoo QD3" width="694" height="586" />
                      </a>
                  </div>

                  <div class="col-12 col-md-6 devices__text">
                      <h3>Dejavoo QD3</h3>
                      <p>Más fácil de maniobrar y transportar que una terminal tradicional, las transacciones sobre la marcha son fluidas. Se aceptan tipos de pago con chip, stripe y sin contacto, al mismo tiempo que proporciona recibos de texto y correo electrónico para los registros de sus clientes.</p>
                      <div class="text-right text-md-left">
                          <a href="dejavoo-qd3" class="link-angle">APRENDE MÁS</a>
                      </div>
                  </div>
              </div>

              <div class="row align-items-center mb-3">
                  <div class="col-12 col-md-6 devices__text">
                      <h3>Dejavoo QD2</h3>
                      <p>¿Listo para hacer negocios sobre la marcha? Dejavoo QD2 brinda flexibilidad para aceptar pagos en cualquier lugar donde haya Wi-Fi o servicio celular disponible. ¿Bajo o ningún servicio? No se preocupe, con su funcionalidad de almacenar y capturar, puede realizar una transacción y tan pronto como esté conectado, se procesará automáticamente. Hay todo tipo de tipos de pago disponibles, incluidos Chip, Stripe y Contactless. ¡Y también imprime!</p>
                      <div class="text-right text-md-left">
                          <a href="dejavoo-qd2" class="link-angle">APRENDE MÁS</a>
                      </div>
                  </div>

                  <div class="col-12 col-md-6 wrap-03-img devices__image">
                      <a href="dejavoo-qd2">
                          <img src="img/dejavoo-qd3-equal.png" alt="Dejavoo QD2" width="694" height="586" />
                      </a>
                  </div>
              </div>
          </div>
        </section>

      </div>

<?php
$js = ['start' => '<script src="' . $view->site_root . 'js/polyfills.include.js"></script>'];
$view->page_end($js);
?>
