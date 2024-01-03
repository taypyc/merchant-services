<?php
$date_year = date("Y");
$footer_css = $this->check_page(['quick-start', 'thank-you', 'verify', 'files']) ? ' class="footer-hidden"' : '';
$loader_dom = array_key_exists('loader', $data) ? $data['loader'] : '';
?>

      <?php echo $loader_dom; ?>

      <footer id="footer"<?php echo $footer_css; ?>>
        <div class="container">
          <div class="row flex-column align-items-center">
            <div class="footer-logo"><img src="<?php echo $this->assets_global; ?>img/logo-01.svg" alt=""></div>
            <div class="footer-info">
              <p>Slice Marketing, LLC es una organización de ventas independiente registrada de Wells Fargo Bank, N.A., Concord, CA</p>
              <p>© Copyright 2018 - <?php echo $date_year; ?> Slice. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
