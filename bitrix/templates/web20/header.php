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
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/ekko-lightbox.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</head>
<body>
<? if ($USER->IsAdmin()): ?>
    <div id="panel">
        <? /*$APPLICATION->ShowPanel();*/ ?>
    </div>
<? endif ?>
<div class="header navbar navbar-default navbar-fixed-top">
    <div class="container side-pad">
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs menu-contact">
            <div class="first-phone"><b>8 (917) 430-35-47</b></div>
            <div class="second-phone">8 (917) 430-49-47</div>
            <div class="address">г.Уфа ул.Сагита Агиша 16/1 оф.7</div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
            <img class="logo" src="/bitrix/templates/web20/images/logo.png">
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 navbar-collapse text-center pull-right collapse" id="responsive-menu" aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <li class="anchor" data-page="main"><a>ГЛАВНАЯ</a></li>
                <li class="anchor" data-page="about"><a>О НАС</a></li>
                <li class="btn-group">
                    <a data-page="finish" type="button" class="btn btn-link anchor" style="padding-right: 0; float: left;">ГОТОВОЕ РЕШЕНИЕ</a>
                    <a type="button"
                       data-toggle="dropdown"
                       class="btn btn-link dropdown-toggle"
                       aria-expanded="false" style="float: left;"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>