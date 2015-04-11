<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? CModule::IncludeModule('iblock'); ?>

<? foreach ($arResult["ITEMS"] as $arItem) { ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 project-preview inline-block" data-id="<?= $arItem["ID"]; ?>">
        <?
        $img = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"],
            array(
                "WIDTH" => 250,
                "HEIGHT" => 190
            ),
            BX_RESIZE_IMAGE_EXACT,
            false
        );
        ?>
        <img src="<?= $img["src"]; ?>" alt="" class="img-responsive table-bordered col-centered">
        <p><?= $arItem["NAME"]; ?>, цена: <?= $arItem["PROPERTIES"]["price"]["VALUE"]; ?> руб</p>
    </div>
<? } ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>