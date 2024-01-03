<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$careers_job = 'Regional Sales Agent';
$view->page_start(array('title' => "{$careers_job} | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-02"><div class="sbd-figure-img"><img src="img/bg-careers-rsa.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1><?php echo $careers_job; ?></h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <div class="row">
                  <div class="col-12 col-md-6 col-xl-7 block-indent-right-sm wrap-fz-01">
                    <h5>Come join our winning team</h5>
                    <p>Are you looking for a high-income sales position? Then our Regional Sales Agent opportunity is the perfect fit for you. SLICE is looking for experienced sales people who can market out services to meet and exceed their personal income and production goals.</p>
                    <p>SLICE Business Marketing provides our Sales Agents with preset, qualified, and triple confirmed appointments. We are able to accomplish an industry leading closing ratio from our in-house marketing channel. We generate 1-2 daily appointments within a 15 mile radius from your home zip code. Sales Agents are assigned a dedicated Sales Manager who will train and offer 100% support to you on a daily basis.</p>
                    <p>SLICE Business Marketing is a full payment processing solution company, based out of Midtown, NYC. We provide small to medium sized businesses with the service and equipment they need to process credit card transactions. We are able to offer businesses a wide range of services such as terminals, POS systems, loyalty programs, business financing and much more.</p>
                    <h6>Candidates with backgrounds in the following industries are encouraged to apply:</h6>
                    <ul class="list-circle">
                      <li>Merchant Services Sales</li>
                      <li>Mortgage Sales</li>
                      <li>Energy Sales</li>
                      <li>Insurance Sales</li>
                      <li>Advertising Sales</li>
                      <li>Real Estate Sales</li>
                      <li>B2B / D2D Sales</li>
                    </ul>
                    <p>Average commissions range from $500-$900 per new account. Our Sales Agents on average convert 2-3 deals per week and about10 per month. In addition, all Sales Agents are entitled to monthly lifetime vested residuals on all active accounts. Production bonuses are offered on a daily, weekly and monthly basis.</p>
                    <p>SLICE is also leading the industry with our NEW Cash Discount Program, helping merchants eliminate processing fees altogether. Sales Agents now have an edge when prospecting, to offer a solution to the merchant that has never been offered before.</p>
                    <p>If you have some or all the skills and qualifications we encourage you to apply and speak to our recruiting specialist today.</p>
                  </div>
                  <div class="col-12 col-md-6 col-xl-5">
                    <?php echo $view->markup_careers_form($careers_job); ?>
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