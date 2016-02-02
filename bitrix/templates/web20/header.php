<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
    <?
    $APPLICATION->ShowHead();
    $APPLICATION->ShowPanel();
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? $APPLICATION->ShowTitle("ProjektStudio") ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="title" content="ProjektStudio">
    <link rel="image_src" href="/bitrix/templates/web20/images/logo_vk.jpg">
    <?
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/font-awesome.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/slider-pro.min.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/sticker.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/grid15.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/ekko-lightbox.min.css");
    $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH . "/css/style.css");
    ?>
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
<header class="header navbar navbar-inverse navbar-fixed-top container">
    <div class="side-pad">
        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs menu-contact">
            <div class="first-phone"><b>8 (917) 430-47-35</b></div>
            <div class="second-phone">8 (917) 430-35-49</div>
            <div class="address">г.Уфа ул.Сагита Агиша 16/1 оф.6</div>
        </div>
        <a href="/" class="col-lg-2 col-md-2 col-sm-4 col-xs-10">
            <img class="logo img-responsive" src="/bitrix/templates/web20/images/logo.png">
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 navbar-collapse text-center pull-right collapse"
             id="responsive-menu"
             aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <? if ($_SERVER["REQUEST_URI"] == "/") { ?>
                    <li class="anchor" data-page="main"><a>ГЛАВНАЯ</a></li>
                    <li class="btn-group menu-group-item">
                        <a data-page="about"
                           type="button"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">УСЛУГИ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/newspaper.php">АРХГАЗЕТА</a></li>
                        </ul>
                    </li>
                    <li class="btn-group menu-group-item">
                        <a data-page="projects"
                           type="button"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">ГОТОВЫЕ ПРОЕКТЫ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/partners.php">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                        </ul>
                    </li>
                <? } else { ?>
                    <li class="anchor" data-page="main"><a href="/#index/main">ГЛАВНАЯ</a></li>
                    <li class="btn-group menu-group-item">
                        <a data-page="about"
                           type="button"
                           href="/#index/about"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">УСЛУГИ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/newspaper.php">АРХГАЗЕТА</a></li>
                        </ul>
                    </li>
                    <li class=" btn-group menu-group-item">
                        <a data-page="projects"
                           type="button"
                           class="btn btn-link anchor"
                           href="/#index/projects"
                           style="padding-right: 0; float: left;">ГОТОВЫЕ ПРОЕКТЫ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/partners.php" target="_blank">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                        </ul>
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
</header>