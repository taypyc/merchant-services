<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
        <section class="home-top-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 home-top-block-content">
                        <h1 class="mb-xl-5 text-center text-md-left">Quick <span class="text-color-blue">Business<br/>Funding</span> for Puerto Rican Businesses</h1>
                        <ul class="list mb-xl-5 pb-xl-5 ml-auto mr-auto ml-md-0 mr-md-0">
                            <li>
                                Quick Online Application
                            </li>
                            <li>
                                24 Hour Approval
                            </li>
                            <li>
                                48 Hour Funding
                            </li>
                        </ul>
                        <div class="home-top-block-links d-none d-md-block">
                            <a href="quick-start" class="btn">Get started<span></span></a>
                            <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-1"></div>
                    <div class="col-12 col-md-5 text-center">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-1.png"
                             width="437"
                             height="580"
                             alt="Quick Business Funding for Puerto Rican Businesses"
                             title="Quick Business Funding for Puerto Rican Businesses"
                        />
                    </div>
                    <div class="home-top-block-links d-flex d-md-none ml-auto mr-auto">
                        <a href="quick-start" class="btn">Get started<span></span></a>
                        <a href="tel:1-800-591-3327" class="phone-block order-first"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 d-none d-md-block">
                        <div class="row">
                            <div class="col-11">
                                <blockquote>
                                    <p>B2B Funding is a great company to work with! Rolando is an amazing manager and he’s doing a fantastic job!</p>
                                    <p class="text-right text-color-grey">
                                        <small>Alexandro M.</small>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-1">
                        <div class="reviews-separator"></div>
                    </div>
                    <div class="col-12 col-md-3 text-center">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/google-review.png" width="353" height="80" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="business">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                      <h2 class="mb-4">Does <span class="text-color-blue">My Business</span> Qualify?</h2>
                      <hr class="mb-4" />
                      <p>Our funding requirements are simple <br>
                          and straightforward. <br>
                          You will need to meet the following <br> minimum criteria:</p>
                      <div class="mb-5">
                          <a href="#" class="more">read more</a>
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="text-left">
                          <div class="business-rectangle first">
                              <div class="business-rectangle-inner">
                                  You should be <br>the business owner
                              </div>
                          </div>
                      </div>
                      <div class="text-right">
                          <div class="business-rectangle second">
                              <div class="business-rectangle-inner">
                                  Your business should <br> be incorporated for <br>
                                  5 months or more
                              </div>
                          </div>
                      </div>
                      <div class="text-left">
                          <div class="business-rectangle third">
                              <div class="business-rectangle-inner">
                                  You have at least <br> $5,000+ a month <br> deposited into your <br> business bank account
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>

        <section class="how-it-works" id="how-it-works">
            <div class="container">
                <h2 class="text-center">
                    How It <span class="text-color-blue">Works</span>
                </h2>

                <div class="row align-items-center">
                    <div class="col-7 text-right">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-2.png" width="594" height="573" alt="Apply for an advance now" />
                    </div>
                    <div class="col-5 order-md-first">
                        <div class="number" data-content="01"></div>
                        <h5 class="mb-xl-4">Apply for <br/><span class="text-color-blue">an advance now</span></h5>
                        <p class="mb-xl-5 d-none d-md-block">Fill out your application online.<br/>It will only take a few minutes and there<br/>is no obligation or fees.</p>
                        <div class="d-none d-lg-flex align-items-center">
                            <a href="quick-start" class="btn">Get started<span></span></a>
                            <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="number" data-content="02"></div>
                        <h5 class="mb-xl-4">Receive <span class="text-color-blue">pre-approval</span> <br/> the same day</h5>
                        <p class="mb-xl-5 d-none d-md-block">Once our representatives review your online application, you will be provided with an offer and the financing rate the  same day.</p>
                    </div>
                    <div class="col-7 order-md-first">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-3.png" width="594" height="573" alt="Receive pre-approval the same day" />
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-7 text-right">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-4.png" width="628" height="573" alt="Funds Deposited" />
                    </div>
                    <div class="col-5 order-md-first">
                        <div class="number" data-content="03"></div>
                        <h5 class="mb-xl-4">Funds <span class="text-color-blue">Deposited</span></h5>
                        <p class="mb-xl-5 d-none d-md-block">You will receive the funds within 48 hours. This will complete your financing application with us.</p>
                        <div class="align-items-center d-none d-lg-flex">
                            <a href="quick-start" class="btn">Get started<span></span></a>
                            <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                        </div>
                    </div>
                </div>

                <div class="d-flex d-lg-none align-items-center justify-content-center">
                    <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                    <a href="quick-start" class="btn">Get started<span></span></a>
                </div>
            </div>
        </section>

        <section class="why-choose-us" id="why-choose-us">
            <div class="container">
                <h2 class="text-center pb-4 pb-md-5 mb-0">Why <span class="text-color-blue">choose</span> us</h2>
                <p class="text-center pb-md-3">
                    We are the №1 credit alternative in Puerto Rico. We say yes when the bank says no <br>
                    and our approval process is not dependent on your personal credit.
                </p>
                <div class="comparison-table">
                    <table>
                        <thead>
                            <tr>
                                <th class="first">Comparison Table</th>
                                <th><img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/logo.svg" width="141" height="24" alt="b2b funding" /></th>
                                <th>Other cash advances</th>
                                <th>Traditional Banks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Complete your application in just minutes</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pre-qualification in less than 24 hours</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Financing in just 48 hours</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0 collateral</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Automated  online application process</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td>Simple renewal</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0 surprise charges</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0 application fees</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Fixed rate</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Instant approval</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Assess the potential of your business</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>You may have a commitment with other loans</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="text-center testimonials-header">
                    <h2>Testimonials</h2>
                    <h6 class="text-color-blue">Meet our merchants!</h6>
                    <p>Learn about the success stories of various business owners, how easily they
                        got their business loan, and how they used the funds to boost their business.</p>
                </div>
                <div class="testimonials-slider">
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/yGRR3PLx05A/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGF8gXyhfMA8=&rs=AOn4CLAnART0bjpB_XiUJqXCeD28JxFXDQ)"></div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yGRR3PLx05A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Richard Rentas</div>
                                <div class="testimonials-item-title">Hot Run in Ponce</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/-pPTXGYLix4/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGEQgSyhlMA8=&rs=AOn4CLBmFviDWNPa2tlsuQqTXgwnowd5xQ)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/-pPTXGYLix4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Carlos Rodríguez</div>
                                <div class="testimonials-item-title">Tierra Mia Farms en Santa Isabel</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/1W23tTT3Jrc/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-DoACuAiKAgwIABABGGUgXChRMA8=&rs=AOn4CLBlRa4M8oT_a59WNxiRYVRN9kaxPA)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/1W23tTT3Jrc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Mariano Rodríguez</div>
                                <div class="testimonials-item-title">FARMACIA Lumen Méndez en Lares</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/8_003Kk1WDo/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgVihRMA8=&rs=AOn4CLC6W0mSQk4zLptpXLdA_qY-iTPoSg)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/8_003Kk1WDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Edwin “Kiko” Betancourt</div>
                                <div class="testimonials-item-title">Ferretería y Gravero KIKO</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/VKu4Lo7M18k/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgWyhPMA8=&rs=AOn4CLCccUGgLs6Zx54hqV26_vzpq1yg6w)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/VKu4Lo7M18k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">José García</div>
                                <div class="testimonials-item-title">dueño de Rest. La Curvita</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="review-slider">
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>The process was so fast</strong><br>I applied and was funded in less than 48 hours. It was so easy.</p>
                                    <p>Megan T.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>Fantastic service! Would recommend it!</strong><br>It's hard to find a company these days that values their customers and has great customer service.</p>
                                    <p>Lisa K.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>Great Company</strong><br>I am very happy with the cash advance I received from this company. The process was very quick and easy, and I was able to get the money I needed in no time.</p>
                                    <p>Nick J.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>Loved working with Rolando, a true professional....</strong><br>It is our pleasure to thank you and your company for supporting us with this online cash advance. I highly recommend using their services!</p>
                                    <p>Samantha I.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>I will be back for a renewal</strong><br>They provided me with the best solution for my financial situation. I appreciate their dedication and knowledge.</p>
                                    <p>Daisy G.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>So simple to apply </strong><br>So many other companies state that their application process is easy, when in fact B2B was the only one that kept their word. I was able to apply quickly and easily and a very helpful representative reached out to me and we were able to get my approval and funding. Thank you B2B.</p>
                                    <p>Cassandra K.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>There when you need them most! </strong><br>I really appreciate B2B for providing me with working capital when I needed to buy more inventory for my restaurant. Mother’s day was approaching and our funds were low. I applied for working capital and B2B approved me and funded me very quickly. Highly recommended!</p>
                                    <p>Juan L.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>Amazing customer service</strong><br>I manage to always get someone on the phone whenever I contact B2B customer service. They are always so friendly and do their best to answer any questions I throw their way. Makes me happy that I picked B2B as my working capital company.</p>
                                    <p>Alexandra M.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>B2B is my go to!</strong><br>I have been using B2B to get working capital a couple of times now. Their process is so easy, and they always let me know when I am eligible for renewal. Great company! </p>
                                    <p>Paul F.</p>
                                </div>
                            </div>
                            <div class="review-slider-item">
                                <div class="review">
                                    <div class="row review-head">
                                        <div class="col-12 col-lg-6">
                                            <div class="review-stars">
                                                <div style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 text-lg-right">
                                            3 hours ago
                                        </div>
                                    </div>
                                    <p><strong>The entire team was courteous ...</strong><br>The entire team was courteous and on point. Thank you!</p>
                                    <p>Greg L.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 order-md-first">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-12">
                                <div class="text-center">
                                    <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/google-review.png" width="353" height="80" alt="" />
                                </div>
                            </div>
                            <div class="col-6 text-right d-md-none">
                                <a href="testimonials" class="btn">see more <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block text-md-center">
                    <a href="testimonials" class="more text-color-main">see more</a>
                </div>
            </div>
        </section>

        <section class="merchant">
            <div class="container">
                <h2 class="text-center block-mb-md">Merchant Products</h2>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="merchant-item">
                            <div class="merchant-item-content">
                                <p class="text-center">
                                    <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/processing.svg" width="79" height="44" alt="" />
                                </p>
                                <div class="merchant-title">
                                    Credit Card Processing
                                </div>
                                <p class="text-center">
                                    Accept Credit Cards with the Cash Discount Program. Its a way for you the merchant to offset your merchant service fees without increasing your sale price.
                                </p>
                                <ul class="list blue">
                                    <li><strong>Collect 100% of your processing sales</strong></li>
                                    <li><strong>Increadibly easy to order, set up and manage</strong></li>
                                    <li><strong>Accommodates all credit card types and mobile wallet systems such as ApplePay® and Android®</strong></li>
                                    <li><strong>Terminals with EMV Chip Reader. Cloud-based receipt system. Easy integration with any POS</strong></li>
                                    <li><strong>Next day funding</strong></li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="quick-start" class="btn">Get started<span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="merchant-item advance">
                            <div class="merchant-item-content">
                                <p class="text-center">
                                    <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/advance.svg" width="77" height="46" alt="" />
                                </p>
                                <div class="merchant-title">
                                    Quick Business Advance
                                </div>
                                <p class="text-center">
                                    The approval amount is based on your monthly checking account deposit volume.
                                </p>
                                <ul class="list blue">
                                    <li><strong>We buy your future bank deposits at a discount, providing you with funds today.</strong></li>
                                    <li><strong>Use your future accounts receivable to pay the advance.</strong></li>
                                    <li><strong>Approval amounts are determined using the last 4 months of your statements along with the commercial information of your request.</strong></li>
                                    <li><strong>The advances are reimbursed with a fixed and automatic withdrawal from the clearinghouse of your checking account only from Monday to Friday.</strong></li>
                                    <li><strong>You are eligible to refinance when you have paid 60% of the total refund amount.</strong></li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="quick-start" class="btn">Get started<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="we-are-here">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2><span class="text-color-green">We are here</span> to help local businesses grow!</h2>
                        <hr />
                        <div class="content">
                            <p>No matter what type of business you have, we are here to help you achieve your business goals. Behind our fast financing, reasonable rates and payments, there are human beings who have an efficient and transparent environment in mind.</p>
                            <div class="row">
                                <div class="col-6 col-md-7 d-lg-none"></div>
                                <div class="col-6 col-md-5 col-lg-12 d-lg-flex align-items-center">
                                    <div class="order-lg-last contacts">
                                        <div><a href="tel:1-800-204-8487" class="phone-block order-first"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-204-8487</span></a></div>
                                        <p>
                                        <small>
                                            Monday-Friday <br>
                                            9:00AM-6:00PM
                                        </small>
                                    </p>
                                    </div>
                                    <a href="quick-start" class="btn">Call now<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="kiara">
                            <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/kiara.png" width="645" height="866" alt="We are here to help local businesses grow!" />
                        </div>
                    </div>
                    <div class="transactions">
                        <div>300,000 transactions over</div>
                        <div><strong>$100M</strong></div>
                        <div>funded</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-5 col-md-12 text-md-center">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/pre-approval.svg" width="50" height="39" alt="Instant Pre-Approval" />
                            </div>
                            <div class="col-7 col-md-12 text-md-center">
                                Instant<br>Pre-Approval
                            </div>
                        </div>
                    </div>
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 text-md-center">
                                №1 Direct Lender<br>in Puerto Rico
                            </div>
                            <div class="col-4 col-md-12 text-right text-md-center order-md-first">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/lender.svg" width="67" height="41" alt="№1 Direct Lender in Puerto Rico" />
                            </div>
                        </div>
                    </div>
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-5 col-md-12 text-md-center">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/collaterales.svg" width="57" height="39" alt="0 collaterales needed" />
                            </div>
                            <div class="col-7 col-md-12 text-md-center">
                                0 collaterales<br>needed
                            </div>
                        </div>
                    </div>
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 text-md-center">
                                Get up to $500k
                            </div>
                            <div class="col-4 col-md-12 text-right text-md-center order-md-first">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/cash.svg" width="57" height="38" alt="Get up to $500k" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="container">
                <h2 class="text-md-center">About <span class="text-color-blue">Us</span></h2>
                <div class="row align-items-center">
                    <div class="col-md-6 d-none d-md-block">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-5.png" width="618" height="684" alt="Our goal is simple" />
                    </div>
                    <div class="col-12 col-md-6 content">
                        <div class="d-none d-md-block"><strong>Our Philosophy</strong></div>
                        <p>We are here to finance your business goals! We aspire to provide you with the best financing alternatives based on the potential and financial strength of your business. We do not care if the bank has refused to provide you with financial assistance. We constantly strive to offer you the most innovative, simple and fast experience.
                            <br><br></p>
                        <div class="text-center d-md-none">
                            <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-5.png" width="618" height="684" alt="Our goal is simple" />
                        </div>
                        <div class="d-none d-md-block"><strong>Who we are?</strong></div>
                        <p>Our company is made up of some of the smartest, most focused, and most successful salespeople in the world. We are passionate about business, and we know how much work it takes to make a business successful. We want to see more business owners achieve their dreams, and we want to see the business world grow. That's why we're here to help.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-faq">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-md-center">Frequently <span class="text-color-blue">Asked</span> Questions</h2>

                        <div class="collapse-info-wrap">
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">Is working capital different from a regular bank loan?</div>
                                <div class="ciw-item-info"><p>Working capital looks at the whole picture. It evaluates your business and not your personal credit. A bank loan focuses on the person, but working capital is here to help you with your business. </p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">How do I know working capital is right for me?</div>
                                <div class="ciw-item-info"><p>If you own a business for more than 6 months and have 5k in your business checking account, a working capital loan is right for you.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">Will there always be someone to talk to?</div>
                                <div class="ciw-item-info"><p>We have a very experienced team that is always happy to speak to you regarding your questions. We are here to help you!</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">How do I get my funds?</div>
                                <div class="ciw-item-info"><p>Once approved and we finalize your agreement, your funds are simply deposited via ACH into your business checking account. </p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">How are the payments calculated?</div>
                                <div class="ciw-item-info"><p>Your payments are calculated based on the amount that you are funded. We deduct a fixed amount Monday through Friday via ACH directly from your bank account. There are NO SURPRISES.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">Can I renew my working capital loan?</div>
                                <div class="ciw-item-info"><p>Of course! We will actually be contacting you when you qualify for a renewal. We have the top representatives evaluating your account on a regular basis so they are on top of things when it comes to you and your business.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">What if I need to change my bank account?</div>
                                <div class="ciw-item-info"><p>Simply give us a call and your expert will give you simple instructions on how to provide us your new banking information and we will gladly update your banking account for your repayments.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <? /* section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-left text-md-center">From the Blog</h2>
                        <div class="slick-slider">
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/1.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">read more <span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/2.png" width="429" height="374" alt="">
                                <p>Cómo nos diferenciamos de la banca tradicional? ¡Conoce nuestras ventajas!</p>
                                <p><a href="#" class="more">read more <span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/3.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">read more <span></span></a></p>
                            </div>

                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/1.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">read more <span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/2.png" width="429" height="374" alt="">
                                <p>Cómo nos diferenciamos de la banca tradicional? ¡Conoce nuestras ventajas!</p>
                                <p><a href="#" class="more">read more <span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/3.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">read more <span></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section */ ?>
      </div>

<?php
$view->page_end();
?>
