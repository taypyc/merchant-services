<?php
class Markup02Contents {
  public function build_content($type, $settings) {
    $type_to_content = [
      'slider' => 'build_slider',
      'testimonials' => 'build_testimonials',
      'device_tiles' => 'build_device_tiles',
      'faq' => 'build_faq'
    ];

    return $this->{$type_to_content[$type]}($settings);
  }

  private function build_slider($settings) {
    $slides_source['index'] = <<<EOD

              <div class="swiper-slide" style="background-image: url('{$settings['assets_global']}img/markup-02/main-slide3.jpg')">
                <div class="container">
                  <div class="main-banner-text">
                    <h2 class="banner-title">
                      <span>Sign Up today</span>
                      <span>Get <strong>Clover Mini POS</strong></span>
                      <span>With <strong>0% processing</strong></span>
                    </h2>
                    <div class="main-banner-device-img main-banner-device-img-01" style="background-image: url({$settings['assets_global']}img/markup-02/main-slide2-r.png)"></div>
                    <ul>
                      <li>0% Processing fee $0 per swipe</li>
                      <li>Next day funding</li>
                      <li>No Upfront Costs</li>
                      <li>100% legal. Available in all 50 states</li>
                    </ul>
                    <div class="main-banner-cta"><a href="quick-start/clover-mini" class="button">Get Started</a></div>
                  </div>
                </div>
              </div>
EOD;

    $slides_source['clover-flex'] = <<<EOD

              <div class="swiper-slide" style="background-image: url('{$settings['assets_global']}img/markup-02/main-slide1.jpg')">
                <div class="container">
                  <div class="main-banner-text">
                    <h2 class="banner-title">
                      <span>Sign Up today</span>
                      <span>Get <strong>Clover Flex</strong></span>
                      <span>With <strong>0% processing</strong></span>
                    </h2>
                    <div class="main-banner-device-img main-banner-device-img-01" style="background-image: url({$settings['assets_global']}img/markup-02/main-slide1-r.png)"></div>
                    <ul>
                      <li>0% Processing fee $0 per swipe</li>
                      <li>Next day funding</li>
                      <li>No Upfront Costs</li>
                      <li>100% legal. Available in all 50 states</li>
                    </ul>

                    <div class="main-banner-cta"><a href="quick-start/clover-flex" class="button">Get Started</a></div>
                  </div>
                </div>
              </div>
EOD;

    $slides_source['clover-station'] = <<<EOD

              <div class="swiper-slide" style="background-image: url('{$settings['assets_global']}img/markup-02/main-slide2.jpg')">
                <div class="container">
                  <div class="main-banner-text">
                    <h2 class="banner-title">
                      <span>Sign Up today</span>
                      <span>Get <strong>Clover Station POS</strong></span>
                      <span>With <strong>0% processing</strong></span>
                    </h2>
                    <div class="main-banner-device-img main-banner-device-img-03" style="background-image: url({$settings['assets_global']}img/markup-02/main-slide3-r.png)"></div>
                    <ul>
                      <li>0% Processing fee $0 per swipe</li>
                      <li>Next day funding</li>
                      <li>No Upfront Costs</li>
                      <li>100% legal. Available in all 50 states</li>
                    </ul>

                    <div class="main-banner-cta"><a href="quick-start/clover-station" class="button">Get Started</a></div>
                  </div>
                </div>
              </div>
EOD;

    $slides_source['clover-station-pro'] = <<<EOD

              <div class="swiper-slide" style="background-image: url('{$settings['assets_global']}img/markup-02/main-slide-stationpro.jpg')">
                <div class="container">
                  <div class="main-banner-text">
                    <h2 class="banner-title">
                      <span><strong>Sign Up today</strong></span>
                      <span>Get Clover® Station Duo</span>
                      <span>With 0% processing plan</span>
                    </h2>
                    <div class="main-banner-device-img main-banner-device-img-02" style="background-image: url({$settings['assets_global']}img/markup-02/main-slide-stationpro-mobile.jpg"></div>
                    <ul>
                      <li>0% Processing fees $0 per Swipe/Dip/Tap</li>
                      <li>Next day funding</li>
                      <li>No Upfront Costs</li>
                      <li>24/7 Customer service</li>
                    </ul>

                    <div class="main-banner-cta"><a href="quick-start/clover-station-pro" class="button">Get Started</a></div>
                  </div>
                </div>
              </div>
EOD;

    $slides_source['additional-slide'] = <<<EOD

              <div class="swiper-slide" style="background-image: url('{$settings['assets_global']}img/markup-02/main-slide4.jpg')">
                <div class="container">
                  <div class="main-banner-text">
                    <h2 class="banner-title">
                      <span><strong>Clover POS included</strong></span>
                      <span>With your membership</span>
                      <span>starting from $49.<sup>99</sup></span>
                    </h2>
                    <div class="main-banner-device-img main-banner-device-img-02" style="background-image: url({$settings['assets_global']}img/markup-02/main-slide4-r.png)"></div>
                    <ul>
                      <li>Fixed monthly price</li>
                      <li>Keep 100% of your profits!</li>
                      <li>No fees, no gimmicks, no surprises</li>
                      <li>No Upfront Costs</li>
                    </ul>
                    <div class="main-banner-cta"><a href="quick-start" class="button">Get Started</a></div>
                  </div>
                </div>
              </div>
EOD;

    $slides[] = $slides_source[$settings['page']];
    $slides[] = $slides_source['additional-slide'];

    $slides_markup = implode('', $slides);

    return <<<EOD

        <div class="main-banner">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              {$slides_markup}
            </div>
            <div class="swiper-pagination">
              <div class="container"></div>
            </div>
          </div>
        </div>
EOD;
  }

