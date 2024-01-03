<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
require_once 'php/scripts/crmcontrol.class.php';
$crm_control = new CrmControl();

$redirect_url_base = 'https://startslice.com/zero-fee/clover';
$template_id = '01';

$oid = false;
// if(1==1) {
if(isset($_GET['oid']) && strlen(trim($_GET['oid'])) > 0) {
  $oid = trim($_GET['oid']);
} else if(isset($_COOKIE['oid']) && strlen(trim($_COOKIE['oid'])) > 0) {
  $oid = trim($_COOKIE['oid']);
} else {
  header("Location: {$redirect_url_base}/thank-you");
  exit;
}

if(isset($_GET['event']) && trim($_GET['event']) == 'signing_complete') {
  $dapp_root = $_SERVER['DOCUMENT_ROOT'] . '/esc_scripts/dapp/v1.0';
  require_once $dapp_root . '/dapp.class.php';
  $dapp = new DApp($dapp_root);

  $data['template_id'] = $template_id;
  $data['utm_source'] = $crm_control->utm['utm_source'];
  $data['utm_medium'] = $crm_control->utm['utm_medium'];
  $data['utm_campaign'] = $crm_control->utm['utm_campaign'];
  $data['utm_content'] = $crm_control->utm['utm_content'];
  $data['utm_term'] = $crm_control->utm['utm_term'];

  $dapp->ds_completed_process_status($oid, $redirect_url_base, $data);

  /*$dapp->init_sf();

  $sf_api_credentials = $dapp->sf->get_api_credentials();

  if($sf_api_credentials['status'] == 'error') {
    $dapp->error_log($sf_api_credentials['description'] . ' | ' . __FILE__, 'sf');
  }

  $oid_decrypted = $dapp->crypt_string($oid, 'd');
  $email_distribution_data = $dapp->sf->get_opportunity_contact_data($oid_decrypted);

  if($email_distribution_data['status'] == 'success') {
    $edd_arr = $email_distribution_data['description'];

    if($edd_arr['status_docusign'] == 'generated' || $edd_arr['status_docusign'] == 'completed') {
      $email_distribution = [];
      $email_distribution['event_type_key'] = 'ds-completed';
      $email_distribution['event_key_value'] = $oid;
      $email_distribution['params'] = [
        ['email', $edd_arr['business_email']],
        ['json', json_encode([
          'CtaUrl' => $redirect_url_base . '/verify?oid=' . urlencode($oid),
          'BusinessName' => $edd_arr['business_dba_name'],
        ])]
      ];
      $dapp->event_email_distribution($email_distribution);
    }
    // update step in salesforce if docusign was generated and not completed
    if($edd_arr['status_docusign'] == 'generated') {
      $update_opportunity_data = ['oid_decrypted' => $oid_decrypted];
      $sf_update_opportunity = $dapp->sf->update_opportunity($update_opportunity_data, 'ds-completed');
      if($sf_update_opportunity['status'] == 'error') {
        $dapp->error_log($sf_update_opportunity['description'] . ' | ' . __FILE__, 'sf');
      }
    }
  } else {
    $dapp->error_log($email_distribution_data['description'] . ' | ' . __FILE__, 'sf');
  }*/
}

$view->page_start(array('title' => "Banking info | Slice"));
?>

      <div role="main" class="main">

        <section>
          <div class="container">
            <div class="block-mb-md text-center">
              <h4>Banking info</h4>
              <p class="sub-header">Please provide us your banking info so we know where to deposit your funds on a daily basis</p>
            </div>
            <form class="form-files text-left block-maw-01" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="oid" value="<?php echo $oid; ?>">
              <input type="hidden" name="file_01_s" value="">
              <div class="form-group row">
                <div class="col-12 col-md-6">
                  <label>Upload voided check photo</label>
                  <div class="input-group" id="voided-check-photo">
                    <div class="custom-file">
                      <input type="hidden" name="MAX_FILE_SIZE" value="31457280">
                      <input type="file" class="custom-file-input" id="file_01" name="file_01">
                      <label class="custom-file-label" for="file_01">
                        <span class="cfl-img-preview"><img src="img/voided-check-preview.jpg" alt=""></span>
                        <span class="cfl-text"></span>
                        <span class="cfl-button d-flex flex-column justify-content-center">
                          <span class="cfl-bitton-icon"><svg class="icon icon-upload-file"><use xlink:href="css/fonts/icons.svg#upload-file"></use></svg></span>
                          <span class="cfl-bitton-text">Click to select</span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-12 col-md-6">
                  <label>Routing number</label>
                  <input type="tel" name="routing_number" class="form-control" data-mask-rn required>
                  <p class="field-description">9 digits numer</p>
                </div>
                <div class="col-12 col-md-6">
                  <label>Account number</label>
                  <input type="tel" name="account_number" class="form-control" data-mask-an required>
                  <p class="field-description">5-17 digits number</p>
                </div>
              </div>

              <div class="form-group fg-btn row">
                <div class="col-12 col-md-6 align-self-center">
                  <p class="fg-btn-description">By submitting this form, you agree to <a href="terms-of-use" target="_blank">Terms of use</a>, <a href="privacy-policy" target="_blank">Privacy policy</a>. <br>Your information is confidential and secure.</p>
                </div>
                <div class="col-12 col-md-6">
                  <button type="submit" data-loading-content="Processing..." class="btn btn-lg">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>