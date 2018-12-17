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

                <form method="POST" role="form" onsubmit="get_action(this);">
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

                                    <input class="govuk-radios__input" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false" name="x" type="radio" value="results-page-1.php" id="x" data-toggle-focus="email-reveal">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-email">Email</label>

                                    <div class="secondary callout is-hidden" id="email-reveal" data-toggler="is-hidden">
                                        <p>This is only visible when the above field has focus.</p>
                                    </div>
                                </div>


                                <div class="govuk-radios__item">

                                    <input class="govuk-radios__input" aria-controls="conditional-contact-method-conditional-email" aria-expanded="false" name="x" type="radio" value="results-page-2.php" id="x" data-toggle-focus="sms-reveal">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-mobile">Text message</label>

                                    <div class="secondary callout is-hidden" id="sms-reveal" data-toggler="is-hidden">
                                        <p>This is only visible when the above field has focus.</p>
                                    </div>
                                </div>


                            </div>

                        </fieldset>
                    </div>


                    <button type="submit" class="govuk-button">Continue</button>


                </form>

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>

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
