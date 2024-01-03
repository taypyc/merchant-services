<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$careers_job = 'Customer Support Specialist';
$view->page_start(array('title' => "{$careers_job} | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-02"><div class="sbd-figure-img"><img src="img/bg-careers-css.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1><?php echo $careers_job; ?></h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <div class="row">
                  <div class="col-12 col-md-6 col-xl-7 block-indent-right-sm wrap-fz-01">
                    <h5>Come join our winning team</h5>
                    <p>Slice is looking for a Customer Service Specialist</p>
                    <p>Slice is a national credit card processing company assisting merchants nationwide with an array of financial services to fit their business’s needs.  We specialize in offering merchants the ability to accept credit / debit card payments, as well as processing their credit / debit card transactions.</p>
                    <h6>What does a Customer Service Representative do?</h6>
                    <p>A customer service representative, will act as a liaison, provide product/services information and resolve any emerging problems that our customer accounts might face with accuracy and efficiency.  The best CSR are genuinely excited to help customers. They're patient, empathetic, and passionately communicative. Problem-solving also comes naturally to customer care specialists. They are confident at troubleshooting and investigate if they don't have enough information to resolve customer complaints.  Our goal is to ensure excellent service standards, respond efficiently to customer inquiries and maintain high customer satisfaction.</p>
                    <h6>Responsibilities</h6>
                    <ul class="list-circle">
                      <li>Manage large amounts of incoming calls</li>
                      <li>Respond efficiently to customer inquiries </li>
                      <li>Identify and assess customers' needs to achieve satisfaction</li>
                      <li>Build sustainable relationships and trust with customer accounts through open and interactive communication</li>
                      <li>Provide accurate, valid and complete information by using the right methods/tools</li>
                      <li>Follow up to ensure resolution</li>
                      <li>Follow communication procedures, guidelines and policies</li>
                      <li>Keep records of customer interactions, process customer accounts and file documents</li>
                    </ul>
                    <h6>Requirements</h6>
                    <ul class="list-circle list-circle-mb-indent">
                      <li>High school degree</li>
                      <li>Minimum 1 year customer support experience</li>
                      <li>Strong phone contact handling skills and active listening</li>
                      <li>Familiarity with Salesforce CRM</li>
                      <li>Customer orientation and ability to adapt/respond to different types of characters</li>
                      <li>Excellent communication and presentation skills</li>
                      <li>Ability to multi-task, prioritizes, and manages time effectively</li>
                    </ul>
                    <h6>Experience in Merchant Services Industry is a plus!</h6>
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