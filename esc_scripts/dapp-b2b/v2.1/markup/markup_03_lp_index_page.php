<?php
$monthly_sales_options = ['$0 - $4,999', '$5,000 - $9,999', '$10,000 - $24,999', '$25,000 - $49,999', '$50,000 - $99,999', '$100,000 - $249,999', '$250,000+'];

$monthly_sales_options_markup = '';
foreach($monthly_sales_options as $monthly_sales_option) {
  $monthly_sales_options_markup .= '<option value="' . $monthly_sales_option .  '">' . $monthly_sales_option . '</option>';
}

$country = 'Canada';
$country_custom = 'Canada';

if(array_key_exists('country', $data) ) {
  $country = $data['country'];
}
if(array_key_exists('country_custom', $data) ) {
  $country_custom = $data['country_custom'];
}
?>


      <div role="main" class="main">

        <section class="hero">
          <div class="container">
            <div class="row row-col">
              <div class="col-sm-7 h-info-wrap">
                <h3>We made access <br>to capital for your business <br>be absolutely simple!</h3>
                <ul class="list-disc">
                  <li>Instant pre-approval in seconds</li>
                  <li>Money deposited the same day</li>
                  <li>Safe, secure and confidential</li>
                </ul>
              </div>
              <div class="col-sm-5 hero-form-wrap">
                <div class="hero-form">
                  <div class="form-tile">
                    <div class="ft-desc-lg text-center">
                        <h5>Get Pre-Approved <br>to receive <br>up to $500,000</h5>
                        <p class="sub-header">Please fill out the form below</p>
                      </div>
                      <div class="ft-desc">
                        <div class="ftd-header">Get Pre-Approved to receive <br>up to $500,000</div>
                        <div class="triangle-down"></div>
                      </div>
                    <form class="contact-form fields-bordered">
                      <div class="form-group">
                        <input type="text" class="form-control" name="owner_name" required data-field-string placeholder="Full Name*">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" name="owner_1_cell_phone" required data-field-string placeholder="Mobile Number*">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="owner_1_email" required data-field-string placeholder="Email*">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="business_name" required data-field-string placeholder="Business Name*">
                      </div>
                      <div class="form-group">
                        <select name="monthly_sales" class="form-control select-item" required style="width: 100%;" data-select-placeholder="Average Monthly Deposits*">
                          <option value="">Average Monthly Deposits*</option>
                          <?php echo $monthly_sales_options_markup; ?>
                        </select>
                      </div>
                      <div class="form-group fg-btn">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="step" value="0">
                        <input type="hidden" name="language" value="English">
                        <input type="hidden" name="country" value="<?php echo $country; ?>">
                        <input type="hidden" name="country_custom" value="<?php echo $country_custom; ?>">
                        <input type="hidden" name="step_short" value="">
                        <input type="hidden" name="owner_1_first_name" value="">
                        <input type="hidden" name="owner_1_last_name" value="">
                        <button class="btn btn-blue" type="submit" data-loading-text="Processing…">Submit</button>
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
                <h5>Our Process</h5>
                <div class="row heading-info-wrap">
                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">1</div>
                      <div class="hiwh-item">Apply for <br>access to capital</div>
                    </div>
                    <div class="hiw-body">Fill out and submit the online application form. It will just take a few minutes and there is no obligation or fee.</div>
                  </div>

                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">2</div>
                      <div class="hiwh-item">Pre-approval <br>the same day</div>
                    </div>
                    <div class="hiw-body">Once our representatives review your online application, you will be offered a financing rate the same day.</div>
                  </div>

                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">3</div>
                      <div class="hiwh-item">Access to <br>Capital</div>
                    </div>
                    <div class="hiw-body">You will receive your funds within a few days. This will complete your financing application with us. Simple and easy, so lets get you funded!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>