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
<div class="news_home_box">
    <div class="center_box">
        <div class="news_home_title"><?=GetMessage('CT_BNL_NM_TITLE')?></div>
        <div class="news_list">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="news_item_img">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                            <img src="<?=$arItem['DETAIL_PICTURE']['src']?>" alt="<?=$arItem['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']?>">
                        </a>
                    </div>
                    <div class="news_item_data">
                        <?=$arItem['DISPLAY_ACTIVE_FROM']?>
                    </div>
                    <div class="news_item_name">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                            <?if($arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE']!==''):?>
                                <?=$arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE'];?>
                            <?else:?>
                                <?=$arItem['NAME']?>
                            <?endif;?>
                        </a>
                    </div>
                    <div class="news_item_text">
                        <?if($arItem['PREVIEW_TEXT_TYPE'] == 'text'):?>
                            <p><?=$arItem['PREVIEW_TEXT']?></p>
                        <?else:?>
                            <?=$arItem['PREVIEW_TEXT']?>
                        <?endif;?>
                    </div>
                </div>
            <?endforeach;?>
        </div> <!-- .news_list -->
    </div>
</div>