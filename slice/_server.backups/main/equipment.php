<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Equipment | Slice"));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-01 block-pb-footer section-tiles-indent-top section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-01"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-left block-mb-md">
                <h1>Equipment</h1>
                <p class="sub-header sub-header-sm">Perfect equipment for <span class="white-space-nw">ZERO Cost Processing to the Merchant</span></p>
              </div>
              <div class="tiles-services-wrap block-mb-sm">
                <div class="row">
                  <div class="col-6 ml-auto tsw-item">
                    <div class="tile-service tile-service-right">
                      <a href="equipment/standalone-terminals" class="tile-service-link bg-diagonal-orange">
                        <span class="tile-service-link-wrap"><span class="tile-service-link-img"><img class="tile-service-img" src="img/service-standalone-terminal.png" alt=""></span></span>
                        <span class="tile-service-cta"><span class="link-angle link-grey">Learn More</span></span>
                      </a>
                      <div class="tile-service-info">
                        <div class="tsi-container">
                          <h5>Standalone terminals</h5>
                          <p>Sophisticated merchant services in a compact standalone countertop device</p>
                          <ul class="list-checked">
                            <li>Retailers</li>
                            <li>Grocery Stores</li>
                            <li>Quick-Service Restaurants</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-6 tsw-item">
                    <div class="tile-service tile-service-left">
                      <a href="<?php echo $view->i['signup_url']; ?>" class="tile-service-link bg-diagonal-turquoise">
                        <span class="tile-service-link-wrap"><span class="tile-service-link-img"><img class="tile-service-img" src="img/service-clover.png" alt=""></span></span>
                        <span class="tile-service-cta"><span class="link-angle link-grey">Learn More</span></span>
                      </a>
                      <div class="tile-service-info">
                        <div class="tsi-container">
                          <h5>Clover<sup>®</sup> POS Family</h5>
                          <p>The Ultimate Point of Sale system has arrived</p>
                          <ul class="list-checked">
                            <li>Retailers</li>
                            <li>Appointments & services</li>
                            <li>Quick-Service Restaurants</li>
                            <li>Bars</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-6 ml-auto tsw-item">
                    <div class="tile-service tile-service-right">
                      <a href="<?php echo $view->i['signup_url']; ?>" class="tile-service-link bg-diagonal-violet">
                        <span class="tile-service-link-wrap"><span class="tile-service-link-img"><img class="tile-service-img" src="img/service-paradise-pos.png" alt=""></span></span>
                        <span class="tile-service-cta"><span class="link-angle link-grey">Learn More</span></span>
                      </a>
                      <div class="tile-service-info">
                        <div class="tsi-container">
                          <h5>Paradise POS</h5>
                          <p>iPad POS Software</p>
                          <ul class="list-checked">
                            <li>Quick service restaurants</li>
                            <li>Retail</li>
                            <li>Grocery</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-6 tsw-item">
                    <div class="tile-service tile-service-left">
                      <a href="<?php echo $view->i['signup_url']; ?>" class="tile-service-link bg-diagonal-mint">
                        <span class="tile-service-link-wrap"><span class="tile-service-link-img"><img class="tile-service-img" src="img/service-restaurant-pos.png" alt=""></span></span>
                        <span class="tile-service-cta"><span class="link-angle link-grey">Learn More</span></span>
                      </a>
                      <div class="tile-service-info">
                        <div class="tsi-container">
                          <h5>Aldelo restaurant POS</h5>
                          <p>Chosen solution for over 50,000 restaurants and bars across the country</p>
                          <ul class="list-checked">
                            <li>Restaurants</li>
                            <li>Bars</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="info-icon-wrap info-icon-wrap-02 block-mb-md">
                <div class="row">
                  <div class="col iiw-item">
                    <div class="iiw-icon text-color-violet"><svg class="icon icon-settings"><use xlink:href="css/fonts/icons.svg#settings"></use></svg></div>
                    <h5>Easy to <br>setup</h5>
                    <p>All Slice Equipment incredibly easy to order, set up and manage</p>
                  </div>
                  <div class="col iiw-item">
                    <div class="iiw-icon text-color-turquoise"><svg class="icon icon-brain"><use xlink:href="css/fonts/icons.svg#brain"></use></svg></div>
                    <h5>Supersmart <br>technology</h5>
                    <p>Terminals with EMV Chip Reader. Cloud-based receipt system. Slice accommodates all credit card types</p>
                  </div>
                  <div class="col iiw-item">
                    <div class="iiw-icon text-color-orange"><svg class="icon icon-shop"><use xlink:href="css/fonts/icons.svg#shop"></use></svg></div>
                    <h5>Fits any type <br>of business</h5>
                    <p>From barbers and burger joints to plumbers and pizza parlors</p>
                  </div>
                  <div class="col iiw-item">
                    <div class="iiw-icon text-color-blue"><svg class="icon icon-24-hours"><use xlink:href="css/fonts/icons.svg#24-hours"></use></svg></div>
                    <h5>24/7 Customer <br>Support </h5>
                    <p>24/7 Live Tech support. Knowledgeable staff. Free upgrades. We did our homework :)</p>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <a href="<?php echo $view->i['signup_url']; ?>" class="btn">Get Started</a>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
      </div>

<?php
$view->page_end();
?>