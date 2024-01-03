<?php
require_once 'php/scripts/Loader.php';
$dapp = Loader::require_dapp();
require_once 'php/scripts/view.class.php';
$view = new ViewControl();

$monthly_sales_options = ['$0 - $4,999', '$5,000 - $9,999', '$10,000 - $24,999', '$25,000 - $49,999', '$50,000 - $99,999', '$100,000 - $249,999', '$250,000+'];

$monthly_sales_options_markup = '';
foreach($monthly_sales_options as $monthly_sales_option) {
  $monthly_sales_options_markup .= '<option value="' . $monthly_sales_option .  '">' . $monthly_sales_option . '</option>';
}

$view->page_start(array('title' => "B2B Funding"));
?>

      <div role="main" class="main">

        <section class="hero">
          <div class="container">
            <div class="row row-col">
              <div class="col-sm-7 h-info-wrap">
                <h3>¡Logramos que el acceso <br>a capital para su negocio <br>sea absolutamente simple!</h3>
                <ul class="list-disc">
                  <li>Pre-aprobación instantánea en segundos</li>
                  <li>Dinero depositado el mismo día</li>
                  <li>Seguro, protegido y confidencial</li>
                </ul>
              </div>
              <div class="col-sm-5 hero-form-wrap">
                <div class="hero-form">
                  <div class="form-tile">
                    <div class="ft-desc-lg text-center">
                        <h5>Obtenga una <br>aprobación previa para <nr>recibir hasta $500,000</h5>
                        <p class="sub-header">Por favor, rellene el siguiente formulario</p>
                      </div>
                      <div class="ft-desc">
                        <div class="ftd-header">Obtenga una <br>aprobación previa para <br>recibir hasta $500,000</div>
                        <div class="triangle-down"></div>
                      </div>
                    <form class="contact-form fields-bordered">
                      <div class="form-group">
                        <input type="text" class="form-control" name="owner_name" required data-field-string placeholder="Nombre del Cliente*">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" name="owner_1_cell_phone" required data-field-string placeholder="Teléfono Celular*">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="owner_1_email" required data-field-string placeholder="Correo Electrónico*">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="business_name" required data-field-string placeholder="Nombre del Negocio*">
                      </div>
                      <div class="form-group">
                        <select name="monthly_sales" class="form-control select-item" required style="width: 100%;" data-select-placeholder="Depósitos Promedio Mensual*">
                          <option value="">Depósitos Promedio Mensual*</option>
                          <?php echo $monthly_sales_options_markup; ?>
                        </select>
                      </div>
                      <div class="form-group fg-btn">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="step" value="0">
                        <input type="hidden" name="step_short" value="">
                        <input type="hidden" name="owner_1_first_name" value="">
                        <input type="hidden" name="owner_1_last_name" value="">
                        <button class="btn btn-blue" type="submit" data-loading-text="Cargando…">Para más info conéctate</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
        
        <section class="bg-grey section-info">
          <div class="container">
            <div class="row row-col">
              <div class="col-sm-7 additional-information-wrap">
                <h5>Nuestro Proceso</h5>
                <div class="row heading-info-wrap">
                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">1</div>
                      <div class="hiwh-item">Aplique para <br>acceso a capital</div>
                    </div>
                    <div class="hiw-body">Llene y envíe el formulario de solicitud por internet. Simplemente tomará unos minutos y no hay obligación ni honorarios. </div>
                  </div>

                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">2</div>
                      <div class="hiwh-item">Pre-aprobación <br>el mismo día</div>
                    </div>
                    <div class="hiw-body">Una vez que nuestros representantes revisen su solicitud por internet, se le ofrecerá la tasa de financiación el mismo día.</div>
                  </div>

                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">3</div>
                      <div class="hiwh-item">Accede a <br>Capital</div>
                    </div>
                    <div class="hiw-body">Usted recibirá su dinero de financiación dentro de unos días. Esto completará su solicitud de financiamiento con nosotros. ¡Así que obtenga fondos hoy!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>

<?php
$view->page_end();
?>