<!doctype html>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="refresh" content="1800; URL='<?= $url ?>'">

    <title>Salina Public Library</title>
    <link rel="stylesheet" id="ebor-google-font-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A200%2C300%2C400%2C400i%2C500%2C600%2C700%7CLora%3A400%2C400i%2C700%2C700i%7CMaterial+Icons&amp;ver=10.5.15" type="text/css" media="all">
    <?= css('assets/css/index.css') ?>
    <link rel="stylesheet" type="text/css" href="http://ds.salinalibrary.info/assets/css/templates/default.css?<?= date('his'); ?>" />


</head>

<body>

    <div class="page" <?php if($page->template() == 'frame'): ?>style="width:100%" <?php endif ?>>
