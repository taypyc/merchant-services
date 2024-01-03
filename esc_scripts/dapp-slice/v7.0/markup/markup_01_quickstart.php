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
$select_states_options = $data['select_states_options'];

if(count($data_crm) > 0) {
  $form_continue_attr = ' data-form-cs';

  foreach($field_vars_array as $field_var) {
    $$field_var = return_array_key_or_val($data_crm, $field_var, $$field_var);
  }
}

$selected_service = '';
$markup_services = '';

foreach($data['services'] as $name_key => $service) {
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
                                <li>Retailers</li>
                                <li>Grocery Stores</li>
                                <li>Quick-Service <br>Restaurants</li>
EOD;
} else if($name_key == 'clover-flex') {
  $service_fit_for = <<<EOD
                                <li>Quick-service <br>Restaurants</li>
                                <li>Retailers</li>
                                <li>Services</li>
EOD;
} else if($name_key == 'clover-station') {
  $service_fit_for = <<<EOD
                                <li>Full-service <br>Restaurants</li>
                                <li>Appointments <br>& services</li>
                                <li>Retailers</li>
EOD;
} else if($name_key == 'clover-station-pro') {
  $service_fit_for = <<<EOD
                                <li>Retailers</li>
                                <li>Counter-service <br>Restaurants</li>
                                <li>Appointments <br>& services</li>
EOD;
}

