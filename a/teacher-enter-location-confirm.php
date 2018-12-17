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
</form> -->

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
