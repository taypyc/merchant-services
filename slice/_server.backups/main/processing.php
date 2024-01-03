<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Processing | Slice"));
?>

      <div role="main" class="main main-appear" id="main-appear">
        <?php echo $view->markup_scripts(1); ?>
        <section class="section-page-hero bg-header-overlay section-appear" id="section-appear">
          <div class="sph-bg-figure sph-bg-figure-01"><div class="sph-bg-figure-img"><img src="img/bg-free-processing.jpg" alt="" onload="sectionAppear()"></div></div>
          <div class="container">
            <div class="sph-info">
              <h1>Zero Cost <br>Processing <br>to the Merchant</h1>
              <p class="block-mb-lg"><a href="<?php echo $view->i['signup_url']; ?>" class="link-angle">Learn More</a></p>
              <div class="sph-info-logos sph-info-logos-01">
                <p class="sub-header font-header">As featured in</p>
                <div class="sph-info-logos-wrap row align-items-center no-gutters">
                  <div class="col-auto"><img src="img/featured/f-01.png" alt=""></div>
                  <div class="col-auto"><img src="img/featured/f-02.png" alt=""></div>
                  <div class="col-auto"><img src="img/featured/f-03.png" alt=""></div>
                  <div class="col-auto"><img src="img/featured/f-04.png" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="block-pb-md">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2 class="wrap-br-01">Are you Still Paying <br>to Get Paid?</h2>
              <p class="sub-header sub-header-sm">With recent law changes and the advancement of our proprietary software, your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost processing solution today!</p>
            </div>
            <div class="row align-items-xl-center block-mb-lg">
              <div class="col-12 col-lg-auto d-none d-lg-block">
                <div class="block-brand">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg-inline-brand" viewBox="0 0 101.6 101.6" preserveAspectRatio="xMidYMid meet">
                    <g id="svg-inline-brand-g-03">
                      <path class="svg-brand-st0" d="M51,60.9v31.8c11.4-1.1,21.3-5.3,29.7-12.6l-0.6-0.6L51,60.9z"/>
                      <path class="svg-brand-st1" d="M51,51.1V61l29.1,18.7L51,51.1z"/>
                    </g>
                    <g id="svg-inline-brand-g-02">
                      <path class="svg-brand-st2" d="M51,0v51.1l29.1,28.6l7.2,6.6c9.5-9.9,14.2-21.6,14.3-35.1c0-14.3-4.9-26.4-14.8-36.3C76.9,4.9,64.9,0,51,0z"/>
                    </g>
                    <g id="svg-inline-brand-g-01">
                      <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                        <path class="svg-brand-st3" d="M14.8,14.8C4.9,24.7,0,36.8,0,51.1C0,65,4.9,76.9,14.8,86.8c9.9,9.9,22,14.8,36.2,14.8V0
                          C36.8,0,24.7,4.9,14.8,14.8z"/>
                      </g>
                      <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                        <circle class="svg-brand-st4" cx="34.3" cy="34.3" r="13.5"/>
                        <circle class="svg-brand-st5" cx="34.3" cy="34.3" r="10.4"/>
                        <circle class="svg-brand-st6" cx="34.2" cy="34.3" r="6.8"/>
                      </g>
                    </g>
                  </svg>
                </div>
              </div>
              <div class="col-12 col-lg">
                <div class="row wrap-div-01">
                  <div class="col-6">
                    <ul class="list-checked-circle lcc-01">
                      <li>
                        <h5>It’s 100% legal</h5>
                        <p>Chosen solution for over 50,000 restaurants and bars across the country</p>
                      </li>
                      <li>
                        <h5>Easy to start</h5>
                        <p>All it takes a brief conversation with one of our professionals who will guide through the rest of the set up process.</p>
                      </li>
                      <li>
                        <h5>One Slice fits all</h5>
                        <p>Slice accommodates all credit card types and mobile wallet systems such as ApplePay® and Android®</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-checked-circle lcc-01">
                      <li>
                        <h5>No hidden fees</h5>
                        <p>We believe everything has to be transparent and fair</p>
                      </li>
                      <li>
                        <h5>Save from day one</h5>
                        <p>With Slice, the days of hefty credit card fees and interchange charges are over. It’s like giving yourself a big raise</p>
                      </li>
                      <li>
                        <h5>Supersmart technology</h5>
                        <p>Terminals with EMV Chip Reader. Cloud-based receipt system. Easy integration with any POS.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="section-info-tile-decor block-pb-zero">
          <div class="sitd-item anchor-wrap">
            <div class="anchor-block anchor-block-lg" id="cash-discount"></div>
            <div class="container">
              <div class="row align-items-lg-center">
                <div class="col-md-7 block-zi-2 order-2 order-md-1 block-indent-right-lg">
                  <h2 class="h1">Cash Discount</h2>
                  <p class="sub-header sub-header-sm">The Slice Cash Discount Program is a way for you the merchant to offset your merchant service fees without increasing your sale price.</p>
                  <ul class="list-circle block-mb-sm">
                    <li>100% legal</li>
                    <li>Available in all 50 states</li>
                    <li>Collect 100% of your processing sales</li>
                    <li>incredibly easy to order, set up and manage</li>
                    <li>Next day funding</li>
                  </ul>
                  <div class="btn-group">
                    <a href="<?php echo $view->i['signup_url']; ?>" class="btn btn-img"><svg class="svg-inline-icon"><use xlink:href="#svg-brand"></use></svg>Get started</a><br>
                    <a href="faq" class="link-angle link-grey">Read FAQs</a>
                  </div>
                </div>
                <div class="col-md-5 order-1 order-md-2">
                  <div class="tile-decor-wrap tile-decor-wrap-right">
                    <div class="tile-decor-substrate-wrap tdsw-01 tile-decor-substrate-anim"><div style="background-image: url(img/tile-cash-discount.png);"></div></div>
                    <div class="tile-decor bg-v-gradient-violet">
                      <div class="tile-decor-content">
                        <div class="tile-decor-icon"><svg class="icon icon-cash"><use xlink:href="css/fonts/icons.svg#cash"></use></svg></div>
                        <p class="tile-decor-header">Slice <br>Cash Discount <br>Program</p>
                        <p class="tile-decor-desc">Any business that accepts credit cards can benefit from Slice</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tile-icon-info block-zi-2">
                <div class="row">
                  <div class="col-12 col-lg-auto tii-cta">
                    <p class="tii-cta-header">How <br>It works?</p>
                    <a href="<?php echo $view->i['signup_url']; ?>" class="link-angle">Get Started</a>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class="col-sm-4 tii-item">
                        <div class="tii-item-icon"><svg class="icon icon-colored-money"><use xlink:href="css/fonts/icons.svg#colored-money"></use></svg></div>
                        <p class="tii-item-header">Cash is King</p>
                        <p>Even better, your customers are rewarded for paying in cash with a 3.99% discount!</p>
                      </div>
                      <div class="col-sm-4 tii-item">
                        <div class="tii-item-icon"><svg class="icon icon-colored-chart"><use xlink:href="css/fonts/icons.svg#colored-chart"></use></svg></div>
                        <p class="tii-item-header">A Bigger Slice</p>
                        <p>You, the business owner, get 100% of the sale!</p>
                      </div>
                      <div class="col-sm-4 tii-item">
                        <div class="tii-item-icon"><svg class="icon icon-colored-presentation"><use xlink:href="css/fonts/icons.svg#colored-presentation"></use></svg></div>
                        <p class="tii-item-header">Signs of the Times!</p>
                        <p>Point-of-purchase pricing and discount signage clearly spell out the process to customers</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-grey block-pt-content-01 block-pb-footer anchor-wrap">
          <div class="anchor-block anchor-block-01" id="traditional-processing"></div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6 block-info-decor block-info-decor-left">
                <h2 class="h1">Advanced Services <br>for your business</h2>
                <p class="sub-header sub-header-sm block-mb-sm">Take advantage of a variety of services to navigate in today’s diverse business environment. Slice offers the widest selection of merchant services and solutions in the industry. Everything you need to run your business more smoothly no matter your size or industry. <br>Our trained team of business experts has the right solution to help you grow your business.</p>
                <a href="<?php echo $view->i['signup_url']; ?>" class="btn btn-img"><svg class="svg-inline-icon"><use xlink:href="#svg-brand"></use></svg>Get started</a>
              </div>
              <div class="col-12 col-lg-6">
                <div class="tiles-cascade-wrap" id="tiles-cascade-init">
                  <div class="row">
                    <div class="col-6">
                      <div class="tile-icon-info-single">
                        <div class="tiis-icon tiis-icon-yellow"><svg class="icon icon-tax"><use xlink:href="css/fonts/icons.svg#tax"></use></svg></div>
                        <p class="tiis-header">Traditional Processing</p>
                        <p>Slice offers the most competitive rates for Conventional method of processing in the industry.</p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="tile-icon-info-single">
                        <div class="tiis-icon tiis-icon-green"><svg class="icon icon-gift-card"><use xlink:href="css/fonts/icons.svg#gift-card"></use></svg></div>
                        <p class="tiis-header">Gift & Loyalty Programs</p>
                        <p>Drive increased revenue with our tailored gift and loyalty programs</p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="tile-icon-info-single">
                        <div class="tiis-icon tiis-icon-blue"><svg class="icon icon-analytics"><use xlink:href="css/fonts/icons.svg#analytics"></use></svg></div>
                        <p class="tiis-header">Merchant Analytics</p>
                        <p>What if you could discover something new every day — insights that could drive your business growth and help you reach your full potential?</p>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="tile-icon-info-single">
                        <div class="tiis-icon tiis-icon-violet"><svg class="icon icon-food"><use xlink:href="css/fonts/icons.svg#food"></use></svg></div>
                        <p class="tiis-header">Online Restaurant Ordering</p>
                        <p>Slice can provide your restaurant with an array of services and solutions for your specific needs.</p>
                      </div>
                    </div>
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