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
                  <h1><span class="text-color-02">Meet</span> Clover® Flex <br>Accept payments <br>Anywhere.</h1>

                  <div class="sh-item-img sh-item-img-01"></div>
                  <ul class="list-circle list-circle-lg block-mb-sm wrap-br-03">
                    <li>Best handheld POS system<br>on the market</li>
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
            <h2>How <span class="text-color-01">Clover Flex</span> <span class="block-ws-nowrap">helps your business</span></h2>
            <div class="row align-items-center wrap-04 no-gutters block-mb-xlg">
              <div class="col-12 col-lg-6">
                <div class="tile-visual">
                  <div class="video-wrap">
                    <div class="video-container" data-video-source="clover-flex" data-video-poster="img-flex.png">
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
                      <li>Service  industry</li>
                    </ul>
                  </div>
                  <h4 class="wrap-br-02">The best mobile All-In-One POS System on the market</h4>
                  <p class="block-mb-sm">Clover Flex is a full function mobile POS device offering robust features to help your business operate and grow. The flexibility of accepting payments on-the-go via swipe, chip or tap options means you can accept payments anywhere and be able to print customer receipts via the built in printer.</p>
                </div>
              </div>
            </div>
  
            <div class="wrap-03">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Retail</h3>
                  <p>Clover Flex puts retail management at your fingertips. Increase your bottom line by lowering operating costs and adding revenue opportunities using reporting and available business management applications. Manage your inventory, track shipments and returns, see best and worse performing items, schedule staff shifts to account for busy and slow times, create daily reporting and so much more.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>Bundled Apps</strong>
                      Orders, Register, Promos, Rewards, Employees, Reporting, and others
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Inventory Management</strong>
                      Set up items and categories. Move or transfer orders. Add items to partially paid orders
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Drive traffic with promos</strong>
                      Create guest profiles and send promos and announcements via text, email, and receipts – all directly through Flex POS system.
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/flex-retail.jpg" alt="">
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/flex-restaurant.jpg" alt="">
                </div>

                <div class="col-12 col-md-6">
                  <h3>Restaurant</h3>
                  <p>Clover Flex's software eases the burden of operating a restaurant no matter the size or complexity. Seat more customers, connect waiters and kitchen staff, promote desired menu items, maintain ingredient and food modifiers, connect with your vendors to resupply low inventory items, assign tables and much more.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>Online Ordering</strong>
                      Offer seamless online ordering. Orders go straight to your QSR POS.  No set up or subscription fees.
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>QR code ordering</strong>
                      Your guests can do all the things they’re used to dining in: look through the menu, choose what they like, and pay the bill.
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Make orders more precise</strong>
                      Customize orders with descriptive modifiers like “extra cheese” or “sauce on the side.” You can also link orders to guests.
                    </li> 
                    <li class="benefit__bulletlist-item">
                      <strong>Taxes & Service Charges</strong>
                      Set up and automatically apply taxes at the item level; apply service charges to large parties
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Services</h3>
                  <p>No matter they of services you provide, Clover Flex provides industry leading tools and applications to take your business to the next level. Manage your bookings and reservations, assign dedicated employees, mange loyalty and marketing programs to attract more customers, manage employee shift, mange inventory, drive business reporting and so much more.</p>
                  <ul class="benefit__bulletlist">
                    <li class="benefit__bulletlist-item">
                      <strong>Easier payments</strong>
                      Accepting any type of payments is a snap—from in-person swipe, chip, and tap, to online payments.
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Take payments anywhere</strong>
                      On the road, in the office, or at your client’s location, in person or over the phone—never miss another sale.
                    </li>
                    <li class="benefit__bulletlist-item">
                      <strong>Manage from the cloud</strong>
                      Like all Clover’s solutions, Clover Flex is connected to the cloud, enabling you to manage and run your business from the palm of your hand. 
                    </li> 
                    <li class="benefit__bulletlist-item">
                      <strong>Fast setup</strong>
                      Clover systems come payments-ready. Set up on your own, with our support, or through your bank.
                    </li>
                  </ul>
                </div>

                <div class="col-12 col-md-6 wrap-03-img">
                  <img src="img/flex-service.jpg" alt="">
                </div>
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
                <div class="img-carousel wrap-05">
                  <div class="img-carousel-item"><img src="img/carousel-flex-03.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/carousel-flex-01.png" alt=""></div>
                  <div class="img-carousel-item"><img src="img/carousel-flex-02.jpg" alt=""></div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <ul class="list-checked">
                  <li>
                    <p class="list-checked-header">Small size, many choices.</p>
                    <p>Clover Flex is designed to be the most versatile machine on the market. It’s small enough to be portable, yet carries enough options to turn into a central management hub for your business.</p>
                  </li>
                  <li>
                    <p class="list-checked-header">Pay where you are.</p>
                    <p>Flex’s portable size makes it easy to collect payments from anywhere you are, even if you aren’t near your typical “check out line.” This saves everyone time, and makes life easier for staff members.</p>
                  </li>
                  <li>
                    <p class="list-checked-header">Works with your gear</p>
                    <p>Clover Flex is compatible with a wide range of different terminal add-ons, including scanners, scales, and other Clover hardware.</p>
                  </li>
                  <li>
                    <p class="list-checked-header">Get paid, even when your network is down.</p>
                    <p>Glitchy internet? No problem. Clover Flex has software that keeps records of payments and transmits them when your internet goes back online. </p>
                  </li>
                  <li>
                    <p class="list-checked-header">Sign away your cares. </p>
                    <p>Paper signatures are a thing of the past with the Clover Flex. Our software stores signatures digitally, making the need for a pen on hand obsolete.</p>
                  </li>
                  <li>
                    <p class="list-checked-header">Automatic batches.</p>
                    <p>One less step in the end of day closing process.</p>
                  </li>
                  <li>
                    <p class="list-checked-header">Virtual payment terminal.</p>
                    <p>The web based virtual payment portal make it possible to complete transactions even while away from the device.</p>
                  </li>
                  <li>
                    <p class="list-checked-header">Better connectivity than ever before.</p>
                    <p>With Clover’s 3G wireless connectivity, you never have to worry about your internet being difficult.</p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="wrap-03 block-mb-xlg">
              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Software tailored to your needs.</h3>
                  <p>Clover Flex is the ultimate POS system, but it doesn't stop at payment processing. With powerful built in tools and access to 100's of applications available on the Clover Market, Clover Flex is your ultimate business assistant.</p>
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

              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Sign away your cares.</h3>
                  <p>With touchscreen capability, no more pen and paper, or lost receipts. Everything is digitally captured and stored in your Clover Dashboard.</p>
                </div>

                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01">
                  <img src="img/features-flex-06.jpg" alt="">
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01">
                  <div class="img-carousel">
                    <img src="img/features-flex-02.jpg" alt="">
                    <img src="img/features-flex-03.jpg" alt="">
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <h3>Receipt ready.</h3>
                  <p>For customers that prefer a paper receipt for their transaction, Clover Flex is one of a few devices in it's class to offer the convenience of a built in printer. Options to email or text the receipt are always available as well.</p>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-12 col-md-6">
                  <h3>Inventory made easy.</h3>
                  <p>Clover Flex is amazing for inventory management. With a built in camera that acts as a scanner, scanning and sorting inventory is a breeze. Combined with it's unique inventory management tool, Clover Cloud and Clover Flex is the ultimate duo for businesses needing control over their inventory.</p>
                </div>

                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01">
                  <img src="img/features-flex-01.jpg" alt="">
                </div>
              </div>
            </div>

            <div class="table-info-wrap row">
              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Processor</td>
                      <td>1.6GHz Quad Core A7</td>
                    </tr>
                    <tr>
                      <td>Display</td>
                      <td>Antimicrobial Corning® Gorilla® Glass; 5 inch HD display with a 1280 x 720 LCD color screen for clear, crisp images</td>
                    </tr>
                    <tr>
                      <td>Connectivity</td>
                      <td>LTE and WiFi enabled, Ethernet</td>
                    </tr>
                    <tr>
                      <td>Security</td>
                      <td>PCI PTS V5.0</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Memory</td>
                      <td>1GB RAM, 8GB ROM</td>
                    </tr>
                    <tr>
                      <td>Battery life</td>
                      <td>Supports up to 8 hours of use for a typical SMB (Lithium-Ion 15.56Wh, 2100mAh @ 7.6V)</td>
                    </tr>
                    <tr>
                      <td>Built in features</td>
                      <td>Receipt printer, 1D/2D barcode scanner / camera</td>
                    </tr>
                    <tr>
                      <td>Electronic signature</td>
                      <td>Accepts electronic signatures on-screen; emails, texts and stores digital receipts</td>
                    </tr>
                  </tbody>
                </table>
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

        <section id="section-faq">
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Frequently asked <span class="text-color-01">questions</span></h2>
            </div>
            
            <div class="collapse-info-wrap block-maw-01">
              
              <div class="ciw-item">
                <div class="ciw-item-toggle">Can I take this anywhere?</div>
                <div class="ciw-item-info"><p>By enabling the internal sim card, Clover Flex can function anywhere cell phone signal can be obtained.</p></div>
              </div>
              
              <div class="ciw-item">
                <div class="ciw-item-toggle">How long does the battery last?</div>
                <div class="ciw-item-info"><p>The battery can last up to 12 hours of constant use before needing a quick charge.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">What happens if I drop it?</div>
                <div class="ciw-item-info"><p>Clover Flex carries a full warranty.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">Can it run my inventory?</div>
                <div class="ciw-item-info"><p>Clover Flex can run inventory for your business. Through 3rd party apps, you can manage your inventory on your device and your cloud account.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">Does it have online reporting?</div>
                <div class="ciw-item-info"><p>Clover Flex is cloud based. It allows you the ability to view reporting in real time, anywhere in the world as long as you have internet access.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">How secure is it?</div>
                <div class="ciw-item-info"><p>Clover Flex is fully encrypted and 100% PCI compliant.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">How does it sync to my QuickBooks?</div>
                <div class="ciw-item-info"><p>Simply download the QuickBooks app for seamless integration with your QuickBooks account.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">Who do I call for support?</div>
                <div class="ciw-item-info"><p>Clover Flex support is available 24/7.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">How quick do I get my deposits?</div>
                <div class="ciw-item-info"><p>Funds are deposited on the next business day.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">How fast is it for taking payments?</div>
                <div class="ciw-item-info"><p>Clover Flex can process transactions in 1.9 seconds.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle"> Is it easy to use?</div>
                <div class="ciw-item-info"><p>Clover Flex works much like a smart phone. It is the most user friendly device on the market.</p></div>
              </div>

              <div class="ciw-item">
                <div class="ciw-item-toggle">Who makes Clover Flex?</div>
                <div class="ciw-item-info"><p>Clover is owned by First Data, making it an exclusive First Data product.</p></div>
              </div>

            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="text-center block-mb-md">
              <h2>Other <span class="text-color-01">Devices</span></h2>
            </div>
            <div class="other-devices">
            <div class="other-devices__item">
              <a href="clover-station-duo" class="other-devices__item-link">
                <img src="img/clover-duo-equal.png" alt="Clover Station Duo">
                <div class="other-devices__item-name">Clover® Station Duo</div>
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