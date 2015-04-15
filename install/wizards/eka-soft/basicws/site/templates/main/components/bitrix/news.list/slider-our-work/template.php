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
<div class="slider_home_box">
    <div class="slider_home_title"><?=GetMessage('CT_BNL_SOW_TITLE')?></div>
    <div class="slider_home_text">
        <? $APPLICATION->IncludeFile( SITE_DIR . "include/comp_slider_our_work_inc.php", Array(),
            Array(
                "MODE"     => "php",
                "NAME"     => GetMessage( "PAGE_INC" ),
                "TEMPLATE" => "page_inc.php"
            ) );
        ?>
    </div>
    <div class="slider_block">
        <div class="slider_content" >
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <div class="slider_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="slider_item_work_small work_small_1">
                    <img src="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL1']['FILE_DESC']['src']?>" alt="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL1']['DESCRIPTION']?>"/>
                    <a href="#elem-<?=$arResult['ID']?>-<?=$arItem['ID']?>-<?=$arItem['PROPERTIES']['PROP_IMG_SMALL1']['ID']?>" class="work_text_bg">
                        <div class="work_text">
                            <div class="work_title"><?=$arItem['PROPERTIES']['PROP_NAME_IMG1']['VALUE']?></div>
                            <div class="work_desc"><?=$arItem['PROPERTIES']['PROP_DESC_IMG1']['VALUE']?></div>
                        </div>
                    </a>
                </div>
                <div class="slider_item_work_small work_small_2">
                    <img src="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL2']['FILE_DESC']['src']?>" alt="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL2']['DESCRIPTION']?>"/>
                    <a href="#elem-<?=$arResult['ID']?>-<?=$arItem['ID']?>-<?=$arItem['PROPERTIES']['PROP_IMG_SMALL2']['ID']?>" class="work_text_bg">
                        <div class="work_text">
                            <div class="work_title"><?=$arItem['PROPERTIES']['PROP_NAME_IMG2']['VALUE']?></div>
                            <div class="work_desc"><?=$arItem['PROPERTIES']['PROP_DESC_IMG2']['VALUE']?></div>
                        </div>
                    </a>
                </div>
                <div class="slider_item_work_big work_big_1">
                    <img src="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL3']['FILE_DESC']['src']?>" alt="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL3']['DESCRIPTION']?>"/>
                    <a href="#elem-<?=$arResult['ID']?>-<?=$arItem['ID']?>-<?=$arItem['PROPERTIES']['PROP_IMG_SMALL3']['ID']?>" class="work_text_bg">
                        <div class="work_text">
                            <div class="work_title"><?=$arItem['PROPERTIES']['PROP_NAME_IMG3']['VALUE']?></div>
                            <div class="work_desc"><?=$arItem['PROPERTIES']['PROP_DESC_IMG3']['VALUE']?></div>
                        </div>
                    </a>
                </div>
                <div class="slider_item_work_big work_big_2">
                    <img src="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL4']['FILE_DESC']['src']?>" alt="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL4']['DESCRIPTION']?>"/>
                    <a href="#elem-<?=$arResult['ID']?>-<?=$arItem['ID']?>-<?=$arItem['PROPERTIES']['PROP_IMG_SMALL4']['ID']?>" class="work_text_bg">
                        <div class="work_text">
                            <div class="work_title"><?=$arItem['PROPERTIES']['PROP_NAME_IMG4']['VALUE']?></div>
                            <div class="work_desc"><?=$arItem['PROPERTIES']['PROP_DESC_IMG4']['VALUE']?></div>
                        </div>
                    </a>
                </div>
                <div class="slider_item_work_small work_small_3">
                    <img src="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL5']['FILE_DESC']['src']?>" alt="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL5']['DESCRIPTION']?>"/>
                    <a href="#elem-<?=$arResult['ID']?>-<?=$arItem['ID']?>-<?=$arItem['PROPERTIES']['PROP_IMG_SMALL5']['ID']?>" class="work_text_bg">
                        <div class="work_text">
                            <div class="work_title"><?=$arItem['PROPERTIES']['PROP_NAME_IMG5']['VALUE']?></div>
                            <div class="work_desc"><?=$arItem['PROPERTIES']['PROP_DESC_IMG5']['VALUE']?></div>
                        </div>
                    </a>
                </div>
                <div class="slider_item_work_small work_small_4">
                    <img src="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL6']['FILE_DESC']['src']?>" alt="<?=$arItem['PROPERTIES']['PROP_IMG_SMALL6']['DESCRIPTION']?>"/>
                    <a href="#elem-<?=$arResult['ID']?>-<?=$arItem['ID']?>-<?=$arItem['PROPERTIES']['PROP_IMG_SMALL6']['ID']?>" class="work_text_bg">
                        <div class="work_text">
                            <div class="work_title"><?=$arItem['PROPERTIES']['PROP_NAME_IMG6']['VALUE']?></div>
                            <div class="work_desc"><?=$arItem['PROPERTIES']['PROP_DESC_IMG6']['VALUE']?></div>
                        </div>
                    </a>
                </div>
            </div>
<?endforeach;?>
        </div>
        <div class="slider_arrows">
            <a href="#" class="slider_arrow_prev"></a>
            <a href="#" class="slider_arrow_next"></a>
        </div>
        <div class="slider_bullets">
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
        </div>
    </div>
</div> <?// TODO Доделать переключатель салайдов, ожидаем правки от верстальщика ?>