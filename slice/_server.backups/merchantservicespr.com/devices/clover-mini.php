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
                  <h1><span class="text-color-02">Meet</span> Clover® Mini:<br><span class="text-color-02">Full POS system</span> <br>Sleek footprint</h1>

                  <div class="sh-item-img sh-item-img-01 sh-item-img-clover-mini"></div>
                  <ul class="list-circle list-circle-lg block-mb-sm wrap-br-03">
                    <li>Best compact full feature POS system</li>
                    <li>Lowest Rate Guarantee</li>
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
            <h2>How <span class="text-color-01">Clover Mini</span> <span class="block-ws-nowrap">helps your business</span></h2>
            <div class="row align-items-center wrap-04 no-gutters block-mb-xlg">
              <div class="col-12 col-lg-6">
                <div class="tile-visual">
                  <div class="video-wrap">
                    <div class="video-container" data-video-source="clover-mini" data-video-poster="img-flex.png">
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
                      <li>Service industries</li>
                    </ul>
                  </div>
                  <h4 class="wrap-br-02">The best compact All-in-One POS system on the market</h4>
                  <p class="block-mb-sm">With it's small footprint, it can fit anywhere. But don't let it's size be deceiving, it's a full feature POS system. Connect it it through Wi-Fi or your wired ethernet network and you'll be ready to process payments, run reporting, use the Clover App Market and grow your business in no time. Oh, and the receipt printer is built in. Options to email or text receipts are of course an option.</p>
                </div>
              </div>
            </div>
  
            <div class="wrap-03">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Retail</h3>
                  <p>Manage your business with powerful tools specifically created with retail stores in mind. Accept payments through chip, swipe, tap, or even by phone. Keep track of inventory, run marketing promotions and keep a customer database. Manage your employees and run business critical reporting to help you grow. Clover Mini has it all.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item"><strong>Safe Payments</strong>Take orders and payments safely with contactless ordering and payments, paperless receipts, and offline payment mode
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Optimize your inventory</strong>Set up items and categories; move or transfer orders; add items to partially paid orders
                    <li class="benefit__bulletlist-item"><strong>Online ordering</strong>Take orders and payments online for quick, contactless delivery
                    </li>
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Bundled Apps</strong>Orders, Register, Promos, Rewards, Employees, Reporting, and others
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Employee Management</strong>Set up employee logins and access permissions
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/clover-mini-retail.jpg" alt="">
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/clover-mini-rest.jpg" alt="">
                </div>

                <div class="col-12 col-md-6">
                  <h3>Restaurant</h3>
                  <p>Want a POS system capable of running both front and back portions of your restaurant, yet sleek enough to place in tighter spots? Clover Mini is your solution.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item"><strong>Build a dynamic floor plan</strong>Build dynamic floor plans that match your layout
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Online ordering</strong>Take orders and payments online for quick, contactless delivery
                    </li>
                    <li class="benefit__bulletlist-item"><strong>QR code ordering</strong>Your guests can do all the things they’re used to dining in: look through the menu, choose what they like, and pay the bill.
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Bundled Apps</strong> Tips, Shifts, Discounts
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Orders</strong>Set up order types and categories; move or transfer orders; fire orders directly to kitchen or prep stations
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Taxes &amp; Service Charges</strong>Set up and automatically apply taxes at the item level; apply service charges to large parties
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Services</h3>
                  <p>Combined with the Clover App store, the Clover mini delivers powerfull full scale performance in a compact size. If you think think of a tool that will improve your services business, Clover Mini is likely to have it.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item"><strong>Robust reports</strong>Track sales as they come in, wherever you are. Log in any time for info at a glance, from hourly sales and top-selling items to refund and discount volume.
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Keep customers coming back</strong>Enter Clover Customer Engagement suite. It’s free, and each of the apps in the suite comes installed on the Clover dashboard
                    </li>
                    <li class="benefit__bulletlist-item"><strong>Make it easy for your customers</strong>Offer digital receipts and one-touch tipping. Process refunds, returns, and exchanges quickly and easily.
                    </li>
                  </ul>
                </div>
                
                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/clover-mini-service.jpg" alt="">
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
                  <div class="img-carousel-item"><img src="img/slide1-clover-mini.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/slide2-clover-mini.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/slide3-clover-mini.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/slide4-clover-mini.png" alt=""></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <ul class="list-checked">
                  <li>
                    <div class="list-checked-header">Small but powerful</div>
                    <p>Mini is small enough to fit into any space, but packs plenty of POS power to run your full house, front to back.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Payments and deposits made easy</div>
                    <p>Swipe, dip, tap, or take cash—accept all the ways your customers like to pay. And get the funds in your bank account as fast as the next business day.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Future-proof your business</div>
                    <p>Mini can be as minimal or full-featured as you want it to be. And it will always grow and scale with your business.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Stay on top of your numbers</div>
                    <p>Monitor your sales, refunds, and best-selling items from any computer or mobile device.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Unique business solutions</div>
                    <p>The Clover App Market offers specialized Apps to extend your business capabilities.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">Fully-featured payments</div>
                    <p>Tax, discounts, loyalty rewards and gift cards are just a tap away.</p>
                  </li>
                  <li>
                    <div class="list-checked-header">No room for theft</div>
                    <p>With permissions management and a PIN for each employee, you’re always protected.</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="wrap-03 block-mb-xlg">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Software tailored to your needs.</h3>
                  <p>Clover® Mini is a compact POS system, but it doesn't stop at payment processing. With powerful built in tools and access to 100's of applications available on the Clover Market, Clover® Mini is your ultimate business assistant.</p>
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
                      <td>Body</td>
                      <td>Brushed aluminum with white glass accents</td>
                    </tr>
                    <tr>
                      <td>Display</td>
                      <td>Antimicrobial Corning® Gorilla® Glass</td>
                    </tr>
                    <tr>
                      <td>Integrate</td>
                      <td>Integrate with existing point of sale software for a secure, EMV-ready, PCI-compliant, feature-rich system</td>
                    </tr>
                    <tr>
                      <td>Payments</td>
                      <td>Credit and EBT card swipes, EMV chip + PIN and EMV chip + signature, and contactless payments like Apple Pay, Samsung Pay and Android Pay</td>
                    </tr>
                    <tr>
                      <td>PCI Compliant</td>
                      <td>“Level 3” payment certified to payment processors and gateway. Connect your POS to Clover Mini/Mobile using USB, LAN (Ethernet or WiFi) or Cloud. Integrate quickly using our platform specific libraries (Windows SDK, JS SDK, Android SDK).</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Screen</td>
                      <td>Large touch screen: 7", 1280px x 800px</td>
                    </tr>
                    <tr>
                      <td>Hub</td>
                      <td>Charging port: Type B USB; Ethernet 4 Type A USB ports</td>
                    </tr>
                    <tr>
                      <td>Options</td>
                      <td>Option to connect a Cash Drawer accessory</td>
                    </tr>
                    <tr>
                      <td>Clover Mini Wi-Fi Ethernet</td>
                      <td>Wi-Fi (802.11a/b/g/n wireless)</td>
                    </tr>
                    <tr>
                      <td>3G (Pentaband HSPA+)</td>
                      <td>Requires data plan - bring your own or use Clover's</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

        <div class="cta-wrap bg-gradient-01">
          <div class="cta-img"><img src="img/buy-clover-mini.png" alt=""></div>
          <div class="container">
            <div class="cta-container row align-items-center">
              <div class="col-12 col-md-6 ml-auto">
                <h4 class="block-mb-sm wrap-br-04">Choose us as your partner to help you run your business more efficiently and improve your bottom line.</h4>
                <div class="cta-info-btn d-inline-flex align-items-center">
                  <div class="col-auto cta-info">$59<sup>.99/mo</sup></div>
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
              <a href="clover-station-duo" class="other-devices__item-link">
                <img src="img/clover-duo-equal.png" alt="Clover Station Duo">
                <div class="other-devices__item-name">Clover® Station Duo</div>
              </a>
            </div>
            <div class="other-devices__item">
              <a href="dejavoo-qd2" class="other-devices__item-link">
                <img src="img/dejavoo-qd3-equal.png" alt="Dejavoo QD3">
                <div class="other-devices__item-name">Dejavoo QD3</div>
              </a>
            </div>
            <div class="other-devices__item">
              <a href="dejavoo-qd3" class="other-devices__item-link">
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