<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Cash Discount Program"));
?>

      <div role="main" class="main">

        <section class="section-page-hero sph-01 text-color-light section-decor-wrap sdw-03" style="background-image: url(img/bg-gift-loyalty-programs.jpg)">
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <h1>Cash Discount Program</h1>
          </div>
        </section>

        <section class="bg-img-01">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-7">
                <div class="block-indent-right-md">
                  <h5 class="text-color-dark">Gift Card Programs</h5>
                  <p class="block-mb-md">Today, all local businesses regardless of their size can benefit from issuing gift cards to their customer base. Gift Card programs offered by Merchant Services allow for quick flexible transactions with zero risk for the merchant while adding ability to trace gift card sales with ease and convenience by eliminating manual tracking associated with traditional paperwork. Compatible with most credit card terminals and POS systems, gift cards require little effort and expense from merchants.</p>
                  <h5 class="text-color-dark">Loyalty Programs</h5>
                  <p>Every merchant knows that rewarding customers for their loyalty results in increased number of returning customers. Merchant Services provides merchants with the ability to continuously track the customers’ spending for the purpose of establishing "The More You Spend, The More You Save" type of programs. Merchant Services can help you develop an individualized reward program customized for your unique business.</p>
                </div>
              </div>

              <div class="col-12 col-md-5">
                <div class="tile-form tile-form-02">
                  <form class="form-services">
                    <input type="hidden" name="service" value="Gift & Loyalty Programs">
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