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

                <form action="teacher-enter-location-confirm.php" method="POST" role="form" data-abide novalidate>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                    </div>

                    <div class="govuk-form-group">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="bank-hint">

                            <div>


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


                                <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                    <h1 class="govuk-fieldset__heading">
                                        Where did you teach between
                                        <?php echo $tax_year_start_date ?> and
                                        <?php echo $tax_year_end_date ?>?
                                    </h1>
                                </legend>

                                <!--  <input class="govuk-input" id="teacher-num-schools" name="teacher-num-schools" type="hidden" value="1"> -->

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
                                    <!-- <input class="govuk-input" id="teacher-schools-setup" name="teacher-schools-setup" type="hidden" value="true"> -->
                                    <label class="govuk-label" for="teacher-school-name">Enter the school name</label>
                                    <input class="govuk-input  awesomplete" list="eligible-schools" required pattern="number" aria-errormessage="example1Error1" />
                                    <?php include("../includes/school-list.php"); ?>
                                    <span class="form-error" id="example1Error1">
                                    Error message
                                    </span>
                                </div>

                                <div class="govuk-form-group">
                                    <button type="submit" class="govuk-button">Continue</button>
                                </div>

                            </div>

                        </fieldset>
                    </div>

                </form>


                <!-- Abide test -->
                <form data-abide novalidate>
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                    </div>
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-12">
                                <label>Number Required
          <input type="text" placeholder="1234" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="number">
          <span class="form-error" id="example1Error1">
            Yo, you had better fill this out, it's required.
          </span>
        </label>
                                <p class="help-text" id="example1Hint1">Here's how you use this input field!</p>
                            </div>
                            <div class="cell small-12">
                                <label>Password Required
          <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="example1Hint2" aria-errormessage="example1Error2" required >
          <span class="form-error" id="example1Error2">
            I'm required!
          </span>
        </label>
                                <p class="help-text" id="example1Hint2">Enter a password please.</p>
                            </div>
                            <div class="cell small-12">
                                <label>Re-enter Password
          <input type="password" placeholder="yeti4preZ" aria-describedby="example1Hint3" aria-errormessage="example1Error3" required pattern="alpha_numeric" data-equalto="password">
          <span class="form-error" id="example1Error3">
            Hey, passwords are supposed to match!
          </span>
        </label>
                                <p class="help-text" id="example1Hint3">This field is using the `data-equalto="password"` attribute, causing it to match the password field above.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell large-6">
                                <label>URL Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL.
          <input type="text" placeholder="https://foundation.zurb.com" pattern="url">
        </label>
                            </div>
                            <div class="cell large-6">
                                <label>Website Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL or a Domain.
          <input type="text" placeholder="https://zurb.com or zurb.com" pattern="website">
        </label>
                            </div>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell large-6">
                                <label>European Cars, Choose One, it can't be the blank option.
          <select id="select" required>
            <option value=""></option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
        </label>
                            </div>
                            <fieldset class="cell large-6">
                                <legend>Check these out</legend>
                                <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                                <input id="checkbox2" type="checkbox" required><label for="checkbox2">Checkbox 2</label>
                                <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <fieldset class="cell large-6">
                                <legend>Choose Your Favorite - not required, you can leave this one blank.</legend>
                                <input type="radio" name="pockets" value="Red" id="pocketsRed"><label for="pocketsRed">Red</label>
                                <input type="radio" name="pockets" value="Blue" id="pocketsBlue"><label for="pocketsBlue">Blue</label>
                                <input type="radio" name="pockets" value="Yellow" id="pocketsYellow"><label for="pocketsYellow">Yellow</label>
                            </fieldset>
                            <fieldset class="cell large-6">
                                <legend>Choose Your Favorite, and this is required, so you have to pick one.</legend>
                                <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
                                <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required><label for="pokemonBlue">Blue</label>
                                <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <fieldset class="cell large-6">
                                <button class="button" type="submit" value="Submit">Submit</button>
                            </fieldset>
                            <fieldset class="cell large-6">
                                <button class="button" type="reset" value="Reset">Reset</button>
                            </fieldset>
                        </div>
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
