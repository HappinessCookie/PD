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
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/xoverlay.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">8-800-555-55-55</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Открыть навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Готовые решения</a></li>
            </ul>
        </div>
    </div>
</div>