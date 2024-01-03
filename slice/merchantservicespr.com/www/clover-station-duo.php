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
                  <h1><span class="text-color-02">Meet</span> Clover® Station Duo <br><span class="text-color-02">Your ultimate POS</span> <br>system from Clover</h1>

                  <div class="sh-item-img sh-item-img-01 sh-item-img-clover-duo"></div>
                  <ul class="list-circle list-circle-lg block-mb-sm wrap-br-03">
                    <li>Best full scale POS system available</li>
                    <li>Lowest rate guarantee</li>
                    <li>No upfront setup costs</li>
                  </ul>
                  <div class="sh-item-cta block-mb-sm"><a href="quick-start" class="btn">Get a free quote</a></div>
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

        <section>
          <div class="container">
            <h2>How <span class="text-color-01">Clover Station Duo</span> <span class="block-ws-nowrap">helps your business</span></h2>
            <div class="row align-items-center wrap-04 no-gutters block-mb-xlg">
              <div class="col-12 col-lg-6">
                <div class="tile-visual">
                  <div class="video-wrap">
                    <div class="video-container" data-video-source="clover-station-duo" data-video-poster="img-flex.png">
                      <!-- <video id="video" poster="img/bg-flex.jpg" playsinline muted loop preload="none">
                        <source src="video/videoplayback.mp4" type="video/mp4">
                        <source src="video/videoplayback.webm" type="video/webm">
                      </video> -->
                    </div>
                    <div class="video-preloader" style="background-image: url(img/video-bg.jpg)"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="tile-icon-info">
                  <div class="tabs-control block-mb-02">
                    <ul>
                      <li class="tabs-control-highlight">fit:</li>
                      <li>Retail</li>
                      <li>Restaurants</li>
                      <li>Service Industry</li>
                    </ul>
                  </div>
                  <h4 class="wrap-br-02">Clover® Station Duo<br>Your complete solution for payments and business management tools</h4>
                  <p class="block-mb-sm">With it's beautiful modern design, external customer facing display, attached cash drawer and receipt printer and full scale cloud capabilities, you'll wonder how your business functioned without it.</p>
                </div>
              </div>
            </div>
  
            <div class="wrap-03">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Retail</h3>
                  <p>Beyond payments, Clover® Station Duo is your go-to business assistant to help manage your store. External display for your customers means safer and easier transactions. Access to Clover Cloud and the Clover App market means better tools for your business.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item"><strong>COVID-Ready Payments</strong>Take orders and payments safely with contactless ordering and payments, paperless receipts, and offline payment mode
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Online ordering</strong>Take orders and payments online for quick, contactless delivery
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Inventory Management</strong>Set up items and categories; move or transfer orders; add items to partially paid orders
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Bundled Apps</strong>Orders, Register, Promos, Rewards, Employees, Reporting, and others
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Employee Management</strong>Set up employee logins and access permissions
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/clover-station-pro-retail.jpg" alt="">
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/clover-pro-station-rest.jpg" alt="">
                </div>

                <div class="col-12 col-md-6">
                  <h3>Restaurant</h3>
                  <p>Ready to take Restaurant Management to the next level? Station Duo is your solution. With a suite of applications and built it features geared specifically for the Restaurant industry, this Clover is your best tool for managing your restaurant business.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item"><strong>Online ordering</strong>Take orders and payments online for quick, contactless delivery
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Contactless ordering and payments</strong>
                    </li>
                    <li class="benefit__bulletlist-item"><strong>QR code ordering</strong>
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Bundled Apps</strong>Tips, Shifts, Discounts
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Orders</strong>Set up order types and categories; move or transfer orders; fire orders directly to kitchen or prep stations
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Taxes &amp; Service Charges</strong>Set up and automatically apply taxes at the item level; apply service charges to large parties
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </section>


        <section class="compatiblewith">
          <div class="compatiblewith__container container">
            <div class="compatiblewith__row">
              <div class="compatiblewith__header">Compatible with</div>
            </div>
            <div class="compatiblewith__row">
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/handheld-barcode-scanner.png" alt="Barcode Scanner"></div>
                <div class="compatiblewith__item-text">Barcode Scanner</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/weight-scale-tile.png" alt="Weight Scale"></div>
                <div class="compatiblewith__item-text">Weight Scale</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/kitchen-printer-tile.png" alt="Kitchen Printer"></div>
                <div class="compatiblewith__item-text">Kitchen Printer</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img compatiblewith__item-img--bigger"><img loading="lazy" src="img/kitchen-display-system.png" alt="Kitchen Display System"></div>
                <div class="compatiblewith__item-text">Kitchen Display System</div>
              </div>
              <div class="compatiblewith__item">
                <div class="compatiblewith__item-img"><img loading="lazy" src="img/clover-flex-accessory.png" alt="Clover Flex"></div>
                <div class="compatiblewith__item-text">Clover Flex</div>
              </div>
            </div>
          </div>
        </section>

        <section id="section-benefits">
          <div class="container">
            <h2>Your <span class="text-color-01">Benefits</span></h2>
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

        <section id="section-features">
          <div class="container">
            <h2><span class="text-color-01">Features</span> and Specifications</h2>
            <div class="row block-mb-xlg">
              <div class="col-12 col-md-6">
                <div class="img-carousel wrap-05 wrap-05--wider">
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-2.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-3.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-4.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-5.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/clover-duo-slide-6.png" alt=""></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
              <ul class="list-checked">
                  <li>
                    <div class="list-checked-header">Let your Customers drive</div>
                    <p>Station Duo comes with a smart terminal for your customers. That means they can confirm their orders and complete payment faster.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Move at the speed of light</div>
                    <p>Station Duo is our fastest, most powerful POS system. From inventory and orders to managing your staff and running reports, it’s all at your fingertips.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">All the colors of the payment rainbowall</div>
                    <p>Let your customers pay how they want to pay. Swipe, dip, or tap. Credit or debit. NFC payments including Apple Pay, Google Pay, WeChat Pay, Alipay and more. Now twice as fast.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Next-level security</div>
                    <p>Protect your business and customer information with end-to-end encryption and data tokenization, integrated EMV chip sensors, and fingerprint logins.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Stay on top of your numbers</div>
                    <p>Monitor your sales, refunds, and best-selling items from any computer or mobile device.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Fully-featured payments</div>
                    <p>Tax, discounts, loyalty rewards and gift cards are just a tap away.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Get to know your biggest fans</div>
                    <p>Collect and manage customer contact info and marketing preferences, so you can engage with them on their terms.</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="wrap-03 block-mb-xlg">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Software tailored to your needs.</h3>
                  <p>Ultimate POS system, but it doesn't stop at payment processing. With powerful built in tools and access to 100's of applications available on the Clover Market, Clover® Station Duo is your ultimate business assistant.</p>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/features-flex-04.jpg" alt="">
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/features-flex-05.jpg" alt="">
                </div>

                <div class="col-12 col-md-6">
                  <h3>Unlock Clover’s Dashboard.</h3>
                  <p>Cloud based, ready anytime and completely customizable, the Clover Dashboard is your ultimate business resource. Run custom reporting, keep reminders about key business objectives, manage staff, configure 3rd party applications, sort and filter financial data, event export to Quickbooks for easier accounting. Clover Dashboard: it has it all.</p>
                </div>
              </div>

            <div class="table-info-wrap row">
              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Dimensions</td>
                      <td>Base plate 11.0" x 7.5". Max. height from countertop to display top: 9"</td>
                    </tr>
                    <tr>
                      <td>Power Source</td>
                      <td>One power cable and LAN cable, with everything powered from the Clover Mini</td>
                    </tr>
                    <tr>
                      <td>Screen 1</td>
                      <td>Merchant-Facing Display - 14.0" IPS FHD Display</td>
                    </tr>
                    <tr>
                      <td>Screen 2</td>
                      <td>Customer-Facing Display - 7.0" IPS HD Display (Gorilla Glass 3 with Anti-Fingerprint and Anti-Microbial)</td>
                    </tr>
                    <tr>
                      <td>Printer</td>
                      <td>High-speed receipt printer</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Connectivity options</td>
                      <td>Wi-Fi, 4G/LTE, and Ethernet</td>
                    </tr>
                    <tr>
                      <td>Payments</td>
                      <td>Swipe, dip, or tap. Credit or debit. NFC payments including Apple Pay, Google Pay, WeChat Pay, Alipay and more. Now twice as fast.</td>
                    </tr>
                    <tr>
                      <td>Security</td>
                      <td>Fingerprint logins, NFC employee cards, transaction tokenization and encryption, PCI PTS 5.0 PED w/ P2PE readiness</td>
                    </tr>
                    <tr>
                      <td>Options</td>
                      <td>Embedded high-resolution camera for barcode or QR code scanning. Proprietary pivot arm swivels smoothly between merchant and customer</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

        <div class="cta-wrap bg-gradient-01">
          <div class="cta-img"><img src="img/img-clover-duo.png" alt=""></div>
          <div class="container">
            <div class="cta-container row align-items-center">
              <div class="col-12 col-md-6 ml-auto">
                <h4 class="block-mb-sm wrap-br-04">Choose us as your partner to help you run your business more efficiently and improve your bottom line.</h4>
                <div class="cta-info-btn d-inline-flex align-items-center">
                  <div class="col-auto cta-info">$119<sup>.99/mo</sup></div>
                  <div class="col-auto"><a href="quick-start" class="btn">Start now</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-duo.png" alt=""></div></div></div>
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

        <section>
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Other <span class="text-color-01">Devices</span></h2>
            </div>
            <div class="other-devices">
            <div class="other-devices__item">
              <a href="clover-flex" class="other-devices__item-link">
                <img src="img/clover-flex-equal.png" alt="Clover Flex">
                <div class="other-devices__item-name">Clover® Flex</div>
              </a>
            </div>
            <div class="other-devices__item">
            <a href="clover-mini" class="other-devices__item-link">
              <img src="img/clover-mini-equal.png" alt="Clover Mini">
              <div class="other-devices__item-name">Clover® Mini</div>
            </a>
            </div>
            <div class="other-devices__item">
              <a href="dejavoo-qd3" class="other-devices__item-link">
                <img src="img/dejavoo-qd3-equal.png" alt="Dejavoo QD3">
                <div class="other-devices__item-name">Dejavoo QD3</div>
              </a>
            </div>
            <div class="other-devices__item">
              <a href="dejavoo-qd2" class="other-devices__item-link">
                <img src="img/dejavoo-qd2-equal.png" alt="Dejavoo QD2">
                <div class="other-devices__item-name">Dejavoo QD2</div>
              </a>
            </div>
            </div>
          </div>
        </section>
      </div>

<?php
$js = ['start' => '<script src="' . $view->site_root . 'js/polyfills.include.js"></script>'];
$view->page_end($js);
?>