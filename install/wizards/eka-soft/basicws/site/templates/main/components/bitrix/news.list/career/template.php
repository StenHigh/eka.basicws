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
<?$this->SetViewTarget("content_box_up"); ?>
 <div class="career_box">
<?$this->EndViewTarget();?>
<?$this->SetViewTarget("center_box_up"); ?>
 <div class="slider_block slider_career">
    <div class="slider_content" >
        <div class="slider_item">
        <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="career_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="career_item_img">
                        <img src="<?=$arItem['DETAIL_PICTURE']['src']?>" alt="<?=$arItem['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']?>"/>
                    </div>
                    <div class="career_item_name" >
                        <?if($arItem['PREVIEW_TEXT_TYPE'] == 'text'):?>
                            <p><?=$arItem['PREVIEW_TEXT']?></p>
                        <?else:?>
                            <?=$arItem['PREVIEW_TEXT']?>
                        <?endif;?>
                    </div>
                    <div class="career_item_text">
                        <?if($arItem['DETAIL_TEXT_TYPE'] == 'text'):?>
                            <p><?=$arItem['DETAIL_TEXT']?></p>
                        <?else:?>
                            <?=$arItem['DETAIL_TEXT']?>
                        <?endif;?>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
    <div class="slider_arrows">
        <a href="#" class="slider_arrow_prev"></a>
        <a href="#" class="slider_arrow_next"></a>
    </div>
</div>
</div>
</div>
<?$this->EndViewTarget();?>

<div class="content_box">
    <div class="center_box">
        <div class="career_texts_box"></div>
    </div>
</div> <!-- .content_box -->
