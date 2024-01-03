<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "About Slice"));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-04"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>About Slice</h1>
              </div>
              <div class="tile-content tile-content-about">
                <div class="row block-mb-sm">
                  <div class="col-12 col-sm-4">
                    <h2>Our mission</h2>
                  </div>
                  <div class="col-12 col-sm-8">
                    <p class="sub-header sub-header-sm">We strive to know the needs of our clients better than they do. Our extensive experience has taught us that there is no substitute for getting to know your merchants in order to provide them with outstanding service. All merchants are not created equal and at Slice we strive to provide each merchant with individualized attention. <br>We believe that in order to maintain long-term relationships with our merchants, we must continually position ourselves as a resource with the most current products in today’s market for electronic payments.</p>
                  </div>
                </div>

                <div class="info-text-sizes block-mb-lg d-flex justify-content-center">
                  <div class="its-item">
                    <span class="its-item-top">over</span>
                    <span class="its-item-lg-wrap its-item-gradient"><span class="its-item-lg">55</span><span class="its-item-lg-sub">years</span></span>
                    <span class="its-item-bottom">Combined <br>experience</span>
                  </div>
                  <div class="its-item">
                    <span class="its-item-top">over</span>
                    <span class="its-item-lg-wrap its-item-gradient"><span class="its-item-lg">15,000</span></span>
                    <span class="its-item-bottom">customers <br>in North America</span>
                  </div>
                  <div class="its-item">
                    <span class="its-item-top">over</span>
                    <span class="its-item-lg-wrap its-item-gradient"><span class="its-item-lg">$7</span><span class="its-item-lg-sub its-item-lg-sub-01">Billion</span></span>
                    <span class="its-item-bottom">Processing <br>Volume</span>
                  </div>
                </div>

                <div class="row block-mb-sm">
                  <div class="col-12 col-sm-4">
                    <h2>Slice is <br>socially <br>responsible</h2>
                  </div>
                  <div class="col-12 col-sm-8">
                    <p class="sub-header sub-header-sm">A given dollar amount is donated to one of many causes Slice supports with every merchant account that comes on board with us. We want to ensure our client’s investments express their personal values and have a positive impact on society. The donations are entirely used to fund a number of programs and provide many volunteers with the resources they need to solve the environmental, social, and economic problems facing the 21st Century. Here are some of them:</p>
                    <ul class="list-links-lg list-links-lg-01 list-links-lg-dib">
                      <li><a href="#">St. Jude Children's Research Hospital</a></li>
                      <li><a href="#">Animal Welfare Institute</a></li>
                      <li><a href="#">Cancer Research Institute</a></li>
                      <li><a href="#">New York Road Runners</a></li>
                      <li><a href="#">Unbound</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>

      </div>

<?php
$view->page_end();
?>