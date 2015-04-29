<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? CModule::IncludeModule('iblock'); ?>
<? foreach ($arResult["ITEMS"] as $arItem) { ?>
    <div class="col15-lg-3 col15-md-3 col15-sm-5 col15-xs-5 newspaper-preview inline-block">
        <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
            <?
            $img = CFile::ResizeImageGet(
                $arItem["DETAIL_PICTURE"],
                array(
                    "width" => 345,
                    "height" => 880
                ),
                BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
                false
            );
            ?>
            <p><?= $arItem["NAME"] ?></p>
            <img src="<?= $img["src"]; ?>" alt="" class="img-responsive table-bordered col-center">
        </a>
    </div>
<? } ?>