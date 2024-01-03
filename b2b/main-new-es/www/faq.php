<?php
require_once 'php/scripts/Loader.php';
$view = Loader::require_view_control();
$view->page_start();
?>

      <div role="main" class="main faq-page">
        <section class="section-faq pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-md-left text-md-center block-mb-md">FAQ</h2>

                        <div class="collapse-info-wrap">
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Cómo puedo solicitar fondos?</div>
                                <div class="ciw-item-info"><p>El proceso de solicitud es rápido, simple y seguro. Simplemente completa nuestra solicitud en línea de 5 minutos o llama a uno de nuestros expertos.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Es difícil el proceso?</div>
                                <div class="ciw-item-info"><p>¿Es difícil el proceso?</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Cuánto cuesta la solicitud?</div>
                                <div class="ciw-item-info"><p>¿Cuánto cuesta la solicitud?</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Qué información tengo que proveer?</div>
                                <div class="ciw-item-info"><p>¿Qué información tengo que proveer?</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿En cuánto tiempo debo recibir mis fondos?</div>
                                <div class="ciw-item-info"><p>¿En cuánto tiempo debo recibir mis fondos?</p></div>
                            </div>
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Cuáles son los requisitos básicos para solicitar fondos?</div>
                                <div class="ciw-item-info"><p>¿Cuáles son los requisitos básicos para solicitar fondos?</p></div>
                            </div>
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Hay alguna restricción estatal?</div>
                                <div class="ciw-item-info"><p>¿Hay alguna restricción estatal?</p></div>
                            </div>
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">¿Se requiere información o documentación personal?</div>
                                <div class="ciw-item-info"><p>¿Se requiere información o documentación personal?</p></div>
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
