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
                  <h1>
                    <span class="text-color-02">Meet </span>Dejavoo QD3 <br>
                    <span class="text-color-02">Pocket Sized Smart Terminal with</span><br>Ultimate Mobility
                  </h1>

                  <div class="sh-item-img sh-item-img-01 sh-item-img-dejavoo-qd3"></div>
                  <ul class="list-circle list-circle-lg block-mb-sm wrap-br-03">
                    <li>Payments anywhere: Wireless and Wi-Fi ready</li>
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
            <h2>How <span class="text-color-01">Dejavoo QD3</span> <span class="block-ws-nowrap">helps your business</span></h2>
            <div class="row align-items-center wrap-04 no-gutters block-mb-xlg">
              <div class="col-12 col-lg-6">
                <div class="tile-visual">
                  <div class="video-wrap" data-no-video>
                    <div class="video-preloader" style="background-image: url(img/dejavoo-qd3-video.jpg)"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="tile-icon-info">
                  <div class="tabs-control block-mb-02">
                    <ul>
                      <li class="tabs-control-highlight">fit:</li>
                      <li>Service Industry</li>
                    </ul>
                  </div>
                  <h4 class="wrap-br-02">Dejavoo QD3<br>Ultimate mobility and convenience</h4>
                  <p class="block-mb-sm">Easier to maneuver and carry than a traditional terminal, transactions on the go are seamless. Chip, stripe, and contacless payment types are accepted, while providing text, email receipts for your customer records.</p>
                </div>
              </div>
            </div>
  
            <div class="table-info-wrap row">
              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Processor</td>
                      <td>Qualcomm + secure chip</td>
                    </tr>
                    <tr>
                      <td>Display</td>
                      <td>4” color LCD with touch panel (800 x 480)</td>
                    </tr>
                    <tr>
                      <td>Connectivity</td>
                      <td>GSM, WCDMA, FDD-LTE, TDD-LTE, WiFi, BT4.0, E-SIM</td>
                    </tr>
                    <tr>
                      <td>Security</td>
                      <td>PCI PTS 5.0</td>
                    </tr>
                    <tr>
                      <td>Charging</td>
                      <td>5V 1A adapter</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-12 col-sm-6">
                <table class="table-info">
                  <tbody>
                    <tr>
                      <td>Memory</td>
                      <td>512MB RAM, 4GB Flash</td>
                    </tr>
                    <tr>
                      <td>Battery</td>
                      <td>3.7V, 3000mAh</td>
                    </tr>
                    <tr>
                      <td>Built in features</td>
                      <td>Camera, 1D and 2D barcode scanner</td>
                    </tr>
                    <tr>
                      <td>Dimensions</td>
                      <td>127 x 70 x 21mm</td>
                    </tr>
                    <tr>
                      <td>Weight</td>
                      <td>200g</td>
                    </tr>
                  </tbody>
                </table>
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
                  <svg class="icon icon-support"><use xlink:href="css/fonts/icons.svg#support"></use></svg>
                  <p class="icon-info-header">Concierge Service.</p>
                  <p>Knowledgeable account specialist. Dedicated point of contact. 24/7 Support</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="cta-wrap bg-gradient-01">
          <div class="cta-img"><img src="img/img-qd3.png" alt=""></div>
          <div class="container">
            <div class="cta-container row align-items-center">
              <div class="col-12 col-md-6 ml-auto">
                <h4 class="block-mb-sm wrap-br-04">It’s time to run your business smarter, <br>faster and simplier.</h4>
                <div class="cta-info-btn d-inline-flex align-items-center">
                  <div class="col-auto cta-info">$29<sup>.99/mo</sup></div>
                  <div class="col-auto"><a href="quick-start" class="btn">Start now</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cta-bg-img-wrap"><div class="container"><div class="cta-bg-img"><img src="img/cta-bg-02.png" alt=""></div></div></div>
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
                <p class="tdi-intro">Customer Support</p>
                <p class="tdi-highlighted">24/7</p>
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
            <a href="clover-mini" class="other-devices__item-link">
              <img src="img/clover-mini-equal.png" alt="Clover Mini">
              <div class="other-devices__item-name">Clover® Mini</div>
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