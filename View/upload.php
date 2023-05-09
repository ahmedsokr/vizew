<?php

require_once "../Controller/videoUploadForm.php";
?>



<section class="contact-area mb-80">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <!-- Section Heading -->
        <div class="section-heading style-2">
          <br>
          <h4>Upload Video</h4>
          <div class="line"></div>
        </div>
        <!-- Contact Form Area -->
        <div class="contact-form-area mt-50">
          <?php
          $formProvider = new videoUploadForm($connection);
          echo $formProvider->createUploadForm();
          ?>
        </div>

        <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModal" aria-hidden="true" data-backdrop="static" data-keyboard='false'>
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <img src="img/pleasewait2.gif">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>