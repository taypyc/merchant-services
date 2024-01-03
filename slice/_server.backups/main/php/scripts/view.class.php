<?php
class ViewControl {
  // public $site_root = "/slice/www/";
  public $site_root;
  public $transfer_protocol;
  public $page_url;
  public $page;
  public $i = array(
    'mobile' => '844-367-7542',
    'mobile_href' => '8443677542',
    // 'signup_url' => 'https://startslice.com/support',
    'signup_url' => 'https://startslice.com/zero-fee/processing/quick-start?us=05',
  );
  
  public function __construct() {
    $this->site_root = getenv('SITE_ROOT');
    $this->transfer_protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $this->page_url = $this->transfer_protocol . "://{$_SERVER['HTTP_HOST']}" . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
  }
  
  public function page_start($head_data = NULL, $messages = NULL) {
    if(array_key_exists('headers', $head_data)) {
      if(array_key_exists('404', $head_data['headers']) && $head_data['headers']['404'] === true) {
        header('HTTP/1.1 404 Not Found', true, 404);
      } else if(array_key_exists('503', $head_data['headers']) && $head_data['headers']['503'] === true) {
        header('HTTP/1.1 503 Service Temporarily Unavailable', true, 503);
      }
    }
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '1');
    
    $this->display_head($head_data);
    $this->display_title();
    //$this->display_messages($messages);
  }
  
  public function display_head($head_data) {
    $title = (array_key_exists('title', $head_data)) ? $head_data['title'] : "";
    $meta_desc = (array_key_exists('meta_desc', $head_data)) ? '<meta name="description" content="'.$head_data['meta_desc'].'">' : "";
    $meta_keys = (array_key_exists('meta_keys', $head_data)) ? '<meta name="keywords" content="'.$head_data['meta_keys'].'">' : "";
    $meta_og_title = (array_key_exists('meta_og', $head_data) && array_key_exists('title', $head_data['meta_og'])) ? $head_data['meta_og']['title'] : $title;
    $meta_og_desc = (array_key_exists('meta_og', $head_data) && array_key_exists('desc', $head_data['meta_og'])) ? $head_data['meta_og']['desc'] : ((strlen($meta_desc) > 0) ? $head_data['meta_desc'] : "");
    $meta_og_url = (array_key_exists('meta_og', $head_data) && array_key_exists('url', $head_data['meta_og'])) ? $head_data['meta_og']['url'] : $this->page_url;
    $meta_og_img = (array_key_exists('meta_og', $head_data) && array_key_exists('img', $head_data['meta_og'])) ? $head_data['meta_og']['img'] : $this->transfer_protocol . "://{$_SERVER['HTTP_HOST']}" . "/img/logo.png";
    $meta_og = <<<EOD
    
    <meta property="og:title" content="{$meta_og_title}">
    <meta property="og:description" content="{$meta_og_desc}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$meta_og_url}">
    <meta property="og:image" content="{$meta_og_img}">
EOD;
    $meta_tags = (array_key_exists('meta_tags', $head_data)) ? $head_data['meta_tags'] : "";

    $rel_canonical = '';
    $rel_canonical_page = $this->page == 'index' ? '' : $this->page;
    if($this->page != 'faq' && $_SERVER['REQUEST_URI'] !== $this->site_root . $rel_canonical_page) {
      $rel_canonical = '<link rel="canonical" href="' . $this->transfer_protocol . '://' . $_SERVER['HTTP_HOST'] . $this->site_root . $rel_canonical_page . '">';
    }

    $html_css = "";
    $style_tag_query_string = $this->transfer_protocol . "://{$_SERVER['HTTP_HOST']}" . $_SERVER['REQUEST_URI'];
    $style_tag = <<<EOD
<style>.svg-brand-st2{fill:url({$style_tag_query_string}#svg-brand-SVGID_1_)}.svg-brand-st3{fill:url({$style_tag_query_string}#svg-brand-SVGID_2_)}</style>
EOD;

    if($this->page == 'thank-you') {
      $html_css = ' class="simple-page"';
    }
    
    echo <<<EOD
<!DOCTYPE html>
<html{$html_css} lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <base href="{$this->site_root}">
    <title>{$title}</title>  
    {$meta_desc}
    {$meta_keys}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    {$meta_og}
    {$meta_tags}
    {$rel_canonical}
    <link rel="apple-touch-icon" sizes="180x180" href="{$this->site_root}img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$this->site_root}img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$this->site_root}img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{$this->site_root}img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{$this->site_root}img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="{$this->site_root}img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{$this->site_root}css/vendors.css">
    <link rel="stylesheet" href="{$this->site_root}css/main.css">
    {$style_tag}
  </head>
EOD;
  }
  
  public function display_title() {
    $header_css = '';
    $header_css_list = array();
    $header_js = '';
    $header_logo_light = '';

    $free_processing = '';
    $equipment = '';
    $capital = '';
    $resources = '';
    $careers = '';

    if($this->page == 'processing') {
      $free_processing = ' class="active"';
    } else if($this->page == 'equipment') {
      $equipment = ' class="active"';
    } else if($this->page == 'capital') {
      $capital = ' class="active"';
    } else if($this->page == 'careers') {
      $careers = ' class="active"';
    } else if($this->page == 'support') {
      $resources = ' class="active"';
    }

    $header_appear_pages = array('index', 'processing', 'equipment', 'capital', 'partners', 'support', 'faq', 'contact-us', 'about', 'standalone-terminals', 'privacy-policy', 'sitemap', 'error', 'state-regulations', 'state-regulations-info', 'testimonials', 'careers', 'careers-regional-sales-agent', 'careers-inside-sales-manager', 'careers-customer-support-specialist', 'careers-technical-support-specialist', 'careers-thank-you');
    $header_light_pages = array('partners', 'support', 'faq', 'contact-us', 'about', 'privacy-policy', 'sitemap', 'error', 'state-regulations', 'state-regulations-info', 'testimonials', 'careers', 'careers-regional-sales-agent', 'careers-inside-sales-manager', 'careers-customer-support-specialist', 'careers-technical-support-specialist', 'careers-thank-you');

    if(in_array($this->page, $header_appear_pages)) {
      $header_css_list[] = 'header-appear';
      $header_js = "<script>
        setTimeout(function() {
          document.getElementById('header').classList.remove('header-appear');
        }, 50);
      </script>";
    }
    if(in_array($this->page, $header_light_pages)) {
      $header_css_list[] = 'header-light';
      $header_logo_light = '<img src="img/logo-light.svg" alt="Slice" class="hb-logo-light">';
    }

    if(count($header_css_list) > 0) {
      $header_css = ' class="' . implode(' ', $header_css_list) . '"';
    }


    echo <<<EOD

  <body>
    {$this->markup_svg()}
    <div class="body">
      <header id="header"{$header_css}>
        <div class="header-container">
          <div class="container">
            <div class="header-body row align-items-center justify-content-md-between no-gutters">
              <div class="hb-logo col-auto">
                <a href="{$this->site_root}"><img src="img/logo.svg" alt="Slice">{$header_logo_light}</a>
              </div>

              <div class="header-nav-wrap col-auto">
                <button class="header-btn-nav"><span></span></button>
                <div class="header-nav">
                  <nav>
                    <ul class="hn-menu row align-items-center no-gutters">
                      <li{$free_processing}><a href="{$this->site_root}processing"><span>Processing</span></a></li>
                      <li{$equipment}><a href="{$this->site_root}equipment"><span>Equipment</span></a></li>
                      <li{$capital}><a href="{$this->site_root}capital"><span>Capital</span></a></li>
                      <li{$careers}><a href="{$this->site_root}careers"><span>Careers</span></a></li>
                      <li{$resources}><a href="{$this->site_root}support"><span>Support</span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              
              <div class="hb-phone col-auto">
                <a href="tel:{$this->i['mobile_href']}"><svg class="icon icon-phone"><use xlink:href="css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">{$this->i['mobile']}</span></a>
              </div>
            </div>
          </div>
        </div>
      </header>
      {$header_js}
EOD;
  }
  
  public function display_messages($messages) {
    if($this->page == "404") return;
    
    // $_GET messages
    $success_message = (isset($_GET['success_message']) && strlen(trim($_GET['success_message'])) > 1) ? trim($_GET['success_message']) : false;
    $error_message = (isset($_GET['error_message']) && strlen(trim($_GET['error_message'])) > 1) ? trim($_GET['error_message']) : false;

    if ((!is_null($messages) && array_key_exists('success_message', $messages) && strlen($messages['success_message']) > 0) || $success_message) {
      $sm = (!is_null($messages) && array_key_exists('success_message', $messages) && strlen($messages['success_message']) > 0) ? $messages['success_message'] : $success_message;
      $this->display_message($sm, "alert-success");
    }
    
    if ((!is_null($messages) && array_key_exists('error_message', $messages) && strlen($messages['error_message']) > 0) || $error_message) {
      $em = (!is_null($messages) && array_key_exists('error_message', $messages) && strlen($messages['error_message']) > 0) ? $messages['error_message'] : $error_message;
      $this->display_message($em, "alert-danger");
    }
  }

  public function display_message($msg, $msg_type) {
    $msg = $this->conv_html($msg);
    echo '<div class="message-block"><div class="alert '.$msg_type.' alert-dismissible fade show" role="alert"><div class="pm-txt-wrap">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div></div>';
  }
  
  public function page_end($page_js = "") {
  
    $footer_js = "";
    $footer_js .= $page_js;

    $additional_js = $this->markup_scripts(2);
    $date_year = date("Y");

    echo <<<EOD
      
      {$additional_js}
      <footer id="footer">
        <div class="container">
          <div class="row flex-lg-nowrap">
            <div class="col-12 col-lg-auto footer-info-wrap d-flex flex-column">
              <div class="footer-logo"><a href="{$this->site_root}"><img src="img/logo.svg" alt=""></a></div>
              <div>
                <ul class="list-icon">
                  <li><a href="tel:{$this->i['mobile_href']}" class="li-wrap"><svg class="icon icon-phone"><use xlink:href="css/fonts/icons.svg#phone"></use></svg>{$this->i['mobile']}</a></li>
                  <li><a href="mailto:info@startslice.com" class="li-wrap"><svg class="icon icon-email"><use xlink:href="css/fonts/icons.svg#email"></use></svg>info@startslice.com</a></li>
                </ul>
              </div>
              <div>
                <div class="row no-gutters icon-link-group">
                  <div class="col-auto"><a href="https://www.facebook.com/startslice/" target="_blank"><svg class="icon icon-facebook"><use xlink:href="css/fonts/icons.svg#facebook"></use></svg></a></div>
                  <!--<div class="col-auto"><a href="#"><svg class="icon icon-twitter"><use xlink:href="css/fonts/icons.svg#twitter"></use></svg></a></div>
                  <div class="col-auto"><a href="#"><svg class="icon icon-linkedin"><use xlink:href="css/fonts/icons.svg#linkedin"></use></svg></a></div>-->
                </div>
              </div>
              <div class="footer-desc">
                <p>Slice Marketing, LLC is a registered Independent Sales Organization of Wells Fargo Bank, N.A., Concord, CA</p>
                <p><a href="privacy-policy">Privacy Policy</a></p>
                <p>© Copyright 2018 - {$date_year} Slice. All Rights Reserved.</p>
                <p style="font-size:0.7em">The Clover name and logo are owned by Clover Network, Inc. a wholly owned subsidiary of First Data corporation, and are registered or used in the U.S. and many foreign countries.</p>
              </div>
            </div>
            <div class="col-12 col-lg-auto ml-auto footer-links-wrap">
              <div class="flw-bg-figure-wrap"><div class="flw-bg-figure"></div></div>
              <div class="row footer-links justify-content-between justify-content-lg-end flex-sm-nowrap">
                <div class="col-12 col-sm-auto fl-item">
                  <h6>Company</h6>
                  <ul>
                    <li><a href="about">About us</a></li>
                    <li><a href="partners">Become a partner</a></li>
                    <li><a href="careers">Careers</a></li>
                    <li><a href="testimonials">Testimonials</a></li>
                    <!--<li><a href="blog">Blog</a></li>-->
                  </ul>
                </div>
                <div class="col-12 col-sm-auto fl-item">
                  <h6>Services</h6>
                  <ul>
                    <li><a href="{$this->site_root}processing#cash-discount">Cash Discount</a></li>
                    <li><a href="{$this->site_root}processing#traditional-processing">Traditional Processing</a></li>
                    <li><a href="{$this->site_root}capital">Capital</a></li>
                    <!--<li><a href="gift-loyalty-programs">Gift/Loyalty Programs</a></li>
                    <li><a href="merchant-analytics">Merchant Analytics</a></li>-->
                  </ul>
                </div>
                <div class="col-12 col-sm-auto fl-item">
                  <h6>Equipment</h6>
                  <ul>
                    <li><a href="{$this->site_root}equipment/standalone-terminals">Standalone terminals</a></li>
                    <li><a href="{$this->site_root}equipment">Clover<sup>®</sup> POS Family</a></li>
                    <li><a href="{$this->site_root}equipment">Slice POS</a></li>
                    <li><a href="{$this->site_root}equipment">Aldelo POS</a></li>
                    <li><a href="{$this->site_root}equipment">Paradise POS</a></li>
                  </ul>
                </div>
                <div class="col-12 col-sm-auto fl-item wrap-br-03">
                  <h6>Resources</h6>
                  <ul>
                    <li><a href="{$this->site_root}support">Support</a></li>
                    <li><a href="{$this->site_root}faq">FAQs</a></li>
                    <li><a href="{$this->site_root}contact-us">Contact us</a></li>
                    <li><a href="{$this->site_root}state-regulations">State <br>Regulations</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <div class="tile-form tile-form-01 tile-border-shadow-top mfp-hide popup-appear" id="contact-form">
      <form class="form-contact">
        <div class="tile-form-header">
          <h3>Apply now</h3>
          <p>Fill out the simple form or call us at <span class="white-space-nw">{$this->i['mobile']}</span>. It's free to apply and won't affect your credit score</p>
        </div>
        <div class="row form-group-row">
          <div class="col-12 col-sm-6">
            <input name="name" type="text" class="form-control" required placeholder="Contact name">
          </div>
          <div class="col-12 col-sm-6">
            <input name="business_name" type="text" class="form-control" required placeholder="Business name">
          </div>
        </div>
        <div class="row form-group-row">
          <div class="col-12 col-sm-6">
            <input name="phone" type="tel" class="form-control" required placeholder="Phone number">
          </div>
          <div class="col-12 col-sm-6">
            <input name="email" type="email" class="form-control" required placeholder="Email">
          </div>
        </div>
        <div class="row form-group-row fg-btn align-items-center">
          <div class="col-6 col-md-5">
            <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
          </div>
          <div class="col-6 col-md-7 fg-desc">
            <p>Once submitted, your request will be reviewed and one of our specialists will contact you within 24 hours. We respect your privacy and do not share your information with third parties.</p>
          </div>
        </div>
      </form>
    </div>

    <script src="{$this->site_root}js/vendors.js"></script>
    <script src="{$this->site_root}js/main.js"></script>
    {$footer_js}
  </body>
</html>
EOD;
  }
  
  public function conv_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }

  public function markup_svg() {
    return <<<EOD

    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
      <symbol id="svg-star" viewBox="0 0 55.867 55.867" preserveAspectRatio="xMinYMid slice" xmlns="http://www.w3.org/2000/svg"><path d="M55.818,21.578c-0.118-0.362-0.431-0.626-0.808-0.681L36.92,18.268L28.83,1.876c-0.168-0.342-0.516-0.558-0.896-0.558 s-0.729,0.216-0.896,0.558l-8.091,16.393l-18.09,2.629c-0.377,0.055-0.689,0.318-0.808,0.681c-0.117,0.361-0.02,0.759,0.253,1.024 l13.091,12.76l-3.091,18.018c-0.064,0.375,0.09,0.754,0.397,0.978c0.309,0.226,0.718,0.255,1.053,0.076l16.182-8.506l16.18,8.506 c0.146,0.077,0.307,0.115,0.466,0.115c0.207,0,0.413-0.064,0.588-0.191c0.308-0.224,0.462-0.603,0.397-0.978l-3.09-18.017 l13.091-12.761C55.838,22.336,55.936,21.939,55.818,21.578z"/></symbol>
      <defs>
        <g>
          <linearGradient id="svg-brand-SVGID_1_" gradientUnits="userSpaceOnUse" x1="50.45" y1="57.6" x2="101" y2="57.6" gradientTransform="matrix(1 0 0 -1 0 100.7)">
            <stop offset="0" style="stop-color:#FCEB43"/>
            <stop offset="1" style="stop-color:#F18750"/>
          </linearGradient>
          <linearGradient id="svg-brand-SVGID_2_" gradientUnits="userSpaceOnUse" x1="22.987" y1="94.7135" x2="34.3371" y2="-1.0365" gradientTransform="matrix(1 0 0 -1 0 100.7)">
            <stop offset="0" style="stop-color:#2FDFDD"/>
            <stop offset="0.5765" style="stop-color:#2180DD"/>
            <stop offset="1" style="stop-color:#001F78"/>
          </linearGradient>
        </g>
      </defs>
      <symbol id="svg-brand" viewBox="0 0 101.6 101.6" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
        <g id="svg-brand-g-03">
          <path class="svg-brand-st0" d="M51,60.9v31.8c11.4-1.1,21.3-5.3,29.7-12.6l-0.6-0.6L51,60.9z"/>
          <path class="svg-brand-st1" d="M51,51.1V61l29.1,18.7L51,51.1z"/>
        </g>
        <g id="svg-brand-g-02">
          <path class="svg-brand-st2" d="M51,0v51.1l29.1,28.6l7.2,6.6c9.5-9.9,14.2-21.6,14.3-35.1c0-14.3-4.9-26.4-14.8-36.3C76.9,4.9,64.9,0,51,0z"/>
        </g>
        <g id="svg-brand-g-01">
          <g transform="matrix( 1, 0, 0, 1, 0,0) ">
            <path class="svg-brand-st3" d="M14.8,14.8C4.9,24.7,0,36.8,0,51.1C0,65,4.9,76.9,14.8,86.8c9.9,9.9,22,14.8,36.2,14.8V0 C36.8,0,24.7,4.9,14.8,14.8z"/>
          </g>
          <g transform="matrix( 1, 0, 0, 1, 0,0) ">
            <circle class="svg-brand-st4" cx="34.3" cy="34.3" r="13.5"/>
            <circle class="svg-brand-st5" cx="34.3" cy="34.3" r="10.4"/>
            <circle class="svg-brand-st6" cx="34.2" cy="34.3" r="6.8"/>
          </g>
        </g>
      </symbol>
    </svg>

EOD;
  }

  public function markup_scripts($i = NULL) {
    $scripts = array(
      0 => "<script>setTimeout(function() {document.getElementById('section-appear').classList.remove('section-appear');}, 50);</script>",
      1 => "<script>function sectionAppear() {setTimeout(function() {document.getElementById('section-appear').classList.remove('section-appear');},50);}</script>",
      2 => "<script>var mainAppear = document.getElementById('main-appear');if(mainAppear !== null) {setTimeout(function() {mainAppear.classList.remove('main-appear');}, 50);}</script>",
    );
    if(isset($i)) {
      return $scripts[$i];
    } else {
      return $scripts[0];
    }
  }

  public function markup_cta_equipment() {
    $arr = array(
      'standalone-terminals' => '
                  <div class="col-4">
                    <a href="equipment/standalone-terminals" class="tile-service-sm bg-diagonal-orange">
                      <span class="tile-service-sm-img"><img src="img/service-standalone-terminal.png" alt=""></span>
                      <span class="tile-service-sm-cta font-header"><span class="link-grey">Standalone terminals</span>
                    </a>
                  </div>',
      'clover-pos' => '
                  <div class="col-4">
                    <a href="' . $this->i['signup_url'] . '" class="tile-service-sm bg-diagonal-turquoise">
                      <span class="tile-service-sm-img"><img src="img/service-clover.png" alt=""></span>
                      <span class="tile-service-sm-cta font-header"><span class="link-grey">Clover<sup>®</sup> POS <br>Family</span></span>
                    </a>
                  </div>',
      'paradise-pos' => '
                  <div class="col-4">
                    <a href="' . $this->i['signup_url'] . '" class="tile-service-sm bg-diagonal-violet">
                      <span class="tile-service-sm-img"><img src="img/service-paradise-pos.png" alt=""></span>
                      <span class="tile-service-sm-cta font-header"><span class="link-grey">Paradise POS</span></span>
                    </a>
                  </div>',
      'aldelo-pos' => '
                  <div class="col-4">
                    <a href="' . $this->i['signup_url'] . '" class="tile-service-sm bg-diagonal-mint">
                      <span class="tile-service-sm-img"><img src="img/service-restaurant-pos.png" alt=""></span>
                      <span class="tile-service-sm-cta font-header"><span class="link-grey">Aldelo <br>restaurant POS</span></span>
                    </a>
                  </div>'
    );

    $tiles = '';

    foreach($arr as $k => $v) {
      if($this->page === $k)
        continue;

      $tiles = $tiles . $v;
    }

    $cta = <<<EOD

        <section class="section-cta section-cta-01">
          <div class="container">
            <div class="cta-figure cta-figure-01"></div>
            <div class="tile-cta-wrap row">
              <div class="col-12 col-md-4"><h2 class="text-color-grey" id="cta-anim">Recommended <br>equipment <br><span class="white-space-nw">for you</span></h2></div>
              <div class="cta-tiles-wrap col-12 col-md-8">
                <div class="row">
                  {$tiles}
                </div>
              </div>
            </div>
          </div>
        </section>
EOD;

    return $cta;
  }

  public function markup_states_grid() {
    $state_regulations_href = 'state-regulations/';

    return <<<EOD

                <div class="d-flex flex-wrap justify-content-center links-grid-wrap">
                  <div><a class="link-grid-item" href="{$state_regulations_href}AL">Alabama</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}AK">Alaska</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}AZ">Arizona</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}AR">Arkansas</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}CA">California</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}CO">Colorado</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}CT">Connecticut</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}DE">Delaware</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}DC">District Of Columbia</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}FL">Florida</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}GA">Georgia</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}HI">Hawaii</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}ID">Idaho</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}IL">Illinois</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}IN">Indiana</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}IA">Iowa</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}KS">Kansas</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}KY">Kentucky</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}LA">Louisiana</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}ME">Maine</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MD">Maryland</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MA">Massachusetts</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MI">Michigan</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MN">Minnesota</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MS">Mississippi</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MO">Missouri</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}MT">Montana</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NE">Nebraska</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NV">Nevada</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NH">New Hampshire</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NJ">New Jersey</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NM">New Mexico</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NY">New York</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}NC">North Carolina</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}ND">North Dakota</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}OH">Ohio</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}OK">Oklahoma</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}OR">Oregon</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}PA">Pennsylvania</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}RI">Rhode Island</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}SC">South Carolina</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}SD">South Dakota</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}TN">Tennessee</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}TX">Texas</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}UT">Utah</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}VT">Vermont</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}VA">Virginia</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}WA">Washington</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}WV">West Virginia</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}WI">Wisconsin</a></div>
                  <div><a class="link-grid-item" href="{$state_regulations_href}WY">Wyoming</a></div>
                </div>
