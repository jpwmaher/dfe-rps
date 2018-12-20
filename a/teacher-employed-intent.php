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

                <form action="teacher-employed-actual.php" method="POST" role="form" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                        <p><a href="#example1Error1">Please enter the subject you were employed to teach</a></p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    What subject were you employed to teach at
                                    <?php echo $_POST["teacher-school-name"]; ?>?
                                </h1>
                            </legend>

                            <div class="govuk-form-group">
                                <!--  <label class="govuk-label" for="teacher-intent">Enter the subject you were employed to teach at</label> -->
                                <span class="form-error" id="example1Error1" data-form-error-for="teacher-school-name"><br/>
                                   Enter the subject were you employed to teach at <?php echo $_POST["teacher-school-name"]; ?>
                                    </span>
                                <span id="teacher-trn-hint" class="govuk-hint">If you've been off on long-term leave or sick, include the time you were scheduled to teach these subjects.</span>

                                <input class="govuk-input " id="teacher-trn" name="teacher-intent" type="text" value="" required>
                                <div class="govuk-form-group">

                                    <span id="check-teaching-hint" class="govuk-hint">
                If you've been off on long-term leave or sick, include the time you were scheduled to teach these subjects.
              </span>

                                    <div class="govuk-radios govuk-radios--conditional" data-module="radios">

                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-science" name="check-teaching" type="radio" value="science" data-aria-controls="conditional-check-teaching-conditional-science">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-science">
                    Science (physics, chemistry or biology)
                  </label>
                                        </div>

                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-languages" name="check-teaching" type="radio" value="languages" data-aria-controls="conditional-check-teaching-conditional-languages">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-languages">
                    Languages (not including English)
                  </label>
                                        </div>

                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-compscience" name="check-teaching" type="radio" value="compscience" data-aria-controls="conditional-check-teaching-conditional-compscience">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-compscience">
                    Computer science
                  </label>
                                        </div>

                                        <div class="govuk-radios__item">

                                            <input class="govuk-radios__input" id="check-teaching-conditional-other" name="check-teaching" type="radio" value="other" aria-controls="conditional-check-teaching-conditional-other" aria-expanded="false">

                                            <label class="govuk-label govuk-radios__label" for="check-teaching-conditional-other">
                    Other
                  </label>
                                        </div>

                                        <div class="govuk-radios__conditional govuk-radios__conditional--hidden" id="conditional-check-teaching-conditional-other">

                                            <div class="govuk-form-group ">



                                                <label class="govuk-label" for="teaching-subject-other">
                      Enter the subject or subjects you were employed to teach
                    </label>
                                                <input class="govuk-input govuk-!-width-two-thirds" id="teaching-subject-other" name="teaching-subject-other">

                                            </div>

                                            <div class="govuk-form-group ">

                                                <fieldset class="govuk-fieldset">

                                                    <legend class="govuk-fieldset__legend govuk-fieldset__legend--m">
                                                        <h2 class="govuk-fieldset__heading">
                                                            Which subject did you spend most of your time teaching?
                                                        </h2>
                                                    </legend>



                                                    <div class="govuk-radios">

                                                        <div class="govuk-radios__item">

                                                            <input class="govuk-radios__input" id="teaching-time-science" name="check-teaching-time" type="radio" value="science">

                                                            <label class="govuk-label govuk-radios__label" for="teaching-time-science">
                            Science (physics, chemistry or biology)
                          </label>
                                                        </div>

                                                        <div class="govuk-radios__item">

                                                            <input class="govuk-radios__input" id="teaching-time-languages" name="check-teaching-time" type="radio" value="languages">

                                                            <label class="govuk-label govuk-radios__label" for="teaching-time-languages">
                            Languages (not including English)
                          </label>
                                                        </div>

                                                        <div class="govuk-radios__item">

                                                            <input class="govuk-radios__input" id="teaching-time-compscience" name="check-teaching-time" type="radio" value="compscience">

                                                            <label class="govuk-label govuk-radios__label" for="teaching-time-compscience">
                            Computer science
                          </label>
                                                        </div>

                                                        <div class="govuk-radios__item">

                                                            <input class="govuk-radios__input" id="teaching-time-other" name="check-teaching-time" type="radio" value="other">

                                                            <label class="govuk-label govuk-radios__label" for="teaching-time-other">
                            Other
                          </label>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="govuk-form-group">

                                <button type="submit" class="govuk-button">Continue</button>

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
</body>

</html>
