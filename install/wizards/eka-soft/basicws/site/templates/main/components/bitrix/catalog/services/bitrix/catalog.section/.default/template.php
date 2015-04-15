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
<? $this->SetViewTarget( "content_box_up" ); ?>
<div class = "advert_slider">
<? $this->EndViewTarget(); ?>
<? $this->SetViewTarget( "center_box_down" ); //TODO Ждем рабочий слайдер от верстки?>
    <div class = "slider_block">
        <div class = "slider_content">
            <div class = "slider_item">
                <img src = "<?= SITE_TEMPLATE_PATH ?>/pic/slide-3.jpg"/>
            </div>
        </div>
        <div class = "slider_arrows">
            <a href = "#" class = "slider_arrow_prev"></a>
            <a href = "#" class = "slider_arrow_next"></a>
        </div>
        <div class = "slider_bullets">
            <a href = "#">1</a>
            <a href = "#" class = "active">2</a>
            <a href = "#">3</a>
            <a href = "#">4</a>
            <a href = "#">5</a>
        </div>
    </div>
</div>
<div class = "advert_napravl">
    <div class = "center_box">
        <div class = "advert_napravl_title">
            <? if ($arResult['DESCRIPTION_TYPE'] == 'html'): ?>
                <?= $arResult['DESCRIPTION'] ?>
            <? else: ?>
                <p><?= $arResult['DESCRIPTION'] ?></p>
            <? endif; ?>
        </div>
        <div class = "advert_napravl_list">
        <? if ( ! empty( $arResult )): ?>
            <? foreach ($arResult['ITEMS'] as $arItem): ?>
                <?
                $this->AddEditAction( $arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID( $arItem["IBLOCK_ID"], "ELEMENT_EDIT" ) );
                $this->AddDeleteAction( $arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID( $arItem["IBLOCK_ID"], "ELEMENT_DELETE" ),
                    array( "CONFIRM" => GetMessage( 'CT_BNL_ELEMENT_DELETE_CONFIRM' ) ) );
                ?>
                <a href = "<?= $arItem['DETAIL_PAGE_URL'] ?>" class = "advert_napravl_item" id = "<?= $this->GetEditAreaId( $arItem['ID'] ); ?>">
                    <img src = "<?= $arItem['DETAIL_PICTURE']['src'] ?>"/> <span><?= $arItem['NAME'] ?></span>
                </a>
            <? endforeach; ?>
        <? endif; ?>
        </div>
    </div>
</div>
<? $this->EndViewTarget(); ?>