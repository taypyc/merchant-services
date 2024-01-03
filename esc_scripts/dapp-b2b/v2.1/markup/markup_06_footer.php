<?php
$date_year = date("Y");
$footer_css = $this->check_page(['index']) ? '' : '';
?>

      <footer id="footer"<?php echo $footer_css; ?> class="footer">
        <div class="container">
          <div class="row align-items-center justify-content-md-between">
                <div class="col-7 col-md-auto col-lg-2 footer-logo">
                    <img src="<?php echo $this->assets_global; ?>img/main/logo.svg" alt="b2b funding" width="141" height="24" alt="b2b funding" />
                    <p class="d-md-none copyright">© Copyright 2016 - <?php echo $date_year; ?>.<br/>All Rights Reserved.</p>
                </div>
                <div class="col-5 col-md-auto footer-nav">
                    <nav>
                        <ul class="hn-menu">
                            <li><a href="quality">do you quality</a></li>
                            <li><a href="#how-it-works">how it works</a></li>
                            <li><a href="#why-choose-us">why choose us</a></li>
                            <li><a href="testimonials">testimonials</a></li>
                            <li><a href="quick-start">get started</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row copyright d-none d-md-block">
                <div class="col-12">
                    <p class="text-center">© Copyright 2016 - <?php echo $date_year; ?>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
      </footer>
