<?php
class ViewControl {
  public $site_root;
  public $page;
  
  public function __construct() {
    $this->site_root = getenv('SLICE_SITE_ROOT');
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
    <link rel="apple-touch-icon" sizes="180x180" href="{$this->site_root}img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$this->site_root}img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$this->site_root}img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{$this->site_root}img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{$this->site_root}img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="{$this->site_root}img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/theme.css">
    {$head_js}
  </head>
EOD;
  }
  
  public function display_title() {

    echo <<<EOD

  <body>
    <div class="body">
      <header id="header">
        <div class="header-body">
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column hc-logo">
                <a href="{$this->site_root}"><img alt="" src="img/logo-light.svg"></a>
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
            <p>101 Crawfords Corner Rd Suite 4131, Holmdel, NJ 07733</p>
          </div>
          <div class="row">
            <div class="col-xs-8 footer-info">
              <a href="{$this->site_root}"><img src="img/logo-light.svg" alt=""></a>
              <span>© Copyright 2017</span>
              <span><a href="https://www.facebook.com/startslice/" target="_blank"><i class="fa fa-facebook"></i></a></span>
            </div>
            <div class="col-xs-4 footer-links">
              <ul>
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
  </body>
</html>
EOD;
  }
  
}
?>