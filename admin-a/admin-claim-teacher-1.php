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

    <!-- Breadcrumbs -->
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <div class="govuk-breadcrumbs">
                    <ol class="govuk-breadcrumbs__list">
                        <li class="govuk-breadcrumbs__list-item" aria-current="page">All claims: Moorside High School</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="large-8 cell">

                <h1 class="govuk-heading-xl">
                    Retention payment claim details:
                </h1>

                <br/>

                <form action="admin-confirmation" method="POST" role="form">
                    <div class="govuk-form-group">

                        <input id="admin-claim" name="admin-claim" type="hidden" value="true">

                        <!-- only add a heading for a list if there is more than one list -->
                        <h2 class="govuk-heading-m">Teacher details</h2>

                        <!-- use additional modifier class to change column widths for multiple groups of questions and answers: -->
                        <!--   * `app-check-your-answers--short` for short questions -->
                        <!--   * `app-check-your-answers__questions-long` for long questions -->
                        <!--   * none for single group of q&a -->
                        <dl class="app-check-your-answers app-check-your-answers--short">

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">Teacher name</dt>
                                <dd class="app-check-your-answers__answer">Jane Jones</dd>
                                <dd class="app-check-your-answers__change">&nbsp;</dd>
                            </div>

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">Teacher reference number (TRN)</dt>
                                <dd class="app-check-your-answers__answer">2316748</dd>
                                <dd class="app-check-your-answers__change">&nbsp;</dd>
                            </div>

                            <div class="app-check-your-answers__contents">
                                <dt class="app-check-your-answers__question">School</dt>
                                <dd class="app-check-your-answers__answer">Moorside High School</dd>
                                <dd class="app-check-your-answers__change">&nbsp;</dd>
                            </div>

                        </dl>

                    </div>

                    <div class="govuk-form-group ">

                        <h2 class="govuk-heading-m">Claim details for Jane Jones</h2>



                        <dl class="app-check-your-answers wider-titles app-check-your-answers--short">


                            <div class="app-check-your-answers__contents">


                                <dt class="app-check-your-answers__question">Did they work at the school between 6 April 2018 and 5 April 2019?</dt>

                                <dd class="app-check-your-answers__answer">Yes</dd>

                                <dd class="app-check-your-answers__change">
                                    <button type="submit" class="button-as-link" formaction="admin-confirm-location-eligibility">Update<span class="govuk-visually-hidden"> school eligibility</span></button>
                                </dd>

                            </div>


                            <div class="app-check-your-answers__contents">



                                <dt class="app-check-your-answers__question">Did they actually teach biology, chemistry, physics, computer science or languages (not English)?</dt>


                                <dd class="app-check-your-answers__answer answer-incomplete">Incomplete</dd>

                                <dd class="app-check-your-answers__change">
                                    <button type="submit" class="button-as-link" formaction="admin-confirm-teaching-eligibility">Update<span class="govuk-visually-hidden"> teaching eligibility</span></button>
                                </dd>

                            </div>


                            <div class="app-check-your-answers__contents">


                                <dt class="app-check-your-answers__question">Between 6 April 2018 and 5 April 2019, did they spend most of their scheduled hours teaching people who are 11 to 16 years old?</dt>

                                <dd class="app-check-your-answers__answer answer-incomplete">Incomplete</dd>

                                <dd class="app-check-your-answers__change">
                                    <button type="submit" class="button-as-link" formaction="admin-confirm-phase-eligibility">Update<span class="govuk-visually-hidden"> educational phase</span></button>
                                </dd>

                            </div>


                            <div class="app-check-your-answers__contents">


                                <dt class="app-check-your-answers__question">How much student loan did they repay between 6 April 2018 and 5 April 2019?</dt>

                                <dd class="app-check-your-answers__answer answer-incomplete">Incomplete</dd>

                                <dd class="app-check-your-answers__change">
                                    <button type="submit" class="button-as-link" formaction="admin-confirm-repayment-amount">Update<span class="govuk-visually-hidden"> student loan amount</span></button>
                                </dd>

                            </div>

                        </dl>

                    </div>

                    <h2 class="govuk-heading-m">Confirm the claim</h2>
                    <p>By submitting this form you are confirming that, to the best of your knowledge, the details you are providing are correct.</p>
                    <p class="govuk-body">
                        <button type="submit" class="govuk-button" name="update-claim" value="update">Confirm and send</button>
                    </p>

                </form>

            </div>

            <div id="sidebar" class="large-4 cell no-top-border">
                &nbsp;
            </div>

        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>

</body>

</html>
