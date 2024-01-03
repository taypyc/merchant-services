<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "White label program"));
?>

      <div role="main" class="main">
      
        <section class="page-hero" style="background-image:url(img/bg-wlp.jpg)">
          <div class="container">
            <h1>White Label Program</h1>
          </div>
        </section>
        
        <section>
          <div class="container">
            <div class="block-heading mb-lg">
              <div>
                <h2>Let our money <br>Work for You!</h2>
              </div>
              <div class="bh-content">
                <p>Our White Label Program allows you to maintain independence and have more control over the merchant directly. We provide you with support and tools to help you fund deals, so you reduce your exposure and make your money go further.</p>
              </div>
            </div>
            <div class="row icon-info-wrap iiw-grey">
              <div class="col-xs-3 icon-info-item">
                <img src="img/deals-01.png" alt="">
                <span class="ii-text">ACH Management</span>
              </div>
              
              <div class="col-xs-3 icon-info-item">
                <img src="img/deals-02.png" alt="">
                <span class="ii-text">Syndication or Not</span>
              </div>
              
              <div class="col-xs-3 icon-info-item">
                <img src="img/deals-03.png" alt="">
                <span class="ii-text">Underwriting</span>
              </div>
              
              <div class="col-xs-3 icon-info-item">
                <img src="img/deals-04.png" alt="">
                <span class="ii-text">Reporting</span>
              </div>
            </div>
          </div>
        </section>
        
        <section class="section-image-info sii-items bg-grey">
          <div class="container">
            <div class="sii-wrap" id="ach-management">
              <div class="sii-img sii-chart">
                <div>
                  <div style="background-image:url(img/lp-01-a.png)" class="appear-animation" data-appear-animation="fadeIn225deg" data-appear-animation-accy="-200"></div>
                  <div style="background-image:url(img/lp-01-b.png)" class="appear-animation" data-appear-animation="fadeIn45deg" data-appear-animation-accy="-200"></div>
                </div>
              </div>
              <div class="sii-info">
                <h3>ACH Management</h3>
                <p>We manage all ACH transactions from the merchant. Your syndicates can be paid out daily or weekly. We also offer options for you to manage collections and ACH management. No matter how big or small your company is we have different options for you to choose. </p>
                <div class="btn-wrap"><a href="get-started" class="link-angle la-uc">Get Started</a></div>
              </div>
            </div>
            
            <div class="sii-wrap" id="syndication-or-not">
              <div class="sii-info">
                <h3>Syndication or Not</h3>
                <p>Syndication allows you to leverage your current capital and fund more deals.  Whether you have your own syndicates or not, we have you covered so you can put out money to work for you or both. </p>
                <div class="btn-wrap"><a href="get-started" class="link-angle la-uc">Get Started</a></div>
              </div>
              <div class="sii-img sii-chart">
                <div>
                  <div style="background-image:url(img/lp-02-a.png)" class="appear-animation" data-appear-animation="fadeIn315deg" data-appear-animation-accy="-200"></div>
                  <div style="background-image:url(img/lp-02-b.png)" class="appear-animation" data-appear-animation="fadeIn135deg" data-appear-animation-accy="-200"></div>
                </div>
              </div>
            </div>
            
            <div class="sii-wrap" id="underwriting">
              <div class="sii-img sii-chart">
                <div>
                  <div style="background-image:url(img/lp-03-a.png)" class="appear-animation" data-appear-animation="fadeIn135deg" data-appear-animation-accy="-200"></div>
                  <div style="background-image:url(img/lp-03-b.png)" class="appear-animation" data-appear-animation="fadeIn315deg" data-appear-animation-accy="-200"></div>
                </div>
              </div>
              <div class="sii-info">
                <h3>Underwriting</h3>
                <p>Our experienced team handles risk management for you. <br>
                You can also choose to underwrite your files in house. </p>
                <div class="btn-wrap"><a href="get-started" class="link-angle la-uc">Get Started</a></div>
              </div>
            </div>
            
            <div class="sii-wrap" id="reporting">
              <div class="sii-info">
                <h3>Reporting</h3>
                <p>Out portal gives you easy access to all your deals in one place. We provide you with a login to your portfolio so you have access to real time reporting. Our software is customized to your needs, just let us know and we will create Custom Portfolio Performance reports for you and your team.</p>
                <div class="btn-wrap"><a href="get-started" class="link-angle la-uc">Get Started</a></div>
              </div>
              <div class="sii-img sii-chart">
                <div>
                  <div style="background-image:url(img/lp-04-a.png)" class="appear-animation" data-appear-animation="fadeIn45deg" data-appear-animation-accy="-200"></div>
                  <div style="background-image:url(img/lp-04-b.png)" class="appear-animation" data-appear-animation="fadeIn225deg" data-appear-animation-accy="-200"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <?php echo $view->steps_cta(); ?>
        <?php echo $view->contact_section(); ?>
      </div>

<?php
$view->page_end();
?>