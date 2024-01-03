<?php
class ViewControl {
  public $page;
  public $site_root = "/";
  
  public function __construct() {
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
  }
  
  public function page_start($head_data = NULL, $messages = NULL) {
    if(array_key_exists('headers', $head_data)) {
      if(array_key_exists('404', $head_data['headers']) && $head_data['headers']['404'] === true) {
        header('HTTP/1.1 404 Not Found');
      }
    }
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '1');
    
    $this->display_head($head_data);
    $this->display_title();
    //$this->display_messages($messages);
  }
  
  public function display_head($head_data) {
    $html_css = "";
    $title = (array_key_exists('title', $head_data)) ? $head_data['title'] : "";
    $meta_desc = (array_key_exists('meta_desc', $head_data)) ? $head_data['meta_desc'] : "";
    $meta_keys = (array_key_exists('meta_keys', $head_data)) ? '<meta name="keywords" content="'.$head_data['meta_keys'].'">' : "";
    $meta_og_title = (array_key_exists('meta_og', $head_data) && array_key_exists('title', $head_data['meta_og'])) ? $head_data['meta_og']['title'] : $title;
    $meta_og_desc = (array_key_exists('meta_og', $head_data) && array_key_exists('desc', $head_data['meta_og'])) ? $head_data['meta_og']['desc'] : $meta_desc;
    $meta_og_url = (array_key_exists('meta_og', $head_data) && array_key_exists('url', $head_data['meta_og'])) ? $head_data['meta_og']['url'] : "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $meta_og_img = (array_key_exists('meta_og', $head_data) && array_key_exists('img', $head_data['meta_og'])) ? $head_data['meta_og']['img'] : "http://{$_SERVER['HTTP_HOST']}/img/logo-dark.png";
    $meta_og = <<<EOD
    
    <meta property="og:title" content="{$meta_og_title}">
    <meta property="og:description" content="{$meta_og_desc}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$meta_og_url}">
    <meta property="og:image" content="{$meta_og_img}">
EOD;
    $meta_tags = (array_key_exists('meta_tags', $head_data)) ? $head_data['meta_tags'] : "";

    if($this->page == "contact-us" || $this->page == "advance-services" || $this->page == "white-label-program") {
      $html_css = ' class="light-menu"';
    }
    if($this->page == "get-started" || $this->page == "thank-you") {
      $html_css = ' class="short-page"';
    }
    
    echo <<<EOD
<!DOCTYPE html>
<html{$html_css} lang="en">
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
    <link rel="icon" type="image/png" href="{$this->site_root}img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{$this->site_root}img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="{$this->site_root}img/favicon/manifest.json">
    <link rel="mask-icon" href="{$this->site_root}img/favicon/safari-pinned-tab.svg" color="#0066ff">
    <link rel="shortcut icon" href="{$this->site_root}img/favicon/favicon.ico">
    <meta name="msapplication-config" content="{$this->site_root}img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#fcfcfc">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/theme.css">
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
                <a href="{$this->site_root}"><img alt="Merchant Advance" src="img/logo.png"><img alt="Merchant Advance" class="hcl-fixed" src="img/logo-dark.png"></a>
              </div>
              
              <div class="header-column header-nav-wrap">
                <button class="header-btn-nav"><span></span></button>
                <div class="header-nav">
                  <nav>
                    <ul class="nav navbar-nav menu-nav">
                      <li><a href="white-label-program">White label program</a></li>
                      <li><a href="advance-services">Advance Services</a></li>
                      <li><a href="contact-us">Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
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
      $sm = (!is_null($messages) && array_key_exists('success_message', $messages)) ? $messages['success_message'] : $success_message;
      $this->display_message($sm, "alert-success");
    }
    
    if ((!is_null($messages) && array_key_exists('error_message', $messages) && strlen($messages['error_message']) > 0) || $error_message) {
      $em = (!is_null($messages) && array_key_exists('error_message', $messages)) ? $messages['error_message'] : $error_message;
      $this->display_message($em, "alert-danger");
    }
  }

  public function display_message($msg, $msg_type) {
    $msg = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
    echo "<div class='message-block'><div class='alert {$msg_type}'><div class='pm-txt-wrap'>{$msg}<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button></div></div></div>";
  }
  
  public function page_end($page_js = "") {
  
    $footer_js = "";
    $footer_js .= $page_js;

    $date_year = date("Y");

    echo <<<EOD

      <footer id="footer">
        <div class="container">
          <div class="footer-info">
            <div class="fi-logo"><a href="/"><img alt="Merchant Advance" src="img/logo-dark.png"></a></div>
            <div>Copyright 2017 - {$date_year}. All Right Reserved.</div>
          </div>
          <div style="margin-top: 10px;"><p>101 Crawfords Corner Rd Suite 4206, Holmdel, NJ 07733</p></div>
        </div>
      </footer>
    </div>

    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    
    <script src="vendor/jquery.appear/jquery.appear.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.js"></script>
    <script src="vendor/jquery.validation/jquery.validation.js"></script>
    <script src="vendor/masked.input/jquery.mask.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <script src="js/theme.js"></script>
    {$footer_js}
  </body>
</html>
EOD;
  }
  
  public function steps_cta() {
    return <<<EOD
    
        <section class="bg-gradient-blue">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-5">
                <h3>Two easy steps to <br>
                Expand your business</h3>
              </div>
              <div class="col-md-6 col-sm-7">
                <div class="row bni-wrap">
                  <div class="col-xs-6">
                    <div class="big-num-info">
                      <span class="bni-num">01</span>
                      <h5>Contact us</h5>
                      <p>Submit our simple online form and we’ll get back to you quickly.	 We’ll reach out to you to understand your business and what type of programs fit you better.</p>
                      <a href="contact-us" class="link-angle la-uc">Contact us<span></span></a>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="big-num-info">
                      <span class="bni-num">02</span>
                      <h5>Grow with us</h5>
                      <p>Grow your business using our end-to-end solutions, while being in the forefront with the merchant. </p>
                      <a href="get-started" class="btn btn-transparent">Get Started Now<span></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
EOD;
  }
  
  public function contact_section($type = NULL) {
    $form_wrap_css = "";
    $form_header = <<<EOD

                <h2 class="mb-sm">Have questions?</h2>
                <p class="sub-header">If you have any questions about our program, <br>please do not hesitate to contact us.</p>
EOD;

    if($type == "get-started") {
      $form_wrap_css = " sc-short";
      $form_header = "";
    }
    
    return <<<EOD

        <section class="section-form{$form_wrap_css}">
          <div class="container">
            {$form_header}
            <form class="contact-form cf-center">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
              
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
              
              <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name="company" placeholder="Company Name">
              </div>
              
              <div class="form-group">
                <select class="form-control select-item" name="business_years" style="width:100%;" data-select-placeholder="Years in business">
                  <option value="">Years in business</option>
                  <option value="1-3 years">1-3 years</option>
                  <option value="3-5 years">3-5 years</option>
                  <option value="5-7 years">5-7 years</option>
                  <option value="7+ years">7+ years</option>
                </select>
              </div>
              
              <div class="form-group">
                <textarea class="form-control" name="comments" placeholder="Comments"></textarea>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn" data-loading-text="Processing…">Submit Information</button>
              </div>
            </form>
          </div>
        </section>
EOD;
  }
}
?>