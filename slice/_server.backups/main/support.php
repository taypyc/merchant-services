<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Support | Slice"));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>Support 24/7</h1>
              </div>
              <div class="tile-info-links-wrap block-mb-md">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <div class="tile-info-links d-flex flex-column">
                      <div class="til-icon text-color-green"><svg class="icon icon-phone-line"><use xlink:href="css/fonts/icons.svg#phone-line"></use></svg></div>
                      <p class="til-header">Call us now</p>
                      <p>Got questions? <br>We’re ready to help you find the answer.</p>
                      <div class="til-links mt-auto">
                        <ul>
                          <li><a href="tel:<?php echo $view->i['mobile_href']; ?>" class="link-element link-violet">CALL NOW >> <span class="white-space-nw"><?php echo $view->i['mobile']; ?></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="tile-info-links d-flex flex-column">
                      <div class="til-icon text-color-orange"><svg class="icon icon-email-line"><use xlink:href="css/fonts/icons.svg#email-line"></use></svg></div>
                      <p class="til-header">Email to us</p>
                      <p>Please email any questions, comments or suggestions to us</p>
                      <div class="til-links mt-auto">
                        <ul>
                          <li><a href="mailto:info@startslice.com" class="link-element link-violet">info@startslice.com</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="tile-info-links d-flex flex-column">
                      <div class="til-icon text-color-blue"><svg class="icon icon-book"><use xlink:href="css/fonts/icons.svg#book"></use></svg></div>
                      <p class="til-header">FAQs</p>
                      <p>Find the answers using our Self-service</p>
                      <div class="til-links mt-auto">
                        <ul>
                          <li><a href="faq" class="link-angle link-violet">General FAQ</a></li>
                          <li><a href="faq/cash-discount" class="link-angle link-violet">Cash Discount FAQ</a></li>
                          <li><a href="faq/business-financing" class="link-angle link-violet">Business Financing FAQ</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sbd-content-additional text-center">
                <h2>Didn’t find what you are looking for?</h2>
                <p class="sub-header block-mb-sm">If you have any questions our knowledgeable staff will be happy to help you</p>
                <a href="contact-us" class="btn btn-icon"><svg class="icon icon-email-action"><use xlink:href="css/fonts/icons.svg#email-action"></use></svg>Contact us</a>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
      </div>

<?php
$view->page_end();
?>