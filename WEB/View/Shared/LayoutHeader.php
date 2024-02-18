<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Yash Admin Sales Management System</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="<?php echo AssetPath('/vendor/bootstrap-select/dist/css/bootstrap-select.min.css'); ?>"
        rel="stylesheet">
    <link href="<?php echo AssetPath('/vendor/swiper/css/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?php echo AssetPath('/vendor/swiper/css/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link href="<?php echo AssetPath('/vendor/datatables/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo AssetPath('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') ?>"
        rel="stylesheet">

    <!-- tagify-css -->
    <link href="<?php echo AssetPath('/vendor/tagify/dist/tagify.css') ?>" rel="stylesheet">

    <!-- Style css -->
    <link href="<?php echo AssetPath('/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div>
            <img src="<?php echo AssetPath('images/pre.gif') ?>" alt="">
        </div>
    </div>
    
    <script src="<?php echo AssetPath('/vendor/global/global.min.js') ?>"></script>
    <script src="<?php echo AssetPath('/js/scripts/request_data.js') ?>"></script>
    <script src="<?php echo AssetPath('/js/scripts/helper.js') ?>"></script>

    <div id="main-wrapper">
        <?php include 'Navbar.php' ?>
        <div class="content-body">
            <!-- FOOTER ADA DI FILE LayoutFooter.php -->