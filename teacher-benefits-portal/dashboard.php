<?php 
 // starting the session
 session_start();
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables-portal.php"); ?>

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
                        <li class="govuk-breadcrumbs__list-item" aria-current="page">
                            <?php echo $service_name ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div id="main-content-left-only" class="cell">

                <!--  <h1 class="govuk-heading-xl">
                    Teacher Benefits Portal
                </h1> -->


                <div id="summary-panel" class="grid-x grid-padding-x grid-margin-x callout">
                    <div class="large-4 cell">
                        <h2>Jane Jones</h2>
                        <span>TRN:</span>
                        <h4>1234-5678</h4>
                        <span>Date qualified:</span>
                        <h4>01-Sep-2016</h4>
                    </div>
                    <div class="large-4 cell">
                        <span>Current role:</span>
                        <h4>Teacher of Science</h4>
                        <span>Current school:</span>
                        <p><strong>Thornton Primary School<br> Thornton Road<br> Bradford
                            <br> BD13 3NN</strong></p>
                    </div>
                    <div class="large-4 cell">
                        <span>Email:</span>
                        <h4>j.jones@thornton-primary.ac.uk</h4>
                        <span>Mobile:</span>
                        <h4>07123456789</h4>
                        <a href="#" style="color: white; text-decoration: underline;">Change my contact details</a>
                    </div>
                </div>


                <div class="grid-x grid-padding-x grid-margin-x">
                    <div class="large-8 cell">
                        <h2>My perks</h2>
                        <ul class="app-task-list">
                            <li>
                                <h2 class="app-task-list__section">To be completed (1)</h2>
                                <ul class="app-task-list__items">
                                    <li class="app-task-list__item">
                                        <button type="submit" class="button-as-link" formaction="admin-claim-teacher-1.php" name="claim-id" value="1">Jane Jones<span class="date-applied">Due by 11 Feb 2019</span></button>
                                        <strong class="govuk-tag incomplete app-task-list__task-completed">To do</strong>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h2 class="app-task-list__section">Completed claims (1)</h2>
                                <ul class="app-task-list__items">
                                    <li class="app-task-list__item">
                                        Ian Roberts <span class="date-applied">Completed on 05 Dec 2018</span>
                                        <strong class="govuk-tag app-task-list__task-completed" id="company-information-completed">Completed</strong>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Footer -->
    <?php include("../includes/footer.php"); ?>

    <?php include("../includes/javascript.php"); ?>

</body>

</html>
