<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<footer class="header navbar navbar-inverse container">
    <div class="container side-pad">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 menu-contact">
            <div class="first-phone"><b>8 (917) 430-47-35</b></div>
            <div class="second-phone">8 (917) 430-35-49</div>
            <div class="address">г.Уфа ул.Сагита Агиша 16/1 оф.6</div>
        </div>
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
        </div>
        <div class="col-lg-5 col-md-5 hidden-sm hidden-xs navbar-collapse text-center pull-right collapse"
             id="responsive-menu"
             aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <? if (($_SERVER["REQUEST_URI"] == "/partners.php") || ($_SERVER["REQUEST_URI"] == "/newspaper.php")) { ?>
                    <li class="anchor" data-page="main"><a href="/#index/main">ГЛАВНАЯ</a></li>
                    <li class="btn-group menu-group-item dropup">
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
                            <li><a href="newspaper.php">АРХГАЗЕТА</a></li>
                        </ul>
                    </li>
                    <li class=" btn-group menu-group-item dropup">
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
                            <li><a href="partners.php" target="_blank">ПРОЕКТЫ ПАРТНЕРОВ</a></li>
                        </ul>
                    </li>
                <? } else { ?>
                    <li class="anchor" data-page="main"><a>ГЛАВНАЯ</a></li>
                    <li class="btn-group menu-group-item dropup">
                        <a data-page="about"
                           type="button"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">УСЛУГИ</a>
                        <a type="button"
                           data-toggle="dropdown"
                           class="btn btn-link dropdown-toggle pull-left"
                           aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="newspaper.php">АРХГАЗЕТА</a></li>
                        </ul>
                    </li>
                    <li class="btn-group menu-group-item dropup">
                        <a data-page="projects"
                           type="button"
                           class="btn btn-link anchor"
                           style="padding-right: 0; float: left;">ГОТОВЫЕ ПРОЕКТЫ</a>
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
</footer>
<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-1.11.2.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.sliderPro.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/ekko-lightbox.min.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/function.js");
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">(function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter29989784 = new Ya.Metrika({
                    id: 29989784,
                    webvisor: true,
                    clickmap: true,
                    accurateTrackBounce: true,
                    trackHash: true
                });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");</script>
<noscript>
    <div>
        <img src="//mc.yandex.ru/watch/29989784" style="position:absolute; left:-9999px;" alt=""/>
    </div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>