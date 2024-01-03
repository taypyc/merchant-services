
        <section class="section-signup-steps">
          <div class="container">
            <div class="application-wrap">
              <div class="application-form-wrap">
                <div class="afw-steps-progress">
                  <div class="d-flex">
                    <div class="asp-item" data-steps-progress-finalise>Información Financiera del Negocio</div>
                    <div class="asp-item">Obtén tu préstamo</div>
                  </div>
                </div>
                <form class="form-application application-form-steps" data-form-plaid>
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Descubra cuanto dinero puede obtener para su negocio</h4>
                        <p class="sub-header">Conécte su cuenta bancaria comercial para una rápida evaluación, sin compromiso alguno.</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>

                    <div class="form-group row justify-content-center icon-links-block-wrapper icon-links-block-wrapper-01 block-mb-md">
                      <div class="col-6">
                        <a class="ilb-item" id="plaid-url" data-load-scripts="plaid">
                          <span class="ilb-item-header">Enlace su Banco</span>
                          <span class="ilb-item-visual"><svg class="icon icon-logo-plaid"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#logo-plaid"></use></svg></span>
                          <span class="ilb-item-description">Utilice Plaid para someter sus estados<br>bancarios de una forma rápida y segura.</span>
                        </a>
                      </div>

                    </div>

                    <div class="form-group fg-btn row justify-content-center">
                      <div class="col-12">
                        <p class="fg-btn-description text-center">Al presionar Someter, usted acepta los Términos de la solicitud y recibir llamadas y mensajes, incluyendo las llamadas automáticas o pregrabadas para fines de mercadeo de B2B Funding y sus socios participantes, utilizando la información que proporcionó anteriormente, incluso a través de un teléfono celular, que ninguna compra de bienes o servicios depende de dicho consentimiento, reconoce que las llamadas telefónicas hacia y desde B2B Funding o sus socios pueden registrarse, y reconoce que ha leído la Política de privacidad de B2B Funding y comprende que puede optar por no recibir comunicaciones de su predilección desde B2B Funding, según dispuesto en la Política de privacidad.</p>
                      </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
