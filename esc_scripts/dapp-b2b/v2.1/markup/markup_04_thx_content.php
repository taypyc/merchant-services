<?php
if(isset($_GET['qualification'])) {
  $page_content = <<<EOD

        <section class="section-text">
          <div class="container">
            <div class="wrap-01">
              <div class="text-center block-mb-md">
                <h4>Your application cannot be submitted at this time due to a pending bankruptcy.</h4>
              </div>
              <div class="hero-img-circle"></div>
            </div>
          </div>
        </section>
EOD;
} else {
  $page_content = <<<EOD

        <section class="section-text">
          <div class="container">
            <div class="wrap-01">
              <div class="text-center block-mb-md">
                <div class="block-mb-xsm"><div class="checkmark-circle"></div></div>
                <h4>Thank you for filling out the application, we will be contacting you as soon as possible.</h4>
              </div>
              <div class="hero-img-circle"></div>
            </div>
          </div>
        </section>
EOD;
}
echo $page_content;
?>