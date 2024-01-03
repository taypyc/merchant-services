<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();

require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

if(isset($_GET['oid']) && strlen(trim($_GET['oid'])) > 0 && isset($_GET['event']) && trim($_GET['event']) == 'signing_complete') {
  $redirect_url_base = 'https://startslice.com/zero-fee/clover';
  $template_id = '01';
  $oid = trim($_GET['oid']);

  $dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/v1.0';
  require_once $dapp_root . '/dapp.class.php';
  $dapp = new DApp($dapp_root);

  $data['template_id'] = $template_id;
  $data['utm_source'] = $crm_control->utm['utm_source'];
  $data['utm_medium'] = $crm_control->utm['utm_medium'];
  $data['utm_campaign'] = $crm_control->utm['utm_campaign'];
  $data['utm_content'] = $crm_control->utm['utm_content'];
  $data['utm_term'] = $crm_control->utm['utm_term'];

  $dapp->ds_completed_process_status($oid, $redirect_url_base, $data);
}

$page_content = <<<EOD

                <div class="sh-main-01">
                  <div class="sh-logo"><img src="img/logo-01.svg" alt=""></div>
                  <h1>Thank you!</h1>
                  <p class="sub-header text-color-04">A member of our grow team will contact you shortly</p>
                </div>
EOD;

if(isset($_GET['success'])) {
  $page_content = <<<EOD

                <div class="sh-main-02">
                  <div class="sh-logo"><img src="img/logo-01.svg" alt=""></div>
                  <h3>Welcome!</h3>
                  <p>Thank you for creating your Merchant Profile and submitting your application for 0% Credit Card Processing! In addition, you now have access to our Business Financing programs, latest in point of sale equipment to help manage your business, and much more!</p>
                  <h6>What to expect next</h6>
                  <p>Upon approval of your application, we will deploy your equipment and schedule your installation and training. Please expect for one of our implementation specialists to reach out to you over the next few days to schedule your delivery and installation.</p>
                </div>
EOD;
}

$view->page_start(array('title' => "Thank you!"));
?>

      <div role="main" class="main">

        <section class="section-hero sh-01">
          <div class="container">
            <div class="sh-wrap d-flex align-items-center no-gutters">
              <div class="sh-main ml-auto">
                <?php echo $page_content; ?>
              </div>
            </div>
          </div>
          <div class="sh-bg sh-bg-01"><img src="img/intro-clover-flex.jpg" alt=""></div>
          <div class="sh-bottom-info sh-bottom-info-01">
            <div class="featured-logos-line d-flex no-gutters justify-content-center">
              <div>As featured in</div>
              <div><img src="img/featured-bc.png" alt=""></div>
              <div><img src="img/featured-an.png" alt=""></div>
              <div><img src="img/featured-n.png" alt=""></div>
              <div><img src="img/featured-twsj.png" alt=""></div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>