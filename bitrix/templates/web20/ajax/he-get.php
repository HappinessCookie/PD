<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
CModule::IncludeModule('iblock');
if (isset($_POST["array"])) {
    $rsLeader = CIBlockElement::GetList(
        array(),
        array(
            "IBLOCK_ID" => "13",
            "ID" => $_POST["array"]
        ),
        false,
        array(),
        array(
            "ID",
            "IBLOCK_ID",
            "DETAIL_TEXT"
        )
    );
    $rsL = $rsLeader->GetNext();
    echo json_encode($rsL["DETAIL_TEXT"]);
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php';
?>