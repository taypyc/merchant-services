
        <section>
          <div class="container">
            <div class="block-mb-md text-center">
              <h4><span class="block-ws-nowrap">Upload Void Check</span></h4>
            </div>
            <form class="form-files text-left block-maw-01" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="form-group row">
                <div class="col-12 col-md-6">
                  <p class="sub-header">Thank you for partnering with Slice! <br>All we need now to get you approved is a picture of a <strong>void business check</strong> where you would like to receive your funds.</p>
                </div>
                <div class="col-12 col-md-6">
                  <div class="input-group" id="voided-check-photo">
                    <div class="custom-file">
                      <input type="hidden" name="MAX_FILE_SIZE" value="31457280">
                      <input type="file" class="custom-file-input" id="file_01" name="file_01" required data-msg-required="Please attach a file">
                      <label class="custom-file-label d-flex align-items-center justify-content-center" for="file_01">
                        <span class="cfl-icons d-flex align-items-end">
                            <span class="cfl-icons-item">
                              <span><svg class="icon icon-camera"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#camera"></use></svg></span>
                              <span class="cfl-icons-item-info">Take a picture</span>
                            </span>
                            <span class="cfl-icons-item cfl-icons-item-divider"><span class="cfl-icons-item-info">or</span></span>
                            <span class="cfl-icons-item cfl-icons-item-desktop">
                              <span><svg class="icon icon-cloud-up-arrow"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#cloud-up-arrow"></use></svg></span>
                              <span class="cfl-icons-item-info">Add file here</span>
                            </span>
                        </span>
                        <span class="cfl-text"><svg class="icon icon-bank-check"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#bank-check"></use></svg><span></span></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group fg-btn fg-btn-01 row">
                <div class="col-12 col-md-6 align-self-center">
                  <p class="fg-btn-description">By submitting this form, you agree to <a href="terms-of-use" target="_blank">Terms of use</a>, <a href="privacy-policy" target="_blank">Privacy policy</a>. <br>Your information is confidential and secure.</p>
                </div>
                <div class="col-12 col-md-6">
                  <button type="submit" data-loading-content="Processing..." class="btn btn-lg">Submit</button>
                </div>
                <div class="col-12 col-md-6 ml-auto text-center">
                  <a href="thank-you?success" class="link-angle">Upload Voided Check Later</a>
                </div>
              </div>
            </form>

            <div class="block-footer-icon-info-wrap text-center">
              <div class="block-footer-icon-info d-inline-flex align-items-center justify-content-center">
                <div class="bfii-icon"><svg class="icon icon-shield"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#shield"></use></svg></div>
                <div class="bfii-info">
                  <p class="bfii-header">SSL Connection</p> 
                  <p>Verified & Secured</p> 
                </div>
              </div>
            </div>
          </div>
        </section>
