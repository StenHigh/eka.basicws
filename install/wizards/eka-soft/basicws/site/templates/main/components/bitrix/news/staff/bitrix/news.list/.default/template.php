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
<div class="articles_list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="articles_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="articles_item_img">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <img src="<?=$arItem['DETAIL_PICTURE']['src']?>" alt="<?=$arItem['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']?>">
            </a>
        </div>
        <div class="articles_item_name">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <?if(isset($arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE'])):?>
                    <?=$arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE'];?>
                <?else:?>
                    <?=$arItem['NAME']?>
                <?endif?>
            </a>
        </div>
        <div class="articles_item_text">
            <?foreach ($arItem['PROPERTIES'] as $key=>$arProperty):?>
                <?if(in_array($key,array('PROP_POSITION','PROP_PHONE','PROP_EMAIL'))):?>
                    <?if(is_array($arProperty['VALUE']) && count($arProperty['VALUE']) > 1):?>
                        <span><?=$arProperty['NAME']?>:
                            <?foreach ($arProperty['VALUE'] as $i=>$propValue):?>
                                <?=$propValue?>
                                <?if($i == count($arProperty['VALUE'])-1):?>
                                    <?echo '. <br/>';?>
                                <?else:?>
                                    <?echo ', ';?>
                                <?endif;?>
                            <?endforeach?>
                        </span>
                    <?else:?>
                        <?if(in_array($key,array('PROP_POSITION'))):?>
                            <span><?=$arProperty['NAME']?>: <?=$arProperty['VALUE']?></span><br/>
                        <?else:?>
                            <span><?=$arProperty['NAME']?>: <?=$arProperty['VALUE'][0]?></span><br/>
                        <?endif;?>
                    <?endif;?>
                <?endif;?>
            <?endforeach?>
            <?if($arItem['PREVIEW_TEXT_TYPE'] == 'html'):?>
                <?=$arItem['PREVIEW_TEXT']?>
            <?else:?>
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            <?endif;?>
        </div>
        <div class="articles_item_more">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arParams["TEXT_READ_MORE"]?></a>
        </div>
    </div>
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>


