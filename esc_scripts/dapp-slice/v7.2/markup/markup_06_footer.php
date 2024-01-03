<?php
$date_year = date("Y");
$footer_css = $this->check_page(['quick-start', 'verify', 'files']) ? ' class="footer-hidden"' : '';
$loader_dom = array_key_exists('loader', $data) ? $data['loader'] : '';
?>

      <?php echo $loader_dom; ?>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row flex-column align-items-center">
                <div class="footer-logo"><img src="img/logo.svg" width="161" height="26" alt="B2Bmerchants Logo"></div>
                <div class="footer-info">
                    <p><a href="license-agreement">Acuerdo de licencia</a> &nbsp;•&nbsp; <a href="privacy-policy">Política de privacidad</a></p>
                    <p>Merchant Services LLC d/b/a B2B Merchants, es una ISO registrada de Wells Fargo Bank, N.A., Concord, CA<br/>
                        El nombre y el logotipo de Clover son propiedad de Clover Network, Inc., una subsidiaria de propiedad absoluta de la corporación First Data, y están registrados o se usan en los EE. UU. y en muchos países extranjeros.</p>
                </div>
            </div>
        </div>
    </footer>