$markup_services .= <<<EOD
                      <div class="col-12 col-md-6">
                        <div class="tile-img-info tile-img-info-link{$active_service}" data-service="{$name_key}">
                          <div class="timi-img"><img src="{$data['assets_global']}img/tile-{$name_key}.png" alt=""></div>
                          <div class="tlii-header d-flex flex-column align-items-center">
                            <div class="tlii-header-main">{$service['friendly_name']}</div>
                            <div class="tlii-header-figure d-flex align-items-end">
                              <span>0</span>
                              <span>%</span>
                              <span>Credit Card <br>Processing</span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="h6">Best fits for</div>
                              <ul class="list-line list-line-xs">
                                {$service_fit_for}
                              </ul>
                            </div>
                            <div class="col">
                              <div class="timi-price-wrap d-flex flex-column align-items-end">
                                <div class="timi-price-description">Just for</div>
                                <div class="timi-price"><sup>$</sup>{$price[0]}<sub>.{$price[1]}/mo</sub></div>
                                <div class="timi-price-old"><sup>$</sup>{$old_price[0]}.{$old_price[1]}/mo</div>
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
                      <h4>Let’s get started</h4>
                      <p class="sub-header">Please tell us about your business and <span class="block-ws-nowrap">see how much you could save with Slice</span></p>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business legal name</label>
                        <input type="text" name="business_legal_name" class="form-control" data-field-string placeholder="Your business name">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Year business started</label>
                        <input type="tel" name="business_term" class="form-control" placeholder="YYYY" data-mask-date-01>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business email</label>
                        <input type="email" name="business_email" class="form-control" placeholder="example@email.com">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Business phone number</label>
                        <input type="tel" name="business_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Annual Visa/MC/Discover/Amex volume</label>
                        <select name="annual_cards_vol" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select estimated volume" value="">
                          <option value="">Select...</option>
                          <option value="10000">$0 - $9 999 (New business)</option>
                          <option value="100000">$10 000 - $99 999</option>
                          <option value="250000">$100 000 - $249 999</option>
                          <option value="500000">$250 000 - $499 999</option>
                          <option value="1000000">$500 000 - $999 999</option>
                          <option value="2000000">$1 000 000+</option>
                        </select>
                        <p class="field-description">Estimated annual credit card sales volume</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Average sale $</label>
                        <input type="tel" name="avg_sale" class="form-control" data-mask-money>
                        <p class="field-description">Average purchase size by a customer in your business</p>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By submitting this form, you agree to <a href="terms-of-use" target="_blank">Terms of use</a>, <a href="privacy-policy" target="_blank">Privacy policy</a>. <br>Your information is confidential and secure.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Submit</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 2 -->
                  <div class="fa-step-item">
                    <div class="block-mb-lg">
                      <h4 class="text-center block-mb-01 wrap-br-03">You qualify for <span class="text-color-01 block-ws-nowrap">0% processing</span></h4>
                      <div class="icon-info-line block-mb-sm d-flex flex-wrap no-gutters align-items-center justify-content-center">
                        <div class="col-auto iil-icon"><svg class="icon icon-colored-piggy-bank"><use xlink:href="<?php echo $data['assets_global']; ?>css/fonts/icons.svg#colored-piggy-bank"></use></svg></div>
                        <div class="col-auto potential-savings-result-wrap iil-description">POTENTIAL <br>Annual Savings</div>
                        <div class="col-auto potential-savings-result-wrap iil-description-01"></div>
                        <div class="col-auto potential-savings-result-wrap iil-highlighted" id="calc-annual-savings"></div>
                        <div class="col-auto iil-additional">Ready to eliminate processing fees forever? <span class="block-ws-nowrap">Here is the process</span></div>
                      </div>

                      <div class="tile-info-divided d-flex no-gutters">
                        <div class="tid-item active col-4">
                          <div class="tid-item-arrows"></div>
                          <div class="tid-item-content">
                            <h6>Create Your Profile</h6>
                            <p>It only takes a couple of minutes! Business and Personal information is confidential and secure.</p>
                            <p>NO OBLIGATIONS</p>
                          </div>
                        </div>

                        <div class="tid-item col-4">
                          <div class="tid-item-content">
                            <h6>Equipment Delivery <span class="block-ws-nowrap">and Installation</span></h6>
                            <p>With your authorization, we will process your application and schedule installation of your Clover.</p>
                          </div>
                        </div>

                        <div class="tid-item col-4">
                          <div class="tid-item-content">
                            <h6>Start Saving!</h6>
                            <p>You can now process Credit Cards at 0% with your new state of the art equipment!</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>DBA (Doing Business As) name</label>
                        <input type="text" name="business_dba_name" class="form-control" data-field-string value="<?php echo $business_dba; ?>">
                        <p class="field-description">This name will appear on your receipt your customer get</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business entity type</label>
                        <select name="business_type" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select...">
                          <option value="">Please select...</option>
                          <option value="Sole Prop">Sole Prop</option>
                          <option value="Partnership">Partnership</option>
                          <option value="LLC/LLP">LLC/LLP</option>
                          <option value="C Corp">C Corp</option>
                          <option value="S Corp">S Corp</option>
                          <option value="Govt. (Local/State/Federal)">Govt. (Local/State/Federal)</option>
                          <option value="501 c/Tax Ex.">501 c/Tax Ex.</option>
                        </select>
                        <p class="field-description">Type of business</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Product/Service sold</label>
                        <select name="products_service_sold" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select...">
                          <option value="">Please select...</option>
                          <option value="Quick service restaurant">Quick service restaurant</option>
                          <option value="Full service restaurant">Full service restaurant</option>
                          <option value="Retail">Retail - storefront location</option>
                          <option value="Service">Service</option>
                        </select>
                        <p class="field-description">Explanation of type of products/services sold</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business address line 1</label>
                        <input type="text" name="business_address_street" class="form-control" data-field-string data-field-address>
                        <p class="field-description">Street address</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Business address line 2</label>
                        <input type="text" name="business_address_unit" class="form-control" data-field-address>
                        <p class="field-description">Suit, Unit, etc.</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>City</label>
                        <input type="text" name="business_city" class="form-control" data-field-string data-field-city>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="row fg-row">
                          <div class="col-12 col-sm-6">
                            <label>State</label>
                            <select name="business_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Select state...">
                              <?php echo $data['select_states_options']; ?>
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
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By submitting this form, you agree to <a href="terms-of-use" target="_blank">Terms of use</a>, <a href="privacy-policy" target="_blank">Privacy policy</a>. <br>Your information is confidential and secure.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Next step</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 3 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md text-center">
                      <h4>Signer - Owner Information</h4>
                      <p class="sub-header">Please fill out information about the owner</p>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business Ownership %</label>
                        <input type="tel" name="ownership_perc" class="form-control" data-mask-percentage>
                        <p class="field-description">Your ownership share in this business</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Owner First Name</label>
                        <input type="text" name="first_name" class="form-control" data-field-string>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Owner Last Name</label>
                        <input type="text" name="last_name" class="form-control" data-field-string>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Title</label>
                        <select name="title_name" class="form-control select-item" style="width:100%;" data-select-placeholder="Select title...">
                          <option value="">Select title...</option>
                          <option value="Owner">Owner</option>
                          <option value="Managing partner">Managing partner</option>
                          <option value="Responsible party">Responsible party</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Date of birth</label>
                        <input type="tel" name="birth_date" class="form-control" placeholder="MM/DD/YYYY" data-mask-date>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Email</label>
                        <input type="email" name="personal_email" class="form-control" placeholder="example@email.com">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Cell phone</label>
                        <input type="tel" name="personal_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Home address line 1</label>
                        <input type="text" name="home_address_street" class="form-control" data-field-string data-field-address>
                        <p class="field-description">Street address</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Home address line 2</label>
                        <input type="text" name="home_address_unit" class="form-control" data-field-address>
                        <p class="field-description">Suit, Unit, etc.</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>City</label>
                        <input type="text" name="home_city" class="form-control" data-field-string data-field-city>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="row fg-row">
                          <div class="col-12 col-sm-6">
                            <label>State</label>
                            <select name="home_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Select state...">
                              <?php echo $data['select_states_options']; ?>
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
                      <div class="col-12 col-md-6">
                        <label>SSN # (Social security number)</label>
                        <input type="tel" name="social_security" class="form-control" placeholder="000-00-0000" data-mask-ssn>
                        <p class="field-description">This allows us to validate your information</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Federal Tax ID</label>
                        <input type="tel" name="business_tax_id" class="form-control" placeholder="00-0000000" data-mask-tax>
                        <p class="field-description">This allows us to validate your business information</p>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By submitting this form, you agree to <a href="terms-of-use" target="_blank">Terms of use</a>, <a href="privacy-policy" target="_blank">Privacy policy</a>. <br>Your information is confidential and secure.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Submit</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 4 -->
                  <div class="fa-step-item">
                    <div class="text-center">
                      <h4>Please choose the device</h4>
                      <p class="sub-header">For just one fixed monthly price you will have state of the art equipment which eliminate your processing fees once and for all. This also includes our white glove installation, exceptional service, free paper and free overnight terminal replacement</p>
                    </div>
                    <div class="row fa-step-device block-mb-md">
                      <?php echo $markup_services; ?>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="service" value="<?php echo $selected_service; ?>">
                    <input type="hidden" name="step" value="<?php echo $current_step; ?>">
                    <input type="hidden" name="potential_savings" value="<?php echo $potential_savings; ?>">
                    <input type="hidden" name="cs" value="">

                    <p class="sub-header text-center">Once our representative contacts you to go over equipment, you can make any adjustments necessary</p>

                    <div class="fa-step-information">
                      <h5>Final Step</h5>
                      <p>Congratulations on creating your profile! To finalize your Clover order, please sign the document on the next page. Don’t worry: <strong>we don’t charge you anything</strong> and an implementation specialist will reach out to go over everything before processing your documents.</p>
                      <p>As always, with our white glove service, <strong>installation, training and supplies are free</strong>!</p>
                    </div>

                    <div class="form-group fg-btn row" id="fg-btn-submit">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By submitting this form, you agree to <a href="terms-of-use" target="_blank">Terms of use</a>, <a href="privacy-policy" target="_blank">Privacy policy</a>. <br>Your information is confidential and secure.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="submit" data-loading-content="Processing..." class="btn btn-lg" disabled>Submit</button>
                      </div>
                    </div>
                  </div>
                </form>

                <div class="block-footer-icon-info-wrap text-center">
                  <div class="block-footer-icon-info d-inline-flex align-items-center justify-content-center">
                    <div class="bfii-icon"><svg class="icon icon-shield"><use xlink:href="<?php echo $data['assets_global']; ?>css/fonts/icons.svg#shield"></use></svg></div>
                    <div class="bfii-info">
                      <p class="bfii-header">SSL Connection</p> 
                      <p>Verified & Secured</p> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
