<?php
if(isset($_GET['success'])) {
?>

        <section class="section-text">
          <div class="container">
            <div class="sh-logo text-center"><img src="<?php echo $this->assets_global; ?>img/markup-04/logo-01.svg" alt=""></div>
            <div class="block-maw-01 block-mb-sm text-center">
              <h3>Welcome to The Family!</h3>
              <p class="sub-header wrap-br-09">In addition to you getting the lowest credit card processing fees, you now have <br>access to our Business Financing programs, latest in point of sale equipment <br>to help manage your business and much more!</p>
            </div>
            <div class="tile-info">
              <div class="row">
                <div class="col-12 col-md-auto ti-header-col">
                  <h5 class="ti-header">Important:</h5>
                  <p class="ti-sub-header">What to expect next</p>
                </div>
                <div class="col ti-content">
                  <p><strong>Please expect a phone call from our on-boarding specialist.</strong></p>
                  <p>We will reach out to you before submission of application in order to go over the program/equipment and to answer any other questions you may have.</p>
                  <p>Our belief is that at the start any successful business relationship the initial implementation must be done perfectly.</p>
                  <p>Thank you and we look forward to speaking with you soon and having a successful long-term relationship!</p>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php
} else {
?>

        <section class="section-text">
          <div class="container">
            <div class="sh-logo text-center"><img src="<?php echo $this->assets_global; ?>img/markup-04/logo-01.svg" alt=""></div>
            <div class="block-maw-01 block-mb-sm text-center">
              <h3>Thank You!</h3>
              <p class="sub-header wrap-br-09">In addition to you getting the lowest credit card processing fees, you now have <br>access to our Business Financing programs, latest in point of sale equipment <br>to help manage your business and much more!</p>
            </div>
            <div class="tile-info">
              <div class="row">
                <div class="col-12 col-md-auto ti-header-col">
                  <h5 class="ti-header">Important:</h5>
                  <p class="ti-sub-header">What to expect next</p>
                </div>
                <div class="col ti-content">
                  <p><strong>Please expect a phone call from our specialist.</strong></p>
                  <p>We will reach out to you in order to go over the program/equipment and to answer any other questions you may have.</p>
                  <p>Our belief is that at the start any successful business relationship the initial implementation must be done perfectly.</p>
                  <p>Thank you and we look forward to speaking with you soon and having a successful long-term relationship!</p>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php
}
?>