<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
          <section class="testimonials-page">
              <div class="container">
                  <div class="text-center testimonials-page-header">
                      <h2>Testimonios</h2>
                      <h6 class="text-color-blue">¡Conoce a nuestros comerciantes!</h6>
                      <p>Conoce las historias de éxito de varios dueños de negocios, la facilidad con la que obtuvieron su préstamo comercial y cómo utilizaron los fondos para impulsar su negocio.</p>
                  </div>
                  <div class="testimonials-page-current-video" id="testimonials-page-current-video">
                      <iframe class="active" width="1100" height="731" src="//www.youtube.com/embed/yGRR3PLx05A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <iframe width="1100" height="731" src="//www.youtube.com/embed/-pPTXGYLix4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <iframe width="1100" height="731" src="//www.youtube.com/embed/1W23tTT3Jrc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <iframe width="1100" height="731" src="//www.youtube.com/embed/8_003Kk1WDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <iframe width="1100" height="731" src="//www.youtube.com/embed/VKu4Lo7M18k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="row">
                          <div class="col-12 col-md-6">
                              <div class="testimonials-page-current-video-name">Joan Jonson</div>
                              <div class="testimonials-page-current-video-title">Joe Chas Moving and Delivery</div>
                          </div>
                          <div class="col-12 col-md-6 text-md-right">
                              <div class="testimonials-page-current-video-time">
                                  2 days ago
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="testimonials-page-video">
                              <div class="testimonials-page-video-wrap active" data-id="0">
                                  <img src="//i.ytimg.com/vi/yGRR3PLx05A/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGF8gXyhfMA8=&rs=AOn4CLAnART0bjpB_XiUJqXCeD28JxFXDQ" width="1280" height="720" alt="" />
                              </div>
                              <div class="testimonials-page-video-wrap" data-id="1">
                                  <img src="//i.ytimg.com/vi/-pPTXGYLix4/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGEQgSyhlMA8=&rs=AOn4CLBmFviDWNPa2tlsuQqTXgwnowd5xQ" width="1280" height="720" alt="" />
                              </div>
                              <div class="testimonials-page-video-wrap" data-id="2">
                                  <img src="//i.ytimg.com/vi/1W23tTT3Jrc/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-DoACuAiKAgwIABABGGUgXChRMA8=&rs=AOn4CLBlRa4M8oT_a59WNxiRYVRN9kaxPA" width="1280" height="720" alt="" />
                              </div>
                              <div class="testimonials-page-video-wrap" data-id="3">
                                  <img src="//i.ytimg.com/vi/8_003Kk1WDo/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgVihRMA8=&rs=AOn4CLC6W0mSQk4zLptpXLdA_qY-iTPoSg" width="1280" height="720" alt="" />
                              </div>
                              <div class="testimonials-page-video-wrap" data-id="4">
                                  <img src="//i.ytimg.com/vi/VKu4Lo7M18k/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgWyhPMA8=&rs=AOn4CLCccUGgLs6Zx54hqV26_vzpq1yg6w" width="1280" height="720" alt="" />
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                          <div class="reviews">
                              <div class="text-center reviews-head">
                                  <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/google-review.png" width="353" height="80" alt="" />
                              </div>
                              <div class="row">
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>El proceso fue tan rápido.</strong><br>Solicité y me financiaron en menos de 48 horas. Fue tan fácil.</p>
                                          <p>Megan T.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>¡Excelente servicio! ¡Lo recomendaría!</strong><br>Es difícil encontrar una empresa en estos días que valore a sus clientes y tenga un excelente servicio alcliente.</p>
                                          <p>Lisa K.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>Gran compañía</strong><br>Estoy muy contento con el adelanto en efectivo que recibí de esta empresa. El proceso fue muy rápido yfácil, y pude obtener el dinero que necesitaba en muy poco tiempo.</p>
                                          <p>Nick J.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>Me encantó trabajar con Rolando, un verdadero profesional....</strong><br>Es un placer agradecerle a usted y a su empresa por apoyarnos con este adelanto en efectivo en línea.¡Recomiendo encarecidamente utilizar sus servicios!</p>
                                          <p>Samantha I.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>Volveré para una renovación.</strong><br>Me brindaron la mejor solución para mi situación financiera. Agradezco su dedicación y conocimiento.</p>
                                          <p>Margarita G.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>The entire team was courteous ...</strong><br>The entire team was courteous
                                              and on point. Thank you!</p>
                                          <p>Greg L.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>Tan simple de aplicar</strong><br>Muchas otras empresas afirman que su proceso de solicitud es fácil, cuando en realidad B2B fue la únicaque cumplió su palabra. Pude presentar mi solicitud rápida y fácilmente y un representante muy servicialse acercó a mí y pudimos obtener mi aprobación y financiación. Gracias B2B.</p>
                                          <p>Casandra K.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>¡Están ahí cuando más los necesitas!</strong><br>Realmente aprecio a B2B por brindarme un adelanto en efectivo cuando necesitaba comprar másinventario para mi restaurante. Se acercaba el Día de las Madres y nuestros fondos estaban bajos.Solicité un adelanto en efectivo y B2B me aprobó y financió muy rápido. ¡Muy recomendable!</p>
                                          <p>Juan l.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>Increíble servicio al cliente</strong><br>Siempre hay alguien listo para atenderme por teléfono cada vez que me comunico con el servicio alcliente de B2B. Siempre son muy amables y hacen todo lo posible para responder cualquier preguntaque les hago. Me alegra haber elegido B2B como mi compañía de capital de trabajo.</p>
                                          <p>Alejandra M.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>¡B2B es mi destino!</strong><br>He estado usando B2B para obtener capital de trabajo un par de veces. Su proceso es muy fácil ysiempre me avisan cuando soy elegible para la renovación. ¡Gran compañía!</p>
                                          <p>Pablo F.</p>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6 col-md-3">
                                      <div class="review">
                                          <div class="row review-head">
                                              <div class="col-12 col-lg-6">
                                                  <div class="review-stars">
                                                      <div style="width: 100%"></div>
                                                  </div>
                                              </div>
                                              <div class="col-12 col-lg-6 text-lg-right">
                                                  3 hours ago
                                              </div>
                                          </div>
                                          <p><strong>Todo el equipo fue muy agradable...</strong><br>Todo el equipo fue cortés y puntual. ¡Gracias!</p>
                                          <p>Greg l</p>
                                      </div>
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
