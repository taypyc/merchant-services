<?php
$date_year = date("Y");
$footer_css = in_array($this->page, ['quick-start', 'thank-you', 'verify', 'files']) ? ' class="footer-hidden"' : '';
$loader_dom = array_key_exists('loader', $data) ? $data['loader'] : '';
?>
      <?php echo $loader_dom; ?>

      <footer id="footer"<?php echo $footer_css; ?>>
        <div class="container">
          <div class="footer-top-info">
            <p>101 Crawfords Corner Rd Suite 4131, Holmdel, NJ 07733</p>
          </div>
          <div class="row">
            <div class="col-xs-8 footer-info">
              <a href="<?php echo $this->site_root; ?>"><img src="<?php echo $this->assets_global; ?>img/logo.svg" alt=""></a>
              <span>© Copyright 2017</span>
              <span><a href="https://www.facebook.com/startslice/" target="_blank"><i class="fa fa-facebook"></i></a></span>
            </div>
            <div class="col-xs-4 footer-links">
              <ul>
              </ul>
            </div>
          </div>
        </div>
      </footer>