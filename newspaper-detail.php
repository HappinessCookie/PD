<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
    <div class="container page side-pad">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "newspaper-detail",
            Array(
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "portfolio",
                "IBLOCK_ID" => "14",
                "ELEMENT_ID" => $_REQUEST["ID"],
                "ELEMENT_CODE" => "",
                "CHECK_DATES" => "Y",
                "FIELD_CODE" => "",
                "PROPERTY_CODE" => "",
                "IBLOCK_URL" => "",
                "SET_TITLE" => "Y",
                "SET_BROWSER_TITLE" => "Y",
                "BROWSER_TITLE" => "NAME",
                "SET_META_KEYWORDS" => "Y",
                "META_KEYWORDS" => "key_words",
                "SET_META_DESCRIPTION" => "Y",
                "META_DESCRIPTION" => "description_page",
                "SET_STATUS_404" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_ELEMENT_CHAIN" => "N",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "USE_PERMISSIONS" => "N",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "36000000",
                "CACHE_GROUPS" => "Y",
                "PAGER_TEMPLATE" => "",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Страница",
                "PAGER_SHOW_ALL" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N"
            )
        );?>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>