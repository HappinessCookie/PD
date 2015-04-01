<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
CModule::IncludeModule('iblock');
if (isset($_POST["array"])) {
    $rsLeader = CIBlockElement::GetList(
        array(),
        array(
            "IBLOCK_ID" => "1",
            "ID" => $_POST["array"]
        ),
        false,
        array(),
        array(
            "ID",
            "IBLOCK_ID",
            "DETAIL_PICTURE",
            "PROPERTY_price",
            "PROPERTY_house_area",
            "PROPERTY_dimensions",
            "PROPERTY_overlap",
            "PROPERTY_floor_count",
            "PROPERTY_basement",
            "PROPERTY_foundation",
            "PROPERTY_wall_material",
            "PROPERTY_roofing",
            "PROPERTY_garage",
            "PROPERTY_layout",
            "PROPERTY_scheme"
        )
    );
    $rsL = $rsLeader->GetNext();
    $data = array();
    $data["price"] = $rsL["PROPERTY_PRICE_VALUE"];
    $data["house_area"] = $rsL["PROPERTY_HOUSE_AREA_VALUE"];
    $data["dimensions"] = $rsL["PROPERTY_DIMENSIONS_VALUE"];
    $data["overlap"] = $rsL["PROPERTY_OVERLAP_VALUE"];
    $data["floor_count"] = $rsL["PROPERTY_FLOOR_COUNT_VALUE"];
    $data["basement"] = $rsL["PROPERTY_BASEMENT_VALUE"];
    $data["foundation"] = $rsL["PROPERTY_FOUNDATION_VALUE"];
    $data["wall_material"] = $rsL["PROPERTY_WALL_MATERIAL_VALUE"];
    $data["roofing"] = $rsL["PROPERTY_ROOFING_VALUE"];
    $data["garage"] = $rsL["PROPERTY_GARAGE_VALUE"];
    $data["layout"] = $rsL["PROPERTY_LAYOUT_VALUE"];
    $data["scheme"] = $rsL["PROPERTY_SCHEME_VALUE"];
    $data["all"] = $rsL;

    /*$rsL = $rsLeader->GetNext();
    while ($rsL = $rsLeader->GetNext()) {
        $arr[] = $rsL;
    }*/
    echo json_encode($data);
}
//echo json_encode($_GET["project_id"]);
//echo json_encode($_POST);

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php';
?>