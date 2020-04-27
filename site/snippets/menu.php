<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This gallery snippet is used in the gallery plugin (`/site/plugins/gallery`)
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<?php $shortcuts = page('/links')->children(); ?>

<?php foreach ($shortcuts as $shortcut): ?>
<a href="http://ds.salinalibrary.info/frame?shortcut=<?= $shortcut->link() ?>"><?= $shortcut->title() ?></a>
<?php endforeach ?>
