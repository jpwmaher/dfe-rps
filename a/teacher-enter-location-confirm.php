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

                <form name="quoted" method="POST" onsubmit="get_action(this);">
                    <div class="form-group">
                        <fieldset>

                            <legend>
                                <h1 class="heading-medium">Where do you live?</h1>
                            </legend>

                            <div class="multiple-choice">
                                <label for="x"><input type="radio" name="x" value="results-page-1.php" id = "x" checked="checked" />    <span>1</span></label>
                            </div>
                            <div class="multiple-choice">
                                <label for="x"><input type="radio" name="x" value="results-page-2.php" id = "x" /> <span>2</span>    </label>
                            </div>
                            <p class="form-block">or</p>
                            <div class="multiple-choice">
                                <input id="example-contact-by-email" type="radio" name="radio-contact-group" value="results-page-2.php">
                                <label for="example-contact-by-email">Email</label>
                            </div>
                            <input id="submit1" type="submit"><br>

                        </fieldset>
                    </div>
                </form>

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>


                <div class="form-group">
                    <fieldset>

                        <legend>
                            <h1 class="heading-medium">Where do you live?</h1>
                        </legend>

                        <div class="multiple-choice">
                            <input id="radio-1" type="radio" name="radio-group" value="Northern Ireland">
                            <label for="radio-1">Northern Ireland</label>
                        </div>
                        <div class="multiple-choice">
                            <input id="radio-2" type="radio" name="radio-group" value="Isle of Man or the Channel Islands">
                            <label for="radio-2">Isle of Man or the Channel Islands</label>
                        </div>
                        <p class="form-block">or</p>
                        <div class="multiple-choice">
                            <input id="radio-3" type="radio" name="radio-group" value="I am a British citizen living abroad">
                            <label for="radio-3">I am a British citizen living abroad</label>
                        </div>

                    </fieldset>
                </div>

                <!--  <form name="quoted" method="POST" onsubmit="get_action(this);">

                    <input id="poster" type="text" name="poster" required="required" placeholder="Credited Individual."> <br>
                    <textarea class="actual_quote" name="actual_quote" required="required" placeholder="Write the question here!"></textarea><br><br><br>

                    <div class="govuk-radios govuk-radios--conditional" required="required">
                        <h3 style="margin-top:-20px;">Please select one catagory that the quote falls into.</h3>
                        <label for="x"><input type="radio" name="x" value="results-page-1.php" id = "x" checked="checked" />    <span>1</span></label><br>
                        <label for="x"><input type="radio" name="x" value="results-page-2.php" id = "x" /> <span>2</span>    </label><br>
                        <label for="x"><input type="radio" name="x" value="results-page-3.php" id = "x"/>    <span>3</span></label>
                    </div>
                    <input id="submit1" type="submit"><br>
                </form> -->

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
