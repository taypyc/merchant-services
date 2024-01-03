<?php
$form_continue_attr = '';
$field_vars_array = [
  'business_name', 'owner_1_first_name', 'owner_1_last_name', 'monthly_sales', 'owner_1_cell_phone', 'owner_1_email', 'language',

  'business_legal_name', 'industry_type', 'amount_requested', 'amount_requested_for', 'bankruptcy', 'work_from_home', 'website', 'business_phone', 'physical_address', 'physical_city', 'physical_state', 'physical_zip', 'mailing_address', 'mailing_city', 'mailing_state', 'mailing_zip',

  'owner_1_title', 'owner_1_dob', 'owner_1_address', 'owner_1_city', 'owner_1_state', 'owner_1_zip', 'owner_1_own_years', 'owner_1_own', 'owner_1_ssn', 'owner_2_first_name', 'owner_2_last_name', 'owner_2_title', 'owner_2_dob', 'owner_2_cell_phone', 'owner_2_email', 'owner_2_address', 'owner_2_city', 'owner_2_state', 'owner_2_zip', 'owner_2_own_years', 'owner_2_own', 'owner_2_ssn',

  'entity_type', 'state_incorporation', 'property_ownership', 'tax_id', 'business_started_date', 'actual_cash_advance_company', 'actual_balance', 'bank_credit', 'line_of_credit',

  'signup_step', 'plaid_url', 'files_url'
];

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

$business_legal_name = strlen($business_legal_name) > 0 ? $business_legal_name : (strlen($business_name) > 0 ? $business_name : '');

$work_from_home_option = (strlen($physical_address) > 0 || strlen($bankruptcy) > 0) ? ($work_from_home == 'true' ? 'Yes' : 'No') : '';

$owner_full_name = $owner_1_first_name . (strlen($owner_1_last_name) > 0 ? (' ' . $owner_1_last_name) : '');

$different_mailing_address = false;
foreach ([$mailing_address, $mailing_city, $mailing_state, $mailing_zip] as $mailing_address_item) {
  if(strlen($mailing_address_item) > 0) {
    $different_mailing_address = true;
  }
}

