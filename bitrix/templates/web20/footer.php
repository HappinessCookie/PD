<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="header navbar navbar-default">
    <div class="container side-pad">
        <div class="col15-lg-6 col15-md-6 hidden-sm hidden-xs menu-contact">
            <div class="first-phone"><b>8 (917) 430-35-47</b></div>
            <div class="second-phone">8 (917) 430-49-47</div>
            <div class="address">г.Уфа ул.Сагита Агиша 16/1 оф.7</div>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="col15-lg-6 col15-md-6 col15-sm-8 col15-xs-15 navbar-collapse text-center pull-right collapse"
             id="responsive-menu"
             aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <li class="anchor" data-page="main"><a>ГЛАВНАЯ</a></li>
                <li class="anchor" data-page="about"><a>О НАС</a></li>
                <li class="btn-group menu-group-item dropup">
                    <a data-page="finish" type="button" class="btn btn-link anchor" style="padding-right: 0; float: left;">ГОТОВОЕ РЕШЕНИЕ</a>
                    <a type="button"
                       data-toggle="dropdown"
                       class="btn btn-link dropdown-toggle pull-left"
                       aria-expanded="false"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="partners.php" target="_blank">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/bootstrap.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/pagify.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.sliderPro.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/owl.carousel.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/lightbox.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/ekko-lightbox.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/function.js"></script>
</body>
</html>