<?php ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php include("../includes/head.php"); ?>

<?php include("../includes/variables.php"); ?>

<body class="govuk-template__body js-enabled">
    <!-- Masthead -->
    <?php include("../includes/masthead.php"); ?>

    <!-- Alpha banner -->
    <?php include("../includes/alpha-banner.php"); ?>




    <!-- Footer -->
    <?php include("../includes/footer.php "); ?>

    <script type="text/javascript ">
        function get_action(form) {
            form.action = document.querySelector('input[name = "x "]:checked').value;
        }

    </script>
    <script>
        function showSelect() {
            var select = document.getElementById('conditional-contact-method-conditional-email');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-contact-method-conditional-email ").style.display = 'none';
        }

    </script>
    <script>
        function showSelect2() {
            var select = document.getElementById('conditional-contact-method-conditional-mobile');
            select.className = 'show';
        }

        function hide() {
            document.getElementById("conditional-contact-method-conditional-mobile ").style.display = 'none';
        }

    </script>

    <?php include("../includes/javascript.php "); ?>
</body>

</html>
