<?php
$header_body_css = array_key_exists('header_body_css', $data) ? $data['header_body_css'] : '';
$header_logo = array_key_exists('header_logo', $data) ? $data['header_logo'] : 'img/logo-merchant-advance.png';
?>

      <header id="header">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters<?php echo $header_body_css; ?>">
            <div class="hb-logo col-auto">
              <a><img src="<?php echo $this->assets_global.$header_logo; ?>" alt=""></a>
            </div>
          </div>
        </div>
      </header>

