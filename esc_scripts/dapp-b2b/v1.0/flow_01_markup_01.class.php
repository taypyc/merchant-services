<?php
class Markup {
  public $site_root;
  public $page;
  
  public function __construct($settings = []) {
    $this->site_root = getenv('SITE_ROOT');
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
  }

  public function build_header_signup($settings) {
    $header_body_css = array_key_exists('header_body_css', $settings) ? $settings['header_body_css'] : '';
    $header_logo = array_key_exists('header_logo', $settings) ? $settings['header_logo'] : 'img/logo.svg';

    return <<<EOD

      <header id="header">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters{$header_body_css}">
            <div class="hb-logo col-auto">
              <a href="{$this->site_root}"><img src="{$header_logo}" alt=""></a>
            </div>

            <!--<div class="hb-phone col-auto ml-auto">
              <span>CONTACTÉNOS</span>
              <a href="tel:8003750602"><svg class="icon icon-phone"><use xlink:href="css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">800-375-0602</span></a>
            </div>-->
          </div>
        </div>
      </header>
EOD;
  }

  public function get_form_signup($continue_signup_data) {
    $form_continue_attr = '';
    $business_dba_name = '';
    $owner_1_first_name = '';
    $owner_1_last_name = '';
    $business_phone = '';
    $monthly_sales = '';

    $data_crm = $continue_signup_data['data_crm'];
    $id = $continue_signup_data['id'];
    $current_step = $continue_signup_data['current_step'];

    if(count($data_crm) > 0) {
      $form_continue_attr = ' data-form-cs';

      if(array_key_exists('business_dba', $data_crm) && strlen($data_crm['business_dba']) > 0) {
        $business_dba_name = $data_crm['business_dba'];
      }

      if(array_key_exists('owner_1_first_name', $data_crm) && strlen($data_crm['owner_1_first_name']) > 0) {
        $owner_1_first_name = $data_crm['owner_1_first_name'];
      }

      if(array_key_exists('owner_1_last_name', $data_crm) && strlen($data_crm['owner_1_last_name']) > 0) {
        $owner_1_last_name = $data_crm['owner_1_last_name'];
      }

      if(array_key_exists('business_phone', $data_crm) && strlen($data_crm['business_phone']) > 0) {
        $business_phone = $data_crm['business_phone'];
      }

      if(array_key_exists('monthly_sales', $data_crm) && strlen($data_crm['monthly_sales']) > 0) {
        $monthly_sales = $data_crm['monthly_sales'];
      }
    }

    $monthly_sales_options = ['$0 - $4,999', '$5,000 - $9,999', '$10,000 - $24,999', '$25,000 - $49,999', '$50,000 - $99,999', '$100,000 - $249,999', '$250,000+',
    ];

    $monthly_sales_options_markup = '';
    foreach($monthly_sales_options as $monthly_sales_option) {
      $monthly_sales_option_selected = $monthly_sales == $monthly_sales_option ? ' selected' : '';
      $monthly_sales_options_markup .= '<option value="' . $monthly_sales_option .  '"' . $monthly_sales_option_selected . '>' . $monthly_sales_option . '</option>';
    }

    return <<<EOD

              <div class="application-form-wrap">
                <div class="afw-steps-progress">
                  <div class="d-flex">
                    <div class="asp-item">Calificar</div>
                    <div class="asp-item">Info del Negocio</div>
                    <div class="asp-item">Info Personal</div>
                    <div class="asp-item">Paso Final</div>
                  </div>
                </div>
                <form class="form-application application-form-steps" {$form_continue_attr}>
                  <!-- STEP 0 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Verifica si tu negocio qualifica para obtener hasta $500,000!</h4>
                        <p class="sub-header">Por favor, llene el siguiente formulario</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Nombre del Negocio</label>
                        <input type="text" name="business_name" class="form-control" data-field-string placeholder="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <!--<div class="col-12 col-md-6">
                        <label>Año de Comienzo del Negocio</label>
                        <select name="business_time" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="0-3 Months">0-3 Meses</option>
                          <option value="4 months – 1 year">4 Meses – 1 Años</option>
                          <option value="1-3 Years">1-3 Años</option>
                          <option value="3-5 Years">3-5 Años</option>
                          <option value="5-10 Years">5-10 Años</option>
                          <option value="10+ Years">10+ Años</option>
                        </select>
                      </div>-->
                      <div class="col-12 col-md-6">
                        <label>Nombre del Cliente</label>
                        <input type="text" name="owner_name" class="form-control" data-field-string placeholder="">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Depósitos Promedio Mensual</label>
                        <select name="monthly_sales" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          {$monthly_sales_options_markup}
                        </select>
                        <p class="field-description">Promedio de depósitos mensuales</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Teléfono Celular</label>
                        <input type="tel" name="owner_1_cell_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Correo Electrónico</label>
                        <input type="email" name="owner_1_email" class="form-control" placeholder="correo@email.com">
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">Al hacer clic en "SOMETER", usted acepta los Términos de solicitud y recibir llamadas y mensajes, incluidas las llamadas automáticas o pregrabadas para fines de marketing, de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según lo dispuesto en la Política de privacidad.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">Someter</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 1 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Felicidades, usted califica para obtener hasta <span id="qualify-result">$250,000</span>!</h4>
                        <p class="sub-header">Por favor termina de llenar la solicitud para verificar las opciones financieras que puede tener</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Nombre Legal de la Corporación</label>
                        <input type="text" name="business_legal_name" class="form-control" data-field-string value="{$business_dba_name}">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Industria</label>
                        <select name="industry_type" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="Retail">Venta al Detal</option>
                          <option value="Rastaurant">Restaurante</option>
                          <option value="Service">Servicio</option>
                          <option value="Auto">Auto</option>
                          <option value="Construction">Construcción</option>
                          <option value="Wholesale">Venta al Por Mayor</option>
                          <option value="Other">Otro</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Cuanto Dinero Necesita?</label>
                        <input type="tel" name="amount_requested" class="form-control" data-mask-money>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Para que Utilizaría el Préstamo?</label>
                        <select name="amount_requested_for" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="Expansión o Renovación">Expansión o Renovación</option>
                          <option value="Compra de Equipos">Compra de Equipos</option>
                          <option value="Inventario o Materiales">Inventario o Materiales</option>
                          <option value="Abrir Nueva Localidad">Abrir Nueva Localidad</option>
                          <option value="Comprar Parte al Socio">Comprar Parte al Socio</option>
                          <option value="Otro">Otro</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Número de Teléfono del Negocio</label>
                        <input type="tel" name="business_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone value="{$business_phone}">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Página Internet/Facebook</label>
                        <input type="text" name="website" class="form-control" data-mask-url>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Está su negocio en Bancarrota o en Proceso?</label>
                        <select name="bankruptcy" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="No">No</option>
                          <option value="Yes">Sí</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>La sede de su negocio es desde su casa?</label>
                        <select name="work_from_home" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="No">No</option>
                          <option value="Yes">Sí</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Dirección Física del Negocio</label>
                        <input type="text" name="physical_address" class="form-control" data-field-string data-field-address>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Ciudad</label>
                        <input type="text" name="physical_city" class="form-control" data-field-string data-field-address>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Estado</label>
                        <select name="physical_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                            {$this->get_states_select_options()}
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Código Postal</label>
                        <input type="tel" name="physical_zip" class="form-control" placeholder="00000" data-mask-zip>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <div class="check-wrap">
                          <label class="label-checkbox"><input type="checkbox" name="different_mailing_address" value="Yes" data-collapsable-elem="#signup-business-mailing-address"><i></i>Dirección Postal Adicional</label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-conditional-fields-wrap" id="signup-business-mailing-address">
                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Dirección Postal del Negocio</label>
                          <input type="text" name="mailing_address" class="form-control" data-field-string data-field-address>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Ciudad</label>
                          <input type="text" name="mailing_city" class="form-control" data-field-string data-field-address>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Estado</label>
                          <select name="mailing_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                              {$this->get_states_select_options()}
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Código Postal</label>
                          <input type="tel" name="mailing_zip" class="form-control" placeholder="00000" data-mask-zip>
                        </div>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">Al hacer clic en "SOMETER", usted acepta los Términos de solicitud y recibir llamadas y mensajes, incluidas las llamadas automáticas o pregrabadas para fines de marketing, de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según lo dispuesto en la Política de privacidad.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">Someter</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 2 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Información Personal</h4>
                        <p class="sub-header">Por favor, llene el siguiente formulario</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Nombre del Cliente</label>
                        <input type="text" name="owner_1_first_name" class="form-control" data-field-string value="{$owner_1_first_name}">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Apellido del Cliente</label>
                        <input type="text" name="owner_1_last_name" class="form-control" data-field-string value="{$owner_1_last_name}">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Fecha de Nacimiento</label>
                        <input type="tel" name="owner_1_dob" class="form-control" placeholder="MM/DD/YYYY" data-mask-date>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Número de Seguro Social</label>
                        <input type="tel" name="owner_1_ssn" class="form-control" placeholder="000-00-0000" data-mask-ssn>
                        <p class="field-description">Verificaremos su crédito pero el mismo no será afectado</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Dirección de su Casa</label>
                        <input type="text" name="owner_1_address" class="form-control" data-field-string data-field-address>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Ciudad</label>
                        <input type="text" name="owner_1_city" class="form-control" data-field-string data-field-city>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Estado</label>
                        <select name="owner_1_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                          {$this->get_states_select_options()}
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Código Postal</label>
                        <input type="tel" name="owner_1_zip" class="form-control" placeholder="00000" data-mask-zip>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Título</label>
                        <select name="owner_1_title" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione...">
                          <option value="">Seleccione...</option>
                          <option value="Dueño">Dueño</option>
                          <option value="Socio">Socio</option>
                          <option value="Presidente">Presidente</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Años como Dueño</label>
                        <select name="owner_1_own_years" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione...">
                          <option value="">Seleccione...</option>
                          <option value="<0.5"><0.5</option>
                          <option value="0.5-1">0.5-1</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10+">10+</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>% Dueño</label>
                        <input type="tel" name="owner_1_own" class="form-control" data-mask-percentage data-collapsable-elem="#signup-owner-2">
                      </div>
                    </div>

                    <div class="form-conditional-fields-wrap" id="signup-owner-2">
                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Nombre del Socio</label>
                          <input type="text" name="owner_2_first_name" class="form-control" data-field-string>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Apellido del Socio</label>
                          <input type="text" name="owner_2_last_name" class="form-control" data-field-string>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Fecha de Nacimiento del Socio</label>
                          <input type="tel" name="owner_2_dob" class="form-control" placeholder="MM/DD/YYYY" data-mask-date>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Número de Seguro Social del Socio</label>
                          <input type="tel" name="owner_2_ssn" class="form-control" placeholder="000-00-0000" data-mask-ssn>
                          <p class="field-description">Verificaremos su crédito pero el mismo no será afectado</p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Teléfono Celular del Socio</label>
                          <input type="tel" name="owner_2_cell_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Correo Electrónico del Socio</label>
                          <input type="email" name="owner_2_email" class="form-control" placeholder="nombre@email.com">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Dirección de su Casa del Socio</label>
                          <input type="text" name="owner_2_address" class="form-control" data-field-string data-field-address>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Ciudad</label>
                          <input type="text" name="owner_2_city" class="form-control" data-field-string data-field-city>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Estado</label>
                          <select name="owner_2_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                            {$this->get_states_select_options()}
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Código Postal</label>
                          <input type="tel" name="owner_2_zip" class="form-control" placeholder="00000" data-mask-zip>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Título del Socio</label>
                          <select name="owner_2_title" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione...">
                            <option value="">Seleccione...</option>
                            <option value="Dueño">Dueño</option>
                            <option value="Socio">Socio</option>
                            <option value="Presidente">Presidente</option>
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Años como Dueño del Socio</label>
                          <select name="owner_2_own_years" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione...">
                            <option value="">Seleccione...</option>
                            <option value="<0.5"><0.5</option>
                            <option value="0.5-1">0.5-1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10+">10+</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>% Dueño del Socio</label>
                          <input type="tel" name="owner_2_own" class="form-control" data-mask-percentage>
                        </div>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">Al hacer clic en "Próximo Paso", usted acepta los Términos de solicitud y recibir llamadas y mensajes, incluidas las llamadas automáticas o pregrabadas para fines de marketing, de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según lo dispuesto en la Política de privacidad.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">Próximo Paso</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 3 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Información Adicional del Negocio</h4>
                        <p class="sub-header">Por favor, llene el siguiente formulario</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Identidad del Negocio</label>
                        <select name="entity_type" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione...">
                          <option value="">Seleccione...</option>
                          <option value="Corporation">Corporación</option>
                          <option value="Partnership">Sociedad</option>
                          <option value="Sole Proprietorship">Dueño</option>
                          <option value="LLC">LLC</option>
                          <option value="Others">Otro</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Estado donde fué Incorparado</label>
                        <select name="state_incorporation" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                            {$this->get_states_select_options()}
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Propiedad de Negocio es Rentada o Propia?</label>
                        <select name="property_ownership" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione...">
                          <option value="">Seleccione...</option>
                          <option value="Own">Dueño</option>
                          <option value="Rent">Alquilado</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Número de Seguro Social Patronal</label>
                        <input type="tel" name="tax_id" class="form-control" placeholder="00-0000000" data-mask-tax>
                        <p class="field-description">Para validar que es un negocio existente</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Año de Comienzo del Negocio</label>
                        <input type="tel" name="business_started_date" class="form-control" placeholder="MM/DD/YYYY" data-mask-date>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Compañía de Adelanto de Dinero Actual</label>
                        <select name="actual_cash_advance_company" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="No">No</option>
                          <option value="Yes">Sí</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Balance Actual Aproximado</label>
                        <input type="tel" name="actual_balance" class="form-control" data-mask-money>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Tiene Línea de Credito con el Banco?</label>
                        <select name="bank_credit" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="No">No</option>
                          <option value="Yes">Sí</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Línea de Credito</label>
                        <input type="tel" name="line_of_credit" class="form-control" data-mask-money>
                      </div>
                    </div>

                    <!--<div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Acepta tarjetas de Crédito?</label>
                        <select name="accept_credit_cards" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="No">No</option>
                          <option value="Yes">Sí</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Promedio Mensual</label>
                        <input type="tel" name="monthly_total_sales" class="form-control" data-mask-money>
                      </div>
                    </div>-->

                    <!--<div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Nombre de la Compañía Procesadora</label>
                        <select name="processing_company" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione..." value="">
                          <option value="">Seleccione...</option>
                          <option value="First Data">First Data</option>
                          <option value="Moneris">Moneris</option>
                          <option value="Chase Payment Tech">Chase Payment Tech</option>
                          <option value="TD Merchant Services">TD Merchant Services</option>
                          <option value="Elavon">Elavon</option>
                          <option value="Dejardins">Dejardins</option>
                          <option value="Global Payment">Global Payment</option>
                          <option value="PayPal">PayPal</option>
                          <option value="Square">Square</option>
                          <option value="Stripe">Stripe</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>-->

                    <input type="hidden" name="id" value="{$id}">
                    <input type="hidden" name="step" value="{$current_step}">

                    <p class="sub-header">Una vez uno de nuestros representantes verifica su solicitud, usted podrá hacer cualquier modificación necesaria</p>

                    <div class="fa-step-information">
                      <h5>Paso Final</h5>
                      <p>Felicidades por haber creado su perfil! Para finaliza su solicitud, por favor firme el docuemento en la próxima página. <strong>No se preocupe: es gratis</strong> y un especialista le contactará para explicarle todo antes de procesar sus documentos.</p>
                    </div>

                    <div class="form-group fg-btn row" id="fg-btn-submit">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">Al hacer clic en "SOMETER", usted acepta los Términos de solicitud y recibir llamadas y mensajes, incluidas las llamadas automáticas o pregrabadas para fines de marketing, de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según lo dispuesto en la Política de privacidad.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="submit" data-loading-content="Procesando..." class="btn btn-lg" disabled>Someter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
EOD;
  }

