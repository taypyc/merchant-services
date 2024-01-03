<?php
class ViewControl {
  // public $site_root = "/folder/www/";
  public $site_root;
  public $transfer_protocol;
  public $page_url;
  public $page;
  
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
    /*ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '1');*/
    
    $this->display_head($head_data);
    $this->display_title();
    //$this->display_messages($messages);
  }
  
  public function display_head($head_data) {
    $html_css = "";
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

    if($this->page == "thank-you") {
      $html_css = ' class="header-init"';
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
    <link rel="apple-touch-icon" sizes="180x180" href="{$this->site_root}img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$this->site_root}img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$this->site_root}img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{$this->site_root}img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{$this->site_root}img/favicon/safari-pinned-tab.svg" color="#033598">
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#daffff">
    <meta name="msapplication-config" content="{$this->site_root}img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#fafafa">

    <link rel="stylesheet" href="{$this->site_root}css/vendors.css">
    <link rel="stylesheet" href="{$this->site_root}css/main.css">
  </head>
EOD;
  }
  
  public function display_title() {

    $data_hash = "";
    $link_anchor = $this->site_root . "#";
    if($this->page == "index") {
      $data_hash = " data-hash";
      $link_anchor = "#";
    }

    echo <<<EOD

  <body>
    <div class="body">
      <header id="header">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters">
              <div class="hb-logo col-auto">
                <a href="{$this->site_root}"><img src="img/logo.svg" alt=""></a>
              </div>
              
              <div class="hb-phone col-auto">
                <a href="tel:8003706250"><svg class="icon icon-phone"><use xlink:href="css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">800-370-6250</span><span class="hbp-sm">Call now</span></a>
              </div>
              
              <div class="header-nav-wrap col-auto ml-auto">
                <button class="header-btn-nav"><span></span></button>
                <div class="header-nav">
                  <nav>
                    <ul class="hn-menu row align-items-center no-gutters">
                      <li><a href="{$link_anchor}services"{$data_hash}>Our Services</a></li>
                      <li><a href="{$link_anchor}about"{$data_hash}>About Us</a></li>
                      <li><a href="{$link_anchor}partners"{$data_hash}>Become a Partner</a></li>
                      <li><a href="{$link_anchor}contacts"{$data_hash}>Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
          </div>
        </div>
      </header>
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

    echo <<<EOD
      
      <footer id="footer">
        <div class="container">
          <div class="row align-items-center block-mb-sm">
            <div class="col-12 col-md-4 footer-logo"><a href="{$this->site_root}"><img src="img/logo-footer.svg" alt=""></a></div>
            <div class="col-12 col-md-8 footer-info"><p>Merchant Services. 2018 All Right Recerved<br> <a href="{$this->site_root}privacy-policy">Privacy Policy</a></p></div>
          </div>
          <div class="d-flex justify-content-center text-center">
            <p>Merchant Services LLC, is a registered ISO of Wells Fargo Bank, N.A., Concord, CA</p>
          </div>
        </div>
      </footer>
    </div>

    <div class="tile-form tile-form-03 mfp-hide popup-appear" id="contact-form">
      <form class="form-contact">
        <div class="form-contact-header">
          <h3>Apply now</h3>
          <p class="text-color-dark">Fill out the simple form or call us at <a href="tel:8003706250" class="text-nowrap">800-370-6250</a></p>
        </div>
        <div class="form-group-row row">
          <div class="col-12 col-sm-6">
            <input name="name" type="text" class="form-control" required placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6">
            <input name="business_name" type="text" class="form-control" required placeholder="Company name">
          </div>
        </div>
        <div class="form-group-row row">
          <div class="col-12 col-sm-6">
            <input name="email" type="email" class="form-control" required placeholder="Email">
          </div>
          <div class="col-12 col-sm-6">
            <input name="phone" type="tel" class="form-control" required placeholder="Phone number">
          </div>
        </div>
        <div class="row form-group-row fgr-btn text-center">
          <div class="col-12 col-sm-5">
            <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
          </div>
          <div class="col-12 col-sm-7">
            <p class="fgr-additional">Once submitted, your request will be reviewed and one of our specialists will contact you within 24 hours. We respect your privacy and do not share your information with third parties.</p>
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

  public function markup_cta_services() {
    $arr = array(
      'payment-services' => '
              <div class="col-12 col-md-4">
                <a href="payment-services" class="link-tile">
                  <span class="lt-img" style="background-image: url(img/tile-card-acceptance.jpg)"></span>
                  <span class="lt-info bg-blue">
                    <span class="h5">Payment Services</span>
                    <span class="lt-additional-info">Accept a wide array of payments anywhere anytime</span>
                    <span class="lt-cta"><svg class="icon icon-arrow"><use xlink:href="css/fonts/icons.svg#arrow"></use></svg></span>
                  </span>
                </a>
              </div>',
      'merchant-analytics' => '
              <div class="col-12 col-md-4">
                <a href="merchant-analytics" class="link-tile">
                  <span class="lt-img" style="background-image: url(img/tile-merchant-analytics.jpg)"></span>
                  <span class="lt-info bg-blue">
                    <span class="h5">Merchant Analytics</span>
                    <span class="lt-additional-info">Start tracking your daily sales in real time</span>
                    <span class="lt-cta"><svg class="icon icon-arrow"><use xlink:href="css/fonts/icons.svg#arrow"></use></svg></span>
                  </span>
                </a>
              </div>',
      'cash-discount-program' => '
              <div class="col-12 col-md-4">
                <a href="cash-discount-program" class="link-tile">
                  <span class="lt-img" style="background-image: url(img/tile-gift-loyalty-programs.jpg)"></span>
                  <span class="lt-info bg-blue">
                    <span class="h5">Cash Discount Program</span>
                    <span class="lt-additional-info">Building deeper customer relationships</span>
                    <span class="lt-cta"><svg class="icon icon-arrow"><use xlink:href="css/fonts/icons.svg#arrow"></use></svg></span>
                  </span>
                </a>
              </div>',
      'business-financing' => '
              <div class="col-12 col-md-4">
                <a href="business-financing" class="link-tile">
                  <span class="lt-img" style="background-image: url(img/tile-business-financing.jpg)"></span>
                  <span class="lt-info bg-blue">
                    <span class="h5">Business Financing</span>
                    <span class="lt-additional-info">Get Up to $500,000 to support your business growth</span>
                    <span class="lt-cta"><svg class="icon icon-arrow"><use xlink:href="css/fonts/icons.svg#arrow"></use></svg></span>
                  </span>
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

        <section>
          <div class="container">
            <div class="row row-03">
              {$tiles}
            </div>
          </div>
        </section>
EOD;

    return $cta;
  }
}
?>