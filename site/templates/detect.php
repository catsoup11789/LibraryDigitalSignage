<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. 
 * This home template renders content from others pages, the children of the `photography` page to display a nice gallery grid.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

<script>
    if (window.matchMedia("(orientation: portrait)").matches) {
        // you're in PORTRAIT mode
        window.location.replace("http://ds.salinalibrary.info/selfcheck/portrait");
    }

    if (window.matchMedia("(orientation: landscape)").matches) {
        // you're in LANDSCAPE mode
        window.location.replace("http://ds.salinalibrary.info/selfcheck/landscape");
    }

</script>


<?php snippet('footer') ?>
