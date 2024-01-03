<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Payment Services"));
?>

      <div role="main" class="main">

        <section class="section-page-hero sph-01 text-color-light section-decor-wrap sdw-03" style="background-image: url(img/bg-card-acceptance.jpg)">
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <h1>Payment Services</h1>
          </div>
        </section>

        <section class="bg-img-01">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-7">
                <div class="block-indent-right-md">
                  <p class="sub-header-lg text-color-blue">We understand that each business has its unique needs and are able to offer the best customized solution for your specific business requirements.</p>
                  <h5 class="text-color-dark">Credit Card Processing</h5>
                  <p class="block-mb-md">Ability to accept credit card payments is essential for growing a successful business. Merchant Services offers a variety of credit card processing solutions for any type of business allowing merchants to grow their client base by having returning customers and attracting the new ones. Whether you are running a retail location where customers manually swipe their cards or an online business where you need to accept credit card payments securely through your website, Merchant Services has the right solution to meet your unique needs. And if you constantly on the road, our wireless credit card processing solutions will optimize and secure your payment transactions by eliminating the need of handling cash or checks while away from the office.</p>
                  <h5 class="text-color-dark">Debit Card Processing</h5>
                  <p class="block-mb-md">Merchant Services provides access to both regional and national debit networks allowing merchants to expand their business by accepting debit card payments. Adding a pin pad for debit card transactions to your credit card terminal is an easy cost-effective way to increase your revenues while eliminating a risk of chargebacks and fraudulent activities. By accepting debit cards, merchants can also add value to their customers by offering a cash back option.</p>
                  <h5 class="text-color-dark">Check Acceptance</h5>
                  <p class="block-mb-md">Merchant Services offers a variety of check acceptance options for merchants seeking to accept check payments in face-to-face, web and phone-based transactions. Our “Point of Sale Conversion” Program allows quick checks processing in a credit cards processing fashion running them through a check reader and having the funds electronically debited from the consumers’ checking accounts in 2-3 business days, thus saving merchants time and money. To protect merchants from bounced checks and fraudulent transactions, Merchant Services provides both Check Verification and Check Guarantee Services. The Check Verification program verifies check payments quickly and efficiently, screening multiple national databases and utilizing a state-of-the-art fraud detection system while the Check Guarantee Services reimburses the funds and the fees associated with NSF Checks to merchants in the event of non-payment.</p>
                  <h5 class="text-color-dark">EBT Programs</h5>
                  <p class="block-mb-md">In times of economic crisis and recovery, accepting EBT (Electronic Benefit Transfer) payments directly from the government for the benefit of customers is crucial for merchants’ ability to maintain and grow their client base. Once the EBT has taken place, funds from the transaction are automatically deposited. Merchant Services provides an ongoing support to all merchants participating in EBT as well as the Purchase Card Program.</p>
                </div>
              </div>

              <div class="col-12 col-md-5">
                <div class="tile-form tile-form-02">
                  <form class="form-services">
                    <input type="hidden" name="service" value="Card Acceptance">
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