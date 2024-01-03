<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();

$view->page_start(array('title' => "State Regulations | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-05"><div class="sbd-figure-img sbd-figure-img-01"><img src="img/bg-state-regulations.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>State Regulations</h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <p class="block-mb-xs">Under the Dodd-Frank Wall Street Reform and Consumer Protection Act (the "Durbin Amendment"), a federal law, businesses are allowed to offer a discount to their customers or another incentive for using a certain method of payment, as long as that incentive is offered to all customers and the offer is disclosed clearly and conspicuously. For example, a business can offer its customers a discount, as an incentive for paying with cash or check, rather than a credit card.</p>
                <?php echo $view->markup_states_grid(); ?>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>