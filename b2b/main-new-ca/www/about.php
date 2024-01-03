<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
          <section class="about-us">
              <div class="container">
                  <h2 class="text-md-center">About <span class="text-color-blue">Us</span></h2>
                  <div class="row align-items-center">
                      <div class="col-12 col-lg-6 content">
                          <h6 class="d-none d-lg-block"><strong>Our Philosophy</strong></h6>
                          <p>We are here to finance your business goals! We aspire to provide you with the best financing alternatives based on the potential and financial strength of your business. We do not care if the bank has refused to provide you with financial assistance. We constantly strive to offer you the most innovative, simple and fast experience.</p>
                      </div>
                      <div class="col-12 col-lg-6">
                          <div class="row">
                              <div class="col-1 d-lg-none"></div>
                              <div class="col-10 col-lg-12">
                                  <picture>
                                      <source media="(max-width: 992px)" srcset="<?php echo $view->markup_builder->markup->assets_global;?>img/main/about-1-mobile.png" sizes="(max-width: 991px) 341px" >
                                      <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/about-1.png" width="619" height="462" alt="Our Philosophy" />
                                  </picture>
                              </div>
                              <div class="col-1 d-lg-none"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row align-items-center">
                      <div class="d-none d-lg-block col-12 col-lg-6">
                          <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/about-2.png" width="650" height="537" alt="Why We Are?" />
                      </div>
                      <div class="col-12 col-lg-6">
                          <h6 class="d-none d-md-block"><strong>Why We Are?</strong></h6>
                          <p>Our company is made up of some of the smartest, most focused, and most successful salespeople in the world. We are passionate about business, and we know how much work it takes to make a business successful. We want to see more business owners achieve their dreams, and we want to see the business world grow. That's why we're here to help.</p>
                      </div>
                  </div>
              </div>
          </section>
      </div>

<?php
$view->page_end();
?>
