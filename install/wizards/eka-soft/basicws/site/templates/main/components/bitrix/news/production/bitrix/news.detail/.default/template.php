<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>
<?$this->SetViewTarget("center_box_up");?>
<div class="prodaction_slider">
    <div class="slider_block">
        <div class="slider_content">
            <?if(! empty($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'])):?>
            <?foreach($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'] as $key=> $item):
                $file = CFile::ResizeImageGet( $item, array( 'width' => $arParams["DETAIL_MORE_PHOTOS_WIDTH"], 'height' => $arParams["DETAIL_MORE_PHOTOS_HEIGHT"] ), BX_RESIZE_IMAGE_EXACT, true );?>
            <div class="slider_item">
                <img src="<?=$file['src']?>" alt="<?=$arResult['PROPERTIES']['PROP_MORE_PHOTOS']['DESCRIPTION'][$key]?>">
            </div>
            <?endforeach?>
            <?endif?>
        </div>
        <div class="slider_arrows">
            <a href="#" class="slider_arrow_prev"></a>
            <a href="#" class="slider_arrow_next"></a>
        </div>
        <div class="slider_bullets">
            <?if(! empty($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'])):?>
            <?foreach($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'] as $key=> $item):?>
                <a href="#elem-<?=$arResult['ID']?>-<?=$key?>"><?=$key?></a>
            <?endforeach?>
            <?endif?>
        </div>
    </div>
</div>
<?$this->EndViewTarget();?>
<?if($arResult['DETAIL_TEXT_TYPE'] == 'html'):?>
    <?=$arResult['DETAIL_TEXT']?>
<?else:?>
    <p><?=$arResult['DETAIL_TEXT']?></p>
<?endif;?>
