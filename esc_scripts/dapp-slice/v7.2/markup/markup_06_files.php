
        <section>
          <div class="container">
            <div class="block-mb-md text-center">
              <h4><span>Cargue los archivos solicitados</span></h4>
            </div>
            <form class="form-files text-left block-maw-01" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
              <div class="form-group row">
                <div class="col-12 col-md-6">
                  <p class="sub-header">¡Gracias por asociarse con nosotros! <br>Verifique los archivos solicitados que necesitamos para <strong>aprovarle</strong>.</p>
                </div>
                <div class="col-12 col-md-6">
                  <div id="files-group" class="input-group"></div>
                </div>
              </div>

              <div class="form-group fg-btn fg-btn-01 row">
                <div class="col-12 col-md-6 align-self-center">
                    <p class="fg-btn-description">Al enviar este formulario, aceptas <a href="privacy-policy" target="_blank">la Política de privacidad</a>. <br>Su información es confidencial y segura.</p>
                </div>
                <div class="col-12 col-md-6 ml-auto text-center">
                  <a href="thank-you?success" class="link-angle">CARGAR ARCHIVOS LUEGO</a>
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

        <template id="input-template">
          <div class="slide">
            <div class="slide-head"></div>
            <div class="slide-body">
              <div class="filebox">
                <input class="fileinput" type="file" name="file" id="file" />
                <label for="file">
                  <figure>
                    <svg class="icon icon-cloud-up-arrow"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#cloud-up-arrow"></use></svg>
                    <figcaption>
                      <div class="icon-line-1"></div>
                      <div class="icon-line-2"></div>
                      <div class="icon-line-3"></div>
                    </figcaption>
                  </figure>
                </label>
              </div>
            </div>
          </div>
        </template>

        <template id="base-icon">
          <svg class="icon icon-cloud-up-arrow"><use xlink:href="<?php echo $this->assets_global; ?>css/fonts/icons.svg#cloud-up-arrow"></use></svg>
        </template>

        <template id="success-icon">
          <svg class="success-svg-icon" width="64" height="64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.853,256-256S397.167,0,256,0z M256,472.341
              c-119.275,0-216.341-97.046-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.046,216.341,216.341
              S375.275,472.341,256,472.341z"/>
            <path fill="currentColor" d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
              c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
              c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
              C382.156,186.854,381.561,174.322,373.451,166.965z"/>
          </svg>
        </template>

        <template id="error-icon">
          <svg class="error-svg-icon" width="64" height="64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M437.126,74.939c-99.826-99.826-262.307-99.826-362.133,0C26.637,123.314,0,187.617,0,256.005
            s26.637,132.691,74.993,181.047c49.923,49.923,115.495,74.874,181.066,74.874s131.144-24.951,181.066-74.874
            C536.951,337.226,536.951,174.784,437.126,74.939z M409.08,409.006c-84.375,84.375-221.667,84.375-306.042,0
            c-40.858-40.858-63.37-95.204-63.37-153.001s22.512-112.143,63.37-153.021c84.375-84.375,221.667-84.355,306.042,0
            C493.435,187.359,493.435,324.651,409.08,409.006z"/>
          <path fill="currentColor" d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
            c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
            c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
            c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
            c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
          </svg>
        </template>
