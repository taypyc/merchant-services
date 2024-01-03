<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Payment Services'
];

if($_SERVER['REQUEST_URI'] !== $view->site_root) {
  $head_data['meta_tags'] = '<link rel="canonical" href="' . $view->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $view->site_root . '">';
}

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle">
          <div class="container">
            <div class="page-hero-text-container phtc-01 d-flex align-items-center justify-content-center">
              <h1><span class="text-color-01">Payment</span> <br>Services</h1>
            </div>
        </section>

        <section class="bg-light-grey">
          <div class="container">
            <div class="block-mb-md">
              <h2 class="text-left h2-01">We understand that each business has its unique needs <br>and are able to offer the best customized solution for <br>your specific business requirements.</h2>
            </div>
            <ul class="list-bullet-xl">
              <li>
                <h4>Credit Card Processing</h4>
                <p>Ability to accept credit card payments is essential for growing a successful business. Merchant Services offers a variety of credit card processing solutions for any type of business allowing merchants to grow their client base by having returning customers and attracting the new ones. Whether you are running a retail location where customers manually swipe their cards or an online business where you need to accept credit card payments securely through your website, Merchant Services has the right solution to meet your unique needs. And if you constantly on the road, our wireless credit card processing solutions will optimize and secure your payment transactions by eliminating the need of handling cash or checks while away from the office.</p>
                <a href="quick-start" class="link-angle text-color-05">Get Started</a>
              </li>

              <li>
                <h4>Debit Card Processing</h4>
                <p>Ability to accept credit card payments is essential for growing a successful business. Merchant Services offers a variety of credit card processing solutions for any type of business allowing merchants to grow their client base by having returning customers and attracting the new ones. Whether you are running a retail location where customers manually swipe their cards or an online business where you need to accept credit card payments securely through your website, Merchant Services has the right solution to meet your unique needs. And if you constantly on the road, our wireless credit card processing solutions will optimize and secure your payment transactions by eliminating the need of handling cash or checks while away from the office.</p>
                <a href="quick-start" class="link-angle text-color-05">Get Started</a>
              </li>

              <li>
                <h4>Check Acceptance</h4>
                <p>Merchant Services offers a variety of check acceptance options for merchants seeking to accept check payments in face-to-face, web and phone-based transactions. Our “Point of Sale Conversion” Program allows quick checks processing in a credit cards processing fashion running them through a check reader and having the funds electronically debited from the consumers’ checking accounts in 2-3 business days, thus saving merchants time and money. To protect merchants from bounced checks and fraudulent transactions, Merchant Services provides both Check Verification and Check Guarantee Services. The Check Verification program verifies check payments quickly and efficiently, screening multiple national databases and utilizing a state-of-the-art fraud detection system while the Check Guarantee Services reimburses the funds and the fees associated with NSF Checks to merchants in the event of non-payment.</p>
                <a href="quick-start" class="link-angle text-color-05">Get Started</a>
              </li>
            </ul>
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
                <a href="merchant-analytics" class="other-devices__item-link">
                  <img src="img/services-merchant-analytics.png" alt="Merchant Analytics">
                  <h4>Merchant Analytics</h4>
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