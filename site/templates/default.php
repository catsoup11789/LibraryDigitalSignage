<!-- Get url to check for opac -->
<?php $url = $_SERVER['REQUEST_URI']; $opac = strpos($url, 'opac'); ?>

<?php snippet('header') ?>

<div <?php if(strpos($url, 'opac')): ?>class="left" <?php endif ?>>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": 9000, "pauseAutoPlayOnHover": false, "wrapAround": true, "imagesLoaded": true, "pageDots": false <?php if($opac === false): ?>, "prevNextButtons": false <?php endif ?>}'>

        <?php snippet('gallery') ?>

    </div>
</div>

<!-- If OPAC, load up OPAC buttons -->
<?php if(strpos($url, 'opac')): ?>
<div class="right">
    <?php snippet('menu') ?>
</div>
<?php endif ?>


<?php snippet('footer') ?>
