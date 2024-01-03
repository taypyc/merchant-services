<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Merchant Services"));
?>

      <div role="main" class="main">
        <section class="section-hero bg-blue section-decor-wrap sdw-01 block-ptb-zero">
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="section-decor"></div>
          <div class="container">
            <div class="sh-content text-color-light d-flex align-items-center">
              <div>
                <p class="header-sup header-sup-01">Welcome to Merchant Services <br>Puerto Rico </p>
                <h1 class="header-lg">We provide <br>innovative solutions <br>for your business</h1>
                <div class="btn-group btn-group-01">
                  <a href="quick-start" class="btn">Quick Start</a><br>
                  <a href="#services" data-hash class="text-color-light">Learn More...</a>
                </div>
              </div>
            </div>
            <div class="sh-bottom-info">
              <div class="container">
                <div class="img-line d-flex justify-content-center justify-content-sm-end">
                  <img src="img/visa-colored.png" alt="">
                  <img src="img/mc-colored.png" alt="">
                  <img src="img/amex-colored.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="anchor-wrap">
          <div class="anchor-block" id="services"></div>
          <div class="container">
            <h2 class="block-mb-md text-center text-md-left">Our Services</h2>
            <div class="tiles-img-layer-wrap">
              <div class="tile-img-layer row align-items-center">
                <div class="col-12 col-md-7 col-xl-6 order-2 order-md-1 block-zi-2">
                  <div class="til-info text-color-light d-flex align-items-center">
                    <div>
                      <h4>Payment Services</h4>
                      <p class="til-additional-info">Accept a wide array of payments anywhere anytime</p>
                      <ul class="list-dotted">
                        <li>Credit and Debit Card Processing</li>
                        <li>Electronic Benefit Transfer (EBT)</li>
                        <li>ACH Payments</li>
                        <li>Blockchain Payments</li>
                      </ul>
                      <a href="payment-services" class="link-angle">Learn more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-xl-6 order-1 order-md-2 til-img-wrap align-self-stretch">
                  <div class="til-img til-img-right" style="background-image: url(img/tile-card-acceptance.jpg)"></div>
                </div>
              </div>

              <div class="tile-img-layer row align-items-center">
                <div class="col-12 col-md-5 col-xl-6 til-img-wrap align-self-stretch">
                  <div class="til-img til-img-left" style="background-image: url(img/tile-business-financing.jpg)"></div>
                </div>
                <div class="col-12 col-md-7 col-xl-6 block-zi-2">
                  <div class="til-info text-color-light d-flex align-items-center">
                    <div>
                      <h4>Business Financing</h4>
                      <p class="til-additional-info">Get Up to $500,000 to support your business growth</p>
                      <ul class="list-dotted">
                        <li>Quick approval up to $500,000.00</li>
                        <li>Simple one page application form</li>
                        <li>Most industries accepted</li>
                        <li>Bad Credit is ok</li>
                        <li>No personal guarantee or collateral</li>
                      </ul>
                      <a href="business-financing" class="link-angle">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tile-img-layer row align-items-center">
                <div class="col-12 col-md-7 col-xl-6 order-2 order-md-1 block-zi-2">
                  <div class="til-info text-color-light d-flex align-items-center">
                    <div>
                      <h4>Cash Discount Program</h4>
                      <p class="til-additional-info">Building deeper customer relationships</p>
                      <ul class="list-dotted">
                        <li>Unique program that eliminates processing fees</li>
                        <li>Exclusive Certified Equipment</li>
                        <li>Available in Continental USA and Caribbean</li>
                      </ul>
                      <a href="cash-discount-program" class="link-angle">Learn more</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-xl-6 order-1 order-md-2 til-img-wrap align-self-stretch">
                  <div class="til-img til-img-right" style="background-image: url(img/tile-gift-loyalty-programs.jpg)"></div>
                </div>
              </div>

              <div class="tile-img-layer row align-items-center">
                <div class="col-12 col-md-5 col-xl-6 til-img-wrap align-self-stretch">
                  <div class="til-img til-img-left" style="background-image: url(img/tile-merchant-analytics.jpg)"></div>
                </div>
                <div class="col-12 col-md-7 col-xl-6 block-zi-2">
                  <div class="til-info text-color-light d-flex align-items-center">
                    <div>
                      <h4>Merchant Analytics</h4>
                      <p class="til-additional-info">Start tracking your daily sales in real time</p>
                      <ul class="list-dotted">
                        <li>Online access to transactional data</li>
                        <li>Monthly Statement access</li>
                        <li>Credit Card Receivables and QuickBooks integration</li>
                        <li>Customized, aggregated data for your specific reports</li>
                      </ul>
                      <a href="merchant-analytics" class="link-angle">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section-info text-color-semilight bg-blue section-decor-wrap sdw-01 anchor-wrap">
          <div class="anchor-block" id="about"></div>
          <div class="section-decor sd-top"></div>
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <div class="row row-01">
              <div class="col-12 col-sm-5">
                <h2 class="text-color-light">About Us</h2>
                <p class="sub-header block-border-bottom block-border-bottom-01 wrap-br-01">We deliver the results you need, <br>and a price you want.</p>
                <div><a href="#contacts" data-hash class="link-angle">Contact us now</a></div>
                <!-- <div class="text-num-info">
                  <div class="tni-item">
                    <span class="tni-item-top">over</span>
                    <span class="tni-item-lg-wrap"><span class="tni-item-lg">$5</span><span class="tni-item-lg-sub">Billion</span></span>
                    <span class="tni-item-bottom">Processing Volume</span>
                  </div>
                </div> -->
              </div>
              <div class="col-12 col-sm-7">
                <h5 class="text-color-light">Who We Are?</h5>
                <p class="block-mb-md">Our company is composed of some of the most intelligent, focused, and successful marketers in the world. We’re passionate about business, and we know how much work it takes to make a company succeed. We want to see more company owners achieve their dreams, and we want to see the world of business grow. <br>That’s why we’re here to help.</p>
                <h5 class="text-color-light">Business Philosophy</h5>
                <p>The key to any company’s success is its ability to acquire customers and retain clients. This is not an easy task to do. We understand the difficulties large corporations and small businesses face when it comes to attracting and retaining loyal clients – and that’s why we work tirelessly to help companies improve their reach. <br>
                Our goal is simple. We want to help you succeed. We have the knowledge, the skills, and the work ethic your company needs to make things happen. Give us a call, and we can help find the right solutions for you today.</p>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-grey anchor-wrap">
          <div class="anchor-block" id="partners"></div>
          <div class="container">
            <div class="row row-02">
              <div class="col-12 col-md-5">
                <div class="block-indent-right-lg">
                  <h2 class="wrap-br-02">Become <br>Our Partner </h2>
                  <p class="sub-header">MerchantServices PR has the partnership program you have been looking for.</p>
                  <p>We have been successfully providing merchant services for over 10,000 customers in North America and pride ourselves on our integrity and knowledge of the business. In addition Merchant Services is known for our innovation and forward thinking in the merchant services, credit card processing, and payment solutions industry. Combined with our industry recognized support and compensation plans, we have developed various programs focused on helping our partners reach and exceed their goals.</p>
                  <ul class="list-dotted">
                    <li>ISO and Agent Program</li>
                    <li>Merchant Advance Program</li>
                    <li>Affiliate Program</li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-md-7">
                <div class="tile-img-btn-wrap d-flex align-items-end">
                  <div class="tib-img" style="background-image: url(img/tile-partners.jpg)"></div>
                  <div class="tib-btn block-zi-2"><a href="partners" class="btn btn-xlg">Become a Partner</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-blue text-color-light section-decor-wrap sdw-02">
          <div class="section-decor sd-bottom"></div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-5">
                <div class="block-border-bottom block-border-bottom-02">
                  <h3 class="text-color-light wrap-br-02">Two easy steps to <br>Expand your business</h3>
                </div>
                <a href="quick-start" class="btn">Quick Start</a>
              </div>
              <div class="col-12 col-md-7">
                <div class="row info-text-decor info-text-decor-01">
                  <div class="col-6 itd-item">
                    <div class="itd-decor">01</div>
                    <h5 class="text-color-light">Contact us</h5>
                    <p>Submit our simple online form and we’ll get back to you quickly.  We’ll reach out to you to understand your business and what type of programs fit you better.</p>
                  </div>
                  <div class="col-6 itd-item">
                    <div class="itd-decor">02</div>
                    <h5 class="text-color-light">Grow with us</h5>
                    <p>Grow your business using our end-to-end solutions, while being in the forefront with the merchant. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-grey sction-contacts anchor-wrap">
          <div class="anchor-block" id="contacts"></div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-7 sc-additional align-self-end">
                <ul class="list-icon text-color-dark">
                  <li class="list-icon-wrap"><svg class="icon icon-location"><use xlink:href="css/fonts/icons.svg#location"></use></svg><strong>Address:</strong> 53 Calle Palmeras, Suite 802. <span class="text-nowrap">San Juan PR 00901</span></li>
                  <li><a href="tel:8003706250" class="list-icon-wrap"><svg class="icon icon-phone"><use xlink:href="css/fonts/icons.svg#phone"></use></svg><strong>Phone:</strong> 800-370-6250</a></li>
                  <li><a href="mailto:info@merchantservicespr.com" class="list-icon-wrap"><svg class="icon icon-email"><use xlink:href="css/fonts/icons.svg#email"></use></svg><strong>Email:</strong> info@merchantservicespr.com</a></li>
                </ul>
              </div>
              <div class="col-12 col-md-5">
                <div class="tile-form tile-form-02">
                  <form class="form-contact form-feedback">
                    <div class="form-contact-header">
                      <h3>Contact us</h3>
                      <p class="sub-header text-size-02">If you have any questions our knowledgeable staff will be happy to assist you.</p>
                    </div>
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" required placeholder="Full name">
                    </div>
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" required placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input name="phone" type="tel" class="form-control" required placeholder="Phone number">
                    </div>
                    <div class="form-group">
                      <textarea name="comments" class="form-control" placeholder="Comments"></textarea>
                    </div>
                    <div class="form-group fg-btn text-center">
                      <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<?php
$view->page_end();
?>