<?php ?>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/what-input.js"></script>
<script src="/js/vendor/foundation.js"></script>
<script src="/js/app.js"></script>
<script>
    function myCustomValidator(
        $el, /* jQuery element to validate */
        required, /* is the element required according to the `[required]` attribute */
        parent /* parent of the jQuery element `$el` */
    ) {
        if (!required) return true;
        var from = $('#' + $el.attr('data-greater-than')).val(),
            to = $el.val();
        return (parseInt(to) > parseInt(from));
    };

    // Set default options
    Foundation.Abide.defaults.patterns['dashes_only'] = /^[0-9-]*$/;
    Foundation.Abide.defaults.patterns['letters_spaces'] = /^[a-z\d\-_\s]+$/i;
    Foundation.Abide.defaults.validators['greater_than'] = myCustomValidator;

    // Initialize Foundation
    $(document).foundation();

</script>
