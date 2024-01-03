<?php
class ViewControl {
  public $page;
  public $site_root = "/fr/";
  
  public function __construct() {
    $this->page = basename($_SERVER['PHP_SELF'], ".php");
    
    $is_returned = (isset($_COOKIE["b2b_rv"]) && trim($_COOKIE["b2b_rv"]) == "true") ?  true : false;
    if(!$is_returned) {
      setcookie('b2b_rv', 'true', time()+(365*24*60*60), "/");
      if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $page_link = ($this->page == "index") ? "" : $this->page . ".php";
        if($lang == "en") {
          header("Location: https://b2bfunding.net/{$page_link}");
          exit();
        } else if($lang == "es") {
          header("Location: https://b2bfunding.net/es/{$page_link}");
          exit();
        }
      }
    }
  }
  
  public function page_start($title, $meta_desc = NULL, $meta_keys = NULL) {
    ini_set('zlib.output_compression', 'On');
    ini_set('zlib.output_compression_level', '1');
    
    $this->display_head($title, $meta_desc, $meta_keys);
    $this->display_title();
  }
  
  public function display_head($title, $meta_desc = NULL, $meta_keys = NULL) {
    $html_css = '';
    $head_js = '';

    if($this->page == "thank-you") {
      $html_css = ' class="cut-page"';
      $head_js = <<<EOD

    <!-- Event snippet for Thank you conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-780828836/EHYOCK6Uq5ABEKSBqvQC'}); </script>
EOD;
    }
    
    echo <<<EOD
<!DOCTYPE html>
<html{$html_css} lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <base href="{$this->site_root}">
    <title>{$title}</title>
    <meta name="keywords" content="{$meta_keys}">
    <meta name="description" content="{$meta_desc}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="x-rim-auto-match" http-equiv="x-rim-auto-match" forua="true" content="none">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:700,900|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/theme.css">
    <!-- Global site tag (gtag.js) - Google Ads: 780828836 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-780828836"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-780828836'); </script>
    {$head_js}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132707281-1"></script> -->
    <script>
      gtag('config', 'UA-132707281-1');
    </script>
  </head>
EOD;
  }
  
  public function display_title() {
    
    $logo_src = "img/logo.png";
    $index_link = "{$this->site_root}";
    $data_hash = "";
    $lang_page_link = ($this->page == "index") ? "" : $this->page . ".php";
    
    if($this->page == "index") {
      $index_link = "";
      $data_hash = " data-hash";
    } else if($this->page == "thank-you") {
      $logo_src = "img/logo-grey.png";
    }

    echo <<<EOD

  <body data-spy="scroll" data-target=".spy-nav-menu" data-offset="230">
    <div class="body">
      <header id="header">
        <div class="header-body">
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column hc-logo">
                <a href="{$this->site_root}">
                  <img alt="B2B Funding" width="220" height="35" src="{$logo_src}">
                </a>
              </div>
              
              <div class="header-column header-nav-wrap">
                <div class="lang-panel"><a href="https://b2bfunding.net/{$lang_page_link}">en</a><a href="https://b2bfunding.net/es/{$lang_page_link}">es</a><a href="https://b2bfunding.net/fr/{$lang_page_link}" class="lp-selected">fr</a></div>
                <button class="header-btn-nav">
                  <span></span>
                </button>
                <div class="header-nav">
                  <nav class="spy-nav-menu">
                    <ul class="nav navbar-nav menu-nav">
                      <li><a href="{$index_link}#our-process"{$data_hash}>Notre processus</a></li>
                      <li><a href="{$index_link}#qualify"{$data_hash}>Qualifiez-vous?</a></li>
                      <li><a href="{$index_link}#funding-programs"{$data_hash}>Programmes</a></li>
                      <li><a href="{$index_link}#about-us"{$data_hash}>À propos</a></li>
                      <li><a href="{$index_link}#contact-us"{$data_hash}>Pour nous joindre</a></li>
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
  
  function page_end() {
    
    $index_link = "{$this->site_root}";
    $data_hash = "";
    
    if($this->page == "index") {
      $index_link = "";
      $data_hash = " data-hash";
    }
  
    $footer_js = "";
    $date_year = date("Y");

    echo <<<EOD

      <footer id="footer">
        <div class="container">
          <div class="footer-info-wrap">
            <div class="fiw-menu">
              <ul class="fi-list">
                <li><a href="{$index_link}#our-process"{$data_hash}>Notre processus</a></li>
                <li><a href="{$index_link}#qualify"{$data_hash}>Qualifiez-vous?</a></li>
                <li><a href="{$index_link}#funding-programs"{$data_hash}>Programmes</a></li>
                <li><a href="{$index_link}#about-us"{$data_hash}>À propos</a></li>
                <li><a href="{$index_link}#contact-us"{$data_hash}>Pour nous joindre</a></li>
              </ul>
            </div>
            <div class="fwi-more">
              <div class="fiw-logo"><a href="{$this->site_root}"><img src="img/logo-grey.png" alt="B2B Funding"></a><span>© Copyright 2016 - {$date_year}. <br>Tous droits réservés.</span></div>
              <div class="fiw-links">
                <ul>
                  <li><a href="privacy-policy.php">Politique de vie privée</a></li>
                </ul>
              </div>
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
    <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="js/theme.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBYCb_rx52pLdE5R3oodU9rCvhKR9EtT64"></script>
    <script>
      $(function() {
        if($("#googlemaps").length) {
          var gmapGreyscaleStyle = [
            {
              "featureType": "landscape",
              "stylers": [
                {"saturation": -100},
                {"lightness": 0},
                {"visibility": "on"}
              ]
            },
            {
              "featureType": "poi",
              "stylers": [
                {"saturation": -100},
                {"lightness": 0},
                {"visibility": "simplified"}
              ]
            },
            {
              "featureType": "road.highway",
              "stylers": [
                {"saturation": -100},
                {"visibility": "simplified"}
              ]
            },
            {
              "featureType": "road.arterial",
              "stylers": [
                {"saturation": -100},
                {"lightness": 0},
                {"visibility": "on"}
              ]
            },
            {
              "featureType": "road.local",
              "stylers": [
                {"saturation": -100},
                {"lightness": 0},
                {"visibility": "on"}
              ]
            },
            {
              "featureType": "transit",
              "stylers": [
                {"saturation": -100},
                {"visibility": "simplified"}
              ]
            },
            {
              "featureType": "administrative.province",
              "stylers": [
                {"visibility": "off"}
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [
                {"visibility": "on"},
                {"lightness": -25},
                {"saturation": -100}
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {"hue": "#004cff"},
                {"lightness": -5},
                {"saturation": -55}
              ]
            }
          ]; // End of style array

          // Make your settings below 
          function init_map() {
            var mapCenter = new google.maps.LatLng(18.453811,-66.079878);
              
            var mapOptions = {
              center: mapCenter,
              zoom: 12,
              scrollwheel:false,
              draggable: true,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              styles: gmapGreyscaleStyle
            };
            
            var image = {
              url: 'img/marker-pin.png',
              anchor: new google.maps.Point(30, 55),
              scaledSize: new google.maps.Size(60, 55)
            };
            
            var m1Loc = new google.maps.LatLng(18.453811,-66.079878);
            var marker1 = new google.maps.Marker({
              position: m1Loc,
              icon: image,
              title: "Our office"
            });
            var marker1InfoWindow = new google.maps.InfoWindow({
              content: marker1.title
            });
              
            var map = new google.maps.Map(document.getElementById("googlemaps"), mapOptions);
            
            marker1.setMap(map);
            
            marker1.addListener('click', function() {
              if(marker1InfoWindow) marker1InfoWindow.close();
              marker1InfoWindow.open(map, marker1);
            });

          }
            
          google.maps.event.addDomListener(window, 'load', init_map);
        }
      });
		</script>
    
    <div style="height:0;overflow:hidden;visibility:hidden;">
    {$footer_js}
    </div>

  </body>
</html>
EOD;
  }
  
  public function show_form_tile() {
    
    $tile_css = ($this->page == "index") ? "" : " ft-bordered";
    
    echo <<<EOD

                <div class="form-tile{$tile_css}">
                  <h4>Obtenez une pré-approbation pour jusqu’à $500,000</h4>
                  <p>Veuillez remplir le formulaire ci-dessous</p>
                  <form class="contact-form">
                    <input type=hidden name="lang" value="fr">

                    <div class="form-group">
                      <input type="text" class="form-control" name="name" required>
                      <span class="m_placeholder">Nom complet</span>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" required maxlength="80">
                      <span class="m_placeholder">Courriel</span>
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" name="phone" required maxlength="40">
                      <span class="m_placeholder">Téléphone</span>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="company" required maxlength="40">
                      <span class="m_placeholder">Entreprise</span>
                    </div>
                    <input type="hidden" name="program" value="Not chosen">
                    <div class="form-group fg-mt">
                      <button type="submit" class="btn" data-loading-text="Processing…">Commencer maintenant</button>
                    </div>
                  </form>
                </div>

EOD;
  }
  
  public function show_contact_tile() {
    
    echo <<<EOD
    
        <section class="contacts-section" id="contact-us">
          <div class="container">
            <h2 class="header-small">Pour nous joindre</h2>
            <p class="sub-header">Contactez-nous</p>
            <div class="map-tile">
              <div class="row mt-contant">
                <div class="col-sm-6"><div id="googlemaps"></div></div>
                <div class="col-sm-6">
                  <div class="feedback-form-wrap">
                    <h5>Coordonnées</h5>
                    <ul class="icn-list">
                      <li><i class="material-icons">location_on</i>Miramar Plaza Building, 954 Avenida Ponce de León, Suite 601, San Juan PR 00907</li>
                      <li><i class="material-icons">mail_outline</i>support@b2bfunding.net</li>
                      <li><i class="material-icons">call</i>1-855-204-8487</li>
                    </ul>
                    <h5>Envoyez-nous un message</h5>
                    <form class="feedback-form">
                      <input type=hidden name="lang" value="fr">
                      
                      <div class="row">
                        <div class="col-xs-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" required>
                            <span class="m_placeholder">Nom</span>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" required maxlength="80">
                            <span class="m_placeholder">Courriel</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" required></textarea>
                        <span class="m_placeholder">Votre message</span>
                      </div>
                      <div class="form-group fg-mt">
                        <button type="submit" class="btn" data-loading-text="Processing…">Envoyer</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

EOD;
  }
  
}
?>