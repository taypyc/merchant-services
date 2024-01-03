<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
          <section class="about-us">
              <div class="container">
                  <h2 class="text-md-center">Sobre <span class="text-color-blue">nosotros</span></h2>
                  <div class="row align-items-center">
                      <div class="col-12 col-lg-6 content">
                          <h6 class="d-none d-lg-block"><strong>Nuestra filosofía</strong></h6>
                          <p>Aspiramos a proporcionarte las mejores alternativas de financiamiento basadas en el potencial y la fortaleza financiera de tu negocio. No nos importa si el banco te ha negado a proporcionarte asistencia financiera. Nos esforzamos constantemente por ofrecerte la experiencia más innovadora, sencilla y rápida.</p>
                      </div>
                      <div class="col-12 col-lg-6">
                          <div class="row">
                              <div class="col-1 d-lg-none"></div>
                              <div class="col-10 col-lg-12">
                                  <picture>
                                      <source media="(max-width: 992px)" srcset="<?php echo $view->markup_builder->markup->assets_global;?>img/main/about-1-mobile.png" sizes="(max-width: 991px) 341px" >
                                      <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/about-1.png" width="619" height="462" alt="Nuestra filosofía" />
                                  </picture>
                              </div>
                              <div class="col-1 d-lg-none"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row align-items-center">
                      <div class="d-none d-lg-block col-12 col-lg-6">
                          <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/about-2.png" width="650" height="537" alt="¿Por qué existimos?" />
                      </div>
                      <div class="col-12 col-lg-6">
                          <h6 class="d-none d-md-block"><strong>¿Por qué existimos?</strong></h6>
                          <p>Nuestra compañía está compuesta por algunos de los vendedores más inteligentes, enfocados,
                              y acertados en el mundo. Somos apasionados por los negocios, y sabemos cuánto trabajo se necesita para hacer que una empresa tenga éxito. Queremos ver más dueños de negocios lograr sus sueños, y queremos ver crecer al mundo de los negocios. Por eso estamos aquí para ayudar.</p>
                      </div>
                  </div>
              </div>
          </section>
      </div>

<?php
$view->page_end();
?>
