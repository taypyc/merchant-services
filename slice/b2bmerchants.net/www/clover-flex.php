<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Clover® Flex | Aceptar pagos en cualquier sitio | B2BMerchants'
];

$view->page_start($head_data);
?>
    <div role="main" class="main block-shadow-02">
        <section class="section-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center">
                        <img src="img/clover-flex.png" width="503" height="599" alt="Clover Flex" />
                    </div>
                    <div class="col-12 col-md-6">
                        <h1>Conozca Clover® Flex<br><span class="text-color-01">Aceptar pagos</span><br>En cualquier sitio</h1>
                        <ul class="list">
                            <li class="list-item">El mejor sistema POS portátil del mercado</li>
                            <li class="list-item">Garantía de tasa más baja</li>
                            <li class="list-item">Sin costes de configuración iniciales</li>
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
                <h2 class="section-title">Cómo <span class="text-color-01">Clover Flex</span><br />ayuda a su negocio</h2>
            </div>
            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-12 col-lg-6">
                            <div class="tile-visual">
                                <div class="video-wrap">
                                    <div class="video-container" data-video-source="clover-flex" data-video-poster="img-flex.png">
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
                                <h5>El mejor sistema POS móvil todo en uno del mercado</h5>
                                <p class="block-mb-sm">Clover Flex es un dispositivo de punto de venta móvil con todas las funciones que ofrece características sólidas para ayudar a que su negocio opere y crezca. La flexibilidad de aceptar pagos sobre la marcha a través de opciones de deslizamiento, chip o toque significa que puede aceptar pagos en cualquier lugar e imprimir recibos de clientes a través de la impresora integrada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center block-mb-xlg">
                    <div class="col-12 col-md-6">
                        <h3>Venta minorista</h3>
                        <p>Clover Flex pone la gestión minorista al alcance de su mano. Aumente sus resultados al reducir los costos operativos y agregar oportunidades de ingresos utilizando informes y aplicaciones de administración comercial disponibles. Administre su inventario, realice un seguimiento de los envíos y las devoluciones, vea los artículos con mejor y peor rendimiento, programe los turnos del personal para tener en cuenta los tiempos de actividad y lentitud, cree informes diarios y mucho más.</p>
                        <ul class="checked-list">
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
                                <div><strong>La gestión del inventario</strong></div>
                                Configurar artículos y categorías. Mover o transferir órdenes. Agregar artículos a pedidos parcialmente pagados
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Impulse el tráfico con promociones</strong></div>
                                Cree perfiles de invitados y envíe promociones y anuncios por mensaje de texto, correo electrónico y recibos, todo directamente a través del sistema Flex POS.
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 text-center text-md-left">
                        <div class="img-wrapper ellipse-blue">
                            <img src="img/flex-retail.png" width="520" height="573" alt="Venta minorista" />
                        </div>
                    </div>
                </div>

                <div class="row align-items-center block-mb-xlg">
                    <div class="col-12 col-md-6 order-md-1">
                        <h3>Restaurante</h3>
                        <p>El software de Clover Flex alivia la carga de operar un restaurante sin importar el tamaño o la complejidad. Acomode a más clientes, conecte a los camareros y al personal de la cocina, promueva los elementos del menú deseados, mantenga modificadores de ingredientes y alimentos, conéctese con sus proveedores para reabastecer los artículos de inventario bajo, asigne mesas y mucho más.</p>
                        <ul class="checked-list">
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Pedidos en línea</strong></div>
                                Ofrezca pedidos en línea sin inconvenientes. Los pedidos van directo a tu QSR POS. Sin tarifas de instalación o suscripción.
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Pedido con código QR</strong></div>
                                Sus invitados pueden hacer todas las cosas a las que están acostumbrados a cenar: mirar el menú, elegir lo que les gusta y pagar la cuenta.
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Hacer pedidos más precisos</strong></div>
                                Personalice los pedidos con modificadores descriptivos como "queso extra" o "salsa para acompañar". También puede vincular pedidos a invitados.
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Impuestos y cargos por servicio</strong></div>
                                Configure y aplique impuestos automáticamente a nivel de artículo; aplicar cargos por servicio a fiestas grandes
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-left">
                        <div class="img-wrapper ellipse-orange">
                            <img src="img/flex-restaurant.png" width="520" height="573" alt="Restaurante" />
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h3>Servicios</h3>
                        <p>Independientemente de los servicios que brinde, Clover Flex proporciona herramientas y aplicaciones líderes en la industria para llevar su negocio al siguiente nivel. Administre sus reservas y reservaciones, asigne empleados dedicados, gestione los programas de lealtad y marketing para atraer a más clientes, administre los turnos de los empleados, administre el inventario, impulse los informes comerciales y mucho más.</p>
                        <ul class="checked-list">
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Pagos más fáciles</strong></div>
                                Aceptar cualquier tipo de pago es muy fácil, desde deslizar, chip y tocar en persona hasta pagos en línea.
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Tome pagos en cualquier lugar</strong></div>
                                En el camino, en la oficina o en la ubicación de su cliente, en persona o por teléfono, nunca pierda otra venta.
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Administrar desde la nube</strong></div>
                                Como todas las soluciones de Clover, Clover Flex está conectado a la nube, lo que le permite administrar y administrar su negocio desde la palma de su mano.
                            </li>
                            <li class="checked-list-item">
                                <svg class="icon">
                                    <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                                </svg>
                                <div><strong>Configuración rápida</strong></div>
                                Los sistemas de Clover vienen listos para pagos. Instálalo tú mismo, con nuestro apoyo, o a través de tu banco.
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 text-center text-md-left">
                        <div class="img-wrapper ellipse-green">
                            <img src="img/flex-service.png" width="520" height="573" alt="Servicios" />
                        </div>
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
            <div class="row block-mb-xlg">
              <div class="col-12 col-md-6">
                <div class="img-carousel wrap-05">
                    <div class="img-carousel-item"><img src="img/carousel-flex-03.png" width="568" height="937" alt="" /></div>
                    <div class="img-carousel-item"><img src="img/carousel-flex-01.png" width="568" height="937" alt="" /></div>
                    <div class="img-carousel-item"><img src="img/carousel-flex-02.jpg" width="568" height="937" alt="" /></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <ul class="checked-list">
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Tamaño pequeño, muchas opciones.</div>
                        Clover Flex está diseñado para ser la máquina más versátil del mercado. Es lo suficientemente pequeño para ser portátil, pero tiene suficientes opciones para convertirse en un centro de administración central para su negocio.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Paga donde estés.</div>
                        El tamaño portátil de Flex facilita el cobro de pagos desde cualquier lugar, incluso si no está cerca de su habitual "cola de la caja." Esto les ahorra tiempo a todos y hace que la vida más fácil para los miembros del personal.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Funciona con tu equipo</div>
                        Clover Flex es compatible con una amplia gama de diferentes complementos de terminal, incluidos escáneres, básculas y otro hardware de Clover.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Reciba el pago, incluso cuando su red esté desconectada.</div>
                        ¿Internet defectuoso? No hay problema. Clover Flex tiene un software que mantiene registros de los pagos y los transmite cuando su Internet vuelve a estar en línea.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Firma tus preocupaciones.</div>
                        Las firmas de papel son cosa del pasado con el Clover Flex. Nuestro software almacena las firmas digitalmente, lo que hace que la necesidad de un bolígrafo a mano sea obsoleta.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Lotes automáticos.</div>
                        Un paso menos en el proceso de cierre de fin de día.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Terminal de pago virtual.</div>
                        El portal de pago virtual basado en la web permite completar transacciones incluso estando fuera del dispositivo.
                    </li>
                    <li class="checked-list-item">
                        <svg class="icon">
                            <use xlink:href="css/fonts/icons.svg#checkmark"></use>
                        </svg>
                        <div class="checked-list-item-header">Mejor conectividad que nunca.</div>
                        Con la conectividad inalámbrica 3G de Clover, nunca tienes que preocuparte de que tu Internet sea difícil.
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

            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <h3>Firma tus <span class="text-color-01">preocupaciones</span>.</h3>
                            <p>Con capacidad de pantalla táctil, no más bolígrafo y papel, ni recibos perdidos. Todo se captura y almacena digitalmente en tu panel de control de trébol.</p>
                        </div>

                        <div class="col-12 col-md-6 clover-flex-block-img-margins text-center text-md-left">
                            <img src="img/features-flex-06.png" width="1360" height="765" alt="Firma tus preocupaciones">
                        </div>
                    </div>
                </div>
            </div>

            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 order-md-1">
                            <h3>Recibo <span class="text-color-01">listo.</span></h3>
                            <p>Para los clientes que prefieren un recibo en papel para su transacción, Clover Flex es uno de los pocos dispositivos de su clase que ofrece la comodidad de una impresora integrada. Las opciones para enviar el recibo por correo electrónico o un mensaje de texto también están siempre disponibles.</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="img/features-flex-02.png" width="578" height="381" alt="Recibo listo" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="clover-flex-block block-mb-xlg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <h3>Inventario <span class="text-color-01">simplificado.</span></h3>
                            <p>Clover Flex es increíble para la gestión de inventarios. Con una cámara integrada que actúa como escáner, escanear y clasificar el inventario es muy fácil. Combinados con su exclusiva herramienta de gestión de inventario, Clover Cloud y Clover Flex son el dúo definitivo para las empresas que necesitan control sobre su inventario.</p>
                        </div>

                        <div class="col-12 col-md-6 clover-flex-block-img-margins text-center text-md-left">
                            <img src="img/features-flex-01.png" width="568" height="448" alt="Inventario simplificado" />
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
                                <td>1,6 GHz Quad Core A7</td>
                            </tr>
                            <tr>
                                <td>PANTALLA</td>
                                <td>Antimicrobiano Corning® Gorilla® Glass; pantalla HD de 5 pulgadas con una pantalla LCD a color de 1280 x 720 para obtener imágenes claras y nítidas</td>
                            </tr>
                            <tr>
                                <td>CONECTIVIDAD</td>
                                <td>LTE y WiFi habilitados, Ethernet</td>
                            </tr>
                            <tr>
                                <td>SEGURIDAD</td>
                                <td>PCI PTS V5.0</td>
                            </tr>
                            <tr>
                                <td>MEMORIA</td>
                                <td>1 GB DE RAM, 8 GB DE ROM</td>
                            </tr>
                            <tr>
                                <td>DURACIÓN DE LA BATERÍA</td>
                                <td>Permite hasta 8 horas de uso para una pymes típica (iones de litio 15,56 Wh, 2100 mAh a 7,6 V)</td>
                            </tr>
                            <tr>
                                <td>FUNCIONES INTEGRADAS</td>
                                <td>Impresora de recibos, escáner/cámara de códigos de barras 1D/2D</td>
                            </tr>
                            <tr>
                                <td>FIRMA ELECTRÓNICA</td>
                                <td>Acepta firmas electrónicas en pantalla; correos electrónicos, textos y almacena recibos digitales</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </section>

        <div class="cta-wrap bg-gradient-01">
          <div class="cta-img"><img src="img/img-flex.png" alt=""></div>
          <div class="container">
            <div class="cta-container row align-items-center">
              <div class="col-12 col-md-6 ml-auto col-12 col-md-6 ml-auto text-center text-md-left">
                <p class="block-mb-sm wrap-br-04 text-color-03 cta-container-text"><strong>Elíjanos como tu socio para ayudarte <span class="text-color-01">a dirigir tu negocio</span> de manera más eficiente y mejorar tus resultados.</strong></p>
                <div class="cta-info-btn d-inline-flex align-items-center">
                  <div class="col-auto"><a href="quick-start" class="btn">empieza ahora<span></span></a></div>
                    <div class="col-auto cta-info">$49.99/mes</div>
                </div>
              </div>
            </div>
          </div>
          <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-01.png" alt=""></div></div></div>
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

        <section id="section-faq" class="section-faq">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2 class="section-title">Preguntas <span class="text-color-01">frecuentes</span></h2>
            </div>

            <div class="collapse-info-wrap block-maw-01">

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Puedo llevar esto a cualquier parte?</div>
                <div class="ciw-item-info"><p>Al habilitar la tarjeta SIM interna, Clover Flex puede funcionar en cualquier lugar donde se pueda obtener señal de teléfono celular.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Cuánto dura la batería?</div>
                <div class="ciw-item-info"><p>La batería puede durar hasta 12 horas de uso constante antes de necesitar una carga rápida.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Qué pasa si se me cae?</div>
                <div class="ciw-item-info"><p>Clover Flex tiene una garantía completa.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Puede ejecutar mi inventario?</div>
                <div class="ciw-item-info"><p>Clover Flex puede ejecutar el inventario de su empresa. A través de aplicaciones de terceros, puede administrar su inventario en su dispositivo y su cuenta en la nube.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Tiene informes en línea?</div>
                <div class="ciw-item-info"><p>Clover Flex está basado en la nube. Le permite ver informes en tiempo real, en cualquier parte del mundo, siempre que tenga acceso a Internet.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Qué tan seguro es?</div>
                <div class="ciw-item-info"><p>Clover Flex está completamente encriptado y es 100 % compatible con PCI.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Cómo se sincroniza con mis QuickBooks?</div>
                <div class="ciw-item-info"><p>Simplemente descargue la aplicación QuickBooks para una integración perfecta con su cuenta de QuickBooks.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿A quién llamo para obtener ayuda?</div>
                <div class="ciw-item-info"><p>El soporte de Clover Flex está disponible 24/7.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">Que rápido obtengo mis depósitos</div>
                <div class="ciw-item-info"><p>Los fondos se depositan el siguiente día hábil.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">¿Qué tan rápido es para tomar pagos?</div>
                <div class="ciw-item-info"><p>Clover Flex puede procesar transacciones en 1,9 segundos.</p></div>
              </div>

            </div>
          </div>
        </section>

        <section class="section-solutions">
          <div class="container">
            <div class="other-devices">
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
