<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main">
        <section class="home-top-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 home-top-block-content">
                        <h1 class="mb-xl-5 text-center text-md-left">Fondos para negocios, <span class="text-color-blue">simple</span></h1>
                        <ul class="list mb-xl-5 pb-xl-5 ml-auto mr-auto ml-md-0 mr-md-0">
                            <li>
                                Pre-aprobación instantánea
                            </li>
                            <li>
                                Dinero depositado el mismo día
                            </li>
                            <li>
                                Fácil, seguro y confidencial
                            </li>
                        </ul>
                        <div class="home-top-block-links d-none d-md-block">
                            <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                            <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-1"></div>
                    <div class="col-12 col-md-5 text-center">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-1.png"
                             width="437"
                             height="580"
                             alt="Fondos para negocios, simple."
                             title="Fondos para negocios, simple."
                        />
                    </div>
                    <div class="home-top-block-links d-flex d-md-none ml-auto mr-auto">
                        <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                        <a href="tel:1-800-591-3327" class="phone-block order-first"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 d-none d-md-block">
                        <div class="row">
                            <div class="col-11">
                                <blockquote>
                                    <p>¡B2B Funding es una gran empresa con la que trabajar! Rolando entendió las necesidades de mi negocio y logró ayudarme rápido.</p>
                                    <p class="text-right text-color-grey">
                                        <small>Luis Reyes</small>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-1">
                        <div class="reviews-separator"></div>
                    </div>
                    <div class="col-12 col-md-3 text-center">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/google-review.png" width="353" height="80" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="business">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-md-6">
                      <h2 class="mb-4">¿Mi negocio <br> <span class="text-color-blue">califica?</span></h2>
                      <hr class="mb-4" />
                      <p>Nuestros requisitos de financiación son <br> simples y directos. <br>
                          Deberás cumplir con los siguientes <br> criterios mínimos:</p>
                      <div class="mb-5">
                          <a href="#" class="more">Lee mas</a>
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="text-left">
                          <div class="business-rectangle first">
                              <div class="business-rectangle-inner">
                                  Debes ser dueño <br> de un negocio
                              </div>
                          </div>
                      </div>
                      <div class="text-right">
                          <div class="business-rectangle second">
                              <div class="business-rectangle-inner">
                                  El negocio debe estar <br> operando al menos <br>
                                  4 meses
                              </div>
                          </div>
                      </div>
                      <div class="text-left">
                          <div class="business-rectangle third">
                              <div class="business-rectangle-inner">
                                  Debes depositar un <br> mínimo de $7,000 <br> mensuales en una <br> cuenta de banco <br> comercial
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>

        <section class="how-it-works" id="how-it-works">
            <div class="container">
                <h2 class="text-center">
                    Cómo <span class="text-color-blue">funciona</span>
                </h2>

                <div class="row align-items-center">
                    <div class="col-7 text-right">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-2.png" width="594" height="573" alt="Solicita un préstamo ahora" />
                    </div>
                    <div class="col-5 order-md-first">
                        <div class="number" data-content="01"></div>
                        <h5 class="mb-xl-4">Solicita <span class="text-color-blue">un préstamo</span><br> ahora</h5>
                        <p class="mb-xl-5 d-none d-md-block">Hay 2 maneras sencillas para solicitar: <br>
                            Llena tu solicitud en línea (sólo tomará <br> unos minutos y no hay obligación ni <br>
                            honorarios) o llama ahora.</p>
                        <div class="d-none d-lg-flex align-items-center">
                            <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                            <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="number" data-content="02"></div>
                        <h5 class="mb-xl-4">Recibe <span class="text-color-blue">pre-aprobación</span> <br/> el mismo día</h5>
                        <p class="mb-xl-5 d-none d-md-block">Una vez que nuestros representantes <br> revisen tu solicitud por internet, se te
                            <br> ofrecerá la tasa de financiación el mismo <br> día. Te informaremos sobre las mejores
                            <br> tarifas y condiciones para su solicitud de <br> financiación lo antes posible.</p>
                    </div>
                    <div class="col-7 order-md-first">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-3.png" width="594" height="573" alt="Recibe pre-aprobación el mismo día" />
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-7 text-right">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-4.png" width="628" height="573" alt="Fondos Depositados" />
                    </div>
                    <div class="col-5 order-md-first">
                        <div class="number" data-content="03"></div>
                        <h5 class="mb-xl-4">Fondos <span class="text-color-blue">Depositados</span></h5>
                        <p class="mb-xl-5 d-none d-md-block">Recibirás los fondos dentro de 48 horas.<br> Esto completará tu solicitud de
                            <br> financiamiento con nosotros.</p>
                        <div class="align-items-center d-none d-lg-flex">
                            <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                            <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                        </div>
                    </div>
                </div>

                <div class="d-flex d-lg-none align-items-center justify-content-center">
                    <a href="tel:1-800-591-3327" class="phone-block"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-591-3327</span></a>
                    <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                </div>
            </div>
        </section>

        <section class="why-choose-us" id="why-choose-us">
            <div class="container">
                <h2 class="text-center pb-4 pb-md-5 mb-0">Nuestro <span class="text-color-blue">Proceso</span></h2>
                <p class="text-center pb-md-3">
                    Somos la alternativa de crédito #1 en Puerto Rico. Decimos que sí cuando el banco dice que <br> no y nuestro proceso de aprobación no depende de tu crédito personal.
                </p>
                <div class="comparison-table">
                    <table>
                        <thead>
                            <tr>
                                <th class="first">Compáranos</th>
                                <th><img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/logo.svg" width="141" height="24" alt="b2b funding" /></th>
                                <th>OTROS ADELANTOS EN EFECTIVO</th>
                                <th>BANCA TRADICIONAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Completa tu solicitud en solo horas</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pre-cualificación en menos de 24 horas</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Financiamiento en tan solo 48 horas</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0 colaterales</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Proceso de solicitud en línea automatizado</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td>Renovación sencilla</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0 cargos sorpresas</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0 cargos por solicitud</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Aprobación instantánea</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tarija fija</td>
                                <td><span class="check green"></span></td>
                                <td><span class="check"></span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Valora el potencial de tu negocio</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Puedes tener compromiso con otros préstamos</td>
                                <td><span class="check green"></span></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="text-center testimonials-header">
                    <h2>Testimonios</h2>
                    <h6 class="text-color-blue">¡Conoce a nuestros comerciantes!</h6>
                    <p>Conoce las historias de éxito de varios dueños de negocios, la facilidad con la que obtuvieron su préstamo comercial y cómo utilizaron los fondos para impulsar su negocio.</p>
                </div>
                <div class="testimonials-slider">
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/yGRR3PLx05A/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGF8gXyhfMA8=&rs=AOn4CLAnART0bjpB_XiUJqXCeD28JxFXDQ)"></div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yGRR3PLx05A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Richard Rentas</div>
                                <div class="testimonials-item-title">Hot Run in Ponce</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/-pPTXGYLix4/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGEQgSyhlMA8=&rs=AOn4CLBmFviDWNPa2tlsuQqTXgwnowd5xQ)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/-pPTXGYLix4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Carlos Rodríguez</div>
                                <div class="testimonials-item-title">Tierra Mia Farms en Santa Isabel</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/1W23tTT3Jrc/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-DoACuAiKAgwIABABGGUgXChRMA8=&rs=AOn4CLBlRa4M8oT_a59WNxiRYVRN9kaxPA)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/1W23tTT3Jrc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Mariano Rodríguez</div>
                                <div class="testimonials-item-title">FARMACIA Lumen Méndez en Lares</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/8_003Kk1WDo/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgVihRMA8=&rs=AOn4CLC6W0mSQk4zLptpXLdA_qY-iTPoSg)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/8_003Kk1WDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">Edwin “Kiko” Betancourt</div>
                                <div class="testimonials-item-title">Ferretería y Gravero KIKO</div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item">
                        <div class="testimonials-item-inner">
                            <div class="testimonials-item-inner-preview" style="background-image: url(https://i.ytimg.com/vi/VKu4Lo7M18k/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AHUBoAC4AOKAgwIABABGGUgWyhPMA8=&rs=AOn4CLCccUGgLs6Zx54hqV26_vzpq1yg6w)"></div>
                            <iframe width="560" height="315" data-src="https://www.youtube.com/embed/VKu4Lo7M18k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="testimonials-item-content">
                                <div class="testimonials-item-name">José García</div>
                                <div class="testimonials-item-title">dueño de Rest. La Curvita</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="review-slider">
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                            <div class="review-slider-item">
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
                    <div class="col-12 col-md-5 order-md-first">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-12">
                                <div class="text-center">
                                    <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/google-review.png" width="353" height="80" alt="" />
                                </div>
                            </div>
                            <div class="col-6 text-right d-md-none">
                                <a href="testimonials" class="btn">ver más <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block text-md-center">
                    <a href="testimonials" class="more text-color-main">ver más</a>
                </div>
            </div>
        </section>

        <section class="merchant">
            <div class="container">
                <h2 class="text-center block-mb-md"><span class="text-color-blue">Programas</span> de Financiamiento</h2>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="merchant-item">
                            <div class="merchant-item-content">
                                <p class="text-center">
                                    <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/processing.svg" width="79" height="44" alt="" />
                                </p>
                                <div class="merchant-title">
                                    Procesamiento de <br> Tarjetas de Crédito
                                </div>
                                <p class="text-center">
                                    Acepta tarjetas de crédito con el Programa de Descuento en Efectivo. Es una forma de que usted,
                                    el comerciante, compense sus tarifas de servicio comercial sin aumentar su precio de venta.
                                </p>
                                <ul class="list blue">
                                    <li><strong>Recoja el 100% de sus ventas de procesamiento</strong></li>
                                    <li><strong>Increíblemente fácil de ordenar, configurar
                                            y administrar. Se adapta a todos los tipos de tarjetas de crédito y sistemas de billetera móvil como:
                                            ApplePay® y Android® y Terminales con Lector
                                            de Chip EMV. Sistema de recibos basado en la nube. Fácil integración con cualquier TPV.</strong></li>
                                    <li><strong>Eres elegible para refinanciar cuando hayas pagado el 60% de tu cantidad total de pago.
                                        </strong></li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="merchant-item advance">
                            <div class="merchant-item-content">
                                <p class="text-center">
                                    <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/advance.svg" width="77" height="46" alt="" />
                                </p>
                                <div class="merchant-title">
                                    Adelanto de Efectivo Comercial
                                </div>
                                <p class="text-center">
                                    La cantidad a aprobar se basa en el volumen de los depósitos mensuales de su cuenta comercial
                                </p>
                                <ul class="list blue">
                                    <li><strong>Compramos sus depósitos bancarios futuros con descuento, brindándole fondos hoy</strong></li>
                                    <li><strong>Use sus cuentas futuras por cobrar para pagar el anticipo</strong></li>
                                    <li><strong>La cantidad a aprobar se determina utilizando los últimos 4 meses de sus estados bancarios de su cuenta comercial junto con la información comercial de su solicitud.</strong></li>
                                    <li><strong>Los adelantos se pagan mediante un retiro  fijo y automático de su cuenta bancaria comercial de manera automática de lunes a viernes.</strong></li>
                                    <li><strong>Usted es elegible para refinanciar cuando haya pagado el 60% del monto total de a repagar.</strong></li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="quick-start" class="btn">¡Comience ahora!<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="we-are-here">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2>¡Estamos <span class="text-color-green">aquí para</span><br> los de aquí!</h2>
                        <hr />
                        <div class="content">
                            <p>No importa qué tipo de negocio tengas, estamos aquí para ayudarte a alcanzar tus objetivos comerciales. Detrás de nuestro financiamiento rápido, tasas y pagos razonables, hay seres humanos que tienen
                                en mente un entorno eficiente y transparente.</p>
                            <div class="row">
                                <div class="col-6 col-md-7 d-lg-none"></div>
                                <div class="col-6 col-md-5 col-lg-12 d-lg-flex align-items-center">
                                    <div class="order-lg-last contacts">
                                        <div><a href="tel:1-800-204-8487" class="phone-block order-first"><svg class="icon icon-phone"><use xlink:href="<?php echo $view->markup_builder->markup->assets_global;?>css/fonts/icons.svg#phone"></use></svg><span class="hbp-lg">1-800-204-8487</span></a></div>
                                        <p>
                                        <small>
                                            Lunes - Viernes<br>
                                            9:00AM-6:00PM
                                        </small>
                                    </p>
                                    </div>
                                    <a href="quick-start" class="btn">Llama ahora<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="kiara">
                            <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/kiara.png" width="645" height="866" alt="¡Estamos aquí para los de aquí!" />
                        </div>
                    </div>
                    <div class="transactions">
                        <div>SOBRE</div>
                        <div><strong>$100M</strong></div>
                        <div>FINANCIADOS</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-5 col-md-12 text-md-center">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/pre-approval.svg" width="50" height="39" alt="Pre-aprobación instantánea" />
                            </div>
                            <div class="col-7 col-md-12 text-md-center">
                                Pre-aprobación<br>instantánea
                            </div>
                        </div>
                    </div>
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 text-md-center">
                                №1 Prestamista Directo <br> en Puerto Rico
                            </div>
                            <div class="col-4 col-md-12 text-right text-md-center order-md-first">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/lender.svg" width="67" height="41" alt="№1 Prestamista Directo en Puerto Rico" />
                            </div>
                        </div>
                    </div>
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-5 col-md-12 text-md-center">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/collaterales.svg" width="57" height="39" alt="0 garantías necesarias" />
                            </div>
                            <div class="col-7 col-md-12 text-md-center">
                                0 garantías <br> necesarias
                            </div>
                        </div>
                    </div>
                    <div class="features-item col-md-3">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 text-md-center">
                                Obtén hasta <br> $500k
                            </div>
                            <div class="col-4 col-md-12 text-right text-md-center order-md-first">
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/cash.svg" width="57" height="38" alt="Obtén hasta $500k" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="container">
                <h2 class="text-md-center">Sobre <span class="text-color-blue">nosotros</span></h2>
                <div class="row align-items-center">
                    <div class="col-md-6 d-none d-md-block">
                        <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-5.png" width="618" height="684" alt="Nuestra filosofía" />
                    </div>
                    <div class="col-12 col-md-6 content">
                        <div class="d-none d-md-block"><strong>Nuestra filosofía</strong></div>
                        <p>Aspiramos a proporcionarte las mejores alternativas de financiamiento basadas en el potencial y la fortaleza financiera de tu negocio. No nos importa si el banco te ha negado a proporcionarte asistencia financiera. Nunca te pediremos ninguna garantía personal, sino que te ofrecemos opciones de reembolso flexibles. Nos esforzamos constantemente por ofrecerle la experiencia más innovadora, sencilla y rápida.
                            <br><br></p>
                        <div class="text-center d-md-none">
                            <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/main-5.png" width="618" height="684" alt="¿Por qué existimos?" />
                        </div>
                        <div class="d-none d-md-block"><strong>¿Por qué existimos?</strong></div>
                        <p>Nuestra compañía está compuesta por algunos de los vendedores más inteligentes, enfocados, y acertados en Puerto Rico. Somos apasionados por los negocios, y sabemos cuánto trabajo se necesita para hacer que una empresa tenga éxito. Queremos ver más dueños de negocios lograr sus sueños, y queremos ver crecer el mundo de los negocios. Por eso estamos aquí para para los de aquí.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-faq">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-md-center"><span class="text-color-blue">Preguntas</span> frecuentes</h2>

                        <div class="collapse-info-wrap">
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Un adelanto en efectivo es diferente de un préstamo?</div>
                                <div class="ciw-item-info"><p>Para obtener un adelanto en efectivo, se evalúa tu negocio y no tu crédito personal. Un préstamobancario se enfoca en el individuo, mientras que un adelanto en efectivo se enfoca en las necesidadesde  tu negocio.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Cómo sé que un adelanto en efectivo es adecuado para mí?</div>
                                <div class="ciw-item-info"><p>Un adelanto en efectivo es adecuado para ti si eres dueño de un negocio que lleva operando al menos 4meses y depositas un mínimo de $7K en tu  cuenta de banco comercial.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Siempre habrá alguien con quién hablar?</div>
                                <div class="ciw-item-info"><p>Contamos con un equipo de expertos que siempre están felices de hablar y contestar tus preguntas.¡Estamos aquí para ayudarte!</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Cómo obtengo mis fondos?</div>
                                <div class="ciw-item-info"><p>Una vez se aprueba y se finaliza tu acuerdo, tus fondos simplemente se depositan a través de ACH en tucuenta de banco comercial.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Cómo se calculan los pagos?</div>
                                <div class="ciw-item-info"><p>Tus pagos se calculan de acuerdo a la cantidad total financiada. De lunes a viernes deducimos un montofijo de tu cuenta de banco comercial a través de ACH, por lo que NO HAY SORPRESAS.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Puedo renovar?</div>
                                <div class="ciw-item-info"><p>¡Por supuesto! De hecho, nos comunicaremos contigo cuando cualifiques para una renovación.Contamos con los mejores representantes que evalúan tu cuenta regularmente y están al tanto de todo loque se refiere a ti y a tu negocio.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Qué pasa si necesito cambiar mi cuenta bancaria?</div>
                                <div class="ciw-item-info"><p>Simplemente llámanos y tu especialista de financiación te dará instrucciones simples sobre cómoproporcionarnos tu nueva información bancaria y con gusto actualizaremos su cuenta bancaria para tuspagos.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <? /* section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-left text-md-center">Desde <span class="text-color-blue">el blog</span></h2>
                        <div class="slick-slider">
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/1.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">Lee mas<span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/2.png" width="429" height="374" alt="">
                                <p>Cómo nos diferenciamos de la banca tradicional? ¡Conoce nuestras ventajas!</p>
                                <p><a href="#" class="more">Lee mas<span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/3.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">Lee mas<span></span></a></p>
                            </div>

                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/1.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">Lee mas<span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/2.png" width="429" height="374" alt="">
                                <p>Cómo nos diferenciamos de la banca tradicional? ¡Conoce nuestras ventajas!</p>
                                <p><a href="#" class="more">Lee mas<span></span></a></p>
                            </div>
                            <div>
                                <img src="<?php echo $view->markup_builder->markup->assets_global;?>img/main/3.png" width="429" height="374" alt="">
                                <p>Pensando en expandir tu negocio, pero no sabes cómo comenzar? Hazte las siguientes preguntas...</p>
                                <p><a href="#" class="more">Lee mas<span></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section */ ?>
      </div>

<?php
$view->page_end();
?>
