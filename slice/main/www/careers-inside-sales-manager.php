<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$careers_job = 'Inside Sales Manager';
$view->page_start(array('title' => "{$careers_job} | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-02"><div class="sbd-figure-img"><img src="img/bg-careers-ism.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1><?php echo $careers_job; ?></h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <div class="row">
                  <div class="col-12 col-md-6 col-xl-7 block-indent-right-sm wrap-fz-01">
                    <h5>Come join our winning team</h5>
                    <p>Slice Business Marketing is looking to hire an Inside National Sales Manager who will be overseeing a team of outside regional sales agents nationwide. Slice offers products that include credit and debit card processing solutions as well as business financing for small and medium size businesses nationwide.</p>
                    <p>Slice has recently released new "Sales Agent Programs" and products that make it easier to earn more and sell more. Due to the company's growth and expansion of our inside sales team, we are looking for experienced sales professionals to join our sales team.</p>
                    <ul class="list-circle">
                      <li>Tremendous resources are provided to help you become successful.</li>
                      <li>Robust recruitment department will provide you with new recruits in the field consistently.</li>
                      <li>Preset appointments for your sales agents are provided daily.</li>
                      <li>Continuous sales training for this position will be provided by the Director of Sales</li>
                      <li>New innovative products and programs recently released to make it easier for you and your team to make more sales and more commissions in a shorter period of time.</li>
                    </ul>
                    <h6>Job Requirements:</h6>
                    <ul class="list-circle">
                      <li>2 years outbound/inbound telephone sales experience; working with business owners is preferred</li>
                      <li>Strong Leadership skills and an ability to sell and lead with an example</li>
                      <li>Understanding of credit card, processing (not a must but a strong plus)</li>
                      <li>Strong follow-up and time management skills</li>
                      <li>Strong and concise communication skills</li>
                      <li>Ability to excel in a fast-paced, high energy environment with a competitive nature</li>
                    </ul>
                    <h6>About the Role:</h6>
                    <ul class="list-circle">
                      <li>Hire, Support and Manage a Team of up to 20 Account Executives Nationwide</li>
                      <li>Daily Communication with your team about their day to day activity</li>
                      <li>Help Account Executives to structure and sell deals</li>
                      <li>Pipeline Management and daily lead disposition</li>
                      <li>Work closely with the Director of Sales</li>
                    </ul>
                    <h6>Compensation:</h6>
                    <ul class="list-circle">
                      <li>Paid Training Program</li>
                      <li>Weekly Base Pay</li>
                      <li>Weekly Large Commissions</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-6 col-xl-5">
                    <?php echo $view->markup_careers_form($careers_job); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>