<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode( true );
?>
<?if($arResult['DESCRIPTION_TYPE'] == 'html'):?>
    <?=$arResult['DESCRIPTION']?>
<?else:?>
    <p><?=$arResult['DESCRIPTION']?></p>
<?endif?>
<?$this->SetViewTarget("center_box_down");?>
<?$APPLICATION->IncludeFile( SITE_DIR . "include/comp_events_video_inc.php", Array(),
    Array(
        "SHOW_BORDER" => "N",
        "MODE"     => "php",
        "NAME"     => GetMessage( "PAGE_INC" ),
        "TEMPLATE" => "page_inc.php"
    )
);?>
<div class="center_box">
    <div class = "razdely_list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction( $arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID( $arItem["IBLOCK_ID"], "ELEMENT_EDIT" ) );
        $this->AddDeleteAction( $arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID( $arItem["IBLOCK_ID"], "ELEMENT_DELETE" ),
            array( "CONFIRM" => GetMessage( 'CT_BNL_ELEMENT_DELETE_CONFIRM' ) ) );
        ?>
        <div class = "razdely_item" id = "<?= $this->GetEditAreaId( $arItem['ID'] ); ?>">
            <div class = "razdely_item_img">
                <a href = "<?= $arItem['DETAIL_PAGE_URL'] ?>">
                    <img src = "<?= $arItem['DETAIL_PICTURE']['src'] ?>" alt = "<?= $arItem['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'] ?>">
                </a>
            </div>
            <div class = "razdely_item_name">
                <a href = "<?= $arItem['DETAIL_PAGE_URL'] ?>">
                <? if (isset( $arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE'] )): ?>
                    <?= $arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE']; ?>
                <? else: ?>
                    <?= $arItem['NAME'] ?>
                <? endif ?>
                </a>
            </div>
            <a href = "#element-<?= $arResult['ID'] ?>-<?= $arItem['ID'] ?>" class = "razdely_item_zoom"></a>
        </div>
    <? endforeach; ?>
    </div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>
</div>
<?$this->EndViewTarget();?>





