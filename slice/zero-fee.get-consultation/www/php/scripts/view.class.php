<?php
class ViewControl {
  public $site_root;
  public $transfer_protocol;
  public $page_url;
  public $page;
  public $markup_builder;
  
  public function __construct() {
    $this->site_root = getenv('SITE_ROOT');
    $this->transfer_protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
    $this->page_url = $this->transfer_protocol . "://{$_SERVER['HTTP_HOST']}" . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    $this->page = basename($_SERVER['PHP_SELF'], ".php");

    $dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/' . getenv('DAPP_VER');
    require_once $dapp_root . '/markup_builder.class.php';
    $this->markup_builder = new MarkupBuilder(['flow' => getenv('DAPP_FLOW'), 'markup' => getenv('DAPP_MARKUP'), 'root' => $dapp_root]);
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
    $html_css = "";
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

    if($this->page == "thank-you") {}
    
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
    <link rel="mask-icon" href="{$this->site_root}img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="{$this->site_root}img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
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

    if($this->page == 'index' || $this->page == 'privacy-policy' || $this->page == 'terms-of-use') {
      $header_block = <<<EOD

      <header id="header" class="header-01">
        <div class="header-container container">
          <div class="header-body row align-items-center no-gutters{$header_body_css}">
            <div class="hb-logo col-auto">
              <a href="{$this->site_root}"><img src="img/logo-01.svg" alt=""></a>
            </div>
            
            <div class="hb-cta col-auto ml-auto align-self-stretch">
              <div class="hb-cta-wrap">
                <div class="hcw-item-additional d-flex align-items-center"><a href="quick-start" class="link-angle text-color-05">Get Started</a></div>
                <div class="hcw-item-main d-flex align-items-center"><a href="quick-start" class="btn btn-rounded btn-rounded-02">GET STARTED</a></div>
              </div>
            </div>
          </div>
        </div>
      </header>
EOD;
    } else {
      $header_settings = ['header_body_css' => $header_body_css];
      $header_block = $this->markup_builder->build_header_signup($header_settings);
    }

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
  
  public function page_end($page_js = "") {
  
    $footer_css = '';
    $footer_js = '';
    $footer_last_js = '';
    $date_year = date("Y");

    if($this->page == 'index' || $this->page == 'quick-start' || $this->page == 'verify') {
      $footer_js .= <<<EOD
EOD;
    }

    if($this->page == 'index') {
      date_default_timezone_set('America/New_York');
      $week_day = date('w');
      $hours = date('G');
      $show_chat = false;

      if($week_day > 0 && $week_day <= 5) {
        if($hours > 8 && $hours < 17) {
          $show_chat = true;
        }
      }

      if($show_chat) {
        $footer_last_js .= <<<EOD

    <script>
      window.intercomSettings = {
        app_id: "kjthkeh0"
      };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/kjthkeh0';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
EOD;
      }
    }

    $footer_js .= $page_js;
    $footer_dom = '';

    if($this->page == 'quick-start' || $this->page == 'verify' || $this->page == 'thank-you') {
      $footer_css = ' class="footer-hidden"';
    }

    if($this->page == 'quick-start' || $this->page == 'verify') {
      $footer_dom = <<<EOD

      <div class="loader-wrap flex-column align-items-center justify-content-center">
        <div class="loader-elem">
          <div class="loader-elem-logo"><img src="img/logo-01.svg" alt=""></div>
          <div class="loader-elem-disc"><div class="led-processing"><div></div></div></div>
        </div>
        <p class="loading-description">
          <span>Checking your information.</span>
          <span>Please wait while we process <br>your request</span>
        </p>
      </div>
EOD;
    }

    echo <<<EOD

      ${footer_dom}
      <footer id="footer"{$footer_css}>
        <div class="container">
          <div class="row flex-column align-items-center">
            <div class="footer-logo"><img src="img/logo-01.svg" alt=""></div>
            <div class="footer-info">
              <p>Slice Business Marketing, Inc. is a registered ISO of Wells Fargo Bank, N.A., Concord, CA</p>
              <p>© Copyright 2018 - {$date_year} Slice. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="{$this->site_root}js/vendors.js"></script>
    <script src="{$this->site_root}js/main.js"></script>
    {$footer_js}
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WD6SJ49');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WD6SJ49"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Taboola Pixel Code -->
    <script type='text/javascript'>
      window._tfa = window._tfa || [];
      window._tfa.push({notify: 'event', name: 'page_view', id: 1351125});
      !function (t, f, a, x) {
             if (!document.getElementById(x)) {
                t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
             }
      }(document.createElement('script'),
      document.getElementsByTagName('script')[0],
      '//cdn.taboola.com/libtrc/unip/1351125/tfa.js',
      'tb_tfa_script');
    </script>
    <noscript>
      <img src='https://trc.taboola.com/1351125/log/3/unip?en=page_view'
          width='0' height='0' style='display:none' />
    </noscript>
    <!-- End of Taboola Pixel Code -->
    {$footer_last_js}
  </body>
</html>
EOD;
  }
  
  public function conv_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
}
?>