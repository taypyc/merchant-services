<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Pago Servicios'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle payment-services">
          <div class="container">
            <div class="page-hero-text-container phtc-01 d-flex align-items-center justify-content-center">
              <h1>Pago<br/>Servicios</h1>
            </div>
        </section>

        <section class="bg-light-grey payment-services-block">
          <div class="container">
              <h6 class="text-center text-color-02 margin0">Entendemos que cada negocio tiene sus necesidades únicas
                  y son capaces de ofrecer la mejor solución personalizada para
                  sus requisitos empresariales específicos.</h6>
          </div>
        </section>
        <div class="container">
            <div class="row align-items-center block-mb-md payment-services-row">
                <div class="col-md-5">
                    <img src="img/payment-services-1.png" width="571" height="438" alt="Procesamiento de tarjetas de crédito" />
                </div>
                <div class="col-md-7">
                    <h3>
                        Procesamiento de tarjetas de crédito
                    </h3>
                    <p>
                        La capacidad de aceptar pagos con tarjeta de crédito es esencial para hacer crecer un negocio exitoso. B2B Merchants ofrece una variedad de soluciones de procesamiento de tarjetas de crédito para cualquier tipo de negocio, lo que permite a los comerciantes hacer crecer su base de clientes al tener clientes que regresan y atraer a los nuevos. Ya sea que esté ejecutando una ubicación minorista donde los clientes deslizan manualmente sus tarjetas o una empresa en línea en la que necesite aceptar pagos con tarjeta de crédito de forma segura a través de su sitio web, Merchant Services tiene la solución adecuada para satisfacer sus necesidades únicas. Y si está constantemente en la carretera, nuestras soluciones de procesamiento inalámbrico de tarjetas de crédito optimizarán y asegurarán sus transacciones de pago al eliminar la necesidad de manejar efectivo o cheques mientras está fuera de la oficina.
                    </p>
                    <p class="text-center text-md-left">
                        <a href="quick-start" class="btn text-color-05">EMPEZAR<span></span></a>
                    </p>
                </div>
            </div>
            <div class="row align-items-center block-mb-md payment-services-row">
                <div class="col-md-5 payment-services-figure-1">
                    <img src="img/payment-services-2.png" width="571" height="438" alt="Procesamiento de tarjetas de débito" />
                </div>
                <div class="col-md-7">
                    <h3>
                        Procesamiento de tarjetas de débito
                    </h3>
                    <p>
                        La capacidad de aceptar pagos con tarjeta de crédito es esencial para hacer crecer un negocio exitoso. B2B Merchants ofrece una variedad de soluciones de procesamiento de tarjetas de crédito para cualquier tipo de negocio, lo que permite a los comerciantes hacer crecer su base de clientes al tener clientes que regresan y atraer a los nuevos. Ya sea que esté ejecutando una ubicación minorista donde los clientes deslizan manualmente sus tarjetas o una empresa en línea en la que necesite aceptar pagos con tarjeta de crédito de forma segura a través de su sitio web, Merchant Services tiene la solución adecuada para satisfacer sus necesidades únicas. Y si está constantemente en la carretera, nuestras soluciones de procesamiento inalámbrico de tarjetas de crédito optimizarán y asegurarán sus transacciones de pago al eliminar la necesidad de manejar efectivo o cheques mientras está fuera de la oficina.
                    </p>
                    <p class="text-center text-md-left">
                        <a href="quick-start" class="btn text-color-05">EMPEZAR<span></span></a>
                    </p>
                </div>
            </div>
            <div class="row align-items-center payment-services-row">
                <div class="col-md-5 payment-services-figure-2">
                    <img src="img/payment-services-3.png" width="571" height="438" alt="Comprobar la aceptación" />
                </div>
                <div class="col-md-7">
                    <h3>
                        Comprobar la aceptación
                    </h3>
                    <p>
                        B2B Merchants ofrece una variedad de opciones de aceptación de cheques para los comerciantes que buscan aceptar pagos de cheques en transacciones cara a cara, web y telefónicas. Nuestro programa de "Conversión de puntos de venta" permite el procesamiento rápido de cheques de manera que procesa tarjetas de crédito ejecutándolas a través de un lector de cheques y que los fondos se debiten electrónicamente de las cuentas de cheques de los consumidores en 2-3 días hábiles, ahorrando así tiempo y dinero a los comerciantes. Para proteger a los comerciantes de cheques devueltos y transacciones fraudulentas, Merchant Services proporciona servicios de verificación de cheques y de garantía de cheques. El programa de verificación de cheques verifica los pagos de cheques de forma rápida y eficiente, revisando múltiples bases de datos nacionales y utilizando un sistema de detección de fraude de última generación, mientras que los Servicios de Garantía de Cheques reembolsan los fondos y las tarifas asociadas con los cheques de la NSF a los comerciantes en caso de impago.
                    </p>
                    <p class="text-center text-md-left">
                        <a href="quick-start" class="btn text-color-05">EMPEZAR<span></span></a>
                    </p>
                </div>
            </div>
        </div>

          </div>
        </section>

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
                    <a href="merchant-analytics" class="other-devices__item-link">
                            <span class="other-devices__item-img big">
                                <img src="img/services-merchant-analytics.png" width="432" height="407" alt="Comerciante Análisis" />
                            </span>
                        <span class="other-devices__item-header">Comerciante Análisis</span>
                    </a>
                </div>
                <div class="other-devices__item my-0">
                    <a href="business-financing" class="other-devices__item-link">
                            <span class="other-devices__item-img big">
                              <img src="img/services-business-financing.png" width="458" height="407" alt="Negocios Financiación" />
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
