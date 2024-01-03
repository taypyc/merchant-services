<?php
$form_continue_attr = '';
$field_vars_array = ['business_dba', 'owner_1_first_name', 'owner_1_last_name', 'business_phone', 'monthly_sales', 'plaid_url', 'files_url'];

foreach($field_vars_array as $field_var) {
  $$field_var = '';
}

function return_array_key_or_val($arr, $key, $val) {
  return (array_key_exists($key, $arr) && strlen($arr[$key]) > 0) ? $arr[$key] : $val;
}

$data_crm = $data['data_crm'];
$id = $data['id'];
$current_step = $data['current_step'];
$select_states_options = $data['select_states_options'];

if(count($data_crm) > 0) {
  $form_continue_attr = ' data-form-cs';

  foreach($field_vars_array as $field_var) {
    $$field_var = return_array_key_or_val($data_crm, $field_var, $$field_var);
  }
}

$monthly_sales_options = ['$0 - $4,999', '$5,000 - $9,999', '$10,000 - $24,999', '$25,000 - $49,999', '$50,000 - $99,999', '$100,000 - $249,999', '$250,000+',
];

$monthly_sales_options_markup = '';
foreach($monthly_sales_options as $monthly_sales_option) {
  $monthly_sales_option_selected = $monthly_sales == $monthly_sales_option ? ' selected' : '';
  $monthly_sales_options_markup .= '<option value="' . $monthly_sales_option .  '"' . $monthly_sales_option_selected . '>' . $monthly_sales_option . '</option>';
}

$plaid_url_markup = '';
if(in_array($data['flow'], ['flow-03']) && strlen($plaid_url) > 0) {
  $plaid_url_markup = ' href="' . $plaid_url . '"';
}
?>

              <div class="application-form-wrap">
                <div class="afw-steps-progress">
                  <div class="d-flex">
                    <div class="asp-item">Calificar</div>
                    <div class="asp-item">Info del Negocio</div>
                    <div class="asp-item">Info Personal</div>
                    <div class="asp-item">Paso Final</div>
                    <div class="asp-item pre-hidden" data-steps-progress-finalise>Info del Statement</div>
                  </div>
                </div>
                <form class="form-application application-form-steps"<?php echo $form_continue_attr; ?>>
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
                          <?php echo $monthly_sales_options_markup; ?>
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
                        <input type="text" name="business_legal_name" class="form-control" data-field-string value="<?php echo $business_dba; ?>">
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
                        <input type="tel" name="business_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone value="<?php echo $business_phone; ?>">
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
                        <input type="text" name="physical_city" class="form-control" data-field-string data-field-city>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Estado</label>
                        <select name="physical_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                          <?php echo $select_states_options; ?>
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
                          <input type="text" name="mailing_city" class="form-control" data-field-string data-field-city>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Estado</label>
                          <select name="mailing_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione...">
                            <?php echo $select_states_options; ?>
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
                        <input type="text" name="owner_1_first_name" class="form-control" data-field-string value="<?php echo $owner_1_first_name; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Apellido del Cliente</label>
                        <input type="text" name="owner_1_last_name" class="form-control" data-field-string value="<?php echo $owner_1_last_name; ?>">
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
                          <?php echo $select_states_options; ?>
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
                            <?php echo $select_states_options; ?>
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
                            <?php echo $select_states_options; ?>
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

                    <p class="sub-header">Una vez uno de nuestros representantes verifica su solicitud, usted podrá hacer cualquier modificación necesaria</p>

                    <div class="fa-step-information">
                      <h5>Paso Final</h5>
                      <p>Felicidades por haber creado su perfil! Para finalizar su solicitud, en la próxima página encontrará que, de una forma segura y confidencial, puede incluir los últimos 4 estados bancarios de su cuenta comercial. <strong>De esta manera, uno de nuestros especialistas le contactará para darle una contestación rápida.</strong></p>
                    </div>

                    <div class="form-group fg-btn row" id="fg-btn-submit">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">Al hacer clic en "SOMETER", usted acepta los Términos de solicitud y recibir llamadas y mensajes, incluidas las llamadas automáticas o pregrabadas para fines de marketing, de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según lo dispuesto en la Política de privacidad. Al presionar SOMETER, usted nos autoriza a verificar su crédito, pero su crédito no se va a ver afectado ya que hacemos un “Soft Pull”.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">Someter</button>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="step" value="<?php echo $current_step; ?>">
                        <input type="hidden" name="language" value="Spanish">
                      </div>
                    </div>
                  </div>
                  <!-- STEP 4 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Descubra las opciones financieras que tiene<span id="qualify-result">en solo segundos</span></h4>
                        <p class="sub-header">Por favor incluya sus últimos 4 estados bancarios, sin compromiso alguno</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>

                    <div class="form-group row justify-content-center icon-links-block-wrapper icon-links-block-wrapper-01 block-mb-md">
                      <div class="col-6">
                        <a<?php echo $plaid_url_markup; ?> class="ilb-item" id="plaid-url" data-load-scripts="plaid">
                          <span class="ilb-item-header">Enlace su Banco</span>
                          <span class="ilb-item-visual"><svg class="icon icon-logo-plaid"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#logo-plaid"></use></svg></span>
                          <span class="ilb-item-description">Utilice Plaid para someter sus estados<br>bancarios de una forma rápida y segura.</span>
                        </a>
                      </div>
                      
                      <div class="col-6">
                        <a href="<?php echo $files_url; ?>" class="ilb-item" id="files-url">
                          <span class="ilb-item-header">Subir de forma manual</span>
                          <span class="ilb-item-visual"><svg class="icon icon-file-dollar"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#file-dollar"></use></svg></span>
                          <span class="ilb-item-description">Si no desea conectar su cuenta bancaria, <br>Puede subir de forma manual sus estados bancarios.</span>
                        </a>
                      </div>
                    </div>

                    <div class="form-group fg-btn row justify-content-center">
                      <div class="col-12">
                        <p class="fg-btn-description text-center">Al hacer clic en "SOMETER", usted acepta los Términos de solicitud y recibir llamadas y mensajes, incluidas las llamadas automáticas o pregrabadas para fines de marketing, de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según lo dispuesto en la Política de privacidad.</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