  private function build_testimonials($settings) {
    return <<<EOD

        <section id="testimonials" class="testimonials">
          <div class="container">
            <div class="title36"><span>Happy clients</span> about us</div>
            <div class="testimonials-slider">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonials-item">
                      <div class="testimonials-head flex-v-center" style="background: linear-gradient(130.1deg, #f5f4ff 0%, #d1ecee 100%);">
                        <div class="image-wrap flex-v-center">
                          <img src="{$settings['assets_global']}img/markup-02/user1.jpg" alt="">
                        </div>
                        <div>
                          <div class="username">Molly McHugh</div>
                          <div class="workplace">Owner and manager, O`mallys Pub</div>
                        </div>
                      </div>
                      <p>We integrated the Slice Cash Discount Program a few months back, and the savings were phenomenal! It amounted to a few thousand dollars — money I can really use to put back into the businesses. And my customers really appreciate the cash discount. What a great idea. Cheers to Slice!</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-item">
                      <div class="testimonials-head flex-v-center" style="background: linear-gradient(130.1deg, #f8fff4 0%, #eee1d1 100%);">
                        <div class="image-wrap flex-v-center">
                          <img src="{$settings['assets_global']}img/markup-02/user2.jpg" alt="">
                        </div>
                        <div>
                          <div class="username">Jodi Elliott</div>
                          <div class="workplace">Owner, Elliot’s Slaughter House</div>
                        </div>
                      </div>
                      <p>Morris Katsap has been the best person that we've have ever dealt with with our credit card contracts. <br>This company is by far the best to use!!
                      </p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-item">
                      <div class="testimonials-head flex-v-center" style="background: linear-gradient(130.1deg, #fff9f4 0%, #efd1ee 100%);">
                        <div class="image-wrap flex-v-center">
                          <img src="{$settings['assets_global']}img/markup-02/user3.jpg" alt="">
                        </div>
                        <div>
                          <div class="username">Juliya Denning</div>
                          <div class="workplace">Owner</div>
                        </div>
                      </div>
                      <p>The staff at Slice has proven to be very professional and knowledgeable. <br>The rates I received were quite competitive. Great company, really enjoy doing business with them.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-item">
                      <div class="testimonials-head flex-v-center" style="background: linear-gradient(130.1deg, #fff9f4 0%, #efd1ee 100%);">
                        <div class="image-wrap flex-v-center">
                          <img src="{$settings['assets_global']}img/markup-02/user4.jpg" alt="">
                        </div>
                        <div>
                          <div class="username">Charles Muz</div>
                          <div class="workplace">Owner, Ferraros Pizza</div>
                        </div>
                      </div>
                      <p>We highly recommend the Slice Cash Discount Program. <br>Its saved us a ton over the last 24 months. <br>The staff is very friendly and professional. <br>We recommend giving this company a try.</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-item">
                      <div class="testimonials-head flex-v-center" style="background: linear-gradient(130.1deg, #fff9f4 0%, #efd1ee 100%);">
                        <div class="image-wrap flex-v-center">
                          <img src="{$settings['assets_global']}img/markup-02/user5.jpg" alt="">
                        </div>
                        <div>
                          <div class="username">Manu Achu</div>
                          <div class="workplace">Owner, EE & A tire shop</div>
                        </div>
                      </div>
                      <p>We are very happy we made the switch to the Slice Cash Discount Program. <br>The staff is very professional and always willing to help us. <br>Overall great company. Highly Recommended!</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </section>
EOD;
  }

  private function build_device_tiles($settings) {
    $sih = $settings['services_info_helper'];

    $pricing_mini = '<span><span class="product-price-old">$' . $sih->get_service_price_old('clover-mini') . '/mo</span> $' . $sih->get_service_price_params('clover-mini','current','dollars') . '<sup>.' . $sih->get_service_price_params('clover-mini','current','cents') . '/mo</sup></span>';

    $pricing_flex = '<span><span class="product-price-old">$' . $sih->get_service_price_old('clover-flex') . '/mo</span> $' . $sih->get_service_price_params('clover-flex','current','dollars') . '<sup>.' . $sih->get_service_price_params('clover-flex','current','cents') . '/mo</sup></span>';

    $pricing_station = '<span><span class="product-price-old">$' . $sih->get_service_price_old('clover-station') . '/mo</span> $' . $sih->get_service_price_params('clover-station','current','dollars') . '<sup>.' . $sih->get_service_price_params('clover-station','current','cents') . '/mo</sup></span>';

    $pricing_station_pro = '<span><span class="product-price-old">$' . $sih->get_service_price_old('clover-station-pro') . '/mo</span> $' . $sih->get_service_price_params('clover-station-pro','current','dollars') . '<sup>.' . $sih->get_service_price_params('clover-station-pro','current','cents') . '/mo</sup></span>';


    $tiles_source['index'] = <<<EOD

              <div class="product" style="background-image: url('{$settings['assets_global']}img/markup-02/product2.jpg');">
                <h5 class="product-name">{$sih->get_service_friendly_name('clover-mini')}</h5>
                <p>A complete point of sale in one compact package.</p>
                <div class="product-price flex-v-center">
                  {$pricing_mini}
                  <a href="{$settings['site_root']}" class="button button-ghost">Learn more</a>
                </div>
              </div>
EOD;

    $tiles_source['clover-station'] = <<<EOD

              <div class="product product-bg-pos-02" style="background-image: url('{$settings['assets_global']}img/markup-02/product3.jpg');">
                <h5 class="product-name">Clover Station</h5>
                <p>Your largest, fastest point of sale system. Ever.</p>
                <div class="product-price flex-v-center">
                  {$pricing_station}
                  <a href="clover-station" class="button button-ghost">Learn more</a>
                </div>
              </div>
EOD;

    $tiles_source['clover-station-pro'] = <<<EOD

              <div class="product product-bg-station" style="background-image: url('{$settings['assets_global']}img/markup-02/clover-station-pro-left.png');">
                <h5 class="product-name">Clover Station Duo</h5>
                <p>Modern payments. Fast and simple.</p>
                <div class="product-price flex-v-center">
                  {$pricing_station_pro}
                  <a href="clover-station-pro" class="button button-ghost">Learn more</a>
                </div>
              </div>
EOD;

    $tiles_source['clover-flex'] = <<<EOD

              <div class="product product-bg-pos-01" style="background-image: url('{$settings['assets_global']}img/markup-02/product.jpg');">
                <h5 class="product-name">Clover Flex</h5>
                <p>Modern payments. Fast and simple.</p>
                <div class="product-price flex-v-center">
                  {$pricing_flex}
                  <a href="clover-flex" class="button button-ghost">Learn more</a>
                </div>
              </div>
EOD;

    $tiles = [];
    foreach($tiles_source as $key => $tile) {
      if($key == $settings['page']) {
        continue;
      }

      $tiles[$key] = $tile;
    }
    $tiles_markup = implode('', $tiles);

    return <<<EOD

        <section class="other-systems">
          <div class="container">
            <div class="title36">Shop other <span>clover systems</span></div>
            <div class="products">
              {$tiles_markup}              
            </div>
          </div>
        </section>
EOD;
  }

  private function build_faq($settings) {
    return <<<EOD

        <section id="faq" class="faq">
          <div class="container">
            <div class="title36">Frequently asked questions</div>
            <div class="collapse-info-wrap block-maw-01">
              <div class="ciw-item">
                <div class="ciw-item-toggle">What is the Slice 0% Processing Program?</div>
                <div class="ciw-item-info"><p>A unique program developed to help merchants nationwide save virtually 100% on processing fees by offering their customers a discount for paying with Cash or in store gift cards.</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">What kind of businesses can use Slice?</div>
                <div class="ciw-item-info"><p>Just about any business that accepts credit cards can benefit from Slice. From auto repair shops and daycare centers to retail establishments and professionals like doctors, lawyers, dentists and accountants, Slice can put more money in your pocket every month — a lot of it!</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">What do I need to get started with Slice?</div>
                <div class="ciw-item-info"><p>This is the fun part. We’ll send you everything you need in one handy package. You’ll receive a payment terminal, along with signage for your front door and terminal area explaining the discount for cash-paying customers. You’ll also receive free training, as will your sales staff. You’ll also receive a great gift while supplies last.</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">OK, I really like the idea of Slice. What do I do now?</div>
                <div class="ciw-item-info"><p>It's easy! Just press <a href="quick-start">GET STARTED</a> button and fill out a simple form It only takes a couple of minutes! Business and Personal information is confidential and secure. Welcome to the Slice family of smart merchants who are saving money every day!</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">What if I don't like the Cash Discount Program?</div>
                <div class="ciw-item-info"><p>We have a 100% satisfaction guarantee. If for any reason you want to stop using Cash Discount Program, we will immediately change you back to traditional interchange pricing. We got you covered!</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">What are my customers going to say?</div>
                <div class="ciw-item-info"><p>Our merchants love this program and there has been virtually no negative impact from their customers.  Customers understand the high costs of  processing payments and opt in or use cash.</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">Who else is using the Cash Discount Program?</div>
                <div class="ciw-item-info"><p>Slice is new, yet thousands of merchants are already using Slice, and more are signing on every day. Gas stations have been using this program in the US for over 15 years. In addition, many national, state and local governments like the DMV, IRS, Post Offices, Schools and Courts use the cash discount program and new federal regulations now allow merchants to reclaim their fair share of processing fees. <a href="https://www.nerdwallet.com/blog/credit-cards/credit-card-charged-more-gas-station/" target="_blank">Read More</a></p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">Do I need to get a PhD to figure this out and set it up?</div>
                <div class="ciw-item-info"><p>Not at all. We’ve made Slice incredibly easy to order, set up and manage. If you have any questions, just give us a call and one of our super-smart (and very friendly) tech people we mentioned earlier will help you with any questions or concerns.</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">Is it legal to offer a Cash Discount?</div>
                <div class="ciw-item-info"><p>As stated in the Durbin Amendment §124.STAT.2073, 9b2, businesses are permitted to offer a discount to customers as an incentive and to encourage customers to pay by alternative methods other than a credit/debit cards including either checks or cash in order to automatically receive a discount which is applied at the time of sale.</p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">What will my receipt look like?</div>
                <div class="ciw-item-info"><p><img src="{$settings['assets_global']}img/slice-receipt.jpg" alt=""></p></div>
              </div>
              <div class="ciw-item">
                <div class="ciw-item-toggle">Is this the same as a surcharge?</div>
                <div class="ciw-item-info"><p>This is not a credit or debit card surcharge program which is not allowed in several states. Slice provides you with a technology that allows you to offer discounts to its customers who chose to pay using cash or check which is allowed in all states.</p></div>
              </div>
            </div>
          </div>
        </section>
EOD;
  }
}
?>