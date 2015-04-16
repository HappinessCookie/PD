<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="header navbar navbar-inverse container">
    <div class="container side-pad">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 menu-contact">
            <div class="first-phone"><b>8 (917) 430-47-35</b></div>
            <div class="second-phone">8 (917) 430-35-49</div>
            <div class="address">г.Уфа ул.Сагита Агиша 16/1 оф.7</div>
        </div>
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
        </div>
        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs navbar-collapse text-center pull-right collapse"
             id="responsive-menu"
             aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <? if (($_SERVER["REQUEST_URI"] == "/partners.php") || ($_SERVER["REQUEST_URI"] == "/newspaper.php")) { ?>
                    <li class="anchor" data-page="main"><a href="/#index/main">ГЛАВНАЯ</a></li>
                    <li class="btn-group menu-group-item">
                        <a data-page="about"
                           type="button"
                           href="/#index/about"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">О НАС</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="newspaper.php">АРХГАЗЕТА</a></li>
                        </ul>
                    </li>
                    <li class=" btn-group menu-group-item">
                        <a data-page="finish"
                           type="button"
                           class="btn btn-link anchor"
                           href="/#index/finish"
                           style="padding-right: 0; float: left;">ГОТОВОЕ РЕШЕНИЕ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="partners.php" target="_blank">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                        </ul>
                    </li>
                <? } else { ?>
                    <li class="anchor" data-page="main"><a>ГЛАВНАЯ</a></li>
                    <li class="btn-group menu-group-item">
                        <a data-page="about"
                           type="button"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">О НАС</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="newspaper.php">АРХГАЗЕТА</a></li>
                        </ul>
                    </li>
                    <li class="btn-group menu-group-item">
                        <a data-page="finish"
                           type="button"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">ГОТОВОЕ РЕШЕНИЕ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="partners.php">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                        </ul>
                    </li>
                <? } ?>
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