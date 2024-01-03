<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Become a Partner"));
?>

      <div role="main" class="main">

        <section class="section-page-hero sph-01 text-color-light section-decor-wrap sdw-03" style="background-image: url(img/bg-partners.jpg)">
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <h1>Become a Partner</h1>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="tile-lg-info text-color-light section-decor-wrap sdw-03">
              <div class="section-decor sd-top"></div>
              <div class="section-decor sd-bottom"></div>
              <div class="tli-content">
                <h3 class="block-border-bottom">ISO & Agent Program</h3>
                <p><strong>A partnership with Merchant Services will be focused on your success. The ISO and Agent Program is designed specifically for agents, offering you unparalleled flexibility and in-depth resources that can’t be matched by anyone in the industry.</strong></p>
                <p>Our dedicated support, aggressive individualized pricing evaluation, generous compensation structure, value added programs and comprehensive training provide everything you need to grow and manage your business.</p>
                <p>Whether you’re an experienced agent or brand new to the industry we believe that continued education is key to business growth. As a complimentary resource for our agents, we offer live scheduled telephone conferences to help you evolve your sales techniques, save time, and earn more.</p>
                <p class="block-mb-sm">We offer a variety of trainings in the following categories: Agent Training 101, Understanding the Industry, Agent Tools to help Build and Manage Your Business, Understanding Applications & Statements, The Mind of an Underwriter, Value Added Services & Selling Points, Marketing Your Business and Generating Leads, Building Your Pipeline and Account Management, Technical and Equipment Training, Open Forum with Q&A, And Much More.</p>
                <a href="#partners-form" data-popup-open class="btn">Get started</a>
              </div>
            </div>

            <div class="tile-lg-info text-color-light section-decor-wrap sdw-03">
              <div class="section-decor sd-top"></div>
              <div class="section-decor sd-bottom"></div>
              <div class="tli-content">
                <h3 class="block-border-bottom">Merchant Cash Advance</h3>
                <p><strong>Alternative Lenders and cash advance brokers are welcome! Merchant Services has been supporting split settlement for business cash advance companies for over 10 years. We have an expertise in placing and managing higher risk merchants and providing an accurate reporting to the lender.</strong></p>
                <ul class="list-dotted block-mb-sm">
                  <li>Dedicated relationship manager to assist lender or broker needs</li>
                  <li>Daily Split Settlement of VISA, MC, Discover and Debit Transactions</li>
                  <li>Automated Daily Deposit and Reporting of Split Transactions</li>
                  <li>Real Time Proposals for future merchant prospects</li>
                  <li>Terminal Deployment Support</li>
                  <li>POS Reprogramming</li>
                  <li>Detailed Daily Reporting</li>
                </ul>
                <a href="#partners-form" data-popup-open class="btn">Get started</a>
              </div>
            </div>

            <div class="tile-lg-info text-color-light section-decor-wrap sdw-03">
              <div class="section-decor sd-top"></div>
              <div class="section-decor sd-bottom"></div>
              <div class="tli-content">
                <h3 class="block-border-bottom">Affiliate Program</h3>
                <p><strong>The Merchant Services affiliate program provides you with the opportunity to earn up to three times more than you’re earning today. Being part of our Affiliate Program is like having your own great business. We provide you with the tools and resources for marketing, customer service and technical support, and account management all with the security of working with a credible, industry leader. And, your referrals will benefit from an expedited approval process, exceptional support, and overall lower costs.</strong></p>
                <p>As a Merchant Services affiliate, you:</p>
                <ul class="list-dotted block-mb-sm">
                  <li>Make more money through our performance based payout structure and you are rewarded for all leads</li>
                  <li>Are integrated into our advanced lead tracking system ensuring that you receive credit and payment for every lead you refer, regardless of the lead source</li>
                  <li>Receive ongoing support from our in-house service and technical support teams</li>
                </ul>
                <a href="#partners-form" data-popup-open class="btn">Get started</a>
              </div>
            </div>
          </div>
        </section>
      
      </div>

      <div class="tile-form tile-form-01 mfp-hide popup-appear" id="partners-form">
        <form class="form-partners">
          <div class="form-contact-header">
            <h3>Become a Partner</h3>
            <p>Please fill out the form and we will contact you within 24 hours.</p>
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
          <div class="form-group fg-btn text-center">
            <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
            <p class="fg-additional">Once submitted, your request will be reviewed and one of our specialists will contact you within 24 hours. We respect your privacy and do not share your information with third parties.</p>
          </div>
        </form>
      </div>

<?php
$view->page_end();
?>