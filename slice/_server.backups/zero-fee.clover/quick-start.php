<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
require_once "php/scripts/crmcontrol.class.php";
$crm_control = new CrmControl();

$oid = '';
if(isset($_GET['oid']) && strlen(trim($_GET['oid'])) > 0) {
  $oid = trim($_GET['oid']);
}

$service = [];
$service['id'] = NULL;

$service['flex_active'] = '';
$service['mini_active'] = '';
$service['station_active'] = '';

if(isset($_GET['clover-flex'])) {
  $service['id'] = '1';
  $service['flex_active'] = ' active';
} else if(isset($_GET['clover-mini'])) {
  $service['id'] = '2';
  $service['mini_active'] = ' active';
} else if(isset($_GET['clover-station'])) {
  $service['id'] = '3';
  $service['station_active'] = ' active';
}

$page_start_params = ['title' => "0% Credit Card Processing | Quick Start | Slice"];

if(isset($service['id'])) {
  $page_start_params['service'] = $service;
}

$view->page_start($page_start_params);
?>

      <div role="main" class="main">

        <section class="section-signup-steps">
          <div class="container">

            <div class="application-wrap">
              <div class="application-form-wrap">
                <form class="form-application application-form-steps">
                  <!-- STEP 1 -->
                  <div class="fa-step-item">
                    <div class="block-mb-md text-center">
                      <h4>Let’s get started</h4>
                      <p class="sub-header">Please tell us about your business and <span class="block-ws-nowrap">see how much you could save with Slice</span></p>
                    </div>
                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business legal name</label>
                        <input type="text" name="business_legal_name" class="form-control" placeholder="Your business name">
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
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Annual Visa/MC/Discover/Amex volume</label>
                        <select name="annual_cards_vol" class="form-control select-item" style="width:100%;" data-select-placeholder="Please select estimated volume">
                          <option value="">Select...</option>
                          <option value="10000">$0 - $9 999 (New business)</option>
                          <option value="100000">$10 000 - $99 999</option>
                          <option value="250000">$100 000 - $249 999</option>
                          <option value="500000">$250 000 - $499 999</option>
                          <option value="1000000">$500 000 - $999 999</option>
                          <option value="1000001">$1 000 000+</option>
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
                    <input type="hidden" name="oid" value="<?php echo $oid; ?>">
                    <input type="hidden" name="service" value="">
                    <input type="hidden" name="step" value="0">
                    <input type="hidden" name="potential_savings" value="">
                  </div>
                  <!-- STEP 2 -->
                  <div class="fa-step-item">
                    <div class="block-mb-lg">
                      <h4 class="text-center block-mb-01 wrap-br-03">Congratulations, <br>you qualify for <span class="text-color-01 block-ws-nowrap">0% processing</span></h4>
                      <div class="icon-info-line block-mb-sm d-flex flex-wrap no-gutters align-items-center justify-content-center">
                        <div class="col-auto iil-icon"><svg class="icon icon-colored-piggy-bank"><use xlink:href="css/fonts/icons.svg#colored-piggy-bank"></use></svg></div>
                        <div class="col-auto iil-description">POTENTIAL <br>Annual Savings</div>
                        <div class="col-auto iil-description-01"><span id="calc-annual-savings-d1">up<br>to</span><span id="calc-annual-savings-d2">more<br>than</span></div>
                        <div class="col-auto iil-highlighted" id="calc-annual-savings"></div>
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
                        <input type="text" name="business_dba_name" class="form-control">
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
                          <option value="Retail">Retail</option>
                          <option value="Service">Service</option>
                        </select>
                        <p class="field-description">Explanation of type of products/services sold</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business phone number</label>
                        <input type="tel" name="business_phone" class="form-control" placeholder="(000) 000-0000" data-mask-phone>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Federal Tax ID</label>
                        <input type="tel" name="business_tax_id" class="form-control" placeholder="00-0000000" data-mask-tax>
                        <p class="field-description">This allows us to validate your business information</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Business address line 1</label>
                        <input type="text" name="business_address_street" class="form-control" data-field-address>
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
                        <input type="text" name="business_city" class="form-control" data-field-city>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="row fg-row">
                          <div class="col-12 col-sm-6">
                            <label>State</label>
                            <select name="business_state" class="form-control select-item" style="width:100%;" data-select-placeholder="Select state...">
                              <option value="">Select state...</option>
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="DC">District Of Columbia</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WA">Washington</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
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
                        <label>Owner First Name</label>
                        <input type="text" name="first_name" class="form-control">
                      </div>
                      <div class="col-12 col-md-6">
                        <label>Owner Last Name</label>
                        <input type="text" name="last_name" class="form-control">
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
                        <label>Business Ownership %</label>
                        <input type="tel" name="ownership_perc" class="form-control" data-mask-percentage>
                        <p class="field-description">Your ownership share in this business</p>
                      </div>
                      <div class="col-12 col-md-6">
                        <label>SSN # (Social security number)</label>
                        <input type="tel" name="social_security" class="form-control" placeholder="000-00-0000" data-mask-ssn>
                        <p class="field-description">This allows us to validate your information</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-md-6">
                        <label>Home address line 1</label>
                        <input type="text" name="home_address_street" class="form-control" data-field-address>
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
                        <input type="text" name="home_city" class="form-control" data-field-city>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="row fg-row">
                          <div class="col-12 col-sm-6">
                            <label>State</label>
                            <select name="home_state" class="form-control select-item" style="width:100%;" data-select-placeholder="Select state...">
                              <option value="">Select state...</option>
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="DC">District Of Columbia</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WA">Washington</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6">
                            <label>Zip</label>
                            <input type="tel" name="home_zip" class="form-control" placeholder="00000" data-mask-zip>
                          </div>
                        </div>
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
                    <div class="block-mb-md text-center">
                      <h4>Please choose the device</h4>
                      <p class="sub-header">For just one fixed monthly price you will have state of the art equipment which eliminate your processing fees once and for all. This also includes our white glove installation, exceptional service, free paper and free overnight terminal replacement</p>
                    </div>
                    <div class="row fa-step-device block-mb-md">
                      <div class="col-12 col-md-4">
                        <div class="tile-img-info tile-img-info-link<?php echo $service['mini_active']; ?>" data-service="2">
                          <div class="timi-img"><img src="img/tile-clover-mini.png" alt=""></div>
                          <div class="tlii-header d-flex flex-column align-items-center">
                            <div class="tlii-header-main">Clover Mini</div>
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
                                <li>Retailers</li>
                                <li>Grocery Stores</li>
                                <li>Quick-Service <br>Restaurants</li>
                              </ul>
                            </div>
                            <div class="col">
                              <div class="timi-price-wrap d-flex flex-column align-items-end">
                                <div class="timi-price-description">Just for</div>
                                <div class="timi-price"><sup>$</sup>39<sub>.99/mo</sub></div>
                                <div class="timi-price-old"><sup>$</sup>90.99/mo</div>
                              </div>
                            </div>
                          </div>
                          <div class="timi-cta"></div>
                        </div>
                      </div>

                      <div class="col-12 col-md-4">
                        <div class="tile-img-info tile-img-info-link<?php echo $service['flex_active']; ?>" data-service="1">
                          <div class="timi-img"><img src="img/tile-clover-flex.png" alt=""></div>
                          <div class="tlii-header d-flex flex-column align-items-center">
                            <div class="tlii-header-main">Clover Flex</div>
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
                                <li>Quick-service <br>Restaurants</li>
                                <li>Retailers</li>
                                <li>Services</li>
                              </ul>
                            </div>
                            <div class="col">
                              <div class="timi-price-wrap d-flex flex-column align-items-end">
                                <div class="timi-price-description">Just for</div>
                                <div class="timi-price"><sup>$</sup>49<sub>.99/mo</sub></div>
                                <div class="timi-price-old"><sup>$</sup>90.99/mo</div>
                              </div>
                            </div>
                          </div>
                          <div class="timi-cta"></div>
                        </div>
                      </div>

                      <div class="col-12 col-md-4">
                        <div class="tile-img-info tile-img-info-link<?php echo $service['station_active']; ?>" data-service="3">
                          <div class="timi-img"><img src="img/tile-clover-station.png" alt=""></div>
                          <div class="tlii-header d-flex flex-column align-items-center">
                            <div class="tlii-header-main">Clover Station</div>
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
                                <li>Full-service <br>Restaurants</li>
                                <li>Appointments <br>& services</li>
                                <li>Retailers</li>
                              </ul>
                            </div>
                            <div class="col">
                              <div class="timi-price-wrap d-flex flex-column align-items-end">
                                <div class="timi-price-description">Just for</div>
                                <div class="timi-price"><sup>$</sup>99<sub>.99/mo</sub></div>
                                <div class="timi-price-old"><sup>$</sup>180.99/mo</div>
                              </div>
                            </div>
                          </div>
                          <div class="timi-cta"></div>
                        </div>
                      </div>
                    </div>

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
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>