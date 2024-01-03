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

        <section class="devices">
          <div class="container">
          <h1 class="devices__headline mb-5">Our <span class="text-color-01">Solutions</span></h1>
            <div class="devices__wrap">

              <div class="devices__row row align-items-center mb-5">
                <div class="col-12 col-md-6 devices__text">
                  <h3>Clover® Flex</h3>
                  <p>Clover Flex is a full function mobile POS device offering robust features to help your business operate and grow. The flexibility of accepting payments on-the-go via swipe, chip or tap options means you can accept payments anywhere and be able to print customer receipts via the built in printer.</p>
                  <a href="clover-flex" class="link-angle link-grey">Learn more</a>
                </div>

                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01 devices__image">
                  <img loading="lazy" src="img/clover-flex-equal.png" alt="Clover Flex">
                </div>

              </div>

              <div class="row align-items-center mb-5">
                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01 devices__image">
                  <img loading="lazy" src="img/clover-duo-equal.png" alt="Clover Station Duo">
                </div>

                <div class="col-12 col-md-6 devices__text">
                  <h3>Clover® Station Duo</h3>
                  <p>With it's beautiful modern design, external customer facing display, attached cash drawer and receipt printer and full scale cloud capabilities, you'll wonder how your business functioned without it.</p>
                  <a href="clover-station-duo" class="link-angle link-grey">Learn more</a>
                </div>

              </div>


              <div class="row align-items-center mb-5">
                <div class="col-12 col-md-6 devices__text">
                  <h3>Clover® Mini</h3>
                  <p>With it's small footprint, it can fit anywhere. But don't let it's size be deceiving, it's a full feature POS system. Connect it it through Wi-Fi or your wired ethernet network and you'll be ready to process payments, run reporting, use the Clover App Market and grow your business in no time. Oh, and the receipt printer is built in. Options to email or text receipts are of course an option.</p>
                  <a href="clover-mini" class="link-angle link-grey">Learn more</a>
                </div>

                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01 devices__image">
                  <img loading="lazy" src="img/clover-mini-equal.png" alt="Clover Mini">
                </div>
              </div>

              <div class="row align-items-center mb-5">
                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01 devices__image">
                  <img loading="lazy" src="img/dejavoo-qd2-equal.png" alt="Dejavoo QD3">
                </div>

                <div class="col-12 col-md-6 devices__text">
                  <h3>Dejavoo QD3</h3>
                  <p>Easier to maneuver and carry than a traditional terminal, transactions on the go are seamless. Chip, stripe, and contacless payment types are accepted, while providing text, email receipts for your customer records.</p>
                  <a href="dejavoo-qd2" class="link-angle link-grey">Learn more</a>
                </div>
              </div>

              <div class="row align-items-center mb-5">
                <div class="col-12 col-md-6 devices__text">
                  <h3>Dejavoo QD2</h3>
                  <p>Ready for business on the go? Dejavoo QD2 provides flexibility of accepting payments anywhere Wi-Fi or cellular service is available. Low  or  no service? No worries, with it's store and capture functionality, you can perform a transaction and as soon as you're connected, it will process automatically. All sorts of payment types are available, including Chip, stripe, and contactless. And it prints too!</p>
                  <a href="dejavoo-qd3" class="link-angle link-grey">Learn more</a>
                </div>

                <div class="col-12 col-md-6 wrap-03-img wrap-img-decor-01 devices__image">
                  <img loading="lazy" src="img/dejavoo-qd3-equal.png" alt="Dejavoo QD2">
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