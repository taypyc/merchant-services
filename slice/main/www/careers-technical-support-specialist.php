<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$careers_job = 'Technical Support Specialist';
$view->page_start(array('title' => "{$careers_job} | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-02"><div class="sbd-figure-img"><img src="img/bg-careers-tss.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1><?php echo $careers_job; ?></h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <div class="row">
                  <div class="col-12 col-md-6 col-xl-7 block-indent-right-sm wrap-fz-01">
                    <h5>Come join our winning team</h5>
                    <p>Technical Support Representative</p>
                    <p>Slice Business Marketing, is a national company offering credit card processing and business capital products and services.</p>
                    <p>We are growing our support team to accommodate for demand for our products and services. We offer full training, a progressive and casual (but task oriented) work environment, competitive salary post training, bonus opportunities, paid time off.</p>
                    <h6>Responsibilities:</h6>
                    <ul class="list-circle">
                      <li>Manage large amounts of incoming calls</li>
                      <li>Respond efficiently to customer inquiries</li>
                      <li>Identify and assess customers' needs to achieve resolution to problem at hand</li>
                      <li>Build sustainable relationships and trust with customers through open and interactive communication</li>
                      <li>Provide accurate, valid and complete information by using the right methods/tools</li>
                      <li>Follow up to ensure resolution</li>
                      <li>Follow communication procedures, guidelines and policies</li>
                      <li>Keep records of customer interactions using SalesForce CRM</li>
                      <li>Tech Specific responsibilities</li>
                    </ul>
                    <h6>Requirements:</h6>
                    <ul class="list-circle">
                      <li>Minimum 1 year customer support, collections, tech support experience</li>
                      <li>Strong phone contact handling, active listening and attention to detail skills</li>
                      <li>Customer orientation and ability to adapt/respond to different types of characters</li>
                      <li>Excellent communication and presentation skills</li>
                      <li>Ability to multi-task, prioritizes, and manages time effectively</li>
                    </ul>
                    <h6>Experience in the following areas is a plus:</h6>
                    <ul class="list-circle">
                      <li>Merchant Services Industry Experience</li>
                      <li>Familiarity with Salesforce CRM</li>
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