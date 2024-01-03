<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
          <section class="quality">
              <div class="container">
                  <div class="quality-header">
                      <h2 class="text-center">Does <span class="text-color-blue">My Business</span> Qualify?</h2>
                      <p class="text-center">Our funding requirements are simple and straightforward. <br/>
                          You will need to meet the following minimum criteria:</p>
                  </div>
                  <div class="row align-items-center">
                      <div class="col-12 col-lg-4 with-arrow">
                        <h4>This is <br class="d-none d-lg-block">
                            what you need <br class="d-none d-lg-block">
                            to get started?</h4>
                          <a href="quick-start" class="btn">Get started<span></span></a>
                      </div>
                      <div class="col-lg-2 d-none d-lg-block"></div>
                      <div class="col-12 col-lg-6 items">
                          <div class="row align-items-center">
                              <div class="col-12 col-lg-7 text-center text-lg-left">
                                  <h6>Ownership</h6>
                                  <p>You should be a business owner</p>
                                  <p></p>
                              </div>
                              <div class="col-12 col-lg-5 text-center text-lg-right">
                                <span class="account-icon"></span>
                              </div>
                          </div>
                          <div class="row align-items-center">
                              <div class="col-12 col-lg-7 text-center text-lg-left">
                                  <h6>Time in business</h6>
                                  <p>Your business should be incorporated <br> for 4 months or more</p>
                                  <p></p>
                              </div>
                              <div class="col-12 col-lg-5 text-center text-lg-right">
                                  <div class="large">
                                      4+
                                  </div>
                              </div>
                          </div>
                          <div class="row align-items-center">
                              <div class="col-12 col-lg-7 text-center text-lg-left">
                                  <h6>Time in business</h6>
                                  <p>At least $7,000+ a month deposited <br> in your business bank account</p>
                                  <p></p>
                              </div>
                              <div class="col-12 col-lg-5 text-center text-lg-right">
                                  <div class="big">
                                      $10K
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
