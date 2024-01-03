<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

<div role="main" class="main">
    <section class="home-top-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 home-top-block-content">
                    <h1 class="mb-xl-5 text-center text-md-left">Quick and <span class="text-color-blue">Simple Financing</span>
                        when <br/>you Need it Most!</h1>
                    <ul class="list mb-xl-5 pb-xl-5 ml-auto mr-auto ml-md-0 mr-md-0">
                        <li>
                            Pre-Approval in Minutes
                        </li>
                        <li>
                            Funding within 24 hours
                        </li>
                        <li>
                            Transparent, seamless and reliable
                        </li>
                    </ul>
                    <div class="home-top-block-links d-none d-md-block">
                        <a href="quick-start" class="btn">Get started<span></span></a>
                        <a href="tel:1-800-591-3327" class="phone-block">
                            <svg class="icon icon-phone">
                                <use xlink:href="<?php echo $view->markup_builder->markup->assets_global; ?>css/fonts/icons.svg#phone"></use>
                            </svg>
                            <span class="hbp-lg">1-800-591-3327</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/ca/main-1.png"
                         width="437"
                         height="580"
                         alt="Quick and Simple Financing when you Need it Most!"
                         title="Quick and Simple Financing when you Need it Most!"
                    />
                </div>
                <div class="home-top-block-links d-flex d-lg-none ml-auto mr-auto">
                    <a href="quick-start" class="btn">Get started<span></span></a>
                    <a href="tel:1-800-591-3327" class="phone-block order-first">
                        <svg class="icon icon-phone">
                            <use xlink:href="<?php echo $view->markup_builder->markup->assets_global; ?>css/fonts/icons.svg#phone"></use>
                        </svg>
                        <span class="hbp-lg">1-800-591-3327</span></a>
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
                            <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/pre-approval.svg"
                                 width="50" height="39" alt="Instant Pre-Approval"/>
                        </div>
                        <div class="col-7 col-md-12 text-md-center">
                            Fast and Easy <br/>
                            Pre-Approval
                        </div>
                    </div>
                </div>
                <div class="features-item col-md-3">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-12 text-md-center">
                            Dedicated <br />
                            Representatives
                        </div>
                        <div class="col-4 col-md-12 text-right text-md-center order-md-first">
                            <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/lender.svg"
                                 width="67" height="41" alt="№1 Direct Lender in Puerto Rico"/>
                        </div>
                    </div>
                </div>
                <div class="features-item col-md-3">
                    <div class="row align-items-center">
                        <div class="col-5 col-md-12 text-md-center">
                            <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/collaterales.svg"
                                 width="57" height="39" alt="0 collaterales needed"/>
                        </div>
                        <div class="col-7 col-md-12 text-md-center">
                            Absolutly no collateral <br />
                            needed
                        </div>
                    </div>
                </div>
                <div class="features-item col-md-3">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-12 text-md-center">
                            Get up to $750k
                        </div>
                        <div class="col-4 col-md-12 text-right text-md-center order-md-first">
                            <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/cash.svg"
                                 width="57" height="38" alt="Get up to $500k"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <h2 class="text-center">
                Our <span class="text-color-blue">Process</span>
            </h2>

            <div class="row align-items-center">
                <div class="col-7 text-right">
                    <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/main-2.png"
                         width="594" height="573" alt="Submit your Online Application "/>
                </div>
                <div class="col-5 order-md-first">
                    <div class="number" data-content="01"></div>
                    <h5 class="mb-xl-4">Submit your <br/><span class="text-color-blue">Online Application</span></h5>
                    <p class="mb-xl-5 d-none d-md-block">Upload your statements, safe secure and confidential. It will only take a few minutes and there are no obligations or fees.</p>
                    <div class="d-none d-lg-flex align-items-center">
                        <a href="quick-start" class="btn">Get started<span></span></a>
                        <a href="tel:1-800-591-3327" class="phone-block">
                            <svg class="icon icon-phone">
                                <use xlink:href="<?php echo $view->markup_builder->markup->assets_global; ?>css/fonts/icons.svg#phone"></use>
                            </svg>
                            <span class="hbp-lg">1-800-591-3327</span></a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-5">
                    <div class="number" data-content="02"></div>
                    <h5 class="mb-xl-4"><span class="text-color-blue">Pre-Approval</span> <br> the Same Day</h5>
                    <p class="mb-xl-5 d-none d-md-block">Once your dedicated advisor reviews your online application, you will be informed about the best rates and conditions for your financing needs.</p>
                </div>
                <div class="col-7 order-md-first">
                    <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/main-3.png"
                         width="594" height="573" alt="Pre-Approval the Same Day" />
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-7 text-right">
                    <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/main-4.png"
                         width="628" height="573" alt="Get Your Funds" />
                </div>
                <div class="col-5 order-md-first">
                    <div class="number" data-content="03"></div>
                    <h5 class="mb-xl-4">Get Your <span class="text-color-blue">Funds</span></h5>
                    <p class="mb-xl-5 d-none d-md-block">You will receive your funds into your business bank account within 48 hours. </p>
                    <div class="align-items-center d-none d-lg-flex">
                        <a href="quick-start" class="btn">Get started<span></span></a>
                        <a href="tel:1-800-591-3327" class="phone-block">
                            <svg class="icon icon-phone">
                                <use xlink:href="<?php echo $view->markup_builder->markup->assets_global; ?>css/fonts/icons.svg#phone"></use>
                            </svg>
                            <span class="hbp-lg">1-800-591-3327</span></a>
                    </div>
                </div>
            </div>

            <div class="d-flex d-lg-none align-items-center justify-content-center">
                <a href="tel:1-800-591-3327" class="phone-block">
                    <svg class="icon icon-phone">
                        <use xlink:href="<?php echo $view->markup_builder->markup->assets_global; ?>css/fonts/icons.svg#phone"></use>
                    </svg>
                    <span class="hbp-lg">1-800-591-3327</span></a>
                <a href="quick-start" class="btn">Get started<span></span></a>
            </div>
        </div>
    </section>

    <section class="business">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h2 class="mb-4">Will <span class="text-color-blue">My Business</span> Qualify?</h2>
                    <hr class="mb-4"/>
                    <p>We focus on the overall health of your <br> business with simple, straight forward <br> requirements.</p>
                    <div class="mb-5">
                        <a href="#" class="more">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="text-left">
                        <div class="business-rectangle first">
                            <div class="business-rectangle-inner">
                                The business must <br /> be based in Canada
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="business-rectangle second">
                            <div class="business-rectangle-inner">
                                Your business should <br /> be incorporated for <br /> 4 months or more
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <div class="business-rectangle third">
                            <div class="business-rectangle-inner">
                                Minimum of $5,000 <br /> in monthly revenue
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us" id="why-choose-us">
        <div class="container">
            <h2 class="text-center pb-4 pb-md-5 mb-0">Why <span class="text-color-blue">choose</span> us</h2>
            <p class="text-center pb-md-3">
                We are the №1 credit alternative in Puerto Rico. We say yes when the bank says no and our <br> approval process is not dependent on your personal credit.
            </p>
            <div class="comparison-table">
                <table>
                    <thead>
                    <tr>
                        <th class="first">Comparison Table</th>
                        <th><img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/logo.svg"
                                 width="141" height="24" alt="b2b funding"/></th>
                        <th>Other cash <br> advances</th>
                        <th>Traditional <br> Banks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Complete your application in just hours</td>
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
                        <td>Instant approval</td>
                        <td><span class="check green"></span></td>
                        <td><span class="check"></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fixed rate</td>
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
                <p>Learn about the success stories of various business owners, how easily they got their business loan, and how they used the funds to boost their business.</p>
            </div>
            <?php /* div class="testimonials-slider">
                <div class="testimonials-item">
                    <div class="testimonials-item-inner">
                        <div class="testimonials-item-inner-preview"
                             style="background-image: url(https://i.ytimg.com/vi/yGRR3PLx05A/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGF8gXyhfMA8=&rs=AOn4CLAnART0bjpB_XiUJqXCeD28JxFXDQ)"></div>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yGRR3PLx05A"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="testimonials-item-content">
                            <div class="testimonials-item-name">Richard Rentas</div>
                            <div class="testimonials-item-title">Hot Run in Ponce</div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item-inner">
                        <div class="testimonials-item-inner-preview"
                             style="background-image: url(https://i.ytimg.com/vi/-pPTXGYLix4/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGEQgSyhlMA8=&rs=AOn4CLBmFviDWNPa2tlsuQqTXgwnowd5xQ)"></div>
                        <iframe width="560" height="315" data-src="https://www.youtube.com/embed/-pPTXGYLix4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="testimonials-item-content">
                            <div class="testimonials-item-name">Carlos Rodríguez</div>
                            <div class="testimonials-item-title">Tierra Mia Farms en Santa Isabel</div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item-inner">
                        <div class="testimonials-item-inner-preview"
                             style="background-image: url(https://i.ytimg.com/vi/1W23tTT3Jrc/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-DoACuAiKAgwIABABGGUgXChRMA8=&rs=AOn4CLBlRa4M8oT_a59WNxiRYVRN9kaxPA)"></div>
                        <iframe width="560" height="315" data-src="https://www.youtube.com/embed/1W23tTT3Jrc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="testimonials-item-content">
                            <div class="testimonials-item-name">Mariano Rodríguez</div>
                            <div class="testimonials-item-title">FARMACIA Lumen Méndez en Lares</div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item-inner">
                        <div class="testimonials-item-inner-preview"
                             style="background-image: url(https://i.ytimg.com/vi/8_003Kk1WDo/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgVihRMA8=&rs=AOn4CLC6W0mSQk4zLptpXLdA_qY-iTPoSg)"></div>
                        <iframe width="560" height="315" data-src="https://www.youtube.com/embed/8_003Kk1WDo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="testimonials-item-content">
                            <div class="testimonials-item-name">Edwin “Kiko” Betancourt</div>
                            <div class="testimonials-item-title">Ferretería y Gravero KIKO</div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-item-inner">
                        <div class="testimonials-item-inner-preview"
                             style="background-image: url(https://i.ytimg.com/vi/VKu4Lo7M18k/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgWyhPMA8=&rs=AOn4CLCccUGgLs6Zx54hqV26_vzpq1yg6w)"></div>
                        <iframe width="560" height="315" data-src="https://www.youtube.com/embed/VKu4Lo7M18k"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="testimonials-item-content">
                            <div class="testimonials-item-name">José García</div>
                            <div class="testimonials-item-title">dueño de Rest. La Curvita</div>
                        </div>
                    </div>
                </div>
            </div */ ?>
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
                                <p><strong>Excellent Service!</strong><br>I needed help with my business and making payroll. I applied to B2B Canada and within the next hour I had a wonderful representative contact me and show me my options. I was able to find the right working capital for my business and got the funds in my account just in time for payroll. Thank you B2B Canada!</p>
                                <p>Derek J.</p>
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
                                <p><strong>I will definitely use B2B Canada again</strong><br>My ice cream shop was in dire need of a new fridge, but I didn’t have the money for it. I figured I would try to apply for working capital financing. I went on the B2B Canada website and applied. The next day I was already in the works of getting funded. The agent understood the urgency and made sure that I got my funds asap. I was able to purchase my new fridge and keep my shop open.</p>
                                <p>Sandra P.</p>
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
                                <p><strong>My business has expanded!</strong><br>Before I found B2B Canada, my business was really struggling. I need new printers and could not save enough money to purchase them. B2B Canada not only found me the working capital I needed to buy my printers, but also allows me renew with them. Since working with B2B Canada I have been able to buy more equipment and expanding my business by bringing in new customers. I will appreciate B2B!</p>
                                <p>Brian M.</p>
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
                                <p><strong>Warm and friendly service</strong><br>I must admit, I am not the easiest person to deal with. I have been given the run around before and was not approved for funding. That was not the case with B2B Canada! My agent was extremely friendly and professional and did not waste my time. I got approved and got my funds with in a few days. Thank you again.</p>
                                <p>Samir P.</p>
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
                                <p><strong>Highly recommend!</strong><br>I would recommend B2B Canada to all my fellow business owners. Thanks for the help with my working capital!</p>
                                <p>Stephanie W.</p>
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
                                <p><strong>With B2B Canada, there are no surprises!</strong><br>When I was getting funding I was told my repayment amount, and that was exactly what I was debited from my business account. B2B Canada is an honest company for the small business owner like myself. Thank you, guys, for helping me with my business!</p>
                                <p>Patrick S.</p>
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
                                <p><strong>Always there to answer my questions</strong><br>They were always available to talk to me when I had a question about my working capital financing. Thank you B2B for your patience.</p>
                                <p>Wilmar G</p>
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
                                <p><strong>Helped me after the pandemic!</strong><br>Being in business for almost 30 years and being able to always adapt with the times I was having a hard time staying afloat during the pandemic. B2B Canada reviewed my business and approved me for working capital which helped me not only keep my business open but allowed me hire 5 more employees and grow my profits. They assured my business will be passed on to my children as I always hope it would. Thank you so much B2B Canada!</p>
                                <p>Randall T.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 order-md-first">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-12">
                            <div class="text-center">
                                <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/google-review.png"
                                     width="353" height="80" alt=""/>
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
            <h2 class="text-center block-mb-md">What We <span class="text-color-blue">Offer</span></h2>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="merchant-item">
                        <div class="merchant-item-content">
                            <p class="text-center">
                                <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/processing.svg"
                                     width="79" height="44" alt=""/>
                            </p>
                            <div class="merchant-title">
                                Merchant Cash (MCA)
                            </div>
                            <p class="text-center">
                                The approval amount is based on your monthly trade processing volume. We buy your future merchant processing credits at a discount, providing you with funds today.
                            </p>
                            <ul class="list blue">
                                <li><strong>Use your merchant processing account to pay the advance.</strong></li>
                                <li><strong>Approval amounts are determined using the last 4 months of processing commercial and bank statements together with the  commercial information of your application.</strong></li>
                                <li><strong>You are eligible to refinance when you have paid 60% of your total amount of payment.</strong></li>
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
                                <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/advance.svg"
                                     width="77" height="46" alt=""/>
                            </p>
                            <div class="merchant-title">
                                Total Deposit Advance (TDA)
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
                <div class="col-12 col-lg-5">
                    <h2><span class="text-color-main">We are here</span> for those from here!</h2>
                    <hr/>
                    <div class="content">
                        <p>No matter what type of business you have, we are here to help you achieve your business goals. Behind our fast financing, reasonable rates and payments, there are human beings who have an efficient and transparent environment in mind.</p>
                        <div class="row">
                            <div class="col-6 col-md-7 d-none d-lg-block"></div>
                            <div class="col-12 col-md-5 col-lg-12 d-lg-flex align-items-baseline">
                                <div class="order-lg-last contacts">
                                    <div><a href="tel:1-800-204-8487" class="phone-block order-first">
                                            <svg class="icon icon-phone">
                                                <use xlink:href="<?php echo $view->markup_builder->markup->assets_global; ?>css/fonts/icons.svg#phone"></use>
                                            </svg>
                                            <span class="hbp-lg">1-800-204-8487</span></a></div>
                                    <p>
                                        Monday-Friday <br>
                                        9:00AM-6:00PM
                                    </p>
                                </div>
                                <a href="quick-start" class="btn">Call now<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="photo">
                        <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/ca/photo.png"
                             width="645" height="866" alt="We are here to help local businesses grow!"/>
                    </div>
                </div>
                <div class="transactions">
                    <div>OVER</div>
                    <div><strong>$100M</strong></div>
                    <div>funded</div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <h2 class="text-md-center">About <span class="text-color-blue">Us</span></h2>
            <div class="row align-items-center">
                <div class="col-md-6 d-none d-md-block">
                    <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/main-5.png"
                         width="618" height="684" alt="Our goal is simple"/>
                </div>
                <div class="col-12 col-md-6 content">
                    <div class="d-none d-md-block"><strong>Our Philosophy</strong></div>
                    <p>We are here to finance your business goals! We aspire to provide you with the best financing
                        alternatives based on the potential and financial strength of your business. We do not care if
                        the bank has refused to provide you with financial assistance. We constantly strive to offer you
                        the most innovative, simple and fast experience.
                        <br><br></p>
                    <div class="text-center d-md-none">
                        <img src="<?php echo $view->markup_builder->markup->assets_global; ?>img/main/main-5.png"
                             width="618" height="684" alt="Our goal is simple"/>
                    </div>
                    <div class="d-none d-md-block"><strong>Why we are?</strong></div>
                    <p>Our company is made up of some of the smartest, most focused, and most successful salespeople in
                        the world. We are passionate about business, and we know how much work it takes to make a
                        business successful. We want to see more business owners achieve their dreams, and we want to
                        see the business world grow. That's why we're here to help.</p>
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
                            <div class="ciw-item-toggle">What is working capital financing? </div>
                            <div class="ciw-item-info"><p>Sometimes a business does not have adequate cash or assets to cover day-to-day operational expenses and, will secure working capital financing for this purpose. Working capital financing is not used to buy long-term assets or investments. Working capital is based on your business, not your personal credit like a standard bank loan.</p></div>
                        </div>

                        <div class="ciw-item">
                            <div class="ciw-item-toggle">What are the benefits of receiving working capital?</div>
                            <div class="ciw-item-info"><p>There are many great advantages of Working Capital Financing that offer your business to maintain the accounts payables, payment of overheads, purchase of inventory and equipment, wages, and other requirements to assist the business in maintaining and growing.</p></div>
                        </div>

                        <div class="ciw-item">
                            <div class="ciw-item-toggle">How is the working capital financing repaid?</div>
                            <div class="ciw-item-info"><p>B2B Canada’s working capital financing is repaid with daily payments. Once you receive your working capital loan, your payments will be automatically deducted from your business bank account until you have repaid the working capital balance.</p></div>
                        </div>

                        <div class="ciw-item">
                            <div class="ciw-item-toggle">Are there any fees for applying?</div>
                            <div class="ciw-item-info"><p>The answer is always NO! You are not required to pay any fees to apply to see if you are approved for working capital financing.</p></div>
                        </div>

                        <div class="ciw-item">
                            <div class="ciw-item-toggle">How soon should will my bank account receive my working capital?</div>
                            <div class="ciw-item-info"><p>After you are approved and both you and your representative have agreed to the terms of your financing, you will then receive documentation to finalize your working capital. Once all documents are received your funds will be sent via ACH to your business checking account within 48 hours.</p></div>
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
