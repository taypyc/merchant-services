<?php
$date_year = date("Y");
$footer_css = '';
if($this->check_page(['quick-start', 'thank-you', 'files'])) {
  $footer_css = ' class="footer-hidden"';
}
$current_page = $this->page;
$loader_dom = build_loader($current_page, $this->assets_global);


function build_loader($current_page, $assets_global) {
    if($current_page == 'quick-start') {
      return <<<EOD

      <div class="loader-wrap flex-column align-items-center justify-content-center">
        <div class="loader-elem">
          <div class="loader-elem-logo"><img src="{$assets_global}img/logo-merchant-advance-dark.png" alt=""></div>
          <div class="loader-elem-disc"><div class="led-processing"><div></div></div></div>
        </div>
        <p class="loading-description">
          <span>Checking your information</span>
          <span>Please wait a moment</br> while we process your request.</span>
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
            <div class="footer-logo"><img src="<?php echo $this->assets_global; ?>img/logo-merchant-advance-dark.png" alt=""></div>
            <div class="footer-info">
              <p>© Copyright 2017 - <?php echo $date_year; ?> Merchant Advance. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>

