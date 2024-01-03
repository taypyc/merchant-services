
        <section class="section-signup-steps">
          <div class="container">
            <div class="application-wrap">
              <div class="application-form-wrap">
                <div class="afw-steps-progress">
                  <div class="d-flex">
                    <div class="asp-item" data-steps-progress-finalise>Business Financial Information</div>
                    <div class="asp-item">Get your Loan</div>
                  </div>
                </div>
                <form class="form-application application-form-steps" data-form-plaid>
                  <div class="fa-step-item">
                    <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                      <div>
                        <h4>Find how much money you can get for your business</h4>
                        <p class="sub-header">Connect your business bank account for a fast evaluation, without any obligations.</span></p>
                      </div>
                      <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
                    </div>

                    <div class="form-group row justify-content-center icon-links-block-wrapper icon-links-block-wrapper-01 block-mb-md">
                      <div class="col-6">
                        <a class="ilb-item" id="plaid-url" data-load-scripts="plaid">
                          <span class="ilb-item-header">Link Bank</span>
                          <span class="ilb-item-visual"><svg class="icon icon-logo-plaid"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#logo-plaid"></use></svg></span>
                          <span class="ilb-item-description">Use Plaid to submit your bank statements <br>quickly and securely.</span>
                        </a>
                      </div>

                    </div>

                    <div class="form-group fg-btn row justify-content-center">
                      <div class="col-12">
                        <p class="fg-btn-description text-center">By clicking "Link Bank", you agree to the Terms of the application and receive calls and messages, including automated or pre-recorded calls for marketing purposes from B2B Funding and its participating partners, using the information you previously provided, including via cell phone, that no purchase of goods or services is dependent on such consent, you acknowledge that telephone calls to and from B2B Funding or its partners may be logged, and you acknowledge that you have read the B2B Funding Privacy Policy and understand that you may choose not to receive communications from your preference from B2B Funding, as provided in the Privacy Policy.</p>
                      </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
