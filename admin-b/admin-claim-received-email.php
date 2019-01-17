<?php ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body>
    <!-- Masthead -->
    <!--  <?php include("../includes/masthead.php"); ?> -->

    <!-- Alpha banner -->
    <!--  <?php include("../includes/alpha-banner.php"); ?> -->


    <div class="grid-container">
        <div id="main-content-area" class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <h3>Email</h3>
            </div>
            <div id="main-content-left-only" class="large-8 cell callout secondary">


                <h2 class="govuk-heading-s">Subject</h2>
                <p class="govuk-body">Jane Jones: claim for retention payment</p>
                <h2 class="govuk-heading-s">Body</h2>
                <p class="govuk-body"><span style="color: red;">Dear</span> [name]</p>
                <p class="govuk-body">Jane Jones has applied to claim a retention payment.</p>
                <p class="govuk-body">To process the claim, we need you to check:</p>
                <ul class="govuk-list govuk-list--bullet">
                    <li>they qualified as a teacher on or after
                        <?php echo $qualification_date  ?>
                    </li>
                    <li>they worked at Moorside High School during the claim period</li>
                    <li>which subject they were originally employed to teach at Moorside High School</li>
                    <li>which route they took to qualify as a teacher</li>
                    <li>which subject they have a specialised qualification in</li>
                    <li>whether at least 50% of their time was spent teaching physics or maths</li>
                </ul>
                <p class="govuk-body">Confirm this information within the next two weeks. If you cannot, {do something}.</p>
                <p class="govuk-body"><a href="admin-sign-in.php">Sign in to DfE</a> to check Jane Jones’s details.</p>
                <p class="govuk-body">Kind regards</p>
                <p class="govuk-body">{Service name}</p>


            </div>
        </div>
    </div>


    <!-- Footer -->
    <!-- <?php include("../includes/footer.php"); ?> -->

    <?php include("../includes/javascript.php"); ?>
</body>

</html>
