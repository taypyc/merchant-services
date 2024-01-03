<?php
require_once "php/scripts/view.class.php";
$view = new ViewControl();
$view->page_start(array('title' => "Contact us"));
?>

      <div role="main" class="main page-cu">

        <section class="page-hero" style="background-image:url(img/bg-contacts.jpg)">
          <div class="container">
            <h1>Contact Us</h1>
          </div>
        </section>
        
        <section class="section-divided sd-right">
          <div class="container">
            <div class="row sd-content">
              <div class="col-xs-6">
                <h3>Expand your business today!</h3>
                <ul class="list-checked">
                  <li>Extensive experience in the industry</li>
                  <li>Options for any size funder</li>
                  <li>One stop CRM Solution</li>
                  <li>Daily payment remittance</li>
                  <li>No monthly membership fees</li>
                  <li>Customer service oriented business model</li>
                </ul>
              </div>
              <div class="col-xs-6">
                <h5>Start Here</h5>
                <p>Submit our simple online form and we’ll get back to you quickly.	We’ll reach out to you to understand your business and what type of programs fit you better.</p>
                <form class="contact-form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="company" placeholder="Company Name">
                  </div>
                  <div class="form-group">
                    <select class="form-control select-item" name="business_years" style="width:100%;" data-select-placeholder="Years in business">
                      <option value="">Years in business</option>
                      <option value="1-3 years">1-3 years</option>
                      <option value="3-5 years">3-5 years</option>
                      <option value="5-7 years">5-7 years</option>
                      <option value="7+ years">7+ years</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="comments" placeholder="Comments"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-white" data-loading-text="Processing…">Submit Information</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      
      </div>

<?php
$view->page_end();
?>