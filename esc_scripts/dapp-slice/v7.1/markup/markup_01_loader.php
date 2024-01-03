<?php
if($this->page == 'quick-start') {
  echo <<<EOD

  <div class="loader-wrap flex-column align-items-center justify-content-center">
    <div class="loader-elem">
      <div class="loader-elem-logo"><img src="{$this->assets_global}img/logo-01.svg" alt=""></div>
      <div class="loader-elem-disc"><div class="led-processing"><div></div></div></div>
    </div>
    <p class="loading-description">
      <span>Checking your information.</span>
      <span>Please wait while we process <br>your request</span>
    </p>
  </div>
EOD;
} else {
  echo '';
}
?>