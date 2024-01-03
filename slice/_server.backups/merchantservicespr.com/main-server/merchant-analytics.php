<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Merchant Analytics"));
?>

      <div role="main" class="main">

        <section class="section-page-hero sph-01 text-color-light section-decor-wrap sdw-03" style="background-image: url(img/bg-merchant-analytics.jpg)">
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <h1>Merchant Analytics</h1>
          </div>
        </section>

        <section class="bg-img-01">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-7">
                <div class="block-indent-right-md">
                  <p class="sub-header-lg text-color-blue">What if you could discover something new every day — insights that could drive your business growth and help you reach your full potential?</p>
                  <p><strong>Grow your business.</strong><br>
                  Use your own sales information to offer rich insight into customers, sales and groups of similar businesses. It then translates that information into personalized insights that help you take action, whether that means bringing in new business, better targeting your marketing or understanding the impact of your marketing efforts.</p>
                  <p><strong>Bring in new business.</strong><br>
                  Easily see your customers’ spending patterns to find more like them.</p>
                  <p><strong>See how you’re performing.</strong><br>
                  Understand the impact of your marketing efforts and receive insights to improve future efforts.</p>
                  <p><strong>Better target your marketing.</strong><br>
                  Find profiles of your customers and segment them by categories like new, repeat or local, so you can market to them more effectively.</p>
                  <p><strong>Scope out similar businesses.</strong><br>
                  Compare sales and consumer spending trends at similar businesses to see how you stack up. Boost your customer loyalty.</p>

                  <!-- <h5 class="text-color-dark">Grow your business.</h5>
                  <p class="block-mb-md">Use your own sales information to offer rich insight into customers, sales and groups of similar businesses. It then translates that information into personalized insights that help you take action, whether that means bringing in new business, better targeting your marketing or understanding the impact of your marketing efforts.</p>
                  <h5 class="text-color-dark">Bring in new business.</h5>
                  <p class="block-mb-md">Easily see your customers’ spending patterns to find more like them.</p>
                  <h5 class="text-color-dark">See how you’re performing.</h5>
                  <p class="block-mb-md">Understand the impact of your marketing efforts and receive insights to improve future efforts.</p>
                  <h5 class="text-color-dark">Better target your marketing.</h5>
                  <p class="block-mb-md">Find profiles of your customers and segment them by categories like new, repeat or local, so you can market to them more effectively.</p>
                  <h5 class="text-color-dark">Scope out similar businesses.</h5>
                  <p>Compare sales and consumer spending trends at similar businesses to see how you stack up. Boost your customer loyalty.</p> -->

                  <!-- <h5 class="text-color-dark">Our Solutions</h5>
                  <ul class="list-dotted">
                    <li>Countertop Terminals</li>
                    <li>Wireless Terminals</li>
                    <li>POS Systems</li>
                    <li>Mobile Payments</li>
                    <li>Merchant Services Gateway</li>
                  </ul> -->
                </div>
              </div>

              <div class="col-12 col-md-5">
                <div class="tile-form tile-form-02">
                  <form class="form-services">
                    <input type="hidden" name="service" value="Merchant Analytics">
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