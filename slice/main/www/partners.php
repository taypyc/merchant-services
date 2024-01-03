<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Partners | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-02"><div class="sbd-figure-img"><img src="img/bg-partners.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>Partnership</h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <div class="row">
                  <div class="col-12 col-md-6 col-xl-7 block-indent-right">
                    <h2>Become <br>Our Partner</h2>
                    <p>A partnership with Slice will be focused on your success. <br>The ISO and Agent Program is designed specifically for agents, offering you unparalleled flexibility and in-depth resources that can’t be matched by anyone in the industry.</p>
                    <ul class="list-circle list-circle-mb-indent">
                      <li>Fast Turnarounds</li>
                      <li>Full Comissions on Renewals</li>
                      <li>Direct Funder</li>
                      <li>No Inside Sales</li>
                      <li>Syndication Opportunities</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-6 col-xl-5">
                    <div class="tile-form tile-border-shadow-top">
                      <form class="form-partners">
                        <div class="text-center block-mb-xs">
                          <h5>ISO program sign up</h5>
                          <p>Please fill out the form and we will contact you within 24 hours</p>
                        </div>
                        <div class="form-group">
                          <input name="name" type="text" class="form-control" required placeholder="Full name">
                        </div>
                        <div class="form-group">
                          <input name="phone" type="tel" class="form-control" required placeholder="Phone number">
                        </div>
                        <div class="form-group">
                          <input name="email" type="email" class="form-control" required placeholder="Email">
                        </div>
                        <!-- <div class="form-group">
                          <select size name="industry" class="form-control" required placeholder="New in the industry?">
                            <option value="">New in the industry?</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div> -->
                        <div class="form-group fg-btn text-center">
                          <button type="submit" class="btn">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>