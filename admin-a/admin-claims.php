<?php ?>
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

                <form action="teacher-contact-method.php" method="POST" role="form" novalidate data-abide>

                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>
                            <?php echo $form_generic_error_message ?>
                        </p>
                    </div>

                    <div class="govuk-form-group ">
                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                            <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                                <h1 class="govuk-fieldset__heading">
                                    Check claims from teachers at Moorside High School
                                </h1>
                                <p class="govuk-body">These teachers have applied to claim back their student loan payments.</p>
                                <p class="govuk-body">To process the claims, we need you to check what the teacher has told us about:
                                </p>
                                <ul class="govuk-list govuk-list--bullet">
                                    <li>the subject they taught</li>
                                    <li>how much of their time was spent teaching that subject</li>
                                    <li>how much student loan they paid back through their wages</li>
                                </ul>
                                <p class="govuk-body">The teachers listed have given us permission to check these details with you.</p>
                                <form action="admin-claim" method="POST" role="form">
                                    <div class="govuk-form-group">
                                        <fieldset class="govuk-fieldset" role="group" aria-describedby="tbc">

                                            <ul class="app-task-list">
                                                <li>
                                                    <h2 class="app-task-list__section">To be completed (3)</h2>
                                                    <ul class="app-task-list__items">


                                                        <li class="app-task-list__item">
                                                            <button type="submit" class="button-as-link" formaction="admin-claim" name="claim-id" value="1">Jane Jones<span class="date-applied">Due by 11 Dec 2018</span></button>
                                                            <strong class="govuk-tag incomplete app-task-list__task-completed">To do</strong>
                                                        </li>



                                                        <li class="app-task-list__item">
                                                            <button type="submit" class="button-as-link" formaction="admin-claim" name="claim-id" value="2">Barbara Smith<span class="date-applied">Due by 12 Dec 2018</span></button>
                                                            <strong class="govuk-tag incomplete app-task-list__task-completed">To do</strong>
                                                        </li>



                                                        <li class="app-task-list__item">
                                                            <button type="submit" class="button-as-link" formaction="admin-claim" name="claim-id" value="3">David Powell<span class="date-applied">Due by 15 Dec 2018</span></button>
                                                            <strong class="govuk-tag incomplete app-task-list__task-completed">To do</strong>
                                                        </li>




                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="app-task-list__section">Completed claims (1)</h2>
                                                    <ul class="app-task-list__items">








                                                        <li class="app-task-list__item">
                                                            ID: TSLR-089 <span class="date-applied">Completed on 05 Dec 2018</span>
                                                            <strong class="govuk-tag app-task-list__task-completed" id="company-information-completed">Completed</strong>
                                                        </li>


                                                    </ul>
                                                </li>
                                            </ul>

                                        </fieldset>
                                    </div>
                                </form>

                            </legend>

                            <div class="govuk-form-group">
                                <h2 class="govuk-heading-m">Sign-in</h2>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="bank-account-name">Email address</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="bank-account-name"><br/>
                                   Enter your email address
                                    </span>
                                    <input class="govuk-input govuk-!-width-two-thirds " id="teacher-bank-account-name" name="teacher-bank-account-name" type="email" value="" required pattern="email">
                                </div>
                                <div class="govuk-form-group">
                                    <label class="govuk-label" for="bank-account-number">Password</label>
                                    <span class="form-error" id="example1Error1" data-form-error-for="bank-account-number"><br/>
                                   Enter your password
                                    </span>
                                    <input class="govuk-input govuk-!-width-two-thirds " id="teacher-bank-account-number" name="teacher-bank-account-number" type="password" value="" required>
                                    <p class="govuk-body-s"><a href="#">I've forgotten my password</a></p>
                                </div>

                            </div>

                        </fieldset>
                    </div>


                    <button type="submit" class="govuk-button">Sign in</button>

                    <div class="govuk-form-group">
                        <div class="govuk-inset-text">
                            <p>By continuing you accept the <a href="#">terms and conditions</a>.</p>
                        </div>
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
