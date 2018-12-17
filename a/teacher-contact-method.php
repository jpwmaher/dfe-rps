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

                <form action="" method="POST" role="form" data-abide novalidate>
                    <div class="form-group">
                        <fieldset>

                            <legend>
                                <h1 class="heading-medium">
                                    How do you want to be contacted?
                                </h1>
                            </legend>

                            <div class="multiple-choice" data-target="contact-by-email">
                                <input id="example-contact-by-email" type="radio" name="radio-contact-group" value="Yes">
                                <label for="example-contact-by-email">Email</label>
                            </div>
                            <div class="panel panel-border-narrow js-hidden" id="contact-by-email">
                                <label class="form-label" for="contact-email">Email address</label>
                                <input class="form-control" name="contact-email" type="text" id="contact-email">
                            </div>

                            <div class="multiple-choice" data-target="contact-by-phone">
                                <input id="example-contact-by-phone" type="radio" name="radio-contact-group" value="No">
                                <label for="example-contact-by-phone">Phone</label>
                            </div>
                            <div class="panel panel-border-narrow js-hidden" id="contact-by-phone">
                                <label class="form-label" for="contact-phone">Phone number</label>
                                <input class="form-control" name="contact-phone" type="tel" id="contact-phone">
                            </div>

                            <div class="multiple-choice" data-target="contact-by-text">
                                <input id="example-contact-by-text" type="radio" name="radio-contact-group" value="No">
                                <label for="example-contact-by-text">Text message</label>
                            </div>
                            <div class="panel panel-border-narrow js-hidden" id="contact-by-text">
                                <label class="form-label" for="contact-text-message">Mobile phone number</label>
                                <input class="form-control" name="contact-text-message" type="text" id="contact-text-message">
                            </div>

                        </fieldset>
                    </div>
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
