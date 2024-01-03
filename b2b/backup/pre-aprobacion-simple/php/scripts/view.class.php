<?php
class ViewControl {
  public $site_root;
  public $page;
  
  public function __construct() {
    $this->site_root = getenv('SITE_ROOT');
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
  }
  
  public function page_start($head_data = NULL) {
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '1');
    
    $this->display_head($head_data);
    $this->display_title();
  }
  
  public function display_head($head_data = NULL) {
    $html_css = "";
    $title = (array_key_exists('title', $head_data)) ? $head_data['title'] : "";
    $meta_desc = (array_key_exists('meta_desc', $head_data)) ? $head_data['meta_desc'] : "";
    $meta_keys = (array_key_exists('meta_keys', $head_data)) ? '<meta name="keywords" content="'.$head_data['meta_keys'].'">' : "";
    $meta_og_title = (array_key_exists('meta_og', $head_data) && array_key_exists('title', $head_data['meta_og'])) ? $head_data['meta_og']['title'] : $title;
    $meta_og_desc = (array_key_exists('meta_og', $head_data) && array_key_exists('desc', $head_data['meta_og'])) ? $head_data['meta_og']['desc'] : $meta_desc;
    $meta_og_url = (array_key_exists('meta_og', $head_data) && array_key_exists('url', $head_data['meta_og'])) ? $head_data['meta_og']['url'] : "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $meta_og_img = (array_key_exists('meta_og', $head_data) && array_key_exists('img', $head_data['meta_og'])) ? $head_data['meta_og']['img'] : "http://{$_SERVER['HTTP_HOST']}/img/logo.png";
    $meta_og = <<<EOD
    
    <meta property="og:title" content="{$meta_og_title}">
    <meta property="og:description" content="{$meta_og_desc}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$meta_og_url}">
    <meta property="og:image" content="{$meta_og_img}">
EOD;
    $meta_tags = (array_key_exists('meta_tags', $head_data)) ? $head_data['meta_tags'] : "";

    $head_js = <<<EOD
EOD;

    if($this->page == "thank-you") {
      $html_css = ' class="short-page"';

      $head_js .= <<<EOD
EOD;
    }
    
    echo <<<EOD
<!DOCTYPE html>
<html{$html_css}>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <base href="{$this->site_root}">
    <title>{$title}</title>  
    <meta name="description" content="{$meta_desc}">
    {$meta_keys}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="x-rim-auto-match" http-equiv="x-rim-auto-match" forua="true" content="none">
    {$meta_og}
    {$meta_tags}    
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/theme.css">
    {$head_js}
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZNNBR2');</script>
    <!-- End Google Tag Manager -->
  </head>
EOD;
  }
  
  public function display_title() {

    echo <<<EOD

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZNNBR2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="body">
      <header id="header">
        <div class="header-body">
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column hc-logo">
                <a href="{$this->site_root}"><img alt="" src="img/logo.png"><img alt="" src="img/logo-short.png"></a>
              </div>
              <div class="header-column hc-social">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="header-column hc-phone">
                <span>CONTACTÉNOS</span>
                <a href="tel:8003088851"><span class="hcp-lg">800-308-8851</span><span class="hcp-sm">Llámanos ahora</span></a>
              </div>              
            </div>
          </div>
        </div>
      </header>
EOD;
  }
  
  public function page_end() {
  
    $footer_js = "";
    
    if($this->page == "thank-you") {
      $footer_js .= <<<EOD
EOD;
    }

    echo <<<EOD

      <footer id="footer">
        <div class="container">
          <div class="footer-top-info">
            <p>Miramar Plaza Building, 954 Avenida Ponce de León, Suite 601, San Juan PR 00907</p>
          </div>
          <div class="row">
            <div class="col-xs-8 footer-info">
              <a href="{$this->site_root}"><img src="img/logo.png" alt=""></a>
              <span>© Copyright 2017</span>
              <span><a href="https://www.facebook.com/pg/b2bfundingpuertorico/about/" target="_blank"><i class="fa fa-facebook"></i></a></span>
            </div>
            <div class="col-xs-4 footer-links">
              <ul>
                <li><a href="privacy-policy.php">Política de privacidad</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.js"></script>
    <script src="vendor/jquery.validation/jquery.validation.js"></script>
    <script src="vendor/bowser/bowser.min.js"></script>
    <script src="vendor/masked.input/jquery.mask.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/theme.js"></script>
    {$footer_js}
  </body>
</html>
EOD;
  }
  
}
?>