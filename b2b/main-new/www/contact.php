<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
          <section class="contact">
              <div class="container">
                  <h2 class="text-center">Contact Us</h2>
              </div>
              <div class="contact-blocks">
                  <div class="container">
                      <div class="row">
                          <div class="col-12 col-lg-3">
                              <h6>Call Us</h6>
                              <div class="content">
                                  <p>Got questions? We’re ready <br>
                                      to help you find the answer.</p>
                                  <p></p>
                              </div>
                              <a href="tel:1-800-591-3327" class="phone">
                                  <svg class="icon">
                                      <use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use>
                                  </svg>
                                  1-800-591-3327
                              </a>
                          </div>
                          <div class="col-12 col-lg-3">
                              <h6>FAQs</h6>
                              <div class="content">
                                  <p>Here are a few of the questions we get the most.
                                      Information is available
                                      at the click of a button.</p>
                                  <p></p>
                              </div>
                              <a href="faq" class="dot">Read FAQ</a>
                          </div>
                          <div class="col-12 col-lg-3">
                              <h6>Online Chat</h6>
                              <div class="content">
                                  <p>Chat with us. <br>
                                      Send a message</p>
                                  <p></p>
                              </div>
                              <a href="#" class="dot">Start Chat</a>
                          </div>
                          <div class="col-12 col-lg-3">
                              <h6>Email</h6>
                              <div class="content">
                                  <p>Please email any questions, <br> comments or suggestions to us</p>
                                  <p></p>
                              </div>
                              <a href="mailto:support@b2bfunding.net">
                                  <svg class="icon">
                                      <use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#mail"></use>
                                  </svg>
                                  support@b2bfunding.net
                              </a>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34980.70585738914!2d-66.10715084737565!3d18.454869314573067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c036f30455a5669%3A0x19b6f620cef1d36f!2zTWlyYW1hciBQbGF6YSwgOTU0IEF2LiBkZSBsYSBDb25zdGl0dWNpw7NuICM2MDEsIFNhbiBKdWFuLCAwMDkwNywg0J_Rg9C10YDRgtC-LdCg0ZbQutC-!5e0!3m2!1suk!2sua!4v1666648441683!5m2!1suk!2sua" width="484" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-12 col-lg-7 contact-info">
                            <h6>Contact information</h6>
                            <p>
                                <svg class="icon">
                                    <use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#map"></use>
                                </svg>
                                Miramar Plaza Building, 954 Avenida Ponce de León, Suite 601, San Juan PR 00907
                            </p>
                            <p>
                                <a href="mailto:support@b2bfunding.net">
                                    <svg class="icon">
                                        <use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#mail"></use>
                                    </svg>
                                    support@b2bfunding.net
                                </a>
                            </p>
                            <p>
                                <a href="tel:1-855-204-8487">
                                    <svg class="icon">
                                        <use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use>
                                    </svg>
                                    1-855-204-8487
                                </a>
                            </p>
                            <h6>Send us a message</h6>
                            <form class="form-contact en">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="field">
                                            <input type="text" placeholder="Name" name="name" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="field">
                                            <input type="email" placeholder="Email" name="email" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="field">
                                            <input type="text" placeholder="Your message" name="message" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="field">
                                            <button type="submit">
                                                submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
          </section>
      </div>

<?php
$view->page_end();
?>
