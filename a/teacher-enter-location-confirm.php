<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body>
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <!--   <form>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form> 

                <form id="menu">

                    <label><input type="radio" id="gender" name="gender">Select One</label>
                    <label><input type="radio" id="gender" name="gender" value="http://www.domain-one.com"></label>
                    <label><input type="radio" id="gender" name="gender" value="http://www.domain-two.com"></label>
                    <input type="button" id="goBtn" value="GO!">

                </form>

                <script>
                    var goBtn = document.getElementById("goBtn");
                    var menu = document.getElementById("gender");

                    goBtn.onclick = function() {
                        window.location = menu.value;
                    }

                </script> -->

                <!--   <form action="teacher-check-send" method="POST" role="form">
        <div class="govuk-form-group ">
          <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
              <h1 class="govuk-fieldset__heading">
                How do you want us to contact you?
              </h1>
            </legend>
            <span id="changed-name-hint" class="govuk-hint">
              We'll only use these details to update you about your claim.
            </span>


            <div class="govuk-radios govuk-radios--conditional" data-module="radios">

              <div class="govuk-radios__item">
                
                <input class="govuk-radios__input" id="contact-method-conditional-email" name="teacher-contact-method" type="radio" value="email" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false">
                
                <label class="govuk-label govuk-radios__label" for="contact-method-conditional-email">Email</label>
              </div>
              <div class="govuk-radios__conditional govuk-radios__conditional--hidden" id="conditional-contact-method-conditional-email">
                <div class="govuk-form-group">
                  <div class="govuk-form-group">
                    <label class="govuk-label" for="teacher-email-address">Enter email address</label>
                    
                    <input class="govuk-input govuk-!-width-two-thirds" id="teacher-email-address" name="teacher-email-address" type="email" value="">
                  </div>
                </div>
              </div>

              <div class="govuk-radios__item">
                
                <input class="govuk-radios__input" id="contact-method-conditional-mobile" name="teacher-contact-method" type="radio" value="mobile" aria-controls="conditional-contact-method-conditional-mobile" aria-expanded="false">
                
                <label class="govuk-label govuk-radios__label" for="contact-method-conditional-mobile">Text message</label>
              </div>
              <div class="govuk-radios__conditional govuk-radios__conditional--hidden" id="conditional-contact-method-conditional-mobile">
                <div class="govuk-form-group">
                  <div class="govuk-form-group">
                    <label class="govuk-label" for="teacher-mobile-number">Enter mobile number</label>
                    
                    <input class="govuk-input govuk-!-width-two-thirds" id="teacher-mobile-number" name="teacher-mobile-number" type="number" value="">
                  </div>
                </div>
              </div>

            </div>

          </fieldset>
        </div>

        
        <button type="submit" class="govuk-button">Continue</button>
        

      </form> -->

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>


                <form name="quoted" method="POST" onsubmit="get_action(this);">

                    <input id="poster" type="text" name="poster" required="required" placeholder="Credited Individual."> <br>
                    <textarea class="actual_quote" name="actual_quote" required="required" placeholder="Write the question here!"></textarea><br><br><br>

                    <div class="checkboxes" required="required">
                        <h3 style="margin-top:-20px;">Please select one catagory that the quote falls into.</h3>
                        <label for="x"><input type="radio" name="x" value="results-page-1.php" id = "x" checked="checked" />    <span>1</span></label><br>
                        <label for="x"><input type="radio" name="x" value="results-page-2.php" id = "x" /> <span>2</span>    </label><br>
                        <label for="x"><input type="radio" name="x" value="results-page-3.php" id = "x"/>    <span>3</span></label>
                    </div>
                    <input id="submit1" type="submit"><br>
                </form>

            </div>
            <div id="sidebar" class="large-4 cell no-top-border">
                <button type="submit" name="skip-verify" value="yes" class="govuk-button hidden-button">Skip Verify</button>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
