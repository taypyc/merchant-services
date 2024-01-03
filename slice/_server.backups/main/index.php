<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Slice - we change the way you get paid."));
?>

      <div role="main" class="main main-appear" id="main-appear">
        <section class="section-hero section-hero-01 section-appear" id="section-appear">
          <div class="hero-bg hero-bg-01">
            <div class="presentation-wrap-01">
              <div class="pw-brand">
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
              <div class="pw-terminal-wrap">
                <div class="pw-terminal-stuff">
                  <div class="pw-terminal-device">
                    <div class="pw-terminal-device-screen"></div>
                    <div class="pw-terminal-device-btns-wrap">
                      <div class="d-flex justify-content-between pw-terminal-device-btns-circle">
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                      </div>
                      <div class="d-flex justify-content-between pw-terminal-device-btns-circle">
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                      </div>
                      <div class="d-flex justify-content-between pw-terminal-device-btns-rectangle">
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                      </div>
                      <div class="d-flex justify-content-between pw-terminal-device-btns-rectangle-lg">
                        <div><div class="pw-terminal-device-btn pw-terminal-device-btn-color-01"></div></div>
                        <div><div class="pw-terminal-device-btn pw-terminal-device-btn-color-02"></div></div>
                        <div><div class="pw-terminal-device-btn pw-terminal-device-btn-color-02"></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="pw-terminal-card"></div>
                </div>
              </div>
            </div>
            <div class="spheres-wrap">
              <div class="sphere-item sphere-01"></div>
              <div class="sphere-item sphere-02"></div>
              <div class="sphere-item sphere-03"></div>
            </div>
          </div>
          <div class="container">
            <div class="hero-wrap d-flex align-items-center">
              <div class="hero-wrap-content">
                <div class="hwc-bg-figure hwc-bg-figure-01"></div>
                <div class="hwc-info">
                  <p class="header-sup">Introducing</p>
                  <h2>Zero Cost Processing <span class="header-modification">to the Merchant</span></h2>
                  <p class="sub-header block-mb-md">Slice 100% of Processing Fees by <span class="white-space-nw">Rewarding Cash Payers</span></p>
                  <div class="btn-group">
                    <a href="<?php echo $view->i['signup_url']; ?>" class="btn">Get Started</a>
                    <a href="free-processing" class="link-angle">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
        <section class="section-visual-presentation block-zi-2 block-pt-sm">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>We change the way you get paid</h2>
              <p class="sub-header sub-header-sm">With recent law changes and the advancement of our proprietary software, your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost processing solution today!</p>
            </div>
            <div class="row">
              <div class="col-auto svp-card-wrap">
                <div class="card-element-wrap">
                  <div class="card-element"><img src="img/credit-card.jpg" alt=""></div>
                  <div class="card-element-decor ced-first"></div>
                  <div class="card-element-decor ced-second"></div>
                </div>
              </div>
              <div class="col-auto svp-list-wrap">
                <ul class="list-icon-header lih-01">
                  <li>
                    <div class="additional-info"><div class="additional-info-xl">0</div><div class="additional-info-sm">Cost Processing<br>to the Merchant</div></div>
                    <div class="lih-icon"><svg class="icon icon-cash"><use xlink:href="css/fonts/icons.svg#cash"></use></svg></div>
                    <p class="lih-header">Cash Discount</p>
                    <p class="lih-desc">The Slice Cash Discount Program is a way for you the merchant to offset your merchant service fees without increasing your sale price.</p>
                    <a href="free-processing#cash-discount" class="link-angle">Learn More</a>
                  </li>
                  <li>
                    <div class="additional-info"><div class="additional-info-lg">1.29%</div><div class="additional-info-md">Start from</div></div>
                    <div class="lih-icon"><svg class="icon icon-tax"><use xlink:href="css/fonts/icons.svg#tax"></use></svg></div>
                    <p class="lih-header">Traditional Processing</p>
                    <p class="lih-desc">Slice offers the most competitive rates for Conventional method of processing in the industry.</p>
                    <a href="free-processing#traditional-processing" class="link-angle">Learn More</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="section-equipment">
          <div class="container">
            <div class="block-header-left block-mb-md">
              <h2>Comprehensive <br>array of equipment <br>for any business</h2>
              <p class="sub-header">Regardless of what type of business you're running, be it a retail location or a restaurant, we will help you find the right payment processing solution.</p>
            </div>
            <div class="tiles-services-wrap tsw-anim">
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
                <div class="w-100"></div>
                <div class="col-12 col-sm-6 tsw-cta ml-auto">
                  <h3 class="text-color-green">Ready to get started?</h3>
                  <p class="sub-header font-header">Get a free consultation now</p>
                  <a href="<?php echo $view->i['signup_url']; ?>" class="btn">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-gradient-blue">
          <div class="container">
            <div class="row testimonials-preview-row">
              <div class="col-12 col-sm-5 align-self-start block-text-light bg-dynamic-rectangle">
                <div class="bdr-wrap"><div class="bdr-item"></div></div>
                <div class="block-zi-2">
                  <h2>Hear From <br>Our Satisfied <br>Clients</h2>
                  <!--<a href="testimonials" class="link-angle link-turquoise">Learn More Testimonials</a>-->
                </div>
              </div>
              <div class="col-12 col-sm-7 col-lg-6 testimonials-preview-wrap">
                <p class="tpw-text">…We integrated the Slice Cash Discount Program a few months back, and the savings were phenomenal! It amounted to a few thousand dollars — money I can really use to put back into the businesses. And my customers really appreciate the cash discount. What a great idea. Cheers to Slice!</p>
                <div class="tpw-author-rating">
                  <div class="tpw-author-img" style="background-image: url(img/testimonials/t-01.jpg)"></div>
                  <div class="tpw-rating"><span><svg class="svg-inline-icon"><use xlink:href="#svg-star"></use></svg></span><span><svg class="svg-inline-icon"><use xlink:href="#svg-star"></use></svg></span><span><svg class="svg-inline-icon"><use xlink:href="#svg-star"></use></svg></span><span><svg class="svg-inline-icon"><use xlink:href="#svg-star"></use></svg></span><span><svg class="svg-inline-icon"><use xlink:href="#svg-star"></use></svg></span></div>
                  <p class="tpw-author-name">Molly McHugh</p>
                  <p class="tpw-author-additional">Owner and Manager, <span class="white-space-nw">O’Mally’s Pub</span></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-grey-blue section-img-presentation">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Companies that already <br>use Slice</h2>
              <p class="sub-header sub-header-sm">With recent law changes and the advancement of our proprietary software, your business can accept credit cards at No Processing cost to the merchant. Slice Introduces zero cost processing solution today!</p>
            </div>
            <div class="img-presentation-info-wrap">
              <div class="row justify-content-center align-items-center">
                <div class="ipi-item"><img src="img/partners/p-01.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-02.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-03.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-07.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-05.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-06.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-04.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-08.png" alt=""></div>
                <div class="ipi-item"><img src="img/partners/p-09.png" alt=""></div>
              </div>
            </div>
          </div>
        </section>

        <section class="block-shadow-bottom">
          <div class="container">
            <div class="row align-items-center calculator-wrap">
              <div class="col-sm-12 col-md-6 col-lg-5 col-xl-6 cw-control" id="animation-tile-card-info">
                <h1>See how much<br> you <span class="white-space-nw">can save</span></h1>
                <p class="sub-header sub-header-sm block-mb-sm">Use the calculator below to determine your potential <br>savings on an annual basis</p>
                <p class="cw-info-highlight">Annual Credit Card <span class="white-space-nw">Processing Volume</span></p>
                <div class="slider-input-field">
                  <input id="amount-value" type="tel" class="interactive-val">
                </div>
                <div class="money-slider-wrap"><div id="money-slider" class="slider"></div></div>
                <p class="cw-info-desc">*Calculation is based on annual credit card processing volume multiplied by 3%</p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-7 col-xl-6">
                <div class="tile-card-info-wrap">
                  <div class="tile-card-info">
                    <div class="tile-card-info-bg"></div>
                    <div class="row tci-container align-items-center">
                      <div class="col-12">
                        <p class="tci-header">
                          <span class="tci-money-currency">$</span><span class="tci-money-value" id="calculator-result">7500</span><span class="tci-money-desc">/yr.</span>
                        </p>
                        <div class="tci-body">
                          <p class="tci-sub-header">Potential Annual Savings <br>with Slice</p>
                          <p>Start saving towards your company success with credit card processing fees off your list</p>
                        </div>
                        <div class="tci-cta text-center">
                          <a href="<?php echo $view->i['signup_url']; ?>" class="btn btn-lg">Get Started</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tile-card-decor tcd-first"></div>
                  <div class="tile-card-decor tcd-second"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- <section class="block-pb-sm" id="index-blog">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Slice Magazine</h2>
            </div>
            <div class="row">
              <div class="col-12 col-sm-4">
                <a href="#" class="tile-transparent">
                  <span class="tt-img" style="background-image: url(img/blog/b-01.jpg)"></span>
                  <span class="tt-header h5">More merchants adding credit card surcharges</span>
                  <span class="tt-info text-paragraph">PassThrough technology is one of the best innovations to happen to merchant services in a long...</span>
                  <span class="tt-cta text-right"><span class="link-angle">Read More</span></span>
                </a>
              </div>
              <div class="col-12 col-sm-4">
                <a href="#" class="tile-transparent">
                  <span class="tt-img" style="background-image: url(img/blog/b-02.jpg)"></span>
                  <span class="tt-header h5">Can Businesses Add A Credit Card Surcharge To Transactions?</span>
                  <span class="tt-info text-paragraph">PassThrough technology is one of the best innovations to happen to merchant services in a long...</span>
                  <span class="tt-cta text-right"><span class="link-angle">Read More</span></span>
                </a>
              </div>
              <div class="col-12 col-sm-4">
                <a href="#" class="tile-transparent">
                  <span class="tt-img" style="background-image: url(img/blog/b-03.jpg)"></span>
                  <span class="tt-header h5">5 Reasons Why You Should Consider Using PassThrough</span>
                  <span class="tt-info text-paragraph">PassThrough technology is one of the best innovations to happen to merchant services in a long...</span>
                  <span class="tt-cta text-right"><span class="link-angle">Read More</span></span>
                </a>
              </div>
            </div>
          </div>
        </section> -->
        <section class="section-cta block-pb-footer">
          <div class="container">
            <div class="row">
              <div class="cta-wrap">
                <h3 class="text-color-darkblue">Stop paying <span class="white-space-nw">high processing fees</span></h3>
                <p class="sub-header font-header">Start using Zero cost processing to the merchant solution today!</p>
                <ul class="list-checked block-mb-xs">
                  <li>Easy to start</li>
                  <li>No hidden fees</li>
                  <li>Save from day one</li>
                </ul>
                <div class="btn-group">
                  <a href="<?php echo $view->i['signup_url']; ?>" class="btn">Get Started</a><br>
                  <a href="contact-us" class="link-angle">Talk To Our Expert Now</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<?php
$view->page_end();
?>