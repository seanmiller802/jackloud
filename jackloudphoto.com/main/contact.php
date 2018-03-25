

<!--############################# CONTACT SECTION ###########################-->
<section id="contact">
  <div class="arrow-down"></div><!--down arrow that styles the transition from the gallery to the contact section-->
  <div class="container"><!--containter to hold the form and contact information-->
    <div class="row">
      <div class="col-xs-12 col-md-6 text-center form-header wow fadeInLeft"><!--column to hold the form header-->
        <span>Leave A Message</span>
      </div>
      <div class="col-xs-12 col-md-6 text-center form-header contact-info wow fadeInRight"><!--column to hold the contact info header. This will be hidden on xs and sm screens.-->
        <span>Contact Info</span>
      </div>
      <!--start contact form-->
      <form id="ajaxContact" action="process.php" name="ajax-contact" method="POST"  class="form col-xs-12 col-md-6 wow fadeInUp">
        <!--start the first column in our form. This will hold the first and last name input fields as well as the email field.-->
        <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1">
          <!--name input field-->
          <div id="first-name-group" class="form-group">
            <input type="text" name="txtFirstName" class="form-control" placeholder="First Name" id="firstName">
          </div>

          <!--email input field-->
          <div id="last-name-group" class="form-group">
            <input type="text" name="txtLastName" class="form-control" placeholder="Last Name" id="lastName">
          </div>

          <!--phone number input field-->
          <div id="email-group" class="form-group">
            <input type="email" name="txtEmail" class="form-control" placeholder="Email" id="email">
          </div>
        </div><!--end column-->

        <!--start the second column in our form. This will hold the message input field.-->
        <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
          <div id="message-group" class="form-group">
            <textarea name="txtMessage" class="form-control" placeholder="Say something!" id="Message"></textarea>
          </div>
        </div>
        <!--end second column-->
        <!--submit button-->
        <div id="inputClass" class="col-xs-12 col-md-5 text-center">
          <input type="submit" class="btn btn-sm hvr-fade get" name="btnSubmit" value="Send Message">
        </div><!--end submit button-->
      </form><!--end form-->

      <div class="col-xs-12 col-md-6 otherInfo text-center">
        <div class="col-xs-12 text-center form-header contact-info2"><!--column to hold the contact info header. This will be hidden on xs and sm screens.-->
          <span>Contact Info</span>
        </div>
        <div class="btn-group text-center social-bar wow fadeIn" role="group">
          <button href="#" type="button" class="btn btn-default" data-tooltip="(802) 922 0816"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></button>
          <button href="#" type="button" class="btn btn-default" data-tooltip="jloud46@gmail.com"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></button>
        </div>

        <div class="btn-group text-center social-bar wow FadeIn" role="group" aria-label="...">
          <a href="https://www.facebook.com/profile.php?id=100006898667013" target="_blank" class="btn btn-default"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/jackloud_photo/" target="_blank" class="btn btn-default"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
          <button href="#" type="button" class="btn btn-default snap" data-tooltip="jackloud_photo"><i class="fa fa-snapchat-ghost fa-2x" aria-hidden="true"></i></button>
          <a href="https://www.linkedin.com/in/john-loud-6778a2125/" target="_blank" class="btn btn-default"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
        </div>
        <button type="button" class="btn Yes hvr-icon-wobble-horizontal wow fadeInUp col-xs-6 col-xs-offset-3" name="button">Win a free print    </button>
        <div class="enter-raffle col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 hidden wow fadeIn">
          <form action="contest.php" id="contest" name="contest-form" method="POST">
          <div class="input-group">
            <input type="email" class="form-control" id="emailButton" name="contestEmail" placeholder="Your email here." aria-label="Your email here.">
            <span class="input-group-btn">
              <input type="submit" class="btn btn-secondary" id="submitContestEmail" name="submitContestEmail" value="Enter">
            </span>
          </div>
        </form>
        </div>
      </div>
    </div><!--end row-->

    <!--Start a new row. This will hold the google map-->
    <div class="row row3">
      <div class="col-xs-12 container">
        <div id="map">
          <iframe src="https://snazzymaps.com/embed/36971" width="100%" height="400px" scrolling="no" style="border:none;"></iframe>
        </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpnsLPVIxStxlWdoqS47xBmtEfn02UwP8&callback=initMap"></script>
      </div><!--end container-->
    </div><!--end row-->
  </div><!--end container-->
</section>
