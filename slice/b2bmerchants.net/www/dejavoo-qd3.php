<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Dejavoo QD3 | Terminal inteligente de bolsillo con máxima movilidad | B2BMerchants'
];

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">
            <section class="section-hero">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-6 text-center">
                          <img src="img/dejavoo-qd3.png" width="503" height="600" alt="Dejavoo Qd3" />
                      </div>
                      <div class="col-12 col-md-6">
                          <h2 class="text-left"><span class="text-color-01">Conoce a</span> Dejavoo QD3<br/><span class="text-color-01">Terminal inteligente de bolsillo con</span><br/>Máxima movilidad</h2>
                          <ul class="list">
                              <li class="list-item">Pagos en cualquier lugar: inalámbrico y Wi-Fi listo</li>
                              <li class="list-item">Garantía de la tarifa más baja</li>
                              <li class="list-item">Sin costes de configuración inicial</li>
                          </ul>
                          <div class="sh-item-cta block-mb-sm text-center text-md-left"><a href="quick-start" class="btn small">OBTENGA UNA<br/>COTIZACIÓN GRATIS<span></span></a></div>
                          <div class="line-icons line-icons-01 d-flex align-items-center flex-wrap">
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
                    <h2 class="section-title">Cómo <span class="text-color-01">Dejavoo QD3</span><br/>ayuda a su negocio</h2>
                </div>
                <div class="clover-flex-block block-mb-sm">
                    <div class="container">
                        <div class="row align-items-center wrap-04 no-gutters block-mb-xlg">
                            <div class="col-12 col-lg-6">
                                <div class="tile-visual">
                                    <div class="video-wrap" data-no-video>
                                        <div class="video-preloader" style="background-image: url(img/dejavoo-qd3-video.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="tile-icon-info qd3">
                                    <div class="tabs-control block-mb-sm">
                                        <ul>
                                            <li class="tabs-control-highlight">ajuste:</li>
                                            <li>INDUSTRIA DE SERVICIOS</li>
                                        </ul>
                                    </div>
                                    <h4 class="wrap-br-02">Dejavoo QD3<br/>Máxima movilidad<br/>y comodidad</h4>
                                    <p class="block-mb-sm">Más fáciles de maniobrar y transportar que un terminal tradicional, las transacciones sobre la marcha son perfectas. Se aceptan tipos de pago con chip, franja y sin contacto, al tiempo que se proporcionan recibos de texto y correo electrónico para los registros de sus clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="table-info-wrap row">
                        <table class="table-info">
                            <tbody>
                            <tr>
                                <td>PROCESADOR</td>
                                <td>Qualcomm + chip seguro</td>
                            </tr>
                            <tr>
                                <td>PANTALLA</td>
                                <td>LCD a color de 4" con panel táctil (800 x 480)</td>
                            </tr>
                            <tr>
                                <td>CONECTIVIDAD</td>
                                <td>GSM, WCDMA, FDD-LTE, TDD-LTE, WiFi, BT4.0, E-SIM</td>
                            </tr>
                            <tr>
                                <td>SEGURIDAD</td>
                                <td>PCI PTS 5.0</td>
                            </tr>
                            <tr>
                                <td>CARGA</td>
                                <td>Adaptador 5V 1A</td>
                            </tr>
                            <tr>
                                <td>MEMORIA</td>
                                <td>512 MB de RAM, 4 GB de flash</td>
                            </tr>
                            <tr>
                                <td>BATERÍA</td>
                                <td>3,7 V, 3000 mAh</td>
                            </tr>
                            <tr>
                                <td>FUNCIONES INTEGRADAS</td>
                                <td>Cámara, escáner de códigos de barras 1D y 2D</td>
                            </tr>
                            <tr>
                                <td>DIMENSIONES</td>
                                <td>127 x 70 x 21mm</td>
                            </tr>
                            <tr>
                                <td>PESO</td>
                                <td>200g.0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </section>

            <section id="section-benefits">
              <div class="container">
                  <h2 class="section-title">Beneficios <span class="text-color-01">Ilimitados</span></h2>
                  <div class="row wrap-01 benefits-row">
                      <div class="col-12 col-md-4">
                          <div class="icon-info icon-info-modified">
                              <svg class="icon icon-online-payment icon-modified">
                                  <use xlink:href="css/fonts/icons.svg#phone-card"></use>
                              </svg>
                              <p class="icon-info-header">Acepta todos los tipos de pago.</p>
                              <p>Deja que tus clientes paguen como quieran. Deslizar, sumergir y tocar. Tarjetas de banda magnética, tarjetas con chip y pagos NFC como Apple Pay y Samsung Pay.</p>
                          </div>
                      </div>
                      <div class="col-12 col-md-4">
                          <div class="icon-info icon-info-modified">
                              <svg class="icon icon-network icon-modified">
                                  <use xlink:href="css/fonts/icons.svg#graphic"></use>
                              </svg>
                              <p class="icon-info-header">Tarifa más baja en Puerto Rico garantizada.</p>
                              <p>MSPR ofrece las tarifas más competitivas de la industria. Si no podemos mejorar sus tarifas, le damos $ 1000</p>
                          </div>
                      </div>
                      <div class="col-12 col-md-4">
                          <div class="icon-info icon-info-modified">
                              <svg class="icon icon-support icon-modified">
                                  <use xlink:href="css/fonts/icons.svg#workspace"></use>
                              </svg>
                              <p class="icon-info-header">Servicio de conserjería.</p>
                              <p>Especialista en cuentas bien informado. Punto de contacto dedicado. Soporte 24/7</p>
                          </div>
                      </div>
                  </div>
              </div>
            </section>

            <div class="cta-wrap bg-gradient-07">
              <div class="cta-img"><img src="img/img-qd3.png" width="567" height="547" alt=""></div>
              <div class="container">
                <div class="cta-container row align-items-center">
                  <div class="col-12 col-md-6 ml-auto text-center text-md-left">
                    <p class="block-mb-sm wrap-br-04 text-color-03 cta-container-text"><strong>Es hora de dirigir su negocio de forma más inteligente, más rápido y simplificador.</strong></p>
                    <div class="cta-info-btn d-inline-flex align-items-center">
                      <div class="col-auto"><a href="quick-start" class="btn">empieza ahora<span></span></a></div>
                        <div class="col-auto cta-info">$29.99/mes</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-06.png" width="712" height="318" alt="" /></div></div></div>
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
                          <a href="clover-mini" class="other-devices__item-link">
                            <span class="other-devices__item-img">
                              <img src="img/clover-mini-equal-simple.png" width="198" height="138" alt="Clover Mini" />
                            </span>
                              <div class="other-devices__item-name">Clover® Mini</div>
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
