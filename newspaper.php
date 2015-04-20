<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
    <div class="container page side-pad">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "newspaper-list",
            Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "-",
                "IBLOCK_ID" => "14",
                "NEWS_COUNT" => "12",
                "SORT_BY1" => "ID",
                "SORT_ORDER1" => "desc",
                "SORT_BY2" => "",
                "SORT_ORDER2" => "",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array("ID", "NAME", "DETAIL_PICTURE"),
                "PROPERTY_CODE" => "",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "/newspaper/#ELEMENT_ID#/",
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
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>