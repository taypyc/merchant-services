<?php
$date_year = date("Y");
$footer_css = in_array($this->page, ['quick-start', 'thank-you', 'verify', 'files']) ? ' class="footer-hidden"' : '';
$loader_dom = array_key_exists('loader', $data) ? $data['loader'] : '';
?>
      <?php echo $loader_dom; ?>

      <footer id="footer"<?php echo $footer_css; ?>>
        <div class="container">
          <div class="footer-col">
            <a class="footer-logo" href="<?php echo $this->site_root; ?>"><img src="<?php echo $this->assets_global; ?>img/logo-01.svg" alt="Slice"></a>
          </div>
          <div class="footer-col footer-col-lg">
            <div class="footer-title">Address</div>
            <address>132 west 36th street 3rd floor, Suite 3A, New York, NY 10018</address>
            <p>© Copyright 2018 - <?php echo $date_year; ?> Slice. All Rights Reserved.</p>
          </div>
        </div>
        <div class="copyright">
          <div class="container flex-v-center">
            <div>Slice Marketing, LLC is a registered Independent Sales Organization of Wells Fargo Bank, N.A., Concord, CA</div>
            <div class="copyright-links">
              <a href="terms-of-use" target="_blank">Terms of use</a>
              <a href="privacy-policy" target="_blank">Privacy policy</a>
            </div>
          </div>
        </div>
      </footer>