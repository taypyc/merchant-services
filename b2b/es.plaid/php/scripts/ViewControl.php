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

    $dapp_root = $_SERVER['DOCUMENT_ROOT'] . getenv('DAPP_ROOT');
    require_once $dapp_root . '/MarkupBuilder.php';
    $this->markup_builder = new MarkupBuilder(['flow' => getenv('DAPP_FLOW'), 'markup' => getenv('DAPP_MARKUP'), 'dapp_root' => $dapp_root]);
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
    $meta_og_img = (array_key_exists('meta_og', $head_data) && array_key_exists('img', $head_data['meta_og'])) ? $head_data['meta_og']['img'] : $this->transfer_protocol . "://{$_SERVER['HTTP_HOST']}" . $this->site_root . "img/logo-social.png";
    $meta_og = <<<EOD
    
    <meta property="og:title" content="{$meta_og_title}">
    <meta property="og:description" content="{$meta_og_desc}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$meta_og_url}">
    <meta property="og:image" content="{$meta_og_img}">
EOD;
    $meta_tags = (array_key_exists('meta_tags', $head_data)) ? $head_data['meta_tags'] : "";

    if($this->page == "thank-you") {}

    $header_assets = $this->markup_builder->include_header_assets();
    
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{$this->site_root}img/app.favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$this->site_root}img/app.favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$this->site_root}img/app.favicon/favicon-16x16.png">
    <link rel="manifest" href="{$this->site_root}img/app.favicon/site.webmanifest">
    <link rel="mask-icon" href="{$this->site_root}img/app.favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{$this->site_root}img/app.favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="{$this->site_root}img/app.favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    {$header_assets}
  </head>
EOD;
  }
  
  public function display_title($head_data) {

    $header_block = $this->markup_builder->build_header();

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
  
  public function page_end($footer_data = []) {
    $footer_js = '';

    $footer_dom = $this->markup_builder->build_footer();
    $footer_js = $this->markup_builder->include_footer_assets($footer_data);

    echo <<<EOD

      ${footer_dom}
    </div>
    {$footer_js}
  </body>
</html>
EOD;
  }
  
  public function conv_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
}
?>