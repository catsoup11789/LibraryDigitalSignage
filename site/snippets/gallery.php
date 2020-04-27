<?php 
// create variables
$gallery = page('/slideshow/gallery')->images();

// get the current url
$url = $_SERVER['REQUEST_URI'];

if(strpos($url, 'youth')) {
// filter for category:youth images
$gallery = $gallery->filterBy('Category','youth');  
    
} elseif((strpos($url, 'adult'))) {
// filter for category:adult images
$gallery = $gallery->filterBy('Category','adult');

} elseif((strpos($url, 'selfcheck'))) {
// filter for selfcheck:true images
$gallery = $gallery->filterBy('Selfcheck','true');

} else {
// if none exist, load all images
    $gallery = $gallery;
};

// set variable for orientation
if(strpos($url, 'portrait')) {
    $orientation = 'portrait';
} else{
    $orientation = 'landscape';
} ?>


<?php foreach ($gallery->sortBy('sort','asc') as $image): ?>

<!-- filter for only images that are supposed to be visible -->
<?php if (($image->expire()->toDate('Y-m-d') > date('Y-m-d')) && ($image->start()->toDate('Y-m-d') <= date('Y-m-d'))): ?>

<!-- match orientation to image -->
<?php if($image->orientation() == $orientation): ?>
<div class="carousel-cell" style="background-image:url(<?= $image->url() ?>)">

    <!-- if OPAC, show register button, but only if URL AND button text is provided -->
    <?php if((strpos($url, 'opac')) && ($image->link()->isNotEmpty()) && ($image->text()->isNotEmpty())): ?>
    <a href="<?php $site->url(); ?>/frame?shortcut=<?= $image->link() ?>" class="btn-register"><?= $image->text() ?></a>
    <?php endif ?>

</div>

<?php endif ?>

<?php endif ?>

<?php endforeach ?>
