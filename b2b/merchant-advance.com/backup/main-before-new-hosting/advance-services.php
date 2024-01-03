<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Advance services"));
?>

      <div role="main" class="main page-as">

        <section class="page-hero" style="background-image:url(img/bg-services.jpg)">
          <div class="container">
            <h1>Advance Services</h1>
          </div>
        </section>
        
        <section>
          <div class="container">
            <div class="block-heading mb-lg">
              <div>
                <h2>Grow your <br>MCA Company</h2>
              </div>
              <div class="bh-content">
                <p>We provide you with solutions necessary for you to increase merchant retention and promote your brand. Grow your company while being in the forefront with the merchant.</p>
              </div>
            </div>
            <div class="row tile-heading-wrap">
              <div class="col-xs-4">
                <a href="get-started" class="tile-link tile-heading appear-animation" data-appear-animation="cardRotateX">
                  <span class="th-head" style="background-image:url(img/bg-th-01.jpg)">Referral Program</span>
                  <span class="th-body">
                    <span class="th-content">Are you a bank that has commercial clients who need funding? <br>
                    A payroll company that has clients who need working capital? <br>
                    We have a referral program that you can utilize. Your clients will be able to work directly with any of the funding companies in our network and you will earn a commission on every deal that gets funded. </span>
                    <span class="link-angle la-uc">FIND OUT MORE</span>
                  </span>
                  
                </a>
              </div>
              
              <div class="col-xs-4">
                <a href="get-started" class="tile-link tile-heading appear-animation" data-appear-animation="cardRotateX" data-appear-animation-delay="500">
                  <span class="th-head" style="background-image:url(img/bg-th-02.jpg)">Business Advance <br>Program</span>
                  <span class="th-body">
                    <span class="th-content">This program allows you to get capital today against your future credit card residuals. <br>
                    Use this capital for expansion or to fund your MCA’s.</span>
                    <span class="link-angle la-uc">FIND OUT MORE</span>
                  </span>
                </a>
              </div>
              
              <div class="col-xs-4">
                <a href="get-started" class="tile-link tile-heading appear-animation" data-appear-animation="cardRotateX" data-appear-animation-delay="1000">
                  <span class="th-head" style="background-image:url(img/bg-th-03.jpg)">Credit Line for <br>Funders</span>
                  <span class="th-body">
                    <span class="th-content">We offer syndication leverage and lines of credit for funders against their reoccurring credit card receivables. <br>
                    We go up to 70% LTV on your current borrowing base receivables. </span>
                    <span class="link-angle la-uc">FIND OUT MORE</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->contact_section(); ?>
      </div>

<?php
$view->page_end();
?>