EOD;
  }

  public function markup_careers_form($job) {
    $markup = <<<EOD

                    <div class="tile-form tile-border-shadow-top">
                      <form class="form-careers">
                        <div class="text-center block-mb-xs">
                          <h5>Apply for this position</h5>
                          <p>Please fill out the form and we will <br>contact you</p>
                        </div>
                        <div class="form-group">
                          <input name="name" type="text" class="form-control" required placeholder="Full name">
                        </div>
                        <div class="form-group">
                          <input name="email" type="email" class="form-control" required placeholder="Email address">
                        </div>
                        <div class="form-group">
                          <input name="phone" type="tel" class="form-control" required placeholder="Phone number" data-mask-phone>
                        </div>
                        <div class="form-group">
                          <input name="city" type="text" class="form-control" required placeholder="City">
                        </div>
                        <div class="form-group select-wrap">
                          <select size name="state" class="form-control" required placeholder="State">
                            <option value="">State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <input name="zip" type="tel" class="form-control" required placeholder="Zip" data-mask-zip>
                        </div>
                        <div class="form-group fg-file text-center">
                          <div class="fg-file-wrap">
                            <div class="file-input-wrap">
                              <input type="hidden" name="MAX_FILE_SIZE" value="31457280">
                              <input type="file" class="file-input" name="file" id="file-resume">
                              <label class="fg-file-label" for="file-resume">
                                <span class="fg-file-label-content text-color-darkblue">Attach resume<svg class="icon icon-paperclip"><use xlink:href="css/fonts/icons.svg#paperclip"></use></svg><br><span class="fg-file-label-additional">(.doc, .docx or .pdf)</span></span>
                              </label>
                            </div>
                            <span class="fg-file-name"><span></span></span>
                          </div>
                        </div>
                        <input name="job" type="hidden" value="{$job}">
                        <div class="form-group fg-btn text-center">
                          <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
                        </div>
                      </form>
                    </div>
EOD;

    return $markup;
  }
}
?>