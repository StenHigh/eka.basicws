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
<?if(!empty($arResult)):?>
    <?if($arResult['DETAIL_TEXT_TYPE'] == 'html'):?>
        <?=$arResult['DETAIL_TEXT']?>
    <?else:?>
        <p><?=$arResult['DETAIL_TEXT']?></p>
    <?endif;?>
    <div class="images_block">
        <?if(!empty($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE'])):?>
            <?foreach($arResult['PROPERTIES']['PROP_MORE_PHOTOS']['VALUE']  as $key=>$item):
                $file = CFile::ResizeImageGet( $item, array( 'width' => $arParams["DETAIL_MORE_PHOTOS_WIDTH"], 'height' => $arParams["DETAIL_MORE_PHOTOS_HEIGHT"] ), BX_RESIZE_IMAGE_EXACT, true );?>
                <img src="<?=$file['src']?>" class="left" alt="<?=$arResult['PROPERTIES']['PROP_MORE_PHOTOS']['DESCRIPTION'][$key]?>">
            <?endforeach;?>
        <?endif;?>
    </div>
<?endif;?>