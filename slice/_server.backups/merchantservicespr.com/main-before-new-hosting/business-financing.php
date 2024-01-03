<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Business Financing"));
?>

      <div role="main" class="main">

        <section class="section-page-hero sph-01 text-color-light section-decor-wrap sdw-03" style="background-image: url(img/bg-business-financing.jpg)">
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <h1>Business Financing</h1>
          </div>
        </section>

        <section class="bg-img-01">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-7">
                <div class="block-indent-right-md">
                  <p class="sub-header-lg text-color-blue">Here at Merchant Services we pride ourselves on being able to offer small business owners the financing they need to expand or strengthen their businesses.</p>
                  <h5 class="text-color-dark">Merchant Cash Advance (MCA)</h5>
                  <p>Approval amount is based on your monthly merchant processing volume</p>
                  <ul class="list-dotted block-mb-md">
                    <li>We purchase your future merchant processing receivables at a discount, providing you with funds today</li>
                    <li>Use your merchant processing account to repay the advance</li>
                    <li>Approval amounts are determined using the last 4 months of merchant processing and bank statements along with the business information on your application.</li>
                    <li>You are eligible to refinance when you reach 60% of your total repayment amount.</li>
                  </ul>
                  <h5 class="text-color-dark">Total Deposit Advance (TDA)</h5>
                  <p>Approval amount is based on your monthly checking account deposit volume</p>
                  <ul class="list-dotted">
                    <li>You don’t have to accept credit cards in your business to be approved.</li>
                    <li>We purchase your future bank deposit receivables at a discount, providing you with funds today</li>
                    <li>Use your future accounts receivables to repay the advance</li>
                    <li>Approval amounts are determined using the last 4 months of your bank statements along with the business information on your application.</li>
                    <li>Advances are repaid with a fixed daily ACH withdrawal from your checking account Monday to Friday only.
                    You are eligible to refinance when you reach 60% of your total repayment amount.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-5">
                <div class="tile-form tile-form-02">
                  <form class="form-services">
                    <input type="hidden" name="service" value="Business Financing">
                    <div class="form-contact-header">
                      <h3>Let’s work together</h3>
                      <p class="sub-header">Please fill out the form below and get a free consultation</p>
                    </div>
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" required placeholder="Full name">
                    </div>
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" required placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input name="phone" type="tel" class="form-control" required placeholder="Phone number">
                    </div>
                    <div class="form-group">
                      <input name="company_name" type="text" class="form-control" required placeholder="Company name">
                    </div>
                    <div class="form-group fg-btn text-center">
                      <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
                      <p class="fg-additional">Once submitted, your request will be reviewed and one of our specialists will contact you within 24 hours. We respect your privacy and do not share your information with third parties.</p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <?php echo $view->markup_cta_services(); ?>
      </div>

<?php
$view->page_end();
?>