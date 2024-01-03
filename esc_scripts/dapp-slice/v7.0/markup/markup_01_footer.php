<?php
$date_year = date("Y");
$footer_css = '';
if($this->check_page(['quick-start', 'thank-you', 'verify', 'files'])) {
  $footer_css = ' class="footer-hidden"';
}
$current_page = $this->page;
$loader_dom = build_loader($current_page);


function build_loader($current_page) {
    if($current_page == 'quick-start') {
      return <<<EOD

      <div class="loader-wrap flex-column align-items-center justify-content-center">
        <div class="loader-elem">
          <div class="loader-elem-logo"><img src="img/logo-01.svg" alt=""></div>
          <div class="loader-elem-disc"><div class="led-processing"><div></div></div></div>
        </div>
        <p class="loading-description">
          <span>Checking your information.</span>
          <span>Please wait while we process <br>your request</span>
        </p>
      </div>
EOD;
    }

    return '';
}
?>

      <?php echo $loader_dom; ?>

      <footer id="footer"<?php echo $footer_css; ?>>
        <div class="container">
          <div class="row flex-column align-items-center">
            <div class="footer-logo"><img src="img/logo-01.svg" alt=""></div>
            <div class="footer-info">
              <p>Slice Business Marketing, Inc. is a registered ISO of Wells Fargo Bank, N.A., Concord, CA</p>
              <p>© Copyright 2018 - <?php echo $date_year; ?> Slice. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
