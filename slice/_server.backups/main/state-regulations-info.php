<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();

$id = false;
$info = false;

if(isset($_GET['id']) && strlen(trim($_GET['id'])) == 2) {
  $id = strtoupper(trim($_GET['id']));
}

require_once "php/state-regulations-info-array.php";

foreach($state_regulations_info as $s => $i) {
  if($id == $s) {
    $info = $i;
    break;
  }
}

if($info == false) {
  header('Location: ' . $view->site_root . 'projects', true, 301);
  exit();
}

$view->page_start(array('title' => "State Regulations | {$info['n']} | Slice"));
?>

      <div role="main" class="main">
        <?php echo $view->markup_scripts(1); ?>

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer-lg section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-05"><div class="sbd-figure-img sbd-figure-img-01"><img src="img/bg-state-regulations.png" alt="" onload="sectionAppear()"></div></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1><?php echo $info['n']; ?></h1>
              </div>
              <div class="tile-content tile-content-indent-01">
                <h2>State Regulations</h2>
                <div class="block-text-info block-mb-md">
                  <?php echo strlen($info['i']) > 0 ? $info['i'] : "There are no regulations in the state of {$info['n']} that prohibits a merchant from offering a cash discount to a customer to encourage that customer to pay by cash or similar means instead of a credit card for purchasing services or goods."; ?>
                </div>
                <h5>State regulations in other states</h5>
                <?php echo $view->markup_states_grid(); ?>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>