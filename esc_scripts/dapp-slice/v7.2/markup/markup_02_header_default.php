<?php
$quick_start_device = '';

if($this->page == 'index') {
  $quick_start_device = '/clover-mini';
} else if($this->page == 'clover-flex') {
  $quick_start_device = '/clover-flex';
} else if($this->page == 'clover-station') {
  $quick_start_device = '/clover-station';
} else if($this->page == 'clover-station-pro') {
  $quick_start_device = '/clover-station-pro';
}
?>

      <header class="header">
        <div class="container flex-v-center">
          <div class="header-left flex-v-center">
            <div class="logo">
              <a href="<?php echo $this->site_root; ?>">
                <img src="<?php echo $this->assets_global; ?>img/logo-01.svg" alt="Slice">
              </a>
              <span class="logo-device">
                <img src="<?php echo $this->assets_global; ?>img/clover-logo.svg" alt="Clover">
              </span>
            </div>
            <nav class="navigation">
              <input class="menu-btn" type="checkbox" id="menu-btn" />
              <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
              <ul class="flex-v-center menu">
                <li class="navigation-item"><a href="#solutions">Solutions</a></li>
                <li class="navigation-item"><a href="#benefits">Benefits</a></li>
                <li class="navigation-item"><a href="#features">Features</a></li>
                <li class="navigation-item"><a href="#testimonials">Testimonials</a></li>
                <li class="navigation-item"><a href="#faq">FAQ</a></li>
              </ul>
            </nav>
          </div>
          <div class="buy-btn">
            <a href="quick-start<?php echo $quick_start_device; ?>" class="button">Get Started</a>
          </div>
        </div>
      </header>

