<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
    'title' => 'B2B Merchants Puerto Rico'
];

if ($_SERVER['REQUEST_URI'] !== $view->site_root) {
    $head_data['meta_tags'] = '<link rel="canonical" href="' . $view->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $view->site_root . '">';
}

$view->page_start($head_data);
?>

<div role="main" class="main block-shadow-02">

    <section class="section-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 text-center text-md-left order-md-1">
                    <p>Bienvenido a B2B Merchants Puerto Rico</p>
                    <h1 class="mb-0 mb-sm-4">Brindamos soluciones<br><span class="text-color-01">innovadoras para su</span><br>negocio</h1>

                    <div class="sh-item-cta block-mb-md d-none d-md-block"><a href="quick-start" class="btn">¡Comience ahora!<span></span></a></div>
                    <div class="line-icons line-icons-01 align-items-center flex-wrap d-none d-md-flex">
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
                <div class="col-12 col-md-5 text-center">
                    <img src="img/mspr-hero.png" width="503" height="580" alt="" />
                    <div class="sh-item-cta block-mb-md d-md-none text-center"><a href="quick-start" class="btn">¡Comience ahora!<span></span></a></div>
                    <div class="line-icons line-icons-01 align-items-center flex-wrap d-flex d-md-none">
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

    <section id="section-services">
        <div class="container">
            <h2 class="section-title"><span class="text-color-01">Nuestros</span> servicios</h2>

            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center text-md-left wrap-03-img order-md-1">
                    <a href="payment-services">
                        <picture>
                            <source media="(max-width: 576px)" srcset="img/services-payment-mobile.png">
                            <img src="img/services-payment.png" alt="Servicios de pago">
                        </picture>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <h3>Servicios de pago</h3>
                    <p>Acepte una amplia gama de pagos en cualquier lugar y en cualquier momento</p>
                    <ul class="benefit__bulletlist brown">
                        <li class="benefit__bulletlist-item">
                            Procesamiento de tarjetas de crédito y débito
                        </li>
                        <li class="benefit__bulletlist-item">
                            Transferencia electrónica de beneficios (EBT)
                        </li>
                        <li class="benefit__bulletlist-item">
                            Pagos ACH
                        </li>
                        <li class="benefit__bulletlist-item">
                            Pagos de cadena de bloques
                        </li>
                    </ul>
                    <a href="payment-services" class="link-angle brown">Lee Mas</a>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center text-md-left wrap-03-img">
                    <a href="merchant-analytics">
                        <picture>
                            <source media="(max-width: 576px)" srcset="img/services-merchant-analytics-mobile.png">
                            <img src="img/services-merchant-analytics.png" alt="Financiamiento Empresarial">
                        </picture>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <h3>Análisis de comerciantes</h3>
                    <p>Comience a rastrear sus ventas diarias en tiempo real</p>
                    <ul class="benefit__bulletlist green">
                        <li class="benefit__bulletlist-item">
                            Acceso en línea a datos transaccionales
                        </li>
                        <li class="benefit__bulletlist-item">
                            Acceso al estado de cuenta mensual
                        </li>
                        <li class="benefit__bulletlist-item">
                            Cuentas por cobrar de tarjetas de crédito e integración de QuickBooks
                        </li>
                        <li class="benefit__bulletlist-item">
                            Datos agregados personalizados para sus informes específicos
                        </li>
                    </ul>
                    <a href="merchant-analytics" class="link-angle green">Lee Mas</a>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-12 col-md-5 text-center text-md-left wrap-03-img order-md-1">
                    <a href="business-financing">
                        <picture class="ml-xl-n5">
                            <source media="(max-width: 576px)" srcset="img/services-business-financing-mobile.png">
                            <img src="img/services-business-financing.png" alt="Financiamiento Empresarial">
                        </picture>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <h3>Financiamiento Empresarial</h3>
                    <p>Obtenga hasta $ 500,000 para respaldar el crecimiento de su negocio</p>
                    <ul class="benefit__bulletlist blue">
                        <li class="benefit__bulletlist-item">
                            Aprobación rápida hasta $500,000.00
                        </li>
                        <li class="benefit__bulletlist-item">
                            Formulario de solicitud simple de una página
                        </li>
                        <li class="benefit__bulletlist-item">
                            La mayoría de las industrias aceptan
                        </li>
                        <li class="benefit__bulletlist-item">
                            Mal crédito está bien
                        </li>
                        <li class="benefit__bulletlist-item">
                            Sin garantía personal ni colateral
                        </li>
                    </ul>
                    <a href="business-financing" class="link-angle">Lee Mas</a>
                </div>
                <div class="d-none d-md-block col-md-1"></div>
            </div>
        </div>
    </section>

    <section id="section-solutions" class="section-solutions">
        <div class="container">
            <div class="text-center block-mb-md">
                <h2 class="section-title">Nuestras <span class="text-color-01">soluciones</span></h2>
            </div>
            <div class="other-devices">
                <div class="other-devices__item other-devices__item-main">
                    <a href="clover-flex" class="other-devices__item-link">
                        <span class="other-devices__item-img">
                            <img src="img/clover-flex-equal-simple.png" width="262" height="194" alt="Clover Flex" />
                        </span>
                        <div class="other-devices__item-name">Clover® Flex</div>
                    </a>
                </div>
                <div class="other-devices__item other-devices__item-main">
                    <a href="clover-station-duo" class="other-devices__item-link">
                        <span class="other-devices__item-img">
                            <img src="img/clover-duo-equal-simple.png" width="262" height="193" alt="Clover Station Duo" />
                        </span>
                        <div class="other-devices__item-name">Clover® Station Duo</div>
                    </a>
                </div>
                <div class="other-devices__item other-devices__item-main">
                    <a href="clover-mini" class="other-devices__item-link">
                        <span class="other-devices__item-img">
                            <img src="img/clover-mini-equal-simple.png" width="198" height="138" alt="Clover Mini" />
                        </span>
                        <div class="other-devices__item-name">Clover® Mini</div>
                    </a>
                </div>
                <div class="other-devices__item other-devices__item-main">
                    <a href="dejavoo-qd3" class="other-devices__item-link">
                        <span class="other-devices__item-img">
                            <img src="img/dejavoo-qd3-equal-simple.png" width="262" height="193" alt="Dejavoo QD3" />
                        </span>
                        <div class="other-devices__item-name">Dejavoo QD3</div>
                    </a>
                </div>
                <div class="other-devices__item other-devices__item-main">
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

    <section id="section-about" class="section-about">
        <div class="about-us">
            <div class="container">
                <h2 class="section-title _margin0">Sobre <span class="text-color-01">nosotros</span></h2>
                <p class="sub-header block-border-bottom block-border-bottom-01 wrap-br-01 text-center">Entregamos los resultados que necesita y al precio que desea.</p>
                <div class="row row-01 align-items-center about-us-row first">
                    <div class="col-12 col-sm-6 order-sm-1">
                        <h5 class="text-color-light">¿Quienes somos?</h5>
                        <p class="block-mb-md my-sm-0">Nuestra empresa está compuesta por algunos de los vendedores más
                            inteligentes, centrados y exitosos del mundo. Nos apasionan los negocios y sabemos cuánto
                            trabajo se necesita para que una empresa tenga éxito. Queremos ver a más propietarios de
                            empresas alcanzar sus sueños y queremos ver crecer el mundo de los negocios. Es por eso que
                            estamos aquí para ayudar.</p>
                        <p></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 d-md-none"></div>
                            <div class="col-8 col-md-12 text-md-center">
                                <div class="img-wrap green">
                                    <img src="img/about-1.png" width="487" height="308" />
                                </div>
                            </div>
                            <div class="col-2 d-md-none"></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center about-us-row last">
                    <div class="col-12 col-sm-6 order-sm-1">
                        <div class="row">
                            <div class="col-2 d-md-none"></div>
                            <div class="col-8 col-md-12 text-md-center">
                                <p class="img-wrap blue my-sm-0">
                                    <img src="img/about-2.png" width="487" height="308" />
                                </p>
                                <p></p>
                            </div>
                            <div class="col-2 d-md-none"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h5 class="text-color-light">Filosofía empresarial</h5>
                        <p>La clave del éxito de cualquier empresa es su capacidad para adquirir y retener clientes.
                            Esta no es una tarea fácil de hacer. Entendemos las dificultades que enfrentan las grandes
                            corporaciones y las pequeñas empresas cuando se trata de atraer y retener clientes leales, y
                            es por eso que trabajamos incansablemente para ayudar a las empresas a mejorar su alcance.
                            Nuestro objetivo es simple. Queremos ayudarte a tener éxito. Tenemos el conocimiento, las
                            habilidades y la ética de trabajo que su empresa necesita para hacer que las cosas sucedan.
                            Llámenos y podemos ayudarlo a encontrar las soluciones adecuadas para usted hoy.</p>
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
                        <svg class="icon icon-bar-chart">
                            <use xlink:href="css/fonts/icons.svg#cord"></use>
                        </svg>
                        <p class="icon-info-header">Conectividad inteligente.</p>
                        <p>Capaz de usar múltiples conexiones (Wi-Fi, Ethernet o redes celulares) indistintamente dando
                            más flexibilidad.</p>
                    </div>
                </div>
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

    <div class="cta-wrap bg-gradient-01">
        <div class="cta-img index"><img src="img/img-flex.png" alt=""></div>
        <div class="container">
            <div class="cta-container row align-items-center">
                <div class="col-12 col-md-6 ml-auto text-center text-md-left">
                    <h6 class="block-mb-sm wrap-br-04">Elíjanos como su socio para ayudarlo a <span class="text-color-01">administrar su negocio</span> de manera más eficiente y mejorar sus resultados.</h6>
                    <div class="cta-info-btn d-inline-flex align-items-center">
                        <div class="col-auto"><a href="quick-start" class="btn">¡Comience ahora!<span></span></a></div>
                        <div class="col-auto cta-info">$49<sup>.99/mo</sup></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-bg-img-wrap">
            <div class="container">
                <div class="cta-bg-img"><img src="img/cta-bg-01.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="text-divided-info-wrap">
        <div class="container">
            <div class="row text-divided-info wrap-06">
                <div class="col-4">
                    <p class="tdi-intro">TASA BÁSICA</p>
                    <p class="tdi-highlighted">1.29%</p>
                </div>
                <div class="col-4">
                    <p class="tdi-intro">TARIFA BASE DE COSTOS DE<br/>INSTALACIÓN POR ADELANTADO</p>
                    <p class="tdi-highlighted">$0</p>
                </div>
                <div class="col-4">
                    <p class="tdi-intro">TRÉBOL<br/>TIENDA DE APLICACIONES</p>
                    <p class="tdi-highlighted">Incluido</p>
                </div>
            </div>
        </div>
    </div>

    <section id="become-partner" class="become-partner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img text-center order-md-1">
                    <h2 class="section-title d-sm-none">Conviértase en<br><span class="text-color-01">nuestro socio</span></h2>
                    <picture>
                        <source media="(max-width: 576px)" srcset="img/become-our-partner-mobile.jpg">
                        <img src="img/become-our-partner.png" alt="Become Our Partner" />
                    </picture>
                </div>

                <div class="col-12 col-md-6">
                    <h2 class="section-title d-none d-sm-block text-md-left">Conviértase en<br><span class="text-color-01">nuestro socio</span></h2>
                    <p>Obtenga hasta $ 500,000 para respaldar el crecimiento de su negocio</p>
                    <ul class="benefit__bulletlist blue">
                        <li class="benefit__bulletlist-item">
                            <strong>ISO y programa de agentes</strong>
                        </li>
                        <li class="benefit__bulletlist-item">
                            <strong>Programa de anticipo para comerciantes</strong>
                        </li>
                        <li class="benefit__bulletlist-item">
                            <strong>Programa de afiliación</strong>
                        </li>
                    </ul>
                    <div class="sh-item-cta block-mb-sm start">
                        <a href="partners" class="btn">¡Comience ahora!<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
$js = ['start' => '<script src="' . $view->site_root . 'js/polyfills.include.js"></script>'];
$view->page_end($js);
?>
