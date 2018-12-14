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
                <h1 class="govuk-heading-xl">Check if you’re eligible</h1>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <nav class="tslr-contents-list" role="navigation">
                    <h2 class="govuk-heading-m">Contents</h2>
                    <ul class="govuk-list">
                        <li>&mdash; <a class="govuk-link" href="/a/teacher-claim-bursary">About this scheme</a></li>
                        <li>&mdash; Check if you’re eligible</li>
                        <li>&mdash; <a class="govuk-link" href="#">Make a claim</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <h2 class="govuk-heading-l">Eligibility</h2>

                <p class="govuk-body">To claim back student loan payments made through your wages between
                    <?php echo $q$tax_year_start_date ?> and
                    <?php echo $$tax_year_end_date  ?> (the last tax year), you must:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>have qualified as a teacher after
                        <?php echo $qualification_date  ?>
                    </li>
                    <li>still be teaching in a school in the UK</li>
                    <li>have worked at a state-funded school or academy, or in a special school (a school that teaches children who have special educational needs) in the last tax year</li>
                    <li>have worked at a school that’s in a participating local authority area in England in the last tax year</li>
                    <li>have spent most of your scheduled hours at the school teaching 11 to 16 year olds</li>
                </ul>
                <p class="govuk-body">If you worked in a state-funded school or academy you must also have taught at least one of these subjects for at least 50% of your time there:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>biology</li>
                    <li>chemistry</li>
                    <li>computer science</li>
                    <li>physics</li>
                    <li>languages (not English)</li>
                </ul>
                <p>If you worked in a special school, you do not need to have taught these subjects.</p>

                <h3 class="govuk-heading-m">Participating local authority areas</h3>
                <p>You can only claim your student loan payments back in certain areas in England – areas where there are fewer teachers in these subjects at the moment. To make a claim, you must have taught at a school or academy in one of these local authority areas:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>Barnsley</li>
                    <li>Blackpool</li>
                    <li>Bracknell Forest</li>
                    <li>Bradford</li>
                    <li>Cambridgeshire</li>
                    <li>Derby</li>
                    <li>Derbyshire</li>
                    <li>Doncaster</li>
                    <li>Halton</li>
                    <li>Knowsley</li>
                    <li>Luton</li>
                    <li>Middlesbrough</li>
                    <li>Norfolk</li>
                    <li>North-east Lincolnshire</li>
                    <li>North Yorkshire</li>
                    <li>Northamptonshire</li>
                    <li>Northumberland</li>
                    <li>Oldham</li>
                    <li>Peterborough</li>
                    <li>Portsmouth</li>
                    <li>Salford</li>
                    <li>Sefton</li>
                    <li>St Helens</li>
                    <li>Stoke-on-Trent</li>
                    <li>Suffolk</li>
                </ul>

                <nav class="tslr-pagination" role="navigation">
                    <ul>
                        <li class="next">
                            <a href="#">
              <span class="text"><span class="arrow">⇢</span>Next</span>
              <span class="label">Make a claim</span>
            </a>
                        </li>
                        <li class="prev">
                            <a href="teacher-claim-bursary.php">
              <span class="text"><span class="arrow">⇠</span>Previous</span>
              <span class="label">About this scheme</span>
            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="sidebar" class="large-4 cell">
                <h4 class="govuk-heading-s">Related content</h4>
                <ul class="govuk-list">
                    <li>Check which local authority area your school is in:</li>
                    <li><a href="https://get-information-schools.service.gov.uk/" class="govuk-link">Get information about schools</a></li>
                </ul>

            </div>
        </div>
    </div>

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
