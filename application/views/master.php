<!DOCTYPE html>
<html lang="Ja">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="予約管理システム" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="192x192" href="images/android-desktop.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Material Design Lite">
<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#3372DF">

<title><?php echo $title; ?></title>

<!-- MDL -->
<link rel="stylesheet" href="<?php echo base_url(); ?>mdl/material.min.css">
<script src="<?php echo base_url(); ?>mdl/material.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<!-- MDL DASHBOARD -->
<link rel="stylesheet" href="<?php echo base_url(); ?>mdl/dashboard/styles.css">


 <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
</style>
</head>

<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<?php echo $this->load->view('header','',TRUE); ?>

<?php echo $this->load->view('navi','',TRUE); ?>



<main class="mdl-layout__content">
<div class="page-content">
    <?php echo $main; ?>
</div>
</main>

<?php echo $this->load->view('footer','',TRUE); ?>
</div>
</body>

