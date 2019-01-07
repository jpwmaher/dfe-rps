<?php session_start(); ?>

<?php 
$_SESSION['worked'] = $_POST['worked'];
$_SESSION['intent'] = $_POST['intent'];
?>

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

                <!--   <div class="govuk-inset-text">You have successfully confirmed your identity.</div> -->

                <form action="admin-claim-teacher-1.php" method="POST" role="form" onsubmit="get_action(this);" data-abide novalidate>

                    <input type="hidden" name="worked" value="<?=htmlspecialchars($_POST[ 'worked']);?>" />

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    What subject were you originally employed to teach at Moorside High School?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">

                                <div class="govuk-radios">

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="intent" type="radio" id="x" value="Science">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-yes">Science</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="intent" type="radio" id="x" value="Maths">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-no">Maths</label>
                                    </div>

                                    <div class="govuk-radios__item">

                                        <input class="govuk-radios__input" name="intent" type="radio" id="x" value="Other">

                                        <label class="govuk-label govuk-radios__label" for="check-still-teaching-no">Other</label>
                                    </div>

                                </div>
                            </div>


                            <div class="govuk-form-group">
                                <br/>
                                <button type="submit" class="govuk-button">Update</button>

                            </div>

                        </fieldset>
                    </div>

                </form>


            </div>
            <div id="sidebar" class="large-4 cell no-top-border">
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>
    <script>
        function showSelect2() {
            var select = document.getElementById('conditional-subject');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-subject").style.display = 'none';
        }

    </script>
</body>

</html>
