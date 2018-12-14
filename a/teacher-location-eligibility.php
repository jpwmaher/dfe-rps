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

                <form action="teacher-enter-location-confirm" method="POST" role="form">
                    <div class="govuk-form-group {% if (data['teacher-error-no-school']) %}govuk-form-group--error{% endif %}">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <div>

                                <!--
                                <div class="govuk-error-summary" aria-labelledby="error-summary-title" role="alert" tabindex="-1" data-module="error-summary">
                                    <h2 class="govuk-error-summary__title" id="error-summary-title">There's a problem</h2>
                                    <div class="govuk-error-summary__body">
                                        <ul class="govuk-list govuk-error-summary__list">
                                            <li>
                                                <a href="#enter-school-error">{{ data['error-message'] }}</a>
                                            </li>
                                        </ul>
                                    </div> 
                                </div>
-->

                                <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                    <h1 class="govuk-fieldset__heading">
                                        Where did you teach between
                                        <?php echo $tax_year_start_date ?> and
                                        <?php echo $tax_year_end_date ?>?
                                    </h1>
                                </legend>

                                <input class="govuk-input" id="teacher-num-schools" name="teacher-num-schools" type="hidden" value="1">

                                <span id="trn-hint" class="govuk-hint">
              <details class="govuk-details">
                <summary class="govuk-details__summary">
                  <span class="govuk-details__summary-text">You taught at more than one school</span>
                                </summary>
                                <div class="govuk-details__text">
                                    <p class="govuk-body">For now, enter one of the schools you've taught at. You can check another school when you've finished.</p>
                                </div>
                                </details>
                                </span>

                                <div class="govuk-form-group">
                                    <input class="govuk-input" id="teacher-schools-setup" name="teacher-schools-setup" type="hidden" value="true">
                                    <label class="govuk-label" for="teacher-school-name">Enter the school name</label>
                                    <input id="teacher-school-name" name="teacher-school-name" type="text" class="govuk-input awesomplete" data-list="Ada, Java, JavaScript, Brainfuck, LOLCODE, Node.js, Ruby on Rails" />
                                </div>

                                <div class="govuk-form-group">
                                    <button type="submit" class="govuk-button">Continue</button>
                                </div>

                            </div>

                        </fieldset>
                    </div>

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
