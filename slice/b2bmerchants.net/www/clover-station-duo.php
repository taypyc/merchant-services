<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Clover® Station Duo | Su último sistema POS de Clover | B2BMerchants'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="section-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center">
                        <img src="img/clover-duo-equal-main.png" width="503" height="599" alt="Clover Station Duo" />
                    </div>
                    <div class="col-12 col-md-6">
                        <h1><span class="text-color-01">Conozca</span> Clover® Station Duo Su <span class="text-color-01">último sistema</span> POS de Clover</h1>
                        <ul class="list block-mb-sm wrap-br-03">
                            <li class="list-item">El mejor sistema POS a gran escala disponible</li>
                            <li class="list-item">Garantía de tasa más baja</li>
                            <li class="list-item">Sin costes de configuración iniciales</li>
                        </ul>
                        <div class="sh-item-cta block-mb-sm text-center text-md-left">
                            <a href="quick-start" class="btn small">OBTENGA UNA<br/>COTIZACIÓN GRATIS<span></span></a>
                        </div>
                        <div class="line-icons line-icons-01 d-flex align-items-center flex-wrap block-mb-sm">
                            <div><svg class="icon icon-visa"><use xlink:href="css/fonts/icons.svg#visa"></use></svg></div>
                            <div><svg class="icon icon-mastercard"><use xlink:href="css/fonts/icons.svg#mastercard"></use></svg></div>
                            <div><svg class="icon icon-american-express"><use xlink:href="css/fonts/icons.svg#american-express"></use></svg></div>
                            <div class="d-none d-md-block"><svg class="icon icon-discover"><use xlink:href="css/fonts/icons.svg#discover"></use></svg></div>
                            <div><svg class="icon icon-contactless"><use xlink:href="css/fonts/icons.svg#contactless"></use></svg></div>
                            <div><svg class="icon icon-apple-pay"><use xlink:href="css/fonts/icons.svg#apple-pay"></use></svg></div>
                            <div><svg class="icon icon-google-pay"><use xlink:href="css/fonts/icons.svg#google-pay"></use></svg></div>
                            <div><svg class="icon icon-samsung-pay"><use xlink:href="css/fonts/icons.svg#samsung-pay"></use></svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="section-title">Cómo <span class="text-color-01">Clover Station Duo</span> <span class="block-ws-nowrap"><br/>ayuda a su negocio</span></h2>
            </div>
            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-12 col-lg-6">
                            <div class="tile-visual">
                                <div class="video-wrap">
                                    <div class="video-container" data-video-source="clover-station-duo" data-video-poster="img-flex.png">
                                        <!-- <video id="video" poster="img/bg-flex.jpg" playsinline muted loop preload="none">
                                          <source src="video/videoplayback.mp4" type="video/mp4">
                                          <source src="video/videoplayback.webm" type="video/webm">
                                        </video> -->
                                    </div>
                                    <div class="video-preloader" style="background-image: url(img/video-bg.jpg)"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="tile-icon-info">
                                <div class="tabs-control block-mb-02">
                                    <ul>
                                        <li class="tabs-control-highlight">adaptar:</li>
                                        <li>VENTA MINORISTA</li>
                                        <li>RESTAURANTES</li>
                                        <li>SERVICIO INDUSTRIAL</li>
                                    </ul>
                                </div>
                                <h5>Dúo de estaciones Clover® Tu solución completa para pagos y herramientas de gestión empresarial</h5>
                                <p class="block-mb-sm">Con su hermoso diseño moderno, pantalla externa orientada al cliente, cajón de efectivo adjunto e impresora de recibos y capacidades de nube a gran escala, se preguntará cómo funcionaría su negocio sin él.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
              <div class="row align-items-center block-mb-xlg">
                <div class="col-12 col-md-6">
                    <h3>Venta minorista</h3>
                    <p>Más allá de los pagos, Clover® Station Duo es su asistente comercial para ayudarlo a administrar su tienda. La pantalla externa para sus clientes significa transacciones más seguras y fáciles. El acceso a Clover Cloud y al mercado de Clover App significa mejores herramientas para su negocio.</p>
                    <ul class="checked-list">
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Pagos listos para COVID</strong></div>
                            Tome pedidos y pagos de forma segura con pedidos y pagos sin contacto, recibos sin papel y modo de pago fuera de línea
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Pedidos en línea</strong></div>
                            Tome pedidos y pagos en línea para una entrega rápida y sin contacto
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>La gestión del inventario</strong></div>
                            Configurar artículos y categorías; órdenes de movimiento o transferencia; añadir artículos a pedidos parcialmente pagados
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Aplicaciones incluidas</strong></div>
                            Pedidos, Registro, Promociones, Recompensas, Empleados, Informes y otros
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Gestión de empleados</strong></div>
                            Configurar los inicios de sesión de los empleados y los permisos de acceso
                        </li>
                    </ul>
                    <p></p>
                </div>

                <div class="col-12 col-md-6 text-center text-md-left">
                    <div class="img-wrapper ellipse-blue">
                        <img src="img/clover-station-pro-retail.png" width="520" height="605" alt="Venta minorista" />
                    </div>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 order-md-1">
                  <h3>Restaurante</h3>
                  <p>¿Listo para llevar la gestión de restaurantes al siguiente nivel? Station Duo es tu solución. Con un conjunto de aplicaciones y funciones integradas diseñadas específicamente para la industria de restaurantes, este Clover es su mejor herramienta para administrar su negocio de restaurantes.</p>
                    <ul class="checked-list">
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Pedidos en línea</strong></div>
                            Acepta pedidos y pagos en línea para una entrega rápida y sin contacto
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Pedidos y pagos sin contacto</strong></div>
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Pedidos de códigos QR</strong></div>
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Aplicaciones agrupadas </strong>Propinas, turnos, descuentos</div>
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Pedidos</strong></div>
                            Configurar tipos y categorías de pedidos; mover o transferir órdenes; órdenes de incendio directamente a la cocina o a las estaciones de preparación
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Impuestos y cargos por servicio</strong></div>
                            Configurar y aplicar automáticamente impuestos a nivel de artículo; aplicar cargos por servicio a grandes partes
                        </li>
                    </ul>
                    <p></p>
                </div>
                <div class="col-12 col-md-6 text-center text-md-left">
                  <div class="img-wrapper ellipse-orange">
                      <img src="img/clover-pro-station-rest.png" width="520" height="573" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="compatiblewith">
            <h2 class="section-title"><span class="text-color-01">Compatible</span> con</h2>
          <div class="compatiblewith__container container">
            <div class="compatiblewith__row">
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/handheld-barcode-scanner.png" alt="Escáner de códigos de barras"></div>
                <div class="compatiblewith__item-text">Escáner de códigos de barras</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/weight-scale-tile.png" alt="Escala de peso"></div>
                <div class="compatiblewith__item-text">Escala de peso</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/kitchen-printer-tile.png" alt="Impresora de cocina"></div>
                <div class="compatiblewith__item-text">Impresora de cocina</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img compatiblewith__item-img--bigger"><img loading="lazy" src="img/kitchen-display-system.png" alt="Sistema de visualización de la cocina"></div>
                <div class="compatiblewith__item-text">Sistema de visualización de la cocina</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/clover-flex-accessory.png" alt="Clover Flex" /></div>
                <div class="compatiblewith__item-text">Clover Flex</div>
              </div>
            </div>
          </div>
        </section>

        <section id="section-benefits" class="section-benefits">
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

        <section id="section-features">
          <div class="container">
            <h2 class="section-title">Características y <span class="text-color-01">especificaciones</span></h2>
            <div class="row block-mb-xlg align-items-center">
              <div class="col-12 col-md-6">
                <div class="img-carousel wrap-05 wrap-05--wider">
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-2.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-3.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-4.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-5.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-6.png" alt=""></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
              <ul class="checked-list">
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Deja que tus clientes conduzcan</div>
                    Station Duo viene con un terminal inteligente para sus clientes. Eso significa que pueden confirmar sus pedidos y completar el pago más rápido.
                  </li>
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Moverse a la velocidad de la luz</div>
                      Station Duo es nuestro sistema POS más rápido y potente. Desde el inventario y los pedidos hasta la gestión de su personal y la ejecución de informes, todo está al alcance de su mano.
                  </li>
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Todos los colores del pago rainbowall</div>
                      Deja que tus clientes paguen como quieren pagar. Desliza, sumerge o pulsa. Crédito o débito. Pagos NFC, incluidos Apple Pay, Google Pay, WeChat Pay, Alipay y más. Ahora el doble de rápido.
                  </li>
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Seguridad de siguiente nivel</div>
                      Proteja la información de su negocio y de sus clientes con cifrado y tokenización de datos de extremo a extremo, sensores de chips EMV integrados e inicios de sesión de huellas dactilares.
                  </li>
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Mantente al tanto de tus números</div>
                      Supervisa tus ventas, reembolsos y artículos más vendidos desde cualquier ordenador o dispositivo móvil.
                  </li>
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Pagos con todas las funciones</div>
                      Los impuestos, los descuentos, las recompensas de fidelidad y las tarjetas de regalo están a solo un toque de distancia.
                  </li>
                  <li class="checked-list-item">
                    <svg class="icon">
                      <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                    </svg>
                    <div class="checked-list-item-header">Conoce a tus mayores fans</div>
                      Recopilar y gestionar la información de contacto de los clientes y las preferencias de marketing, para que pueda interactuar con ellos en sus términos.
                  </li>
                </ul>
              </div>
            </div>
          </div>

            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <h3><span class="text-color-01">Software adaptado</span> a sus necesidades.</h3>
                            <p>Clover Flex es el sistema POS definitivo, pero no se detiene en el procesamiento de pagos. Con potentes herramientas integradas y acceso a cientos de aplicaciones disponibles en el mercado de Clover, Clover Flex es su asistente de negocios definitivo.</p>
                        </div>

                        <div class="col-12 col-md-6 clover-flex-block-img-margins text-center text-md-left">
                            <img src="img/features-flex-04.png" width="516" height="448" alt="Software adaptado a sus necesidades." />
                        </div>
                    </div>
                </div>
            </div>

            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 order-md-1">
                            <h3><span class="text-color-01">Desbloquea</span> el panel de control de Clover.</h3>
                            <p>Basado en la nube, listo en cualquier momento y completamente personalizable, el panel de control de Clover es su mejor recurso empresarial. Ejecute informes personalizados, mantenga recordatorios sobre los objetivos clave del negocio, gestione al personal, configure aplicaciones de terceros, clasifique y filtre datos financieros, exporte eventos a Quickbooks para facilitar la contabilidad. Panel de control de trébol: lo tiene todo.</p>
                        </div>
                        <div class="col-12 col-md-6 clover-flex-block-img-margins text-center text-md-left">
                            <img src="img/features-flex-05.png" width="568" height="448" alt="Desbloquea el panel de control de Clover." />
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="table-info-wrap row">
                    <table class="table-info">
                        <tbody>
                            <tr>
                                <td>DIMENSIONES</td>
                                <td>Placa base 11,0" x 7,5". Altura máxima desde la encimera hasta la parte superior de la pantalla: 9"</td>
                            </tr>
                            <tr>
                                <td>FUENTE DE ALIMENTACIÓN</td>
                                <td>Un cable de alimentación y un cable LAN, con todo alimentado desde el Clover Mini</td>
                            </tr>
                            <tr>
                                <td>PANTALLA 1</td>
                                <td>Pantalla orientada al comerciante - Pantalla IPS FHD de 14,0"</td>
                            </tr>
                            <tr>
                                <td>PANTALLA 2</td>
                                <td>Pantalla orientada al cliente - Pantalla IPS HD de 7,0" (Gorilla Glass 3 con antihuellas dactilares y antimicrobiano)</td>
                            </tr>
                            <tr>
                                <td>IMPRESORA</td>
                                <td>Impresora de recibos de alta velocidad</td>
                            </tr>
                            <tr>
                                <td>OPCIONES DE CONECTIVIDAD</td>
                                <td>Wi-Fi, 4G/LTE y Ethernet</td>
                            </tr>
                            <tr>
                                <td>PAGOS</td>
                                <td>Desliza, sumerge o pulsa. Crédito o débito. Pagos NFC, incluidos Apple Pay, Google Pay, WeChat Pay, Alipay y más. Ahora el doble de rápido.</td>
                            </tr>
                            <tr>
                                <td>SEGURIDAD</td>
                                <td>Inicios de sesión de huellas dactilares, tarjetas de empleados NFC, tokenización y cifrado de transacciones, PCI PTS 5.0 PED con preparación para P2PE</td>
                            </tr>
                            <tr>
                                <td>OPCIONES</td>
                                <td>Cámara integrada de alta resolución para escanear códigos de barras o códigos QR. El brazo pivotante patentado gira suavemente entre el comerciante y el cliente</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class="cta-wrap bg-gradient-07">
            <div class="cta-img"><img src="img/clover-station-duo.png" width="660" height="479" alt="clover station duo" /></div>
            <div class="container">
                <div class="cta-container row align-items-center">
                    <div class="col-12 col-md-6 ml-auto text-center text-md-left">
                        <p class="block-mb-sm wrap-br-04 text-color-03 cta-container-text"><strong>Elíjanos como tu socio para ayudarte <span class="text-color-01">a dirigir tu negocio</span> de manera más eficiente y mejorar tus resultados.</strong></p>
                        <div class="cta-info-btn d-inline-flex align-items-center">
                            <div class="col-auto"><a href="quick-start" class="btn">empieza ahora<span></span></a></div>
                            <div class="col-auto cta-info">$119.99/mes</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-03.png" width="620" height="318" alt=""></div></div></div>
        </div>
        <div class="text-divided-info-wrap">
            <div class="container">
                <div class="row text-divided-info wrap-06">
                    <div class="col-4">
                        <p class="tdi-intro">TARIFA BASE</p>
                        <p class="tdi-highlighted">1.29%</p>
                    </div>
                    <div class="col-4">
                        <p class="tdi-intro">COSTES DE CONFIGURACIÓN INICIAL</p>
                        <p class="tdi-highlighted">$0</p>
                    </div>
                    <div class="col-4">
                        <p class="tdi-intro">MERCADO DE APLICACIONES CLOVER</p>
                        <p class="tdi-highlighted">Incluido</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-solutions">
          <div class="container">
            <div class="other-devices">
                <div class="other-devices__item">
                  <a href="clover-flex" class="other-devices__item-link">
                      <span class="other-devices__item-img">
                          <img src="img/clover-flex-equal-simple.png" width="262" height="194" alt="Clover Flex" />
                      </span>
                      <div class="other-devices__item-name">Clover® Flex</div>
                  </a>
                </div>
                <div class="other-devices__item">
                    <a href="clover-mini" class="other-devices__item-link">
                        <span class="other-devices__item-img">
                          <img src="img/clover-mini-equal-simple.png" width="198" height="138" alt="Clover Mini" />
                        </span>
                        <div class="other-devices__item-name">Clover® Mini</div>
                    </a>
                </div>
                <div class="other-devices__item">
                  <a href="dejavoo-qd3" class="other-devices__item-link">
                      <span class="other-devices__item-img">
                          <img src="img/dejavoo-qd3-equal-simple.png"width="262" height="193" alt="Dejavoo QD3" />
                      </span>
                    <div class="other-devices__item-name">Dejavoo QD3</div>
                  </a>
                </div>
                <div class="other-devices__item">
                  <a href="dejavoo-qd2" class="other-devices__item-link">
                      <span class="other-devices__item-img">
                          <img src="img/dejavoo-qd2-equal-simple.png" width="262" height="193" alt="Dejavoo QD2" />
                      </span>
                        <div class="other-devices__item-name">Dejavoo QD2</div>
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
