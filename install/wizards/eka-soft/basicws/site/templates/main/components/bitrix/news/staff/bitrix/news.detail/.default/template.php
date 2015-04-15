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
<img src="<?=$arResult['DETAIL_PICTURE']['src']?>" alt="<?=$arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']?>" align="left" style="margin-right: 20px">
<h2><?=$arResult['NAME']?></h2>
<?if($arResult['DETAIL_TEXT_TYPE'] == 'html'):?>
    <?=$arResult['DETAIL_TEXT']?>
<?else:?>
    <p><?=$arResult['DETAIL_TEXT']?></p>
<?endif;?>
<?if(! empty($arResult['PROPERTIES']['PROP_Y_MORE_VIDEOS']['VALUE'])):?>
<div class="long_block">
    <?foreach($arResult['PROPERTIES']['PROP_Y_MORE_VIDEOS']['VALUE'] as $key=> $item):?>
        <div class="center_box">
            <iframe class="right" width="<?=$arParams["DETAIL_MORE_Y_VIDEOS_WIDTH"]?>" height="<?=$arParams["DETAIL_MORE_Y_VIDEOS_HEIGHT"]?>" src="<?=$item?>" frameborder="0" allowfullscreen></iframe>
            <p>
                <br><br><br>
                <?=$arResult['PROPERTIES']['PROP_Y_MORE_VIDEOS']['DESCRIPTION'][$key]?>
            </p>
            <div class="clear"></div>
        </div>
    <?endforeach;?>
</div>
<?endif?>
<?if(! empty($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'])):?>
    <?foreach($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'] as $key=> $item):
        $file = CFile::ResizeImageGet( $item, array( 'width' => $arParams["DETAIL_MORE_PHOTOS_WIDTH"], 'height' => $arParams["DETAIL_MORE_PHOTOS_HEIGHT"] ), BX_RESIZE_IMAGE_EXACT, true );?>
            <img src="<?=$file['src']?>" class="left" alt="<?=$arResult['PROPERTIES']['PROP_MORE_PHOTOS']['DESCRIPTION'][$key]?>">
            <p><br><?=$arResult['PROPERTIES']['PROP_MORE_PHOTOS']['DESCRIPTION'][$key]?></p>
            <div class="clear"></div>
            <br>
    <?endforeach;?>
<?endif?>
