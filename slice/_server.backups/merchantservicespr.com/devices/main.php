<?php
require_once 'php/scripts/view.class.php';
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$head_data = [
  'title' => '0% Credit Card Processing | MSPR',
  'meta_desc' => "Introducing 3 Amazing POS Solutions With 0% card processing. With the Slice 0% Processing plan, you'll never have to worry about processing fees.",
  'meta_keys' => '0% Credit Card Processing, 0 transaction fee, clover, pos, free processing, slice'
];

if($_SERVER['REQUEST_URI'] !== $view->site_root) {
  $head_data['meta_tags'] = '<link rel="canonical" href="' . $view->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $view->site_root . '">';
}

$view->page_start($head_data);
?>

      <div role="main" class="main block-shadow-02">

        <section class="section-hero">
          <div class="sh-item-wrap">
            <div class="container">
              <div class="sh-item d-flex align-items-center">
                <div class="sh-item-content ml-auto">
                  <p>Welcome to Merchant Services Puerto Rico</p>
                  <h1>We provide <br><span class="text-color-02">innovative</span> solutions<br> for your <span class="text-color-02">business</span></h1>
                  <br>
                  <div class="sh-item-img sh-item-img-01 sh-item-img-main"></div>

                  <div class="sh-item-cta block-mb-sm"><a href="quick-start" class="btn">Get started</a></div>
                  <div class="line-icons line-icons-01 d-flex align-items-center flex-wrap">
                    <div><svg class="icon icon-visa"><use xlink:href="css/fonts/icons.svg#visa"></use></svg></div>
                    <div><svg class="icon icon-mastercard"><use xlink:href="css/fonts/icons.svg#mastercard"></use></svg></div>
                    <div><svg class="icon icon-american-express"><use xlink:href="css/fonts/icons.svg#american-express"></use></svg></div>
                    <div><svg class="icon icon-discover"><use xlink:href="css/fonts/icons.svg#discover"></use></svg></div>
                    <div class="w-100 d-lg-none"></div>
                    <div><svg class="icon icon-contactless"><use xlink:href="css/fonts/icons.svg#contactless"></use></svg></div>
                    <div><svg class="icon icon-apple-pay"><use xlink:href="css/fonts/icons.svg#apple-pay"></use></svg></div>
                    <div><svg class="icon icon-google-pay"><use xlink:href="css/fonts/icons.svg#google-pay"></use></svg></div>
                    <div><svg class="icon icon-samsung-pay"><use xlink:href="css/fonts/icons.svg#samsung-pay"></use></svg></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="section-services">
          <div class="container">
            <h2>Our <span class="text-color-01">Services</span></h2>
  
            <div class="wrap-03">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Payment Services</h3>
                  <p>Accept a wide array of payments anywhere anytime</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>Credit and Debit Card Processing</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Electronic Benefit Transfer (EBT)</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>ACH Payments</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Blockchain Payments</strong>
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img loading="lazy" src="img/services-payment.png" alt="Payment Services">
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img">
                  <img loading="lazy" src="img/services-merchant-analytics.png" alt="Merchant Analytics">
                </div>

                <div class="col-12 col-md-6">
                  <h3>Merchant Analytics</h3>
                  <p>Start tracking your daily sales in real time</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>Online access to transactional data</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Monthly Statement access</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Credit Card Receivables and QuickBooks integration</strong>
                    </li> 
                    <li class="benefit__bulletlist-item">
                      <strong>Customized, aggregated data for your specific reports</strong>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Business Financing</h3>
                  <p>Get Up to $500,000 to support your business growth</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>Quick approval up to $500,000.00</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Simple one page application form</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Most industries accepted</strong>
                    </li> 
                    <li class="benefit__bulletlist-item">
                      <strong>Bad Credit is ok</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>No personal guarantee or collateral</strong>
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img loading="lazy" src="img/services-business-financing.png" alt="Business Financing">
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="section-solutions">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Our <span class="text-color-01">Solutions</span></h2>
            </div>
            <div class="other-devices">
            <div class="other-devices__item other-devices__item-main">
              <a href="clover-flex" class="other-devices__item-link">
                <img src="img/clover-flex-equal.png" alt="Clover Flex">
                <div class="other-devices__item-name">Clover® Flex</div>
              </a>
            </div>
            <div class="other-devices__item other-devices__item-main">
              <a href="clover-station-duo" class="other-devices__item-link">
                <img src="img/clover-duo-equal.png" alt="Clover Station Duo">
                <div class="other-devices__item-name">Clover® Station Duo</div>
              </a>
            </div>
            <div class="other-devices__item other-devices__item-main">
            <a href="clover-mini" class="other-devices__item-link">
              <img src="img/clover-mini-equal.png" alt="Clover Mini">
              <div class="other-devices__item-name">Clover® Mini</div>
            </a>
            </div>
            <div class="other-devices__item other-devices__item-main">
              <a href="dejavoo-qd2" class="other-devices__item-link">
                <img src="img/dejavoo-qd3-equal.png" alt="Dejavoo QD3">
                <div class="other-devices__item-name">Dejavoo QD3</div>
              </a>
            </div>
            <div class="other-devices__item other-devices__item-main">
              <a href="dejavoo-qd3" class="other-devices__item-link">
                <img src="img/dejavoo-qd2-equal.png" alt="Dejavoo QD2">
                <div class="other-devices__item-name">Dejavoo QD2</div>
              </a>
            </div>
            </div>
          </div>
        </section>

        <section id="section-about">
          <div class="container">
            <div class="about-us">

              <div class="row row-01">
                <div class="col-12 col-sm-5">
                  <h2 class="text-color-light">About Us</h2>
                  <p class="sub-header block-border-bottom block-border-bottom-01 wrap-br-01">We deliver the results you need, <br>and a price you want.</p>
                  <div><a href="#contacts" data-hash="" class="link-angle">Contact us now</a></div>
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
          </div>
        </section>

        <section id="section-benefits">
          <div class="container">
            <h2>Unlimited <span class="text-color-01">Benefits</span></h2>
            <div class="row wrap-01 icon-info-color-01">
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-online-payment"><use xlink:href="css/fonts/icons.svg#online-payment"></use></svg>
                  <p class="icon-info-header">Accept all payment types.</p>
                  <p>Let your customers pay how they want to. Swipe, dip, and tap. Magstripe, chip cards, and NFC payments like Apple Pay and Samsung Pay.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-bar-chart"><use xlink:href="css/fonts/icons.svg#bar-chart"></use></svg>
                  <p class="icon-info-header">Lowest Rate in Puerto Rico Guaranteed.</p>
                  <p>MSPR offers the most competitive rates in the industry. If we can't beat your rates, we give you $1000</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-network"><use xlink:href="css/fonts/icons.svg#network"></use></svg>
                  <p class="icon-info-header">All-in-one system.</p>
                  <p>Replace your register, dumb terminal, bar code scanner and bulky printer. A single, compact device is all you need to ring people up.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-connect"><use xlink:href="css/fonts/icons.svg#connect"></use></svg>
                  <p class="icon-info-header">Smart connectivity.</p>
                  <p>Capable of using multiple connections (Wi-Fi, Ethernet, or cellular networks) interchangeably giving more flexibility.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-calculations"><use xlink:href="css/fonts/icons.svg#calculations"></use></svg>
                  <p class="icon-info-header">Book keeping assistance.</p>
                  <p>Seamlessly integrate the Clover Flex with QuickBooks by simply downloading the CommerceSync app from our App Store.</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="icon-info icon-info-01">
                  <svg class="icon icon-support"><use xlink:href="css/fonts/icons.svg#support"></use></svg>
                  <p class="icon-info-header">Concierge Service.</p>
                  <p>Knowledgeable account specialist. Dedicated point of contact. 24/7 Support</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="cta-wrap bg-gradient-01">
          <div class="cta-img"><img src="img/img-flex.png" alt=""></div>
          <div class="container">
            <div class="cta-container row align-items-center">
              <div class="col-12 col-md-6 ml-auto">
                <h4 class="block-mb-sm wrap-br-04">Choose us as your partner to help you run your business more efficiently and improve your bottom line.</h4>
                <div class="cta-info-btn d-inline-flex align-items-center">
                  <div class="col-auto cta-info">$49<sup>.99/mo</sup></div>
                  <div class="col-auto"><a href="quick-start" class="btn">Start now</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-01.png" alt=""></div></div></div>
        </div>
        <div class="text-divided-info-wrap">
          <div class="container">
            <div class="row text-divided-info wrap-06">
              <div class="col-4">
                <p class="tdi-intro">Base <br>rate</p>
                <p class="tdi-highlighted">1.29%</p>
              </div>
              <div class="col-4">
                <p class="tdi-intro">Upfront Setup <br>Costs</p>
                <p class="tdi-highlighted">$0</p>
              </div>
              <div class="col-4">
                <p class="tdi-intro">Clover App <br>Market</p>
                <p class="tdi-highlighted">Included</p>
              </div>
            </div>
          </div>
        </div>

        <section id="become-partner">
          <div class="container">
            <div class="wrap-03">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3><span class="text-color-01">Become</span> <br>Our Partner</h3>
                  <p>Get Up to $500,000 to support your business growth</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>ISO and agent program</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Merchant Advance Program</strong>
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Affiliate program</strong>
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img loading="lazy" src="img/become-our-partner.png" alt="Become Our Partner">
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-grey">
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
                  <form class="form-contact form-feedback" novalidate="novalidate">
                    <div class="form-contact-header">
                      <h3>Contact us</h3>
                      <p class="sub-header text-size-02">If you have any questions our knowledgeable staff will be happy to assist you.</p>
                    </div>
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" required="" placeholder="Full name">
                    </div>
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" required="" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input name="phone" type="tel" class="form-control" required="" placeholder="Phone number" maxlength="14">
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
$js = ['start' => '<script src="' . $view->site_root . 'js/polyfills.include.js"></script>'];
$view->page_end($js);
?>