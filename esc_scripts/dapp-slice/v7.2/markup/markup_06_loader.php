<?php
if($this->check_page(['quick-start', 'files'])) {
  echo <<<EOD

  <div class="loader-wrap flex-column align-items-center justify-content-center">
    <div class="loader-elem">
      <div class="loader-elem-logo"><img src="{$this->assets_global}img/markup-06/animation.svg" width="100" height="100" alt="" /></div>
    </div>
    <p class="loading-description">
      <span>Comprobando tu información.</span>
      <span>Espere mientras procesamos <br>su solicitud.</span>
    </p>
  </div>
EOD;
} else {
  echo '';
}
?>
