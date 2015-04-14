<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>
<!--HOUSE EXPERT-->
    <div class="container page">
    <div id="project_load" class="clearfix well">
        <div class="clearfix">
            <div class="col-lg-6" id="project_img"></div>
            <div class="col-lg-6">
                <h2 id="project_name" class="page-header">КД-8,4-11,5-134</h2>
                <h3 id="project_price">Стоимость проекта <span id="price"></span> руб.</h3>
                <ul class="list-unstyled">
                    <li><b>Общая площадь дома:</b> <span id="house_area"></span></li>
                    <li><b>Габариты застройки:</b> <span id="dimensions"></span></li>
                    <li><b>Перекрытие:</b> <span id="overlap"></span></li>
                    <li><b>Количество этажей:</b> <span id="floor_count"></span></li>
                    <li><b>Цокольный этаж:</b> <span id="basement"></span></li>
                    <li><b>Фундамент:</b> <span id="foundation"></span></li>
                    <li><b>Материал стен:</b> <span id="wall_material"></span></li>
                    <li><b>Кровля:</b> <span id="roofing"></span></li>
                    <li><b>Гараж:</b> <span id="garage"></span></li>
                </ul>
            </div>
        </div>
        <div class="clearfix" id="images"></div>
    </div>
    <!--PROJEKT-->
    <div class="clearfix">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "project-list",
            Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "-",
                "IBLOCK_ID" => "1",
                "NEWS_COUNT" => "12",
                "SORT_BY1" => "ID",
                "SORT_ORDER1" => "desc",
                "SORT_BY2" => "",
                "SORT_ORDER2" => "",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array("ID", "NAME", "PREVIEW_PICTURE"),
                "PROPERTY_CODE" => array("PROPERTY_price"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_STATUS_404" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PAGER_TEMPLATE" => "project-list-pager",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N"
            ),
            false
        );?>
    </div>
    <!--HOUSE EXPERT-->
    <div class="clearfix"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>