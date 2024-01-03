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
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '1');
    
    $this->display_head($head_data);
    $this->display_title($head_data);
    //$this->display_messages($messages);
  }
  
  public function display_head($head_data) {
    $title = (array_key_exists('title', $head_data)) ? $head_data['title'] : "";
    $meta_desc = (array_key_exists('meta_desc', $head_data)) ? '<meta name="description" content="'.$head_data['meta_desc'].'">' : "";
    $meta_keys = (array_key_exists('meta_keys', $head_data)) ? '<meta name="keywords" content="'.$head_data['meta_keys'].'">' : "";
    $meta_og_title = (array_key_exists('meta_og', $head_data) && array_key_exists('title', $head_data['meta_og'])) ? $head_data['meta_og']['title'] : $title;
    $meta_og_desc = (array_key_exists('meta_og', $head_data) && array_key_exists('desc', $head_data['meta_og'])) ? $head_data['meta_og']['desc'] : ((strlen($meta_desc) > 0) ? $head_data['meta_desc'] : "");
    $meta_og_url = (array_key_exists('meta_og', $head_data) && array_key_exists('url', $head_data['meta_og'])) ? $head_data['meta_og']['url'] : $this->page_url;
    $meta_og_img = (array_key_exists('meta_og', $head_data) && array_key_exists('img', $head_data['meta_og'])) ? $head_data['meta_og']['img'] : $this->transfer_protocol . "://{$_SERVER['HTTP_HOST']}" . $this->site_root . "img/logo.png";
    $meta_og = <<<EOD
    
    <meta property="og:title" content="{$meta_og_title}">
    <meta property="og:description" content="{$meta_og_desc}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$meta_og_url}">
    <meta property="og:image" content="{$meta_og_img}">
EOD;
    $meta_tags = (array_key_exists('meta_tags', $head_data)) ? $head_data['meta_tags'] : "";

    $html_css = '';
    $head_css = '';
    
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
    <link rel="mask-icon" href="{$this->site_root}img/favicon/safari-pinned-tab.svg" color="#f2a332">
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{$this->site_root}img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#fdfdfd">
    <link rel="stylesheet" href="{$this->site_root}css/vendors.css">
    <link rel="stylesheet" href="{$this->site_root}css/main.css">
  </head>
EOD;
  }
  
  public function display_title($head_data) {

    $header_body_css = '';

    if($this->page == 'verify') {
      $header_body_css = ' header-body-short';
    }

    $current_page = $this->page == 'index' ? '' : $this->site_root;

    $data_hash = '';
    $data_no_clover = '';

    if($this->page == 'dejavoo-qd2' || $this->page == 'dejavoo-qd3') {
      $data_no_clover = ' data-noclover';
    }
    if($this->page == 'index') {
      $data_hash = ' data-hash';
    } 

    if (in_array($this->page, ['dejavoo-qd2', 'dejavoo-qd3', 'clover-flex', 'clover-mini', 'clover-station-duo'])) {
      $current_page = $this->page;
      $menu_items = <<<EOD
                        <li><a href="{$current_page}#section-benefits"{$data_hash}>Benefits</a></li>
                        <li><a href="{$current_page}#section-features"{$data_hash}>Features</a></li>
                        <li hidden><a href="#section-testimonials"{$data_hash}>Testimonials</a></li>
                        <li hidden><a href="#section-faq"{$data_hash}>Faqs</a></li>
                        EOD;
    } else {
      $menu_items = <<<EOD
                        <li><a href="{$current_page}#section-services"{$data_hash}>Our Services</a></li>
                        <li><a href="solutions">Our Solutions</a></li>
                        <li><a href="{$current_page}#section-about"{$data_hash}>About Us</a></li>
                        <li><a href="{$current_page}#become-partner"{$data_hash}>Become A Partner</a></li>
                      EOD; 
    }

    $header_block = <<<EOD

      <header id="header" class="header-01">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters{$header_body_css}">
            <div class="hb-logo col-auto d-flex align-items-center">
              <a href="{$this->site_root}"><img src="img/logo.svg" alt=""></a>
              <span class="logo-brand" {$data_no_clover}><a href="{$this->site_root}"><img src="img/logo-clover.svg" alt=""></a></span>
            </div>

            <div class="header-nav-wrap col-auto">
              <button class="header-btn-nav"><span></span></button>
              <div class="header-nav">
                <nav>
                  <ul class="hn-menu row align-items-center no-gutters">
                    {$menu_items}
                  </ul>
                </nav>
              </div>
            </div>
            
            <div class="hb-cta col-auto ml-auto align-self-stretch">
              <div class="hb-cta-wrap">
                <div class="hcw-item-additional d-flex align-items-center"><a href="quick-start" class="link-angle text-color-05">Get Started</a></div>
                <div class="hcw-item-main d-flex align-items-center"><a href="quick-start" class="btn btn-01">GET STARTED</a></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      EOD;

    if($this->page == 'thank-you') {
      $header_block = '';
    }

    echo <<<EOD

  <body>
    <div class="body">
      {$header_block}
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
  
  public function page_end($js = NULL) {
    $js_start = '';
    $js_end = '';
    if(is_array($js)) {
      if(array_key_exists('start', $js)) {
        $js_start .= $js['start'];
      }
      if(array_key_exists('end', $js)) {
        $js_end .= $js['end'];
      }
    }

      echo <<<EOD

        <footer id="footer">
          <div class="container">
            <div class="row flex-column align-items-center">
              <div class="footer-logo"><img src="img/logo-gray.svg" alt=""></div>
              <div class="footer-info">
                <p><a href="https://merchantservicespr.com/prcomply-license-agreement">License Agreement</a> &nbsp;•&nbsp; <a href="https://merchantservicespr.com/privacy-policy">Privacy Policy</a></p>
                <p>Merchant Services LLC, is a registered ISO of Wells Fargo Bank, N.A., Concord, CA</p>
                <p>The Clover name and logo are owned by Clover Network, Inc. a wholly owned subsidiary of First Data corporation, and are registered or used in the U.S. and many foreign countries.</p>
              </div>
            </div>
          </div>
        </footer>
        </div>
        {$js_start}
        <script src="{$this->site_root}js/vendors.js"></script>
        <script src="{$this->site_root}js/main.js"></script>
        {$js_end}
      </body>
    </html>
    EOD;
  }
  
  public function conv_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
}
?>