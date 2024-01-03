<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Clover® Mini | Sistema POS completo Huella elegante | B2BMerchants'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">
          <section class="section-hero">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-6 text-center">
                          <img src="img/clover-mini-main.png" width="503" height="600" alt="Clover Mini" />
                      </div>
                      <div class="col-12 col-md-6">
                          <h1><span class="text-color-01">Conoce a</span> Clover® Mini: <span class="text-color-01">Sistema POS completo</span> Huella elegante</h1>
                          <ul class="list">
                              <li class="list-item">El mejor sistema POS compacto de todas las funciones</li>
                              <li class="list-item">Garantía de la tarifa más baja</li>
                              <li class="list-item">Sin costes de configuración inicial</li>
                          </ul>
                          <div class="sh-item-cta block-mb-sm text-center text-md-left"><a href="quick-start" class="btn small">OBTENGA UNA<br/>COTIZACIÓN GRATIS<span></span></a></div>
                          <div class="line-icons line-icons-01 d-flex align-items-center flex-wrap">
                              <div>
                                  <svg class="icon icon-visa">
                                      <use xlink:href="css/fonts/icons.svg#visa"></use>
                                  </svg>
                              </div>
                              <div>
                                  <svg class="icon icon-mastercard">
                                      <use xlink:href="css/fonts/icons.svg#mastercard"></use>
                                  </svg>
                              </div>
                              <div>
                                  <svg class="icon icon-american-express">
                                      <use xlink:href="css/fonts/icons.svg#american-express"></use>
                                  </svg>
                              </div>
                              <div class="d-none d-md-block">
                                  <svg class="icon icon-discover">
                                      <use xlink:href="css/fonts/icons.svg#discover"></use>
                                  </svg>
                              </div>
                              <div>
                                  <svg class="icon icon-contactless">
                                      <use xlink:href="css/fonts/icons.svg#contactless"></use>
                                  </svg>
                              </div>
                              <div>
                                  <svg class="icon icon-apple-pay">
                                      <use xlink:href="css/fonts/icons.svg#apple-pay"></use>
                                  </svg>
                              </div>
                              <div>
                                  <svg class="icon icon-google-pay">
                                      <use xlink:href="css/fonts/icons.svg#google-pay"></use>
                                  </svg>
                              </div>
                              <div>
                                  <svg class="icon icon-samsung-pay">
                                      <use xlink:href="css/fonts/icons.svg#samsung-pay"></use>
                                  </svg>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

        <section>
          <div class="container">
            <h2 class="section-title">Cómo ayuda <span class="text-color-01">Clover Mini</span><br/>a tu negocio</h2>
          </div>
            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-12 col-lg-6">
                            <div class="tile-visual">
                                <div class="video-wrap">
                                    <div class="video-container" data-video-source="clover-mini" data-video-poster="img-flex.png">
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
                                <h5>El mejor sistema POS todo en uno compacto del mercado</h5>
                                <p class="block-mb-sm">Con su pequeña huella, puede caber en cualquier lugar. Pero no dejes que su tamaño sea engañoso, es un sistema POS de funciones completas. Conéctelo a través de Wi-Fi o su red Ethernet por cable y estará listo para procesar pagos, ejecutar informes, utilizar el mercado de aplicaciones Clover y hacer crecer su negocio en muy poco tiempo. Ah, y la impresora de recibos está integrada. Las opciones para enviar recibos por correo electrónico o mensajes de texto son, por supuesto, una opción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
              <div class="row align-items-center block-mb-md">
                <div class="col-12 col-md-6">
                <h3>Comercio minorista</h3>
                <p>Gestione su negocio con potentes herramientas creadas específicamente pensando en las tiendas minoristas. Acepta pagos por chip, desliza, pulsa o incluso por teléfono. Haz un seguimiento del inventario, ejecuta promociones de marketing y mantén una base de datos de clientes. Gestione a sus empleados y ejecute informes críticos para el negocio para ayudarle a crecer. Clover Mini lo tiene todo.</p>
                <ul class="checked-list">
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div><strong>Pagos seguros</strong></div>
                        Acepta pedidos y pagos de forma segura con pedidos y pagos sin contacto, recibos sin papel y modo de pago sin conexión
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div><strong>Optimiza tu inventario</strong></div>
                        Configurar artículos y categorías; mover o transferir pedidos; añadir artículos a pedidos parcialmente pagados
                    </li>
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
                        <div><strong>Aplicaciones agrupadas</strong></div>
                        Pedidos, registro, promociones, recompensas, empleados, informes y otros
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div><strong>Gestión de empleados</strong></div>
                        Configurar los inicios de sesión y permisos de acceso de los empleados
                    </li>
                </ul>
                </div>

                <div class="col-12 col-md-6 text-center text-md-left">
                    <div class="img-wrapper ellipse-blue">
                        <img src="img/clover-mini-retail.png" width="520" height="573" alt="Clover Mini retail" />
                    </div>
                </div>
              </div>

              <div class="row align-items-center block-mb-md">
                  <div class="col-12 col-md-7 order-md-1">
                    <h3>Restaurante</h3>
                    <p>¿Quieres un sistema POS capaz de ejecutar las partes delantera y trasera de tu restaurante, pero lo suficientemente elegante como para colocarlo en lugares más estrechos? Clover Mini es tu solución.</p>
                    <ul class="checked-list">
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Construir un plano de planta dinámico</strong></div>
                            Construye planos de planta dinámicos que coincidan con tu diseño
                        </li>
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
                            <div><strong>Pedidos de códigos QR</strong></div>
                            Tus invitados pueden hacer todas las cosas en las que están acostumbrados a cenar: mirar a través del menú, elegir lo que les gusta y pagar la factura.
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Aplicaciones agrupadas</strong>  Propinas, turnos, descuentos</div>
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
                </div>
                  <div class="col-12 col-md-5 text-center text-md-left">
                      <div class="img-wrapper ellipse-orange">
                          <img src="img/clover-mini-rest.png" width="520" height="573" alt="" />
                      </div>
                  </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Servicios</h3>
                  <p>Combinado con la tienda de aplicaciones Clover, el Clover mini ofrece un potente rendimiento a gran escala en un tamaño compacto. Si piensas en una herramienta que mejorará tu negocio de servicios, es probable que Clover Mini la tenga.</p>
                    <ul class="checked-list">
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Informes sólidos</strong></div>
                            Haz un seguimiento de las ventas a medida que llegan, estés donde estés. Inicie sesión en cualquier momento para obtener información de un vistazo, desde las ventas por hora y los artículos más vendidos hasta el volumen de reembolsos y descuentos.
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Hacer que los clientes vuelvan</strong></div>
                            Entra en el paquete de compromiso con el cliente de Clover. Es gratis, y cada una de las aplicaciones de la suite viene instalada en el panel de control de Clover
                        </li>
                        <li class="checked-list-item">
                            <svg class="icon">
                                <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                            </svg>
                            <div><strong>Hazlo fácil a tus clientes</strong></div>
                            Ofrecer recibos digitales y propinas con un solo toque. Procesar reembolsos, devoluciones y cambios de forma rápida y sencilla.
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 text-center text-md-left">
                    <div class="img-wrapper ellipse-green">
                        <img src="img/clover-mini-service.png" width="520" height="573" alt="Servicios" />
                    </div>
                </div>
            </div>
            </div>
          </div>
        </section>


        <section class="compatiblewith">
          <div class="compatiblewith__container container">
              <h2 class="section-title"><span class="text-color-01">Compatible</span> con</h2>
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
                    <div class="compatiblewith__item-img"><img loading="lazy" src="img/clover-flex-accessory.png" alt="Clover Flex"></div>
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
                  <div class="img-carousel-item"><img src="img/slide1-clover-mini.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/slide2-clover-mini.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/slide3-clover-mini.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/slide4-clover-mini.png" alt=""></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <ul class="checked-list">
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Pequeño pero potente</div>
                        Mini es lo suficientemente pequeño como para caber en cualquier espacio, pero tiene mucha potencia de punto de venta para hacer funcionar toda tu casa, de adelante hacia atrás.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Pagos y depósitos fáciles</div>
                        Desliza, sumerge, pulsa o acepta todas las formas en que a tus clientes les gusta pagar. Y obtén los fondos en tu cuenta bancaria tan rápido como al siguiente día laborable.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Prepara tu negocio para el futuro</div>
                        Mini puede ser tan mínimo o con todas las funciones como quieras. Y siempre crecerá y se ampliará con su negocio.
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
                        <div class="checked-list-item-header">Soluciones empresariales únicas</div>
                        The Clover App Market ofrece aplicaciones especializadas para ampliar las capacidades de su negocio.
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
                        <div class="checked-list-item-header">No hay lugar para el robo</div>
                        Con la gestión de permisos y un PIN para cada empleado, siempre estás protegido.
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

                        <div class="col-12 col-md-6 clover-flex-block-img-margins">
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
                        <div class="col-12 col-md-6 clover-flex-block-img-margins">
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
                                <td>CUERPO</td>
                                <td>Aluminio cepillado con detalles de vidrio blanco</td>
                            </tr>
                            <tr>
                                <td>PANTALLA</td>
                                <td>Vidrio Antimicrobiano Corning® Gorilla®</td>
                            </tr>
                            <tr>
                                <td>INTEGRAR</td>
                                <td>Integración con el software de punto de venta existente para un sistema seguro, listo para EMV, compatible con PCI y rico en funciones</td>
                            </tr>
                            <tr>
                                <td>PAGOS</td>
                                <td>Deslizamientos de tarjetas de crédito y EBT, chip EMV + PIN y chip EMV + firma, y pagos sin contacto como Apple Pay, Samsung Pay y Android Pay</td>
                            </tr>
                            <tr>
                                <td>COMPATIBLE CON PCI</td>
                                <td>Pago de "nivel 3" certificado para los procesadores de pagos y la pasarela. Conecta tu punto de venta a Clover Mini/Mobile usando USB, LAN (Ethernet o WiFi) o Cloud. Integre rápidamente utilizando las bibliotecas específicas de nuestra plataforma (Windows SDK, JS SDK, Android SDK).</td>
                            </tr>
                            <tr>
                                <td>PANTALLA</td>
                                <td>Pantalla táctil grande: 7", 1280px x 800px</td>
                            </tr>
                            <tr>
                                <td>HUB</td>
                                <td>Puerto de carga: USB tipo B; puertos USB Ethernet 4 tipo A</td>
                            </tr>
                            <tr>
                                <td>OPCIONES</td>
                                <td>Opción de conectar un accesorio Cash Drawer</td>
                            </tr>
                            <tr>
                                <td>CLOVER MINI WI-FI ETHERNET</td>
                                <td>Wi-Fi (802.11a/b/g/n inalámbrico)</td>
                            </tr>
                            <tr>
                                <td>3G (PENTABAND HSPA+)</td>
                                <td>Requiere un plan de datos: trae el tuyo propio o usa Clover's</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

          <div class="cta-wrap bg-gradient-01">
              <div class="cta-img"><img src="img/buy-clover-mini.png" width="596" height="428" alt="Clover mini" /></div>
              <div class="container">
                  <div class="cta-container row align-items-center">
                      <div class="col-12 col-md-6 ml-auto text-center text-md-left">
                          <p class="block-mb-sm wrap-br-04 text-color-03 cta-container-text"><strong>Elíjanos como tu socio para ayudarte <span class="text-color-01">a dirigir tu negocio</span> de manera más eficiente y mejorar tus resultados.</strong></p>
                          <div class="cta-info-btn d-inline-flex align-items-center">
                              <div class="col-auto"><a href="quick-start" class="btn">empieza ahora<span></span></a></div>
                              <div class="col-auto cta-info">$59.99/mes</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-04.png" width="620" height="318" alt="" /></div></div></div>
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
        </div>

        <section class="section-solutions">
            <div class="container">
                <div class="other-devices">
                    <div class="other-devices__item">
                        <a href="clover-flex" class="other-devices__item-link">
                        <span class="other-devices__item-img">
                            <img src="img/clover-flex-equal-simple.png" width="262" height="194" alt="CloverⓇ Flex" />
                        </span>
                            <div class="other-devices__item-name">CloverⓇ Flex</div>
                        </a>
                    </div>
                    <div class="other-devices__item">
                        <a href="clover-station-duo" class="other-devices__item-link">
                      <span class="other-devices__item-img">
                          <img src="img/clover-duo-equal-simple.png" width="262" height="193" alt="Clover Station Duo" />
                      </span>
                            <div class="other-devices__item-name">Clover® Station Duo</div>
                        </a>
                    </div>
                    <div class="other-devices__item">
                        <a href="dejavoo-qd3" class="other-devices__item-link">
                      <span class="other-devices__item-img">
                          <img src="img/dejavoo-qd3-equal-simple.png" width="262" height="193" alt="Dejavoo QD3" />
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