  public function get_states_select_options() {
    return <<<EOD
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Alabama">Alabama</option>
                              <option value="Alaska">Alaska</option>
                              <option value="Arizona">Arizona</option>
                              <option value="Arkansas">Arkansas</option>
                              <option value="California">California</option>
                              <option value="Colorado">Colorado</option>
                              <option value="Connecticut">Connecticut</option>
                              <option value="Delaware">Delaware</option>
                              <option value="Florida">Florida</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Hawaii">Hawaii</option>
                              <option value="Idaho">Idaho</option>
                              <option value="Illinois">Illinois</option>
                              <option value="Indiana">Indiana</option>
                              <option value="Iowa">Iowa</option>
                              <option value="Kansas">Kansas</option>
                              <option value="Kentucky">Kentucky</option>
                              <option value="Louisiana">Louisiana</option>
                              <option value="Maine">Maine</option>
                              <option value="Maryland">Maryland</option>
                              <option value="Massachusetts">Massachusetts</option>
                              <option value="Michigan">Michigan</option>
                              <option value="Minnesota">Minnesota</option>
                              <option value="Mississippi">Mississippi</option>
                              <option value="Missouri">Missouri</option>
                              <option value="Montana">Montana</option>
                              <option value="Nebraska">Nebraska</option>
                              <option value="Nevada">Nevada</option>
                              <option value="New Hampshire">New Hampshire</option>
                              <option value="New Jersey">New Jersey</option>
                              <option value="New Mexico">New Mexico</option>
                              <option value="New York">New York</option>
                              <option value="North Carolina">North Carolina</option>
                              <option value="North Dakota">North Dakota</option>
                              <option value="Ohio">Ohio</option>
                              <option value="Oklahoma">Oklahoma</option>
                              <option value="Oregon">Oregon</option>
                              <option value="Pennsylvania">Pennsylvania</option>
                              <option value="Rhode Island">Rhode Island</option>
                              <option value="South Carolina">South Carolina</option>
                              <option value="South Dakota">South Dakota</option>
                              <option value="Tennessee">Tennessee</option>
                              <option value="Texas">Texas</option>
                              <option value="Utah">Utah</option>
                              <option value="Vermont">Vermont</option>
                              <option value="Virginia">Virginia</option>
                              <option value="Washington">Washington</option>
                              <option value="West Virginia">West Virginia</option>
                              <option value="Wisconsin">Wisconsin</option>
                              <option value="Wyoming">Wyoming</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Yukon">Yukon</option>
                              <option value="Nunavut">Nunavut</option>
EOD;
  }

  public function get_thx_content() {
      if(isset($_GET['qualification'])) {
        $page_content = <<<EOD

        <section class="section-text">
          <div class="container">
            <div class="wrap-01">
              <div class="text-center block-mb-md">
                <h4>En este momento no podemos someter su solicitud debido a que se encuentra en proceso de Bancarrota</h4>
              </div>
              <div class="hero-img-circle"></div>
            </div>
          </div>
        </section>
EOD;
      } else {
        $page_content = <<<EOD

        <section class="section-text">
          <div class="container">
            <div class="wrap-01">
              <div class="text-center block-mb-md">
                <div class="block-mb-xsm"><div class="checkmark-circle"></div></div>
                <h4>Gracias por haber llenado la solicitud, nos estaremos comunicando con usted a la mayor brevedad.</h4>
              </div>
              <div class="hero-img-circle"></div>
            </div>
          </div>
        </section>
EOD;
      }
      

    return $page_content;
  }
}
?>