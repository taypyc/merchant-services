<?php
$header_body_css = $this->check_page(['index']) ? '' : '';
$header_logo = array_key_exists('header_logo', $data) ? $data['header_logo'] : 'img/main/logo.svg';
?>

      <header id="header" class="header">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters<?php echo $header_body_css; ?>">
            <div class="hb-logo col-auto">
              <a href="<?php echo $this->site_root; ?>"><img src="<?php echo $this->assets_global . $header_logo; ?>" alt="b2b funding"></a>
            </div>

            <div class="header-nav-wrap col-auto ml-auto">
                <div class="lang-bar">
                    <nav>
                        <ul>
                            <li><a href="/b2b/main-new/www">EN</a></li>
                            <li><a href="/b2b/main-new-es/www">ES</a></li>
                        </ul>
                    </nav>
                </div>
              <button class="header-btn-nav"><span></span></button>
              <div class="header-nav">
                <nav>
                  <ul class="hn-menu no-gutters">
                      <li><a href="quality">do you quality</a></li>
                      <li><a href="#how-it-works">how it works</a></li>
                      <li><a href="#why-choose-us">why choose us</a></li>
                      <li><a href="testimonials">testimonials</a></li>
                      <li><a class="start" href="quick-start">get started</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
