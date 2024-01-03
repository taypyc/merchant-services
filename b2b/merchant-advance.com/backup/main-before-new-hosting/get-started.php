<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Get Started"));
?>

      <div role="main" class="main">

        <div class="top-block arrow-block">
          <div class="container">
            <h2 class="mb-sm">Talk to us</h2>
            <p class="sub-header">Submit our simple online form and we’ll get back to you quickly. We’ll reach out to you to understand your business and what type of programs fit you better.</p>
          </div>
        </div>
        <?php echo $view->contact_section("get-started"); ?>
      
      </div>

<?php
$view->page_end();
?>