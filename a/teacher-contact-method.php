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

                <form action="teacher-check-send" method="POST" role="form" onsubmit="get_action(this);">

                    <ul class="radio">
                        <li>
                            <input type="radio" name="Postage_Method" id="post" value="Post" onchange="showSelect();">
                            <label for="post">&nbsp;Please Post</label>
                        </li>

                        <select id="my_select" class="hide">
                <option value="nxday">Next Day Monday to Friday </option>
                <option value="b9">Before 9 a.m. Monday to Friday </option>
                <option value="b10">Before 10 a.m. Monday to Friday </option>
                <option value="b12">Before 12 a.m. Monday to Friday </option>
                <option value="sat9">Saturday Before 9 a.m.  </option>
                <option value="sat10">Saturday Before 10 a.m. </option>
            </select>


                        <li>
                            <input type="radio" name="Postage_Method" id="post" onchange="hide()" value="Arrange Own Pick Up ">
                            <label for="own">&nbsp;Will arrange own pick up</label>
                        </li>

                        <li>
                            <input type="radio" name="Postage_Method" id="post" value="Collect in person">
                            <label for="collect">&nbsp;Will collect in person</label>
                        </li>
                    </ul>


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

                                    <input class="govuk-radios__input" id="contact-method-conditional-mobile" name="teacher-contact-method" type="radio" value="mobile" aria-controls="conditional-contact-method-conditional-mobile" aria-expanded="true">

                                    <label class="govuk-label govuk-radios__label" for="contact-method-conditional-mobile">Text message</label>
                                </div>
                                <div class="govuk-radios__conditional" id="conditional-contact-method-conditional-mobile">
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


                </form>
                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>
                <script>
                    function showSelect() {
                        var select = document.getElementById('my_select');
                        select.className = 'show';
                    }

                    function hide() {
                        document.getElementById("my_select").style.display = 'none';
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
