<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Merchant Analytics'
];

if($_SERVER['REQUEST_URI'] !== $view->site_root) {
  $head_data['meta_tags'] = '<link rel="canonical" href="' . $view->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $view->site_root . '">';
}

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle">
          <div class="container">
            <div class="page-hero-text-container phtc-03 d-flex align-items-center justify-content-center">
              <h1><span class="text-color-01">Merchant</span> <br>Analytics</h1>
            </div>
        </section>

        <section class="bg-light-grey">
          <div class="container">
              <h2 class="text-left h2-01">What if you could discover something new every day — insights that could drive your business growth and help you reach your full potential?</h2>
          </div>
        </section>

        <section class="section-hero sh-01">
          <div class="sh-item-wrap">
            <div class="container">
              <div class="sh-item d-flex align-items-center">
                <div class="sh-item-content ml-auto">
                  <p>Welcome to Merchant Services Puerto Rico</p>
                  <h4>Grow your business</h4>
                  <p>Use your own sales information to offer rich insight into customers, sales and groups of similar businesses. It then translates that information into personalized insights that help you take action, whether that means bringing in new business, better targeting your marketing or understanding the impact of your marketing efforts.</p>
                  <h4>Bring in new business</h4>
                  <p>Easily see your customers’ spending patterns to find more like them.</p>
                  <h4>See how you’re performing</h4>
                  <p>Understand the impact of your marketing efforts and receive insights to improve future efforts</p>
                  <div class="sh-item-img sh-item-img-01 sh-item-img-main"></div>
                  <a href="quick-start" class="link-angle text-color-05">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="section-benefits">
          <div class="container">
            <h2>Your <span class="text-color-01">Benefits</span></h2>
            <div class="row wrap-01 icon-info-color-01">
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-online-payment"><use xlink:href="css/fonts/icons.svg#online-payment"></use></svg>
                  <p class="icon-info-header">Accept all payment types.</p>
                  <p>Let your customers pay how they want to. Swipe, dip, and tap. Magstripe, chip cards, and NFC payments like Apple Pay and Samsung Pay.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-bar-chart"><use xlink:href="css/fonts/icons.svg#bar-chart"></use></svg>
                  <p class="icon-info-header">Lowest Rate in Puerto Rico Guaranteed.</p>
                  <p>MSPR offers the most competitive rates in the industry. If we can't beat your rates, we give you $1000</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-network"><use xlink:href="css/fonts/icons.svg#network"></use></svg>
                  <p class="icon-info-header">All-in-one system.</p>
                  <p>Replace your register, dumb terminal, bar code scanner and bulky printer. A single, compact device is all you need to ring people up.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-connect"><use xlink:href="css/fonts/icons.svg#connect"></use></svg>
                  <p class="icon-info-header">Smart connectivity.</p>
                  <p>Capable of using multiple connections (Wi-Fi, Ethernet, or cellular networks) interchangeably giving more flexibility.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-calculations"><use xlink:href="css/fonts/icons.svg#calculations"></use></svg>
                  <p class="icon-info-header">Book keeping assistance.</p>
                  <p>Seamlessly integrate the Clover Flex with QuickBooks by simply downloading the CommerceSync app from our App Store.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-support"><use xlink:href="css/fonts/icons.svg#support"></use></svg>
                  <p class="icon-info-header">Concierge Service.</p>
                  <p>Knowledgeable account specialist. Dedicated point of contact. 24/7 Support</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Other <span class="text-color-01">Services</span></h2>
            </div>
            <div class="other-devices other-devices-xs">
              <div class="other-devices__item">
                <a href="payment-services" class="other-devices__item-link">
                  <img src="img/services-payment.png" alt="Payment Services">
                  <h4>Payment Services</h4>
                </a>
              </div>
              <div class="other-devices__item">
              <a href="business-financing" class="other-devices__item-link">
                <img src="img/services-business-financing.png" alt="Business Financing">
                <h4>Business Financing</h4>
              </a>
              </div>
            </div>
          </div>
        </section>
      </div>

<?php
$view->page_end();
?>