<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => 'Careers | Slice'));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>Careers</h1>
              </div>
              <div class="tiles-anim-wrap block-mb-lg">
                <div class="row block-row-05">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <a href="<?php echo $view->site_root . 'careers/regional-sales-agent'; ?>" class="tile-info-img tile-info-img-sm">
                      <span class="tinim-img" style="background-image: url(img/bg-careers-rsa-tile.jpg)"></span>
                      <span class="tinim-content text-center">
                        <span class="tinim-header h6 text-color-header">Regional Sales Agent</span>
                        <span class="tinim-info text-paragraph">Come and join our winning team at Slice</span>
                        <span class="tinim-cta"><span class="link-angle">Read More</span></span>
                      </span>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <a href="<?php echo $view->site_root . 'careers/inside-sales-manager'; ?>" class="tile-info-img tile-info-img-sm">
                      <span class="tinim-img" style="background-image: url(img/bg-careers-ism-tile.jpg)"></span>
                      <span class="tinim-content text-center">
                        <span class="tinim-header h6 text-color-header">Inside Sales Manager</span>
                        <span class="tinim-info text-paragraph">Slice seeks an Inside Sales Manager</span>
                        <span class="tinim-cta"><span class="link-angle">Read More</span></span>
                      </span>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <a href="<?php echo $view->site_root . 'careers/customer-support-specialist'; ?>" class="tile-info-img tile-info-img-sm">
                      <span class="tinim-img" style="background-image: url(img/bg-careers-css-tile.jpg)"></span>
                      <span class="tinim-content text-center">
                        <span class="tinim-header h6 text-color-header">Customer Support Specialist</span>
                        <span class="tinim-info text-paragraph">Became a customer support specialist</span>
                        <span class="tinim-cta"><span class="link-angle">Read More</span></span>
                      </span>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <a href="<?php echo $view->site_root . 'careers/technical-support-specialist'; ?>" class="tile-info-img tile-info-img-sm">
                      <span class="tinim-img" style="background-image: url(img/bg-careers-tss-tile.jpg)"></span>
                      <span class="tinim-content text-center">
                        <span class="tinim-header h6 text-color-header">Technical Support Specialist</span>
                        <span class="tinim-info text-paragraph">Come and join our winning team at Slice</span>
                        <span class="tinim-cta "><span class="link-angle">Read More</span></span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="sbd-content-additional">
                <div class="text-center block-mb-md">
                  <h2>Why Work for Us</h2>
                  <p class="sub-header block-mb-sm">At Slice, we realize our employees are our best assets, multi-talented individuals who want to grow in their roles.</p>
                </div>
                <div class="row block-row-04">
                  <div class="col-12 col-lg-4">
                    <ul class="list-checked-circle">
                      <li>
                        <h5>Work Smart</h5>
                        <p>Slice headquarters in NYC operates as a flat organization full of collaboration and sharing ideas. Newly renovated open space with standing desks lends itself to a friendly almost family style organization. There is more to work than just daily grind. We operate with integrity and are transparent about all our business practices that have been fine tuned over the last 10 years. We don’t believe in wasting people’s time because time is money. Our aim is mutual gain.</p>
                      </li>
                    </ul>
                  </div>

                  <div class="col-12 col-lg-4">
                    <ul class="list-checked-circle">
                      <li>
                        <h5>Tap into your Potential</h5>
                        <p>At Slice, we realize our employees are our best assets, multi-talented individuals who want to grow in their roles. As a rapidly evolving company, we want to grow and want you to grow as well. At Slice, we are more that just sales agents; we are a team of business professionals with proven ability to be a leader in the market of Payment Solutions. We keep commitments, not secrets and turn data into relationships, relationships into closed deals. How do we do this? By tapping into the talent of our people and providing them with all the ingredients for success.</p>
                      </li>
                    </ul>
                  </div>

                  <div class="col-12 col-lg-4">
                    <ul class="list-checked-circle">
                      <li>
                        <h5>Why work for Slice?</h5>
                        <p>As a full payment solutions company specializing in merchant services, you will work with some of the best and brightest people out there. A family style culture that operates in a direct and straightforward manner fosters loyalty among colleagues. Slice acknowledges and celebrates your success through bonuses and other incentives, including monetary incentives and gamification.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
      </div>

<?php
$view->page_end();
?>