<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => 'Business Financing'
];

if($_SERVER['REQUEST_URI'] !== $view->site_root) {
  $head_data['meta_tags'] = '<link rel="canonical" href="' . $view->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $view->site_root . '">';
}

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="page-hero-text page-hero-circle">
          <div class="container">
            <div class="page-hero-text-container phtc-02 d-flex align-items-center justify-content-center">
              <h1><span class="text-color-01">Business</span> <br>Financing</h1>
            </div>
        </section>

        <section class="bg-light-grey">
          <div class="container">
            <div class="block-mb-md">
              <h2 class="text-left h2-01">Here at Merchant Services we pride ourselves on being able to offer small business owners the financing they need to expand or strengthen their businesses.</h2>
            </div>
            <ul class="list-bullet-xl">
              <li>
                <h4>Merchant Cash Advance (MCA)</h4>
                <p>Approval amount is based on your monthly merchant processing volume<br>
                -We purchase your future merchant processing receivables at a discount, providing you with funds today<br>
                -Use your merchant processing account to repay the advance<br>
                -Approval amounts are determined using the last 4 months of merchant processing and bank statements along with the business information on your application.<br>
                -You are eligible to refinance when you reach 60% of your total repayment amount.</p>
                <a href="quick-start" class="link-angle text-color-05">Get Started</a>
              </li>

              <li>
                <h4>Total Deposit Advance (TDA)</h4>
                <p>Ability to accept credit card payments is essential for growing a successful business. Merchant Services offers a variety of credit card processing solutions for any type of business allowing merchants to grow their client base by having returning customers and attracting the new ones. Whether you are running a retail location where customers manually swipe their cards or an online business where you need to accept credit card payments securely through your website, Merchant Services has the right solution to meet your unique needs. And if you constantly on the road, our wireless credit card processing solutions will optimize and secure your payment transactions by eliminating the need of handling cash or checks while away from the office.</p>
                <a href="quick-start" class="link-angle text-color-05">Get Started</a>
              </li>
            </ul>
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
                <a href="merchant-analytics" class="other-devices__item-link">
                  <img src="img/services-merchant-analytics.png" alt="Merchant Analytics">
                  <h4>Merchant Analytics</h4>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>

<?php
$view->page_end();
?>