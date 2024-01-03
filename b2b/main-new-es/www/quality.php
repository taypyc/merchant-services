<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
          <section class="quality">
              <div class="container">
                  <div class="quality-header">
                      <h2 class="text-center">¿Mi <span class="text-color-blue">negocio</span> califica?</h2>
                      <p class="text-center">Nuestros requisitos de financiación son simples y directos. <br>
                          Deberás cumplir con los siguientes criterios mínimos:</p>
                  </div>
                  <div class="row align-items-center">
                      <div class="col-12 col-lg-4 with-arrow">
                        <h4>¡Esto es lo que <br class="d-none d-lg-block">
                            necesito para <br class="d-none d-lg-block">
                            empezar!</h4>
                          <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                      </div>
                      <div class="col-lg-2 d-none d-lg-block"></div>
                      <div class="col-12 col-lg-6 items">
                          <div class="row align-items-center">
                              <div class="col-12 col-lg-7 text-center text-lg-left">
                                  <h6>Propiedad</h6>
                                  <p>Debes ser dueño de un negocio</p>
                                  <p></p>
                              </div>
                              <div class="col-12 col-lg-5 text-center text-lg-right">
                                <span class="account-icon"></span>
                              </div>
                          </div>
                          <div class="row align-items-center">
                              <div class="col-12 col-lg-7 text-center text-lg-left">
                                  <h6>Tiempo en el negocio</h6>
                                  <p>El negocio debe estar operando al menos 4 meses</p>
                                  <p></p>
                              </div>
                              <div class="col-12 col-lg-5 text-center text-lg-right">
                                  <div class="large">
                                      4+
                                  </div>
                              </div>
                          </div>
                          <div class="row align-items-center">
                              <div class="col-12 col-lg-7 text-center text-lg-left">
                                  <h6>Time in business</h6>
                                  <p>Debes depositar un mínimo de $7,000 mensuales en una cuenta de banco comercial</p>
                                  <p></p>
                              </div>
                              <div class="col-12 col-lg-5 text-center text-lg-right">
                                  <div class="big">
                                      $10K
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>

<?php
$view->page_end();
?>
