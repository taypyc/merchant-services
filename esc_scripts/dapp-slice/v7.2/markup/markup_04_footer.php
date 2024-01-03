<?php
$date_year = date("Y");
$footer_css = in_array($this->page, ['quick-start', 'thank-you', 'verify', 'files']) ? ' class="footer-hidden"' : '';
$loader_dom = array_key_exists('loader', $data) ? $data['loader'] : '';
?>
      <?php echo $loader_dom; ?>

      <footer id="footer"<?php echo $footer_css; ?>>
          <div class="container">
            <div class="row flex-column align-items-center">
              <div class="footer-logo"><img src="img/logo-gray.svg" alt=""></div>
              <div class="footer-info">
                <p>Slice Marketing, LLC is a registered Independent Sales Organization of Wells Fargo Bank, N.A., Concord, CA</p>
              </div>
            </div>
          </div>
        </footer>