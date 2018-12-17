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

                <script type="text/javascript">
                    function get_action(form) {
                        form.action = document.querySelector('input[name = "x"]:checked').value;
                    }

                </script>


                <form name="quoted" method="get" onsubmit="get_action(this);">
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
