
              <div class="block-mb-md fa-step-header block-border-bottom-01 d-flex justify-content-between align-items-center">
                <div>
                  <h4>Por favor descargue los archivos solicitados</h4>
                  <p class="sub-header">Por favor, llene el siguiente formulario</p>
                </div>
                <div class="col-auto fsh-additional-info"><img src="img/ssl.jpg"></div>
              </div>

              <div id="files-wrapper"></div>

              <div class="loader-fileloader loader-active loader-wrap flex-column align-items-center justify-content-center">
                <div class="loader-elem">
                  <div class="loader-elem-logo"><img src="https://b2bfunding.net/es/img/logo-01.svg" alt=""></div>
                  <div class="loader-elem-disc"><div class="led-processing"><div></div></div></div>
                </div>
                <p class="loading-description">
                  <span>Verificando su Información.</span>
                  <span>Por favor espere un momento<br> en lo que procesamos su solicitud.</span>
                </p>
              </div>

              <template id="input-template">
                <div class="slide-block">
                  <div class="slide-block__headline"></div>
                  <div class="slide-block__body input__wrapper">
                    <input name="file" type="file" class="input input__file" id="input__file">
                    <label class="input__file-button">
                      <span class="input__file-icon-wrapper">
                        <svg class="input__file-icon" width="60" height="60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" xml:space="preserve">
                          <path fill="#ccc" class="input__file-icon__cloud" d="M426.635,188.224C402.969,93.946,307.358,36.704,213.08,60.37C139.404,78.865,85.907,142.542,80.395,218.303
                            C28.082,226.93-7.333,276.331,1.294,328.644c7.669,46.507,47.967,80.566,95.101,80.379h80v-32h-80c-35.346,0-64-28.654-64-64
                            c0-35.346,28.654-64,64-64c8.837,0,16-7.163,16-16c-0.08-79.529,64.327-144.065,143.856-144.144
                            c68.844-0.069,128.107,48.601,141.424,116.144c1.315,6.744,6.788,11.896,13.6,12.8c43.742,6.229,74.151,46.738,67.923,90.479
                            c-5.593,39.278-39.129,68.523-78.803,68.721h-64v32h64c61.856-0.187,111.848-50.483,111.66-112.339
                            C511.899,245.194,476.655,200.443,426.635,188.224z"/>
                          <path fill="#ccc" class="input__file-icon__arrow" d="M245.035,253.664l-64,64l22.56,22.56l36.8-36.64v153.44h32v-153.44l36.64,36.64l22.56-22.56l-64-64
                            C261.354,247.46,251.276,247.46,245.035,253.664z"/>
                        </svg>
                      </span>
                      <span class="input__file-button-textwrapper">
                        <span class="input__file-button-notice">Arrastre y coloque su archivo aquí</span>
                        <span class="input__file-button-text">
                        Escoja el Archivo
                        </span>
                      </span>
                      <div class="input__file-typenotice">JPG, PNG, PDF smaller than 6Mb</div>
                    </label>
                  </div>
                </div>
              </template>

              <template id="progress-icon">
                <svg class="input__file-icon" width="60" height="60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                  <path fill="#ccc" class="input__file-icon__cloud" d="M426.635,188.224C402.969,93.946,307.358,36.704,213.08,60.37C139.404,78.865,85.907,142.542,80.395,218.303
                    C28.082,226.93-7.333,276.331,1.294,328.644c7.669,46.507,47.967,80.566,95.101,80.379h80v-32h-80c-35.346,0-64-28.654-64-64
                    c0-35.346,28.654-64,64-64c8.837,0,16-7.163,16-16c-0.08-79.529,64.327-144.065,143.856-144.144
                    c68.844-0.069,128.107,48.601,141.424,116.144c1.315,6.744,6.788,11.896,13.6,12.8c43.742,6.229,74.151,46.738,67.923,90.479
                    c-5.593,39.278-39.129,68.523-78.803,68.721h-64v32h64c61.856-0.187,111.848-50.483,111.66-112.339
                    C511.899,245.194,476.655,200.443,426.635,188.224z"/>
                  <path fill="#ccc" class="input__file-icon__arrow--active" d="M245.035,253.664l-64,64l22.56,22.56l36.8-36.64v153.44h32v-153.44l36.64,36.64l22.56-22.56l-64-64
                    C261.354,247.46,251.276,247.46,245.035,253.664z"/>
                </svg>
              </template>

              <template id="success-icon">
                <svg class="input__file-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                  <path fill="#4caf50" d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.853,256-256S397.167,0,256,0z M256,472.341
                    c-119.275,0-216.341-97.046-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.046,216.341,216.341
                    S375.275,472.341,256,472.341z"/>
                  <path fill="#4caf50" d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
                    c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
                    c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
                    C382.156,186.854,381.561,174.322,373.451,166.965z"/>
                </svg>    
              </template>

              <template id="error-icon">
                <svg class="input__file-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                <path fill="#ff4e42" d="M437.126,74.939c-99.826-99.826-262.307-99.826-362.133,0C26.637,123.314,0,187.617,0,256.005
                  s26.637,132.691,74.993,181.047c49.923,49.923,115.495,74.874,181.066,74.874s131.144-24.951,181.066-74.874
                  C536.951,337.226,536.951,174.784,437.126,74.939z M409.08,409.006c-84.375,84.375-221.667,84.375-306.042,0
                  c-40.858-40.858-63.37-95.204-63.37-153.001s22.512-112.143,63.37-153.021c84.375-84.375,221.667-84.355,306.042,0
                  C493.435,187.359,493.435,324.651,409.08,409.006z"/>
                <path fill="#ff4e42" d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
                  c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
                  c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
                  c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
                  c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
                </svg>    
              </template>

