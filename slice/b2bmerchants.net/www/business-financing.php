<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Negocios Financiación'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle financing">
          <div class="container">
              <div class="page-hero-text-container phtc-02 d-flex align-items-center justify-content-center">
                  <h1>Negocios <br/>Financiación</h1>
              </div>
        </section>

        <section class="bg-light-grey merchant-block">
          <div class="container">
              <h6 class="text-center text-color-02 margin0">Aquí en B2B Merchants nos enorgullecemos de poder ofrecer a los propietarios de pequeñas empresas la financiación que necesitan para expandir o fortalecer sus negocios.</h6>
          </div>
        </section>

        <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-lg-6 text-center">
                  <img src="img/financing-1.png" width="603" height="743" alt="Anticipo de efectivo del comerciante (MCA)" />
              </div>
              <div class="col-12 col-lg-6">
                  <h3>Anticipo de efectivo del<br/>comerciante (MCA)</h3>
                  <p><strong>El importe de la aprobación se basa en su volumen mensual de procesamiento comercial</strong></p>
                  <ul class="benefit__bulletlist green">
                      <li class="benefit__bulletlist-item">
                          Compramos sus futuras cuentas por cobrar de procesamiento comercial con un descuento, proporcionándole fondos hoy mismo
                      </li>
                      <li class="benefit__bulletlist-item">
                          Utilice su cuenta de procesamiento comercial para reembolsar el anticipo
                      </li>
                      <li class="benefit__bulletlist-item">
                          Los importes de la aprobación se determinan utilizando los últimos 4 meses de procesamiento comercial y extractos bancarios, junto con la información comercial de su solicitud
                      </li>
                      <li class="benefit__bulletlist-item">
                          Usted es elegible para refinanciar cuando alcance el 60 % de su importe total de reembolso
                      </li>
                  </ul>
                  <div class="text-center text-md-left">
                      <a href="quick-start" class="btn">EMPEZAR<span></span></a>
                  </div>
              </div>
          </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 text-center">
                    <img src="img/financing-2.png" width="603" height="743" alt="Anticipo total de depósito (TDA)" />
                </div>
                <div class="col-12 col-lg-6">
                    <h3>Anticipo total de<br/>depósito (TDA)</h3>
                    <p>
                        La capacidad de aceptar pagos con tarjeta de crédito es esencial para hacer crecer un negocio exitoso. B2B Merchants ofrece una variedad de soluciones de procesamiento de tarjetas de crédito para cualquier tipo de negocio, lo que permite a los comerciantes hacer crecer su base de clientes al tener clientes que regresan y atraer a los nuevos. Ya sea que esté ejecutando una ubicación minorista donde los clientes deslizan manualmente sus tarjetas o una empresa en línea en la que necesite aceptar pagos con tarjeta de crédito de forma segura a través de su sitio web, Merchant Services tiene la solución adecuada para satisfacer sus necesidades únicas. Y si está constantemente en la carretera, nuestras soluciones de procesamiento inalámbrico de tarjetas de crédito optimizarán y asegurarán sus transacciones de pago al eliminar la necesidad de manejar efectivo o cheques mientras está fuera de la oficina
                    </p>
                    <div class="text-center text-md-left">
                        <a href="quick-start" class="btn">EMPEZAR<span></span></a>
                    </div>
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
              <div class="other-devices__item">
                  <a href="payment-services" class="other-devices__item-link">
                        <span class="other-devices__item-img big">
                            <img src="img/merchant-services-payment.png" width="473" height="407" alt="Pago Servicios" />
                        </span>
                      <span class="other-devices__item-header">Pago Servicios</span>
                  </a>
              </div>
              <div class="other-devices__item">
                  <a href="merchant-analytics" class="other-devices__item-link">
                        <span class="other-devices__item-img big financing-merchant-analytics">
                            <img src="img/financing-merchant-analytics.png" width="444" height="407" alt="Comerciante Análisis" />
                        </span>
                      <span class="other-devices__item-header">Comerciante Análisis</span>
                  </a>
              </div>
          </div>
        </div>
      </div>

<?php
$view->page_end();
?>
