<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<ul class="pagination">
    <? if ($arResult["NavPageNomer"] > 1) { ?>
        <li>
            <a href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">&laquo;</a>
        </li>
    <? } else { ?>
        <li class="disabled"><a href="#">&laquo;</a></li>
    <? } ?>
    <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]) { ?>
        <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
            <li class="active"><a href="#"><?= $arResult["nStartPage"] ?></a></li>
        <? } elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false) { ?>
            <li>
                <a href="<?= $arResult["sUrlPath"] ?>"><?= $arResult["nStartPage"] ?></a>
            </li>
        <? } else { ?>
            <li>
                <a href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
            </li>
        <? } ?>
        <? $arResult["nStartPage"]++ ?>
    <? } ?>
    <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) { ?>
        <li>
            <a href="<?= $arResult["sUrlPath"] ?>?PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">&raquo;</a>
        </li>
    <? } else { ?>
        <li class="disabled"><a href="#">&raquo;</a></li>
    <? } ?>
</ul>