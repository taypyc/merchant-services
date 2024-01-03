<?php
require_once "php/scripts/view.class.php";

$view = new ViewControl();
$view->page_start("B2B Funding");
?>

      <div role="main" class="main">
        <section class="hero">
          <div class="container">
            <div class="hero-content-wrap">
              <div>
                <h1>¡Logramos que la financiación de negocios sea absolutamente simple!</h1>
                <ul class="circle-check-bullets">
                  <li>Pre-aprobación instantánea en segundos</li>
                  <li>Dinero depositado el mismo día</li>
                  <li>Seguro, protegido y confidencial</li>
                </ul>
                <a href="https://merchantservices.secure.force.com/B2BApplicationForm " class="btn">Get started now</a>
              </div>
            </div>
          </div>
        </section>
        
        <section class="steps-section" id="our-process">
          <div class="container">
            <h2>Nuestro Proceso</h2>
            <div class="steps-wrap">
              <div class="sw-item">
                <div class="swi-img" style="background-image:url(img/process-01.png)"></div>
                <h4>Aplique para un préstamo</h4>
                <p>Llene y envíe el formulario de solicitud por internet. <br>
                Simplemente tomará unos minutos y no hay obligación ni honorarios. <br>
                <a href="#start-now" class="form-popup icon-link">Empiece ahora <i class="material-icons">keyboard_arrow_right</i></a></p>
              </div>
              
              <div class="sw-item">
                <div class="swi-img" style="background-image:url(img/process-02.png)"></div>
                <h4>Reciba una pre-aprobación el mismo día</h4>
                <p>Una vez que nuestros representantes revisen su solicitud por internet, se le ofrecerá la tasa de financiación el mismo día. <br>
                Le informaremos sobre las mejores tarifas y condiciones para su solicitud de financiación lo antes posible.</p>
              </div>
              
              <div class="sw-item">
                <div class="swi-img" style="background-image:url(img/process-03.png)"></div>
                <h4>Financiamiento</h4>
                <p>Usted recibirá su dinero de financiación dentro de unos días. <br>
                Esto completará su solicitud de financiamiento con nosotros. <br>
                ¡Así que obtenga fondos hoy!</p>
              </div>
            </div>
            <div class="cta-btn-wrap"><a href="#start-now" class="btn form-popup">Empiece ahora</a></div>
          </div>
        </section>
        
        <section class="icon-info-section" id="qualify" style="background-image:url(img/qualify-bg.jpg)">
          <div class="container">
            <h2>¿Califica mi negocio?</h2>
            <p class="sub-header-sm">Nuestros requisitos para la financiación son simples y sencillos. <br>
            Deberá cumplir con los siguientes criterios mínimos:</p>
            <div class="icon-info-wrap row">
              <div class="col-xs-4">
                <div class="iiw-icon"><i class="material-icons">check</i></div>
                <h4>Debe ser dueño de un negocio</h4>
              </div>
              <div class="col-xs-4">
                <div class="iiw-icon"><i class="material-icons">check</i></div>
                <h4>Su negocio debe haber sido incorporado hace por lo menos 4 meses</h4>
              </div>
              <div class="col-xs-4">
                <div class="iiw-icon"><i class="material-icons">check</i></div>
                <h4>Su negocio debe ganar 10.000 dólares o más al año en ingresos</h4>
              </div>
            </div>
            <p>Su negocio será financiado por nosotros, incluso si un banco se ha negado a financiarlo o si no tiene un plan de negocios o alguna garantía.<br> 
            Creemos en la aprobación de un negocio mirando a los datos de la vida real del negocio y no sólo la puntuación de crédito.</p>
          </div>
        </section>
        
        <section class="border-tile-section" id="funding-programs">
          <div class="container">
            <h2 class="header-small">Programas de financiamiento</h2>
            <p class="sub-header">Dos Programas Flexibles de Financiamiento</p>
            <div class="bt-wrap row">
              <div class="col-xs-6">
                <div class="border-tile">
                  <div class="bt-header"></div>
                  <div class="bt-body">
                    <div class="btb-info">
                      <h5>Dinero en efectivo para el comerciante (MCA)</h5>
                      <p>El monto de aprobación se basa en su volumen de procesamiento mensual de comercio.</p>
                      <p>Compramos sus futuros créditos de procesamiento mercantil con un descuento, proporcionándole fondos hoy mismo.</p>
                      <ul>
                        <li>Utilice su cuenta de procesamiento mercantil para pagar el anticipo.</li>
                        <li>Los montos de aprobación se determinan usando los últimos 4 meses de procesamiento mercantil y estados de cuenta bancarios junto con la información comercial de su solicitud.</li>
                        <li>Usted es elegible para refinanciar cuando haya pagado el 60% de su cantidad total de pago.</li>
                      </ul>
                    </div>
                    <a href="#start-now" class="form-popup icon-link" data-program="MCA">Empiece ahora <i class="material-icons">keyboard_arrow_right</i></a>
                  </div>
                </div>
              </div>
              
              <div class="col-xs-6">
                <div class="border-tile">
                  <div class="bt-header"></div>
                  <div class="bt-body">
                    <div class="btb-info">
                      <h5>Anticipo de Depósito Total (TDA)</h5>
                      <p>El monto de aprobación se basa en su volumen de depósito de cuenta corriente mensual.</p>
                      <ul>
                        <li>Compramos sus futuros depósitos bancarios con un descuento, proporcionándole fondos hoy mismo. </li>
                        <li>Utilice sus cuentas por cobrar futuras para pagar el anticipo.</li>
                        <li>Los montos de aprobación se determinan usando los últimos 4 meses de sus estados de cuenta bancarios junto con la información comercial de su solicitud.</li>
                        <li>Los anticipos se reembolsan con un retiro fijo y automático de la cámara de compensación de su cuenta de cheques solamente de lunes a viernes.</li>
                        <li>Usted es elegible para refinanciar cuando haya pagado el 60% del monto total del reembolso.</li>
                      </ul>
                    </div>
                    <a href="#start-now" class="form-popup icon-link" data-program="TDA">Empiece ahora <i class="material-icons">keyboard_arrow_right</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="info-section" id="about-us" style="background-image:url(img/about-bg.png)">
          <div class="container">
            <h2>Sobre nosotros</h2>
            <div class="row is-wrap">
              <div class="col-md-6">
                <h3>Nuestro objetivo es simple. ¡Estamos aquí para financiar sus metas de negocio!</h3>
              </div>
              <div class="col-md-3 col-xs-6">
                <h6>Nuestra filosofía</h6>
                <p>Aspiramos a proporcionarle las mejores alternativas de financiamiento basadas en el potencial y la fortaleza financiera de su negocio. No nos importa si el banco se ha negado a proporcionarle asistencia financiera. Nunca le pediremos ninguna garantía personal, sino que le ofrecemos opciones de reembolso flexibles. Nos esforzamos constantemente por ofrecerle la experiencia más innovadora, sencilla y rápida.</p>
              </div>
              <div class="col-md-3 col-xs-6">
                <h6>¿Por qué existimos?</h6>
                <p>Nuestra compañía está compuesta por algunos de los vendedores más inteligentes, enfocados, y acertados en el mundo. Somos apasionados por los negocios, y sabemos cuánto trabajo se necesita para hacer que una empresa tenga éxito. Queremos ver más dueños de negocios lograr sus sueños, y queremos ver crecer al mundo de los negocios. Por eso estamos aquí para ayudar.</p>
              </div>
            </div>
          </div>
        </section>
        
        <?php $view->show_contact_tile(); ?>
      </div>
      
      <div class="zoom-anim-dialog form-dialog form-tile mfp-hide" id="start-now">
        <h4>Obtenga una aprobación previa para recibir hasta $500,000</h4>
        <p>Por favor, rellene el siguiente formulario</p>
        <form class="contact-form">
          <input type=hidden name="lang" value="es">

          <div class="form-group">
            <input type="text" class="form-control" name="name" required>
            <span class="m_placeholder">Nombre completo</span>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" required maxlength="80">
            <span class="m_placeholder">Email</span>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" required maxlength="40">
            <span class="m_placeholder">Número de teléfono</span>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="company" required maxlength="40">
            <span class="m_placeholder">Empresa</span>
          </div>
          <input type="hidden" name="program">
          <div class="form-group fg-mt">
            <button type="submit" class="btn" data-loading-text="Processing…">Empiece ahora</button>
          </div>
        </form>
      </div>

<?php
$view->page_end();
?>