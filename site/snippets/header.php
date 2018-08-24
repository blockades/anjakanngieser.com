<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <?php echo css('/assets/css/style.css?v=0.11') ?>
  <!--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
  <!--<script src="https://connect.soundcloud.com/sdk/sdk-3.1.2.js"></script>-->
  <?php echo js('/assets/js/jquery.js?v=0.1') ?>
  <?php echo js('/assets/js/main.js?v=0.1') ?>
</head>

<body class="home no-transitions">

  <header>
    <h1><a href="<?php echo $site->url() ?>">Anja Kanngieser</a></h1>
    <h2>Transversal Geographies</h2>
    <span><a href="<?php echo $site->url() ?>/bio-cv">Bio/CV</a></span>
  </header>
