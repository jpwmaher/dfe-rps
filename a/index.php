<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body>
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>

    <div id="h1-title" class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h1 class="govuk-heading-xl">Teachers: claim back student loan payments</h1>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <nav class="tslr-contents-list" role="navigation">
                    <h2 class="govuk-heading-m">Contents</h2>
                    <ul class="govuk-list">
                        <li>&mdash; About this scheme</li>
                        <li>&mdash; <a class="govuk-link" href="teacher-tslr-eligibility">Check if you’re eligible</a></li>
                        <li>&mdash; <a class="govuk-link" href="teacher-tslr-apply">Make a claim</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <h2 class="govuk-heading-l">About this scheme</h2>

                <p class="govuk-body">From
                    <?php echo $policy_criteria_start_date  ?>, teachers can claim back any student loan payments made through their wages between
                    <?php echo $tax_year_start_date  ?> and
                    <?php echo $tax_year_start_date  ?>(the last tax year).</p>
                <p class="govuk-body">The scheme is for teachers in certain subjects and is only running in certain areas of England – areas that have fewer teachers in these subjects at the moment.</p>
                <p class="govuk-body">The payment you get will be in one lump sum, and you will not have to pay tax or National Insurance on it.</p>

                <nav class="tslr-pagination" role="navigation">
                    <ul>
                        <li class="next">
                            <a href="teacher-tslr-eligibility">
              <span class="text"><span class="arrow">⇢</span>Next</span>
              <span class="label">Check if you’re eligible</span>
            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="large-4 cell">
                &nbsp;
            </div>
        </div>
    </div>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
