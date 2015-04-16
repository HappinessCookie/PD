<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
CModule::IncludeModule('iblock');
if (isset($_POST["array"])) {
    $rsLeader = CIBlockElement::GetList(
        array(),
        array(
            "IBLOCK_ID" => "12",
            "ID" => $_POST["array"]
        ),
        false,
        array(),
        array(
            "ID",
            "IBLOCK_ID",
            "NAME",
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
    $data["name"] = $rsL["NAME"];
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
    $data["all"] = $rsL;
    $image = CFile::ResizeImageGet(
        $rsL["DETAIL_PICTURE"],
        Array("width" => 600, "height" => 600),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        false
    );
    $data["image"] = $image["src"];
    foreach ($rsL["PROPERTY_LAYOUT_VALUE"] as $key) {
        $layout = CFile::ResizeImageGet(
            $key,
            Array("width" => 600, "height" => 600),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            false
        );
        $data["layout"][] = $layout["src"];
    }
    foreach ($rsL["PROPERTY_SCHEME_VALUE"] as $key) {
        $scheme = CFile::ResizeImageGet(
            $key,
            Array("width" => 600, "height" => 600),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            false
        );
        $data["scheme"][] = $scheme["src"];
    }
    echo json_encode($data);
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php';
?>