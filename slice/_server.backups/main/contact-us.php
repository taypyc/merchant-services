<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Contact us | Slice"));
?>

      <div role="main" class="main">

        <section class="section-bg-decor section-bg-decor-02 block-pb-footer section-appear" id="section-appear">
          <div class="sbd-figure sbd-figure-02 sbd-figure-color-03"></div>
          <div class="sbd-content">
            <div class="container">
              <div class="block-header-center text-center block-text-light block-mb-md">
                <h1>Contact us</h1>
              </div>
              <div class="tile-content">
                <div class="row block-row-02">
                  <div class="col-12 col-lg-6 col-xl-7 block-indent-right">
                    <h2>Get in touch</h2>
                    <p>If you have any questions, please do not hesitate to contact us.</p>
                    <ul class="list-bold-inline">
                      <li><strong>Call us:</strong> <?php echo $view->i['mobile']; ?></li>
                      <li><strong>Email us:</strong> info@startslice.com</li>
                      <li><strong>Address:</strong> 101 Crawfords Corner Rd, Ste 4206, Holmdel, NJ 07733</li>
                    </ul>
                    <!-- <div class="tile-map-container">
                      <div class="tile-map-wrap">
                        <div class="tile-map">
                          <div id="map-container"></div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <div class="col-12 col-lg-6 col-xl-5 align-self-start">
                    <div class="tile-form tile-border-shadow-top">
                      <form class="form-feedback">
                        <div class="text-center block-mb-xs">
                          <h5>Leave us a message</h5>
                        </div>
                        <div class="form-group">
                          <input name="name" type="text" class="form-control" required placeholder="Full name">
                        </div>
                        <div class="form-group">
                          <input name="phone" type="tel" class="form-control" required placeholder="Phone number">
                        </div>
                        <div class="form-group">
                          <input name="email" type="email" class="form-control" required placeholder="Email">
                        </div>
                        <div class="form-group">
                          <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group fg-btn text-center">
                          <button type="submit" class="btn" data-loading-content="Processing…">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php echo $view->markup_scripts(); ?>
      </div>
      <!--<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBt9RJY0Sz8aMKwVp5Gwhu76SMWJzBsriE&language=en"></script>
      <script>
        if(document.getElementById("map-container") !== null) {
            var gmapStyle = [
              {
                "stylers": [
                  {
                    "saturation": "20"
                  },
                  {
                    "lightness": "-3"
                  },
                  {
                    "visibility": "on"
                  },
                  {
                    "weight": "1.18"
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "labels",
                "stylers": [
                  {
                    "color": "#625f70"
                  },
                  {
                    "visibility": "simplified"
                  }
                ]
              },
              {
                "featureType": "landscape",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "landscape.man_made",
                "stylers": [
                  {
                    "saturation": -70
                  },
                  {
                    "lightness": 15
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "labels.text",
                "stylers": [
                  {
                    "color": "#625f70"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text",
                "stylers": [
                  {
                    "color": "#625f70"
                  },
                  {
                    "visibility": "simplified"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "stylers": [
                  {
                    "color": "#cbcad2"
                  },
                  {
                    "saturation": -10
                  },
                  {
                    "lightness": -5
                  },
                  {
                    "visibility": "simplified"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#cdcdcd"
                  },
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text",
                "stylers": [
                  {
                    "color": "#625f70"
                  },
                  {
                    "visibility": "simplified"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [
                  {
                    "color": "#625f70"
                  },
                  {
                    "visibility": "simplified"
                  }
                ]
              },
              {
                "featureType": "transit",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "simplified"
                  }
                ]
              },
              {
                "featureType": "water",
                "stylers": [
                  {
                    "saturation": "-50"
                  },
                  {
                    "lightness": "-5"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                  {
                    "lightness": "12"
                  },
                  {
                    "visibility": "off"
                  }
                ]
              }
            ];

            function init_map() {
              var winW = window.innerWidth,
                  centerCoords = [40.7515788,-73.988505],
                  mapZoom = 12;

              var mapCenter = new google.maps.LatLng(centerCoords[0],centerCoords[1]);
                
              var mapOptions = {
                center: mapCenter,
                zoom: mapZoom,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: gmapStyle,
                mapTypeControl: false,
                streetViewControl: false
              };
              
              var map = new google.maps.Map(document.getElementById('map-container'), mapOptions);

              var image = {
                url: 'img/map-pin.svg',
                scaledSize: new google.maps.Size(45, 60),
                anchor: new google.maps.Point(22, 60),
              };

              var mapData = {
                infoWindows: [
                  new google.maps.InfoWindow({
                    content: '<div class="map-container-infowindow"><div class="mci-header">Our office:</div>132 W 36th St, New York, NY 10018</div>'
                  })
                ],
                markers: [
                  new google.maps.Marker({
                    position: new google.maps.LatLng(40.7515788,-73.988505),
                    title: 'Our office: 132 W 36th St, New York, NY 10018',
                    icon: image
                  })
                ],
              };

              mapData.markers.forEach(function(cur, i, a) {
                cur.setMap(map);
                cur.addListener('click', function() {
                  if(mapData.infoWindows[i]) mapData.infoWindows[i].close();
                  mapData.infoWindows[i].open(map, cur);
                });
              });
            }
            google.maps.event.addDomListener(window, 'load', init_map);
        }
      </script>-->
<?php
$view->page_end();
?>