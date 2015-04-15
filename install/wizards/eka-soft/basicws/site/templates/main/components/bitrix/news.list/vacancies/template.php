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
<?$APPLICATION->IncludeFile( SITE_DIR . "include/comp_vacancies_steps_inc.php", Array(),
    Array(
        "MODE"     => "php",
        "NAME"     => GetMessage( "PAGE_INC" ),
        "TEMPLATE" => "page_inc.php"
    )
);?>
    <div class="vakansii_list">
    <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="vakansii_item <?if($key == 0):?>active<?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="vakansii_item_title">
                <span>
                    <?if(!empty($arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE'])):?>
                        <?=$arItem['IPROPERTY_VALUES']['ELEMENT_META_TITLE'];?>
                    <?else:?>
                        <?=$arItem['NAME']?>
                    <?endif;?>
                </span>
            </div>
            <div class="vakansii_item_fileds">
            <?foreach($arItem['PROPERTIES'] as $propKey=>$arProp):?>
                    <?if(in_array($propKey,array('PROP_DUTIES','PROP_DEMANDS','PROP_CONDITIONS')) && !empty($arProp['VALUE'])):?>
                        <div class="vakansii_item_filed">
                            <div class="vakansii_item_filed_title"><?=$arProp['NAME']?>:</div>
                            <?foreach($arProp['VALUE'] as $value):?>
                            <div class="vakansii_item_filed_text"><?=$value?></div>
                            <?endforeach;?>
                        </div>
                    <?endif;?>
                <?endforeach;?>
                <?if(!empty($arItem['DETAIL_TEXT'])):?>
                    <?if($arItem['DETAIL_TEXT_TYPE'] == 'text'):?>
                        <p><?=$arItem['DETAIL_TEXT']?></p>
                    <?else:?>
                        <?=$arItem['DETAIL_TEXT']?>
                    <?endif;?>
                <?endif;?>
                <div class="vakansii_buttons">
                    <?foreach($arItem['PROPERTIES']['PROP_MORE_FILES']['VALUE'] as $item):?>
                        <a href="<?=CFile::GetPath($item)?>" class="download"><?=$arParams['FILE_TEXT']?></a>
                    <?endforeach;?>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
<?$APPLICATION->IncludeFile( SITE_DIR . "include/comp_vacancies_advantages_inc.php", Array(),
    Array(
        "MODE"     => "php",
        "NAME"     => GetMessage( "PAGE_INC" ),
        "TEMPLATE" => "page_inc.php"
    )
);?>

