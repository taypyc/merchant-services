<?php
$monthly_sales_options = [
  '10000' => '$0 - $9 999 (New business)', 
  '100000' => '$10 000 - $99 999', 
  '250000' => '$100 000 - $249 999', 
  '500000' => '$250 000 - $499 999', 
  '1000000' => '$500 000 - $999 999', 
  '2000000' => '$1 000 000+'
];
$monthly_sales_options_markup = '';
foreach($monthly_sales_options as $k => $v) {
  $monthly_sales_options_markup .= '<option value="' . $k .  '">' . $v . '</option>';
}
?>

        <section class="hero">
          <div class="container">
            <div class="row row-col">
              <div class="col-sm-7 h-info-wrap">
                <h3>0% Processing, 1 Flat Rate</h3>
                <ul class="list-disc list-disc--check">
                  <li>$0/Swipe, Dip or Tap</li>
                  <li>Clover® POS System included</li>
                  <li>Quick 12 hour funding</li>
                  <li>24/7 Customer Service</li>
                  <li>Lifetime overnight equipment replacements</li>
                  <li>No Upfront Costs</li>
                </ul>
              </div>
              <div class="col-sm-5 hero-form-wrap">
                <div class="hero-form">
                  <div class="form-tile">
                    <div class="ft-desc-lg text-center">
                        <h5>Check if your business <br>qualifies<br>for 0% Processing</h5>
                        <p class="sub-header">Just fill out the form to see if your qualify</p>
                      </div>
                      <div class="ft-desc">
                        <div class="ftd-header">Check if your business<br>qualifies for 0% Processing</div>
                        <div class="triangle-down"></div>
                      </div>
                    <form class="contact-form fields-bordered">
                      <div class="form-group">
                        <input type="text" class="form-control" name="business_legal_name" required data-field-string placeholder="Business legal name">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" name="business_term" required data-field-string placeholder="Year business started" data-mask-date-01>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="business_email" required data-field-string placeholder="Business email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="business_phone" required data-field-string placeholder="Your cell phone number">
                      </div>
                      <div class="form-group">
                        <select name="annual_cards_vol" class="form-control select-item" required style="width: 100%;" data-select-placeholder="Annual credit card sales volume">
                        <option value="">Average Monthly Deposits*</option>
                        <?php echo $monthly_sales_options_markup; ?>
                      </select>
                    </div>

                      <div class="form-group fg-btn">
                        <input type="hidden" name="avg_sale" value="$333">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="step" value="0">
                        <input type="hidden" name="step_short" value="">
                        <input type="hidden" name="service" value="">
                        <input type="hidden" name="owner_1_first_name" value="">
                        <input type="hidden" name="owner_1_last_name" value="">
                        <input type="hidden" name="cs" value="">
                        <input type="hidden" name="potential_savings" value="">
                        <button class="btn btn-blue" type="submit" data-loading-text="Loading…">Submit</button>
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
                <h5>Why businesses choose Slice</h5>
                <div class="row heading-info-wrap">
                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">1</div>
                      <div class="hiwh-item">Trusted by over<br>20K merchants nationwide</div>
                    </div>
                    <div class="hiw-body">It’s no secret that thousands of merchants love the programs and services that slice provides.</div>
                  </div>

                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">2</div>
                      <div class="hiwh-item">Transparent<br>low pricing plans</div>
                    </div>
                    <div class="hiw-body">Taking advantage of 0% processing is super easy and very affordable. With no out-of-pocket expense.</div>
                  </div>

                  <div class="col-md-4">
                    <div class="hiw-head">
                      <div class="hiwh-num">3</div>
                      <div class="hiwh-item">#1 Cash discount<br>company nationwide</div>
                    </div>
                    <div class="hiw-body">Slice boards more merchants on the cash discount program than any of our competitors.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>