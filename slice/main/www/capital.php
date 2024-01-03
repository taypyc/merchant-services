<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Capital for your business | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>
        <section class="section-hero section-hero-02 sh-additional-indent block-pt-zero section-appear" id="section-appear">
          <div class="hero-bg hero-bg-02 bg-header-overlay"><img src="img/bg-capital.jpg" alt="" onload="sectionAppear()"></div>
          <div class="container">
            <div class="hero-wrap d-flex flex-column justify-content-center align-items-start">
              <div class="hero-wrap-content">
                <div class="hwc-bg-figure hwc-bg-figure-02"></div>
                <div class="hwc-info">
                  <p class="header-sup">GET EXTRA</p>
                  <h1 class="header-lg">Capital for <br>your business</h1>
                  <p class="sub-header block-mb-sm">Get Pre-Approved <br>For Up to $500,000</p>
                  <div class="btn-group-wrap">
                    <div class="btn-group">
                      <a href="#contact-form" data-popup-open data-popup-open class="btn">Get Started</a>
                      <a href="#contact-form" data-popup-open class="link-angle">Learn More</a>
                    </div>
                    <p class="btn-group-desc">It's free to apply and won't affect <br>your credit score</p>
                  </div>
                </div>
              </div>
              <div class="hero-wrap-additional align-self-stretch">
                <div class="hero-wrap-additional-content">
                  <div class="info-icon-line-wrap">
                    <div class="row">
                      <div class="col col-sm-4 iilw-item">
                        <div class="row no-gutters justify-content-center">
                          <div class="col-auto iilw-item-icon text-color-turquoise"><svg class="icon icon-time"><use xlink:href="css/fonts/icons.svg#time"></use></svg></div>
                          <div class="iilw-item-desc">
                            <h5>We save time</h5>
                            <p>Instant pre-approval <br>in seconds</p>
                          </div>
                        </div>
                      </div>
                      <div class="col col-sm-4 iilw-item">
                        <div class="row no-gutters justify-content-center">
                          <div class="col-auto iilw-item-icon text-color-blue"><svg class="icon icon-like"><use xlink:href="css/fonts/icons.svg#like"></use></svg></div>
                          <div class="iilw-item-desc">
                            <h5>We trust you</h5>
                            <p>Any FICO Score</p>
                          </div>
                        </div>
                      </div>
                      <div class="col col-sm-4 iilw-item">
                        <div class="row no-gutters justify-content-center">
                          <div class="col-auto iilw-item-icon text-color-darkblue"><svg class="icon icon-shield"><use xlink:href="css/fonts/icons.svg#shield"></use></svg></div>
                          <div class="iilw-item-desc">
                            <h5>We respect you</h5>
                            <p>Safe, secure and <br>confidential</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section-tile-num-tab">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-md-6 block-indent-right">
                <h2>See how <br>Slice capital works</h2>
                <p class="sub-header sub-header-sm block-mb-sm">Whether you need extra capital to expand your business or are faced with difficult financial times, contact us today! We have helped thousands of business owners expand their enterprise, make payroll and increase inventory holdings.</p>
                <div class="btn-group-wrap">
                  <div class="btn-group">
                    <a href="#contact-form" data-popup-open data-popup-open class="btn">Get Started</a>
                  </div>
                  <p class="btn-group-desc">It's free to apply and won't affect <span class="white-space-nw">your credit score</span></p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="tile-num-tab-decor tntd-right">
                  <div class="tntd-decor-wrap d-flex flex-column">
                    <div class="tntd-decor-item text-color-turquoise"><span>1</span></div>
                    <div class="tntd-decor-item text-color-blue">2</div>
                    <div class="tntd-decor-item text-color-darkblue">3</div>
                  </div>
                  <div class="tntd-content-wrap d-flex flex-column">
                    <div class="tntd-content-item d-flex align-items-end">
                      <div>
                        <h5>Apply for funding</h5>
                        <p>Talk to one of our Funding Specialists by calling <span class="white-space-nw text-bold"><?php echo $view->i['mobile']; ?></span> or <a href="#contact-form" data-popup-open class="text-bold">apply online</a>. We will discuss your terms, review your information.</p>
                      </div>
                    </div>
                    <div class="tntd-content-item d-flex align-items-center">
                      <div>
                        <h5>Get Pre-approved</h5>
                        <p>Once our representatives review your online application, you will be offered the funding rate on the same day. </p>
                      </div>
                    </div>
                    <div class="tntd-content-item d-flex align-items-start">
                      <div>
                        <h5>Get Funded</h5>
                        <p>If you are approved, your money will be deposited directly into your business bank account within two business days.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section-compare-table">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="tile-table d-flex justify-content-center">
                  <div class="tile-table-column d-flex flex-column">
                    <div class="tile-table-header"></div>
                    <div><span>Easy renewal</span></div>
                    <div><span>No hidden costs</span></div>
                    <div><span>No application fee</span></div>
                    <div><span>Fast approval</span></div>
                    <div><span>Fixed fee</span></div>
                    <div><span>No interest rate</span></div>
                    <div><span>Bad credit is ok</span></div>
                  </div>
                  <div class="tile-table-column tile-table-column-highlight d-flex flex-column">
                    <div class="tile-table-header">
                      <div class="tth-icon"><svg class="svg-inline-icon"><use xlink:href="#svg-brand"></use></svg></div>
                      <p>Slice<br>Capital</p>
                    </div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                  </div>
                  <div class="tile-table-column d-flex flex-column">
                    <div class="tile-table-header">
                      <div class="tth-icon"><svg class="icon icon-piggy-bank"><use xlink:href="css/fonts/icons.svg#piggy-bank"></use></svg></div>
                      <p>Other Cash<br>Advances</p>
                    </div>
                    <div class="tile-table-check"></div>
                    <div></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div></div>
                    <div></div>
                    <div class="tile-table-check"></div>
                  </div>
                  <div class="tile-table-column d-flex flex-column">
                    <div class="tile-table-header">
                      <div class="tth-icon"><svg class="icon icon-bank"><use xlink:href="css/fonts/icons.svg#bank"></use></svg></div>
                      <p>Traditional<br>Banks</p>
                    </div>
                    <div class="tile-table-check"></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="tile-table-check"></div>
                    <div class="tile-table-check"></div>
                    <div></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 order-1 order-lg-2 block-indent-left">
                <h2>Why business owners Choose Slice Capital</h2>
                <p class="sub-header sub-header-sm block-mb-sm" id="compare-table-highlight">Your business will get funded by us even if a bank has refused to finance you. If you do not have a business plan or any collateral, we will work with you. We believe in approving funding for a business by looking at the ongoing financial data and life of the business, not just the credit score. <br>We’re faster than banks, more reliable than crowdsourcing, and flexible with our borrowers!</p>
                <div class="btn-group-wrap text-center text-lg-left">
                  <div class="btn-group">
                    <a href="#contact-form" data-popup-open data-popup-open class="btn">Get Started</a>
                  </div>
                  <p class="btn-group-desc">It's free to apply and won't affect your credit score</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row align-items-center block-row-01">
              <div class="col-6 block-indent-right block-zi-2">
                <h2>Does my business qualify?</h2>
                <p class="sub-header sub-header-sm block-mb-sm">The Slice team is here for businesses that need cash to grow and expand today. Our funding requirements are simple and straightforward. Our goal is to provide funding to companies only, when it is in their best interest.</p>
                <div class="btn-group-wrap">
                  <div class="btn-group">
                    <a href="#contact-form" data-popup-open class="btn btn-img"><svg class="svg-inline-icon"><use xlink:href="#svg-brand"></use></svg>Talk to an expert</a>
                  </div>
                  <p class="btn-group-desc">It's free to apply and won't affect your credit score</p>
                </div>
              </div>
              <div class="col-6">
                <div class="tile-decor-wrap tile-decor-wrap-right-01">
                  <div class="tile-decor-substrate-wrap tdsw-03 tile-decor-substrate-anim"><div></div></div>
                  <div class="tile-decor-sm-cascade">
                    <div class="tile-decor-sm bg-v-gradient-turquoise d-flex align-items-center">
                      <div class="tile-decor-sm-icon"><svg class="icon icon-user"><use xlink:href="css/fonts/icons.svg#user"></use></svg></div>
                      <div><p>You should be <br>a business owner</p></div>
                    </div>
                    <div class="tile-decor-sm bg-v-gradient-turquoise-blue d-flex align-items-center">
                      <div class="tile-decor-sm-icon"><svg class="icon icon-grow"><use xlink:href="css/fonts/icons.svg#grow"></use></svg></div>
                      <div><p>Your business <br>should be incorporated <br>for 4 months or longer</p></div>
                    </div>
                    <div class="tile-decor-sm bg-v-gradient-lightblue d-flex align-items-center">
                      <div class="tile-decor-sm-icon"><svg class="icon icon-safe-box"><use xlink:href="css/fonts/icons.svg#safe-box"></use></svg></div>
                      <div><p>At least $5,000+ a month <br>deposited in your business <br>bank account</p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="block-pb-footer-lg">
          <div class="container">
            <div class="text-center block-mb-sm">
              <h2>3 Flexible Financing Programs</h2>
            </div>
            <div class="tiles-default-wrap row">
              <div class="col-md-4">
                <div class="tile-default d-flex flex-column">
                  <div class="tile-default-info">
                    <h5>Merchant Cash Advance</h5>
                    <p>Approval amount is based on your monthly merchant processing volume.</p>
                    <ul class="list-circle">
                      <li>We purchase your future merchant processing receivables at a discount, providing you with funds today</li>
                      <li>Use your merchant processing account to repay the advance</li>
                      <li>Approval amounts are determined using the last 4 months of merchant processing and bank statements along with the business information on your application</li>
                      <li>You are eligible to refinance when you reach 60% of your total repayment amount</li>
                    </ul>
                  </div>
                  <div class="tile-default-cta mt-auto"><a href="#contact-form" data-popup-open class="link-angle">Get Started</a></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="tile-default d-flex flex-column">
                  <div class="tile-default-info">
                    <h5>Total Deposit Advance</h5>
                    <p>Approval amount is based on your monthly checking account deposit volume</p>
                    <ul class="list-circle">
                      <li>We purchase your future bank deposit receivables at a discount, providing you with funds today</li>
                      <li>Use your future accounts receivables to repay the advance</li>
                      <li>Approval amounts are determined using the last 4 months of your bank statements along with the business information on your application</li>
                      <li>Advances are repaid with a fixed daily ACH withdrawal from your checking account Monday to Friday only</li>
                      <li>You are eligible to refinance when you reach 60% total repayment amount</li>
                    </ul>
                  </div>
                  <div class="tile-default-cta mt-auto"><a href="#contact-form" data-popup-open class="link-angle">Get Started</a></div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="tile-default d-flex flex-column">
                  <div class="tile-default-info">
                    <h5>Business Loan</h5>
                    <p>Short or Long-term loan is a simple interest business loan with a low rate and flexible terms ranging from one to five years, with no prepayment penalties. No collateral is required for a medium-term loan, but a personal guarantee is needed.</p>
                    <ul class="list-circle">
                      <li>A Business loan offers low rates and flexible terms, and does not require collateral.</li>
                      <li>You can request from $20,000 to $500,000, with repayment terms of one to five years.</li>
                      <li>No prepayment penalties</li>
                      <li>Bad Credit is ok</li>
                      <li>Flexible use of proceeds</li>
                    </ul>
                  </div>
                  <div class="tile-default-cta mt-auto"><a href="#contact-form" data-popup-open class="link-angle">Get Started</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>

<?php
$view->page_end();
?>