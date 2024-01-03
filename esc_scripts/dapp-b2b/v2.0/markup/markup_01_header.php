<?php
$header_body_css = array_key_exists('header_body_css', $data) ? $data['header_body_css'] : '';
$header_logo = array_key_exists('header_logo', $data) ? $data['header_logo'] : 'img/logo.svg';
?>

      <header id="header">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters<?php echo $header_body_css; ?>">
            <div class="hb-logo col-auto">
              <a href="<?php echo $this->site_root; ?>"><img src="<?php echo $header_logo; ?>" alt=""></a>
            </div>

            <!--<div class="hb-phone col-auto ml-auto">
              <span>CONTACTÉNOS</span>
              <a href="tel:8003750602"><svg class="icon icon-phone"><use xlink:href="css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">800-375-0602</span></a>
            </div>-->
          </div>
        </div>
      </header>

