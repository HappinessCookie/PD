<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? header("Content-Type: text/html; charset=utf-8"); //Нужно будет удалить ?>
<!DOCTYPE html>
<html>
<head>
    <? $APPLICATION->ShowHead() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xD</title>
    <!-- Bootstrap -->
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/style.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/slider-pro.min.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/sticker.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/grid15.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/lightbox.css" rel="stylesheet">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/media.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
        var map;
        function initialize() {

            var mapOptions = {
                zoom: 17,
                center: new google.maps.LatLng(54.7244886, 56.0087084)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<? if ($USER->IsAdmin()): ?>
    <div id="panel">
        <? /*$APPLICATION->ShowPanel();*/ ?>
    </div>
<? endif ?>
<div class="header navbar navbar-inverse navbar-fixed-top">
    <div class="container side-pad">
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs" style="color: white;">8-800-555-55-55</div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="height: 80px;">
            <img src="">
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 navbar-collapse text-center pull-right collapse" id="responsive-menu" aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <li class="anchor" data-page="main"><a>Главная</a></li>
                <li class="anchor" data-page="about"><a>О нас</a></li>
                <li class="anchor" data-page="finish"><a>Готовые решения</a></li>
            </ul>
        </div>
    </div>
</div>