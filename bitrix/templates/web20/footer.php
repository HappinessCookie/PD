<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="header navbar navbar-default">
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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Готовые решения <b class="caret"></b></a>
                    <ul class="dropdown-menu footer-menu">
                        <li class="anchor" data-page="finish"><a>Наши проекты</a></li>
                        <li><a href="#">Проекты партнеров</a></li>
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