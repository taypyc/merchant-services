<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Thank you"));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-02"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>Thank you</h1>
              </div>
              <div class="tile-content tile-content-about">
                <div class="text-center block-mb-md">
                  <p class="sub-header"><strong>Your information was sent succesfully. We will get back to you shortly.</strong></p>
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