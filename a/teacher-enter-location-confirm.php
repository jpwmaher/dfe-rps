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

                <form onsubmit="return mysubmit();">
                    <select id="option" name="Region">
   <option value="www.google.com">Option1</option>
   <option value="www.amazon.co.uk">Option2</option>
   <option value="www.apple.com">Option3</option>
   <option value="www.google.com">Option4</option>
   <option value="value3.html">Option5</option>
</select>

                    <input type="submit" id="submit" value="Submit">

                </form>

                <script>
                    function mysubmit() {
                        //you can return false; here to prevent the form being submitted
                        //useful if you want to validate the form

                        window.location.href = 'http://' + document.getElementById('option').value;
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
