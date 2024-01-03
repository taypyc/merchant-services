<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Thank you"));
?>

      <div role="main" class="main main-appear" id="main-appear">
        <section class="section-hero section-hero-01 section-hero-thx section-appear" id="section-appear">
          <div class="hero-bg hero-bg-01">
            <div class="presentation-wrap-01">
              <div class="pw-brand">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg-inline-brand" viewBox="0 0 101.6 101.6" preserveAspectRatio="xMidYMid meet">
                  <g id="svg-inline-brand-g-03">
                    <path class="svg-brand-st0" d="M51,60.9v31.8c11.4-1.1,21.3-5.3,29.7-12.6l-0.6-0.6L51,60.9z"/>
                    <path class="svg-brand-st1" d="M51,51.1V61l29.1,18.7L51,51.1z"/>
                  </g>
                  <g id="svg-inline-brand-g-02">
                    <path class="svg-brand-st2" d="M51,0v51.1l29.1,28.6l7.2,6.6c9.5-9.9,14.2-21.6,14.3-35.1c0-14.3-4.9-26.4-14.8-36.3C76.9,4.9,64.9,0,51,0z"/>
                  </g>
                  <g id="svg-inline-brand-g-01">
                    <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                      <path class="svg-brand-st3" d="M14.8,14.8C4.9,24.7,0,36.8,0,51.1C0,65,4.9,76.9,14.8,86.8c9.9,9.9,22,14.8,36.2,14.8V0
                        C36.8,0,24.7,4.9,14.8,14.8z"/>
                    </g>
                    <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                      <circle class="svg-brand-st4" cx="34.3" cy="34.3" r="13.5"/>
                      <circle class="svg-brand-st5" cx="34.3" cy="34.3" r="10.4"/>
                      <circle class="svg-brand-st6" cx="34.2" cy="34.3" r="6.8"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="pw-terminal-wrap">
                <div class="pw-terminal-stuff">
                  <div class="pw-terminal-device">
                    <div class="pw-terminal-device-screen"></div>
                    <div class="pw-terminal-device-btns-wrap">
                      <div class="d-flex justify-content-between pw-terminal-device-btns-circle">
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                      </div>
                      <div class="d-flex justify-content-between pw-terminal-device-btns-circle">
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                      </div>
                      <div class="d-flex justify-content-between pw-terminal-device-btns-rectangle">
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                        <div><div class="pw-terminal-device-btn"></div></div>
                      </div>
                      <div class="d-flex justify-content-between pw-terminal-device-btns-rectangle-lg">
                        <div><div class="pw-terminal-device-btn pw-terminal-device-btn-color-01"></div></div>
                        <div><div class="pw-terminal-device-btn pw-terminal-device-btn-color-02"></div></div>
                        <div><div class="pw-terminal-device-btn pw-terminal-device-btn-color-02"></div></div>
                      </div>
                    </div>
                  </div>
                  <div class="pw-terminal-card"></div>
                </div>
              </div>
            </div>
            <div class="spheres-wrap-01">
              <div class="sphere-item sphere-01"></div>
              <div class="sphere-item sphere-02"></div>
              <div class="sphere-item sphere-03"></div>
            </div>
          </div>
          <div class="container">
            <div class="hero-wrap d-flex align-items-center">
              <div class="hero-wrap-content">
                <div class="hwc-bg-figure hwc-bg-figure-01"></div>
                <div class="hwc-info">
                  <p class="header-sup">Success</p>
                  <h1 class="header-lg">Thank you!</h1>
                  <p class="sub-header block-mb-md">A member of our grow team <span class="white-space-nw">will contact you shortly</span></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
      </div>

<?php
$view->page_end();
?>