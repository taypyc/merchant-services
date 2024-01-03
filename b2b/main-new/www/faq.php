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
                        <h2 class="text-center text-md-left text-md-center block-mb-md">Frequently <span class="text-color-blue">Asked</span> Questions</h2>

                        <div class="collapse-info-wrap">
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">How can I apply for funds?</div>
                                <div class="ciw-item-info"><p>The application process is fast, simple and secure. Simply complete our 5-minute online application or call one of our experts.</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">Is the process difficult?</div>
                                <div class="ciw-item-info"><p>Is the process difficult?</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">How much does the application cost?</div>
                                <div class="ciw-item-info"><p>How much does the application cost?</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">What information do I have to provide?</div>
                                <div class="ciw-item-info"><p>What information do I have to provide?</p></div>
                            </div>

                            <div class="ciw-item">
                                <div class="ciw-item-toggle">How soon will I receive my funds?</div>
                                <div class="ciw-item-info"><p>How soon will I receive my funds?</p></div>
                            </div>
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">What are the basic requirements to apply for funds?</div>
                                <div class="ciw-item-info"><p>What are the basic requirements to apply for funds?</p></div>
                            </div>
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">Are there any state restrictions?</div>
                                <div class="ciw-item-info"><p>Are there any state restrictions?</p></div>
                            </div>
                            <div class="ciw-item">
                                <div class="ciw-item-toggle">Is personal information or documentation required?</div>
                                <div class="ciw-item-info"><p>Is personal information or documentation required?</p></div>
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
