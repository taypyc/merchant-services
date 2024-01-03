<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Comerciante Análisis'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle merchant">
          <div class="container">
            <div class="page-hero-text-container phtc-03 d-flex align-items-center justify-content-center">
              <h1>Comerciante <br/>Análisis</h1>
            </div>
        </section>

        <section class="bg-light-grey merchant-block">
          <div class="container">
              <h6 class="text-center text-color-02 margin0">¿Y si pudieras descubrir algo nuevo cada día, conocimientos que podrían impulsar el crecimiento de tu negocio y ayudarte a alcanzar todo tu potencial?</h6>
          </div>
        </section>

        <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-lg-6 text-center">
                  <img src="img/merchant-analytics.png" width="603" height="743" alt="Bienvenido a Merchant Services Puerto Rico" />
              </div>
              <div class="col-12 col-lg-6">
                  <p>Bienvenido a B2B Merchants Puerto Rico</p>
                  <h3>Haz crecer tu negocio</h3>
                  <p>Utilice su propia información de ventas para ofrecer una visión completa de los clientes, ventas y grupos de empresas similares. Luego traduce esa información en información personalizada que le ayuda a tomar medidas, ya sea que eso signifique introducir nuevos negocios, orientar mejor su marketing o comprender el impacto de sus esfuerzos de marketing.</p>
                  <h3>Traer nuevos negocios</h3>
                  <p>Vea fácilmente los patrones de gasto de sus clientes para encontrar más parecidos a ellos.</p>
                  <h3>Descubre cómo te está desempeñando</h3>
                  <p>Comprender el impacto de sus esfuerzos de marketing y recibir información para mejorar los esfuerzos futuros</p>
                  <p class="text-center text-md-left">
                      <a href="quick-start" class="btn">EMPEZAR<span></span></a>
                  </p>
                  <p></p>
              </div>
          </div>
        </div>

        <section id="section-benefits">
          <div class="container">
              <h2 class="section-title">Beneficios <span class="text-color-01">Ilimitados</span></h2>
              <div class="row wrap-01 benefits-row">
                  <div class="col-12 col-md-6">
                      <div class="icon-info icon-info-01">
                          <svg class="icon icon-online-payment">
                              <use xlink:href="css/fonts/icons.svg#phone-card"></use>
                          </svg>
                          <p class="icon-info-header">Acepta todos los tipos de pago.</p>
                          <p>Deja que tus clientes paguen como quieran. Deslizar, sumergir y tocar. Tarjetas de banda
                              magnética, tarjetas con chip y pagos NFC como Apple Pay y Samsung Pay.</p>
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="icon-info icon-info-01">
                          <svg class="icon icon-bar-chart">
                              <use xlink:href="css/fonts/icons.svg#cord"></use>
                          </svg>
                          <p class="icon-info-header">Conectividad inteligente.</p>
                          <p>Capaz de usar múltiples conexiones (Wi-Fi, Ethernet o redes celulares) indistintamente dando
                              más flexibilidad.</p>
                      </div>
                  </div>
              </div>
              <div class="row wrap-01 benefits-row">
                  <div class="col-12 col-md-6">
                      <div class="icon-info icon-info-01">
                          <svg class="icon icon-network">
                              <use xlink:href="css/fonts/icons.svg#graphic"></use>
                          </svg>
                          <p class="icon-info-header">Tarifa más baja en Puerto Rico garantizada.</p>
                          <p>MSPR ofrece las tarifas más competitivas de la industria. Si no podemos mejorar sus tarifas,
                              le damos $ 1000</p>
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="icon-info icon-info-01">
                          <svg class="icon icon-connect">
                              <use xlink:href="css/fonts/icons.svg#wallet"></use>
                          </svg>
                          <p class="icon-info-header">Asistencia en la teneduría de libros.</p>
                          <p>Integre a la perfección Clover Flex con QuickBooks simplemente descargando la aplicación
                              Commerce Sync de nuestra App Store.</p>
                      </div>
                  </div>
              </div>
              <div class="row wrap-01 benefits-row">
                  <div class="col-12 col-md-6">
                      <div class="icon-info icon-info-01">
                          <svg class="icon icon-calculations">
                              <use xlink:href="css/fonts/icons.svg#system"></use>
                          </svg>
                          <p class="icon-info-header">Sistema todo en uno.</p>
                          <p>Reemplace su caja registradora, terminal tonta, escáner de código de barras e impresora
                              voluminosa. Un solo dispositivo compacto es todo lo que necesita para llamar a la gente.</p>
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="icon-info icon-info-01">
                          <svg class="icon icon-support">
                              <use xlink:href="css/fonts/icons.svg#workspace"></use>
                          </svg>
                          <p class="icon-info-header">Servicio de conserjería.</p>
                          <p>Especialista en cuentas bien informado. Punto de contacto dedicado. Soporte 24/7</p>
                      </div>
                  </div>
              </div>
          </div>
        </section>

        <div class="container block-mb-md">
          <div class="text-center block-mb-md">
              <h2 class="section-title">Otros <span class="text-color-01">servicios</span></h2>
          </div>
          <div class="other-devices other-devices-xs">
              <div class="other-devices__item my-0">
                  <a href="payment-services" class="other-devices__item-link">
                        <span class="other-devices__item-img big">
                            <img src="img/merchant-services-payment.png" width="473" height="407" alt="Pago Servicios" />
                        </span>
                      <span class="other-devices__item-header">Pago Servicios</span>
                  </a>
              </div>
              <div class="other-devices__item my-0">
                  <a href="business-financing" class="other-devices__item-link">
                        <span class="other-devices__item-img big merchant-services-business-financing">
                          <img src="img/merchant-services-business-financing.png" width="457" height="407" alt="Negocios Financiación" />
                        </span>
                      <span class="other-devices__item-header">Negocios Financiación</span>
                  </a>
              </div>
          </div>
      </div>
    </div>

<?php
$view->page_end();
?>
