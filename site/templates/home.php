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

<h1>Select a Slideshow:</h1>
<ul>
    <li><a href="http://ds.salinalibrary.info/opac/">OPAC (All)</a></li>
    <li><a href="http://ds.salinalibrary.info/opac/adult">OPAC (Adult)</a></li>
    <li><a href="http://ds.salinalibrary.info/opac/youth">OPAC (Youth)</a></li>
    <li><a href="http://ds.salinalibrary.info/selfcheck/">Selfcheck (All: autodetects the orientation)</a> </li>
    <li><a href="http://ds.salinalibrary.info/all/">Everything Else (All)</a></li>
    <li><a href="http://ds.salinalibrary.info/adult">Everything Else (Adult)</a></li>
    <li><a href="http://ds.salinalibrary.info/youth">Everything Else (Youth)</a></li>
</ul>


<?php snippet('footer') ?>
