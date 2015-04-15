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
<div class="brands_box">
    <div class="center_box">
        <div class="brands_title"><?=GetMessage('CT_BNL_TU_TITLE')?></div>
        <div class="brands_text">
            <? $APPLICATION->IncludeFile( SITE_DIR . "include/comp_trust_us_inc.php", Array(),
                Array(
                    "MODE"     => "php",
                    "NAME"     => GetMessage( "PAGE_INC" ),
                    "TEMPLATE" => "page_inc.php"
                ) );
            ?>
        </div>
        <div class="brands_list">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="brands_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <img src="<?=$arItem['DETAIL_PICTURE']['src']?>" alt="<?=$arItem['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']?>"/>
                </div>
            <?endforeach;?>
        </div>
    </div>
</div> <!-- .brends_box -->
