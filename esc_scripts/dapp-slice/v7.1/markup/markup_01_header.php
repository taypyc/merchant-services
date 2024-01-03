<?php
$header_body_css = array_key_exists('header_body_css', $data) ? $data['header_body_css'] : '';
$header_logo = array_key_exists('header_logo', $data) ? $data['header_logo'] : 'img/logo.svg';

$markup_services = '';

foreach($this->services as $name_key => $service) {
  $price = explode('.', $service['price'], 2);
  $old_price = explode('.', $service['old_price'], 2);

  $price_formatted = '$' . $price[0] . '.' . '<sup>' . $price[1] . '</sup>';
  $old_price_formatted = '$' . $old_price[0] . '.' . '<sup>' . $old_price[1] . '</sup>';

  $markup_services .= <<<EOD
              <li data-service="{$name_key}" data-service-url="{$this->site_root}{$this->page}/{$name_key}">
                <svg class="icon icon-clover hb-cart-brand"><use xlink:href="{$this->assets_global}css/fonts/icons.svg#clover"></use></svg>
                <span>{$service['friendly_name']}</span>
                <div class="hb-cart-service-list-price">
                  <span>{$price_formatted}/mo</span>
                  <span>{$old_price_formatted}/mo</span>
                </div>
              </li>
EOD;
}
?>

      <header id="header">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters<?php echo $header_body_css; ?>">
            <div class="hb-logo col-auto">
              <a href="<?php echo $this->site_root; ?>"><img src="<?php echo $this->assets_global . $header_logo; ?>" alt=""></a>
            </div>
            
            <div class="hb-cart col-auto ml-auto">
              <div class="hb-cart-service-selected">
                <span class="hb-cart-01">
                  <svg class="icon icon-clover hb-cart-brand"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#clover"></use></svg>
                  <span class="hbc-main"></span><br>
                  <span class="hbc-highlighted"></span>
                  <span class="hbc-old"></span>
                </span>

                <span class="hb-cart-02">
                  <span class="hbc-main">Slice Cash Discount Plan</span><br>
                  <span class="hbc-highlighted">0%</span>
                  <span class="hbc-old">2.7% per swipe</span>
                </span>
              </div>

              <div class="hb-cart-service-list">
                <ul>
                  <?php echo $markup_services; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
