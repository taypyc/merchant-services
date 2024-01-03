<?php
$form_continue_attr = '';
$field_vars_array = ['business_dba', 'owner_1_first_name', 'owner_1_last_name', 'business_phone', 'potential_savings'];

foreach($field_vars_array as $field_var) {
  $$field_var = '';
}

function return_array_key_or_val($arr, $key, $val) {
  return (array_key_exists($key, $arr) && strlen($arr[$key]) > 0) ? $arr[$key] : $val;
}

$data_crm = $data['data_crm'];
$id = $data['id'];
$current_step = $data['current_step'];
$select_states_options = $this->get_states_select_options();

if(count($data_crm) > 0) {
  $form_continue_attr = ' data-form-cs';

  foreach($field_vars_array as $field_var) {
    $$field_var = return_array_key_or_val($data_crm, $field_var, $$field_var);
  }
}

$selected_service = '';
$markup_services = '';

foreach($this->services as $name_key => $service) {
  $price = explode('.', $service['price'], 2);
  $old_price = explode('.', $service['old_price'], 2);
  $service_fit_for = '';
  $active_service = '';

  if(strlen($selected_service) == 0 && isset($_GET[$name_key])) {
    $selected_service = $name_key;
    $active_service = ' active';
  }

if($name_key == 'clover-mini') {
  $service_fit_for = <<<EOD
                                <li>Minoristas</li>
                                <li>Tiendas de comestibles</li>
                                <li>Restaurantes de servicio rápido</li>
EOD;
} else if($name_key == 'clover-flex') {
  $service_fit_for = <<<EOD
                                <li>Restaurantes de servicio rápido</li>
                                <li>Minoristas</li>
                                <li>Servicios</li>
EOD;
} else if($name_key == 'clover-station') {
  $service_fit_for = <<<EOD
                                <li>Restaurantes de servicio completo</li>
                                <li>Citas y servicios</li>
                                <li>Minoristas</li>
EOD;
} else if($name_key == 'clover-station-pro') {
  $service_fit_for = <<<EOD
                                <li>Minoristas</li>
                                <li>Restaurantes con servicio de mostrador</li>
                                <li>Citas y servicios</li>
EOD;
}

$markup_services .= <<<EOD
                      <div class="col-12 col-md-6 form-field">
                        <div class="tile-img-info tile-img-info-link{$active_service}" data-service="{$name_key}">
                          <div class="timi-img"><img src="{$this->assets_global}img/tile-{$name_key}.png" alt=""></div>
                          <div class="tlii-header d-flex flex-column align-items-center">
                            <div class="tlii-header-main">{$service['friendly_name']}</div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="h6">Los mejores ajustes para</div>
                              <ul class="list-line list-line-xs">
                                {$service_fit_for}
                              </ul>
                            </div>
                            <div class="col">
                              <div class="timi-price-wrap d-flex flex-column align-items-end">
                                <div class="timi-price-description">Solo para</div>
                                <div class="timi-price"><sup>$</sup>{$price[0]}<sub>.{$price[1]}/mes</sub></div>
                                <div class="timi-price-old"><sup>$</sup>{$old_price[0]}.{$old_price[1]}/mes</div>
                              </div>
                            </div>
                          </div>
                          <div class="timi-cta"></div>
                        </div>
                      </div>
EOD;
}
?>

        <section class="section-signup-steps">
          <div class="container">
            <div class="application-wrap">
              <div class="application-form-wrap">
                <form class="form-application application-form-steps" <?php echo $form_continue_attr; ?>>
                  <!-- STEP 1 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md text-center">
                      <h4>Empecemos</h4>
                      <p class="sub-header">¡Cuéntanos un poco sobre tu negocio y averigua al instante si calificas <strong class="text-color-01">para la tasa más baja del 1,29%!</strong></p>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Nombre legal de la empresa</label>
                        <input type="text" name="business_legal_name" class="form-control" data-field-string placeholder="El nombre de tu empresa">
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Año de inicio del negocio</label>
                        <input type="tel" name="business_term" class="form-control" placeholder="YYYY" data-mask-date-01>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Email de negocios</label>
                        <input type="email" name="business_email" class="form-control" placeholder="example@email.com">
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Número de teléfono laboral</label>
                        <input type="tel" name="business_phone" class="form-control" placeholder="+1(000) 000-0000" data-mask-phone>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Volumen anual de Visa/MC/Discover/Amex</label>
                        <select name="annual_cards_vol" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccione el volumen estimado" value="">
                          <option value="">Select...</option>
                          <option value="10000">$0 - $9 999</option>
                          <option value="100000">$10 000 - $99 999</option>
                          <option value="250000">$100 000 - $249 999</option>
                          <option value="500000">$250 000 - $499 999</option>
                          <option value="1000000">$500 000 - $999 999</option>
                          <option value="2000000">$1 000 000+</option>
                        </select>
                        <p class="field-description">Volumen anual estimado de ventas de tarjetas de crédito</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Venta promedio $</label>
                        <input type="tel" name="avg_sale" class="form-control" data-mask-money>
                        <p class="field-description">Tamaño promedio de compra de un cliente en su negocio</p>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 form-field align-self-center">
                        <p class="fg-btn-description">Al enviar este formulario, aceptas <a href="privacy-policy" target="_blank">la Política de privacidad</a>. <br>Su información es confidencial y segura.</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">ENVIAR</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 2 -->
                  <div class="fa-step-item">
                    <div class="block-mb-lg">
                      <h4 class="text-center block-mb-01 wrap-br-03">¡Felicidades! Cualificas para la tasa más baja del 1.29 %, garantizado.</h4>
                      <div class="icon-info-line block-mb-sm d-flex flex-wrap no-gutters align-items-center justify-content-center">
                        <div class="col-auto iil-icon"><svg class="icon icon-colored-piggy-bank"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#colored-piggy-bank"></use></svg></div>
                        <div class="col-auto iil-additional">¿Listo para eliminar las tarifas de procesamiento para siempre? Aquí está el proceso</div>
                      </div>

                      <div class="tile-info-divided d-flex no-gutters">
                        <div class="tid-item active col-4">
                          <div class="tid-item-arrows"></div>
                          <div class="tid-item-content">
                              <h6>Crea Tu Perfil</h6>
                              <p>¡Comienza a procesar tarjetas de crédito con las tasas más bajas y lo último en tecnología!</p>
                              <p>SIN OBLIGACIONES</p>
                          </div>
                        </div>

                        <div class="tid-item col-4">
                          <div class="tid-item-content">
                            <h6>Entrega e instalación de equipos</h6>
                            <p>¡Es simple! Solo complete unos pasos y podemos procesar su solicitud y programar la entrega e instalación de sus nuevos equipos.</p>
                          </div>
                        </div>

                        <div class="tid-item col-4">
                          <div class="tid-item-content">
                              <h6>¡Estás listo/a!</h6>
                              <p>¡Comienza a procesar tarjetas de crédito con las tasas más bajas y lo último en tecnología!</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Nombre DBA (Doing Business As)</label>
                        <input type="text" name="business_dba_name" class="form-control" data-field-string value="<?php echo $business_dba; ?>">
                        <p class="field-description">Este nombre aparecerá en el recibo que recibirá su cliente</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Tipo de entidad comercial</label>
                        <select name="business_type" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select...">
                          <option value="">Por favor selecciona...</option>
                          <option value="Sole Prop">Sole Prop</option>
                          <option value="Partnership">Partnership</option>
                          <option value="LLC/LLP">LLC/LLP</option>
                          <option value="C Corp">C Corp</option>
                          <option value="S Corp">S Corp</option>
                          <option value="Govt. (Local/State/Federal)">Govt. (Local/State/Federal)</option>
                          <option value="501 c/Tax Ex.">501 c/Tax Ex.</option>
                        </select>
                        <p class="field-description">Tipo de negocio</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Producto/Servicio vendido</label>
                        <select name="products_service_sold" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select...">
                          <option value="">Por favor selecciona...</option>
                          <option value="Quick service restaurant">Quick service restaurant</option>
                          <option value="Full service restaurant">Full service restaurant</option>
                          <option value="Retail">Retail - storefront location</option>
                          <option value="Service">Service</option>
                        </select>
                        <p class="field-description">Explicación del tipo de productos/servicios vendidos</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Dirección comercial línea 1</label>
                        <input type="text" name="business_address_street" class="form-control" data-field-string data-field-address>
                        <p class="field-description">Dirección</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Dirección comercial línea 2</label>
                        <input type="text" name="business_address_unit" class="form-control" data-field-address>
                        <p class="field-description">Suite, Apt, etc.</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Ciudad</label>
                        <input type="text" name="business_city" class="form-control" data-field-string data-field-city>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <div class="row fg-row">
                          <div class="col-12 col-sm-6">
                            <label>Estado</label>
                            <select name="business_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione estado...">
                              <?php echo $select_states_options; ?>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6">
                            <label>Zip</label>
                            <input type="tel" name="business_zip" class="form-control" placeholder="00000" data-mask-zip>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 form-field align-self-center">
                          <p class="fg-btn-description">Al enviar este formulario, aceptas <a href="privacy-policy" target="_blank">la Política de privacidad</a>. <br>Su información es confidencial y segura.</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">PRÓXIMO PASO</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 3 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md text-center">
                      <h4>Firmante - Información del propietario</h4>
                      <p class="sub-header">Por favor complete la información sobre el propietario</p>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>% de propiedad del negocio</label>
                        <input type="tel" name="ownership_perc" class="form-control" data-mask-percentage>
                        <p class="field-description">Su participación en la propiedad de este negocio</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Nombre del propietario</label>
                        <input type="text" name="first_name" class="form-control" data-field-string>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Apellido del propietario</label>
                        <input type="text" name="last_name" class="form-control" data-field-string>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Título</label>
                        <select name="title_name" class="form-control select-item" style="width:100%;" data-select-placeholder="Seleccionar título...">
                          <option value="">Seleccionar título...</option>
                          <option value="Owner">Dueño</option>
                          <option value="Managing partner">Socio gerente</option>
                          <option value="Responsible party">Fiesta responsable</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Fecha de nacimiento</label>
                        <input type="tel" name="birth_date" class="form-control" placeholder="MM/DD/AAAA" data-mask-date>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Correo electrónico</label>
                        <input type="email" name="personal_email" class="form-control" placeholder="example@email.com">
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Teléfono móvil</label>
                        <input type="tel" name="personal_phone" class="form-control" placeholder="+1(000) 000-0000" data-mask-phone>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Dirección Residencial línea 1</label>
                        <input type="text" name="home_address_street" class="form-control" data-field-string data-field-address>
                        <p class="field-description">Dirección</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Dirección Residencial línea 2</label>
                        <input type="text" name="home_address_unit" class="form-control" data-field-address>
                        <p class="field-description">Suite, Apt, etc.</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Ciudad</label>
                        <input type="text" name="home_city" class="form-control" data-field-string data-field-city>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <div class="row fg-row">
                          <div class="col-12 col-sm-6">
                            <label>Estado</label>
                            <select name="home_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Seleccione estado...">
                              <?php echo $select_states_options; ?>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6">
                            <label>Zip</label>
                            <input type="tel" name="home_zip" class="form-control" placeholder="00000" data-mask-zip>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>SSN # (Número de seguro social)</label>
                        <input type="tel" name="social_security" class="form-control" placeholder="000-00-0000" data-mask-ssn>
                        <p class="field-description">Esto nos permite validar su información.</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Seguro Social Patronal</label>
                        <input type="tel" name="business_tax_id" class="form-control" placeholder="00-0000000" data-mask-tax>
                        <p class="field-description">Esto nos permite validar la información de su negocio.</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Nombre del banco</label>
                        <input type="text" name="bank_name" class="form-control" data-field-string>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6 form-field">
                        <label>Número de cuenta</label>
                        <input type="tel" name="account_number" class="form-control" data-mask-an>
                        <p class="field-description">Dónde se depositarán sus fondos</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <label>Número de ruta</label>
                        <input type="tel" name="routing_number" class="form-control" data-mask-rn>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 form-field align-self-center">
                          <p class="fg-btn-description">Al enviar este formulario, aceptas <a href="privacy-policy" target="_blank">la Política de privacidad</a>. <br>Su información es confidencial y segura.</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <button type="button" data-form-next-step data-loading-content="Procesando..." class="btn btn-lg">ENVIAR</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 4 -->
                  <div class="fa-step-item">
                    <div class="text-center">
                      <h4>Por favor elige el dispositivo</h4>
                      <p class="sub-header">Por solo un precio fijo mensual, tendrá equipos de última generación que eliminarán sus tarifas de procesamiento de una vez por todas. Esto también incluye nuestra instalación de guante blanco, servicio excepcional, papel gratis y reemplazo de terminal gratuito durante la noche.</p>
                    </div>
                    <div class="row fa-step-device block-mb-md">
                      <?php echo $markup_services; ?>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="service" value="<?php echo $selected_service; ?>">
                    <input type="hidden" name="step" value="<?php echo $current_step; ?>">
                    <input type="hidden" name="potential_savings" value="<?php echo $potential_savings; ?>">
                    <input type="hidden" name="cs" value="">

                    <p class="sub-header text-center">Una vez que nuestro representante se comunique con usted para revisar el equipo, puede realizar los ajustes necesarios.</p>

                    <div class="fa-step-information">
                      <h5>Último paso</h5>
                      <p>¡Felicitaciones por crear tu perfil! Para finalizar su pedido de Clover, firme el documento en la página siguiente. No se preocupe: <strong>no le cobramos nada</strong> y un especialista en implementación se comunicará con usted para revisar todo antes de procesar sus documentos.</p>
                      <p>Como siempre, con nuestro servicio especial, ¡la <strong>instalación, la capacitación y los suministros son gratuitos</strong>!</p>
                    </div>

                    <div class="form-group fg-btn row" id="fg-btn-submit">
                      <div class="col-12 col-md-6 form-field align-self-center">
                          <p class="fg-btn-description">Al enviar este formulario, aceptas <a href="privacy-policy" target="_blank">la Política de privacidad</a>. <br>Su información es confidencial y segura.</p>
                      </div>
                      <div class="col-12 col-md-6 form-field">
                        <button type="submit" data-loading-content="Processing..." class="btn btn-lg" disabled>Enviar</button>
                      </div>
                    </div>
                  </div>
                </form>

                <div class="block-footer-icon-info-wrap text-center">
                  <div class="block-footer-icon-info d-inline-flex align-items-center justify-content-center">
                    <div class="bfii-icon"><svg class="icon icon-shield"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#shield"></use></svg></div>
                    <div class="bfii-info">
                      <p class="bfii-header">Conexión SSL</p>
                      <p>Verificado y asegurado</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