$bank_credit_option = (strlen($signup_step) > 0 && $signup_step == '3') || strlen($line_of_credit) > 0 ? ($line_of_credit != '0' ? 'Yes' : 'No') : '';
?>

              <div class="application-form-wrap">
                <div class="afw-steps-progress">
                  <div class="d-flex">
                    <div class="asp-item">Qualification</div>
                    <div class="asp-item">Business Info</div>
                    <div class="asp-item">Personal Info</div>
                    <div class="asp-item">Final Step</div>
                    <div class="asp-item pre-hidden" data-steps-progress-finalise>Financial Information</div>
                  </div>
                </div>
                <form class="form-application application-form-steps"<?php echo $form_continue_attr; ?>>
                  <!-- STEP 0 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Verify if your business qualifies to obtain up to $500,000!</h4>
                        <p class="sub-header">Please fill out the following form.</p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business Name</label>
                        <input type="text" name="business_name" class="form-control" data-field-string placeholder="" value="<?php echo $business_name; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Customer Name</label>
                        <input type="text" name="owner_name" class="form-control" data-field-string placeholder="" value="<?php echo $owner_full_name; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Average Monthly Deposits</label>
                        <select name="monthly_sales" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="">
                          <option value="">Please select...</option>
                          <?php echo $monthly_sales_options_markup; ?>
                        </select>
                        <p class="field-description">Average monthly deposits</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Mobile Number</label>
                        <input type="tel" name="owner_1_cell_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone value="<?php echo $owner_1_cell_phone; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Email</label>
                        <input type="email" name="owner_1_email" class="form-control" placeholder="example@email.com" value="<?php echo $owner_1_email; ?>">
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By clicking "NEXT", you agree to the Application Terms and to receive calls and messages, including automated or pre-recorded calls for marketing purposes, from B2B Funding and its participating partners, using the information you provided above, including through a cell phone. No purchase of goods or services is contingent upon such consent, you acknowledge that telephone calls to and from B2B Funding or its partners may be logged, and acknowledge that you have read B2B Funding's Privacy Policy and understand that you may opt out of receiving communications of your choice from B2B Funding, as provided in the Privacy Policy.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Next</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 1 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Congratulations! You Qualify for up to <span id="qualify-result">$250,000</span>!</h4>
                        <p class="sub-header">Please finish filling out the application to view your financial options.</p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Corporate Legal Name</label>
                        <input type="text" name="business_legal_name" class="form-control" data-field-string<?php echo strlen($business_legal_name) > 0 ? ' data-field-prefilled' : ''; ?> value="<?php echo $business_legal_name; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Industry</label>
                        <select name="industry_type" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="" data-select-predefined="<?php echo $industry_type; ?>">
                          <option value="">Please select...</option>
                          <option value="Retail">Retail</option>
                          <option value="Rastaurant">Rastaurant</option>
                          <option value="Service">Service</option>
                          <option value="Auto">Auto</option>
                          <option value="Construction">Construction</option>
                          <option value="Wholesale">Wholesale</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>How much money you need?</label>
                        <input type="tel" name="amount_requested" class="form-control" data-mask-money value="<?php echo $amount_requested; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>What would use the loan for?</label>
                        <select name="amount_requested_for" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="" data-select-predefined="<?php echo $amount_requested_for; ?>">
                          <option value="">Please select...</option>
                          <option value="Expansión o Renovación">Expansion or Renovation</option>
                          <option value="Compra de Equipos">Equipment Purchase</option>
                          <option value="Inventario o Materiales">Inventory or Supplies</option>
                          <option value="Abrir Nueva Localidad">Open New Location</option>
                          <option value="Comprar Parte al Socio">Purchase Partner</option>
                          <option value="Otro">Other</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business Phone Number</label>
                        <input type="tel" name="business_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone value="<?php echo $business_phone; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Web Page/Facebook</label>
                        <input type="text" name="website" class="form-control" data-mask-url value="<?php echo $website; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Is your business in the process of bankrupsy? </label>
                        <select name="bankruptcy" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="" data-select-predefined="<?php echo $bankruptcy; ?>">
                          <option value="">Please select...</option>
                          <option value="No">No</option>
                          <option value="Yes">Yes</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Home based business?</label>
                        <select name="work_from_home" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="" data-select-predefined="<?php echo $work_from_home_option; ?>">
                          <option value="">Please select...</option>
                          <option value="No">No</option>
                          <option value="Yes">Yes</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business Physical Address</label>
                        <input type="text" name="physical_address" class="form-control" data-field-string data-field-address value="<?php echo $physical_address; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>City</label>
                        <input type="text" name="physical_city" class="form-control" data-field-string data-field-city value="<?php echo $physical_city; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Province</label>
                        <select name="physical_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Please select..." data-select-predefined="<?php echo $physical_state; ?>">
                          <?php echo $select_states_options; ?>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Postal Code</label>
                        <input name="physical_zip" class="form-control" data-mask-postal-code value="<?php echo $physical_zip; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <div class="check-wrap">
                          <label class="label-checkbox"><input type="checkbox" name="different_mailing_address" value="Yes" data-collapsable-elem="#signup-business-mailing-address"<?php if($different_mailing_address) echo ' checked'; ?>><i></i>Additional Address</label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-conditional-fields-wrap" id="signup-business-mailing-address"<?php if($different_mailing_address) echo ' style="display: block"'; ?>>
                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Address</label>
                          <input type="text" name="mailing_address" class="form-control" data-field-string data-field-address value="<?php echo $mailing_address; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <label>City</label>
                          <input type="text" name="mailing_city" class="form-control" data-field-string data-field-city value="<?php echo $mailing_city; ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Province</label>
                          <select name="mailing_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Please select..." data-select-predefined="<?php echo $mailing_state; ?>">
                            <?php echo $select_states_options; ?>
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Postal Code</label>
                          <input name="mailing_zip" class="form-control" data-mask-postal-code value="<?php echo $mailing_zip; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By clicking "NEXT", you agree to the Application Terms and to receive calls and messages, including automated or pre-recorded calls for marketing purposes, from B2B Funding and its participating partners, using the information you provided above, including through a cell phone. No purchase of goods or services is contingent upon such consent, you acknowledge that telephone calls to and from B2B Funding or its partners may be logged, and acknowledge that you have read B2B Funding's Privacy Policy and understand that you may opt out of receiving communications of your choice from B2B Funding, as provided in the Privacy Policy.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Next</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 2 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Personal Information</h4>
                        <p class="sub-header">Please fill out the following form.</p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Customer Name</label>
                        <input type="text" name="owner_1_first_name" class="form-control" data-field-string value="<?php echo $owner_1_first_name; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Customer Last Name</label>
                        <input type="text" name="owner_1_last_name" class="form-control" data-field-string value="<?php echo $owner_1_last_name; ?>">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Date of Birth</label>
                        <input type="tel" name="owner_1_dob" class="form-control" placeholder="MM/DD/YYYY" data-mask-date value="<?php echo $owner_1_dob; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Social Security Number</label>
                        <input type="tel" name="owner_1_ssn" class="form-control" placeholder="000-00-0000" data-mask-ssn value="<?php echo $owner_1_ssn; ?>">
                        <p class="field-description">We will check your credit without it affecting your credit score.</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Home Address</label>
                        <input type="text" name="owner_1_address" class="form-control" data-field-string data-field-address value="<?php echo $owner_1_address; ?>">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>City</label>
                        <input type="text" name="owner_1_city" class="form-control" data-field-string data-field-city value="<?php echo $owner_1_city; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Province</label>
                        <select name="owner_1_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Please select..." data-select-predefined="<?php echo $owner_1_state; ?>">
                          <?php echo $select_states_options; ?>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Postal Code</label>
                        <input name="owner_1_zip" class="form-control" data-mask-postal-code value="<?php echo $owner_1_zip; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Title</label>
                        <select name="owner_1_title" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." data-select-predefined="<?php echo $owner_1_title; ?>">
                          <option value="">Please select...</option>
                          <option value="Dueño">Owner</option>
                          <option value="Socio">Partner</option>
                          <option value="Presidente">President</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Years of Ownership</label>
                        <select name="owner_1_own_years" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." data-select-predefined="<?php echo $owner_1_own_years; ?>">
                          <option value="">Please select...</option>
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
                        <label>Ownership %</label>
                        <input type="tel" name="owner_1_own" class="form-control" data-mask-percentage data-collapsable-elem="#signup-owner-2" value="<?php echo $owner_1_own; ?>">
                      </div>
                    </div>

                    <div class="form-conditional-fields-wrap" id="signup-owner-2"<?php if(strlen($owner_1_own) > 0 && $owner_1_own < 80) echo ' style="display: block"' ?>>
                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Partner Name</label>
                          <input type="text" name="owner_2_first_name" class="form-control" data-field-string value="<?php echo $owner_2_first_name; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Partner Last Name</label>
                          <input type="text" name="owner_2_last_name" class="form-control" data-field-string value="<?php echo $owner_2_last_name; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Date of Birth</label>
                          <input type="tel" name="owner_2_dob" class="form-control" placeholder="MM/DD/YYYY" data-mask-date value="<?php echo $owner_2_dob; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Social Security Number</label>
                          <input type="tel" name="owner_2_ssn" class="form-control" placeholder="000-00-0000" data-mask-ssn value="<?php echo $owner_2_ssn; ?>">
                          <p class="field-description">We will check credit without it affecting credit score.</p>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Phone</label>
                          <input type="tel" name="owner_2_cell_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone value="<?php echo $owner_2_cell_phone; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Email</label>
                          <input type="email" name="owner_2_email" class="form-control" placeholder="nombre@email.com" value="<?php echo $owner_2_email; ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Partner Home Address</label>
                          <input type="text" name="owner_2_address" class="form-control" data-field-string data-field-address value="<?php echo $owner_2_address; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                          <label>City</label>
                          <input type="text" name="owner_2_city" class="form-control" data-field-string data-field-city value="<?php echo $owner_2_city; ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Province</label>
                          <select name="owner_2_state" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Please select..." data-select-predefined="<?php echo $owner_2_state; ?>">
                            <?php echo $select_states_options; ?>
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Postal Code</label>
                          <input name="owner_2_zip" class="form-control" data-mask-postal-code value="<?php echo $owner_2_zip; ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-12 col-md-6">
                          <label>Title</label>
                          <select name="owner_2_title" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." data-select-predefined="<?php echo $owner_2_title; ?>">
                            <option value="">Please select...</option>
                            <option value="Dueño">Owner</option>
                            <option value="Socio">Partner</option>
                            <option value="Presidente">President</option>
                          </select>
                        </div>
                        <div class="col-12 col-md-6">
                          <label>Years of Ownership</label>
                          <select name="owner_2_own_years" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." data-select-predefined="<?php echo $owner_2_own_years; ?>">
                            <option value="">Please select...</option>
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
                          <label>Ownership %</label>
                          <input type="tel" name="owner_2_own" class="form-control" data-mask-percentage value="<?php echo $owner_2_own; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="form-group fg-btn row">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By clicking "NEXT", you agree to the Application Terms and to receive calls and messages, including automated or pre-recorded calls for marketing purposes, from B2B Funding and its participating partners, using the information you provided above, including through a cell phone. No purchase of goods or services is contingent upon such consent, you acknowledge that telephone calls to and from B2B Funding or its partners may be logged, and acknowledge that you have read B2B Funding's Privacy Policy and understand that you may opt out of receiving communications of your choice from B2B Funding, as provided in the Privacy Policy.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Next</button>
                      </div>
                    </div>
                  </div>
                  <!-- STEP 3 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Additional Business Information</h4>
                        <p class="sub-header">Please fill out the following form.</p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Type of Entity</label>
                        <select name="entity_type" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." data-select-predefined="<?php echo $entity_type; ?>">
                          <option value="">Please select...</option>
                          <option value="Corporation">Corporation</option>
                          <option value="Partnership">Partnership</option>
                          <option value="Sole Proprietorship">Sole Proprietorship</option>
                          <option value="LLC">LLC</option>
                          <option value="Others">Others</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Province of Registration</label>
                        <select name="state_incorporation" class="form-control select-item" style="width:100%;" data-select-input data-select-placeholder="Please select..." data-select-predefined="<?php echo $state_incorporation; ?>">
                            <?php echo $select_states_options; ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Is Business Property Rented or Owned?</label>
                        <select name="property_ownership" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." data-select-predefined="<?php echo $property_ownership; ?>">
                          <option value="">Please select...</option>
                          <option value="Own">Owner</option>
                          <option value="Rent">Rented</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>GST Number</label>
                        <input name="tax_id" class="form-control" placeholder="000000000 AA 0000" data-mask-gst value="<?php echo $tax_id; ?>">
                        <p class="field-description">To validate that it is an existing business</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Date Business Started</label>
                        <input type="tel" name="business_started_date" class="form-control" placeholder="MM/DD/YYYY" data-mask-date value="<?php echo $business_started_date; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Current Cash Advance Company</label>
                        <select name="actual_cash_advance_company" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="" data-select-predefined="<?php echo $actual_cash_advance_company; ?>">
                          <option value="">Please select...</option>
                          <option value="No">No</option>
                          <option value="Yes">Yes</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Approximate Current Balance</label>
                        <input type="tel" name="actual_balance" class="form-control" data-mask-money value="<?php echo $actual_balance; ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Do you have a Line of Credit with the Bank?</label>
                        <select name="bank_credit" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select..." value="" data-select-predefined="<?php echo $bank_credit_option; ?>">
                          <option value="">Please select...</option>
                          <option value="No">No</option>
                          <option value="Yes">Yes</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Line of Credit</label>
                        <input type="tel" name="line_of_credit" class="form-control" data-mask-money value="<?php echo $line_of_credit; ?>">
                      </div>
                    </div>

                    <p class="sub-header">Once one of our representatives verifies your request, you will be able to make any necessary modifications.</p>

                    <div class="fa-step-information">
                      <h5>Final Step</h5>
                      <p>Congratulations on creating your profile! To finalize your request, on the next page you can easily and securely provide the latest 4 bank statements of your business account. <strong>This will allow one of our specialists to contact you with quick funding options.</strong></p>
                    </div>

                    <div class="form-group fg-btn row" id="fg-btn-submit">
                      <div class="col-12 col-md-6 align-self-center">
                        <p class="fg-btn-description">By clicking "NEXT", you agree to the Application Terms and to receive calls and messages, including automated or pre-recorded calls for marketing purposes, from B2B Funding and its participating partners, using the information you provided above, including through a cell phone. No purchase of goods or services is contingent upon such consent, you acknowledge that telephone calls to and from B2B Funding or its partners may be logged, and acknowledge that you have read B2B Funding's Privacy Policy and understand that you may opt out of receiving communications of your choice from B2B Funding, as provided in the Privacy Policy.</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <button type="button" data-form-next-step data-loading-content="Processing..." class="btn btn-lg">Next</button>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="step" value="<?php echo $current_step; ?>">
                        <input type="hidden" name="language" value="English">
                        <input type="hidden" name="country" value="Canada">
                        <input type="hidden" name="country_custom" value="Canada">
                      </div>
                    </div>
                  </div>
                  <!-- STEP 4 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Discover the financial options you have <span id="qualify-result">in just seconds</span></h4>
                        <p class="sub-header">Please choose how you want to provide your business banking information.</p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>

                    <div class="form-group row justify-content-center icon-links-block-wrapper icon-links-block-wrapper-01 block-mb-md">
                      <div class="col-6">
                        <a<?php echo $plaid_url_markup; ?> class="ilb-item" id="plaid-url" data-load-scripts="plaid">
                          <span class="ilb-item-header">Link Bank</span>
                          <span class="ilb-item-visual"><svg class="icon icon-logo-plaid"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#logo-plaid"></use></svg></span>
                          <span class="ilb-item-description">Use Plaid to submit your bank statements <br>quickly and securely.</span>
                        </a>
                      </div>
                      
                      <div class="col-6">
                        <a href="<?php echo $files_url; ?>" class="ilb-item" id="files-url">
                          <span class="ilb-item-header">Upload Manually</span>
                          <span class="ilb-item-visual"><svg class="icon icon-file-dollar"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#file-dollar"></use></svg></span>
                          <span class="ilb-item-description">If you don't want to connect your bank account, <br>you can manually upload your bank statements.</span>
                        </a>
                      </div>
                    </div>

                    <div class="form-group fg-btn row justify-content-center">
                      <div class="col-12">
                        <p class="fg-btn-description text-center">By clicking on either option above "Link Bank or Upload Manually", you agree to the Application Terms and to receive calls and messages, including automated or pre-recorded calls for marketing purposes, from B2B Funding and its participating partners, using the information you provided above, including through a cell phone. No purchase of goods or services is contingent upon such consent, you acknowledge that telephone calls to and from B2B Funding or its partners may be logged, and acknowledge that you have read B2B Funding's Privacy Policy and understand that you may opt out of receiving communications of your choice from B2B Funding, as provided in the Privacy Policy.</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
