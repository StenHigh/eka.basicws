<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$this->SetViewTarget( "center_box_down" );
?>
    <div class = "contact_form" xmlns = "http://www.w3.org/1999/html">
        <div class="contact_form_title"><?=$arResult["FORM_TITLE"]?></div>
        <?=$arResult["FORM_HEADER"]?>
        <?if(!empty($arResult["FORM_NOTE"])):?>
            <span style="color: #ffffff;"><?=$arResult["FORM_NOTE"]?></span>
        <?endif;?>
        <?if ($arResult["isFormErrors"] == "Y"):?>
            <?=$arResult["FORM_ERRORS_TEXT"];?>
        <?endif;?>
        <?if ($arResult["isFormNote"] != "Y"):?>
            <?
            /***********************************************************************************
            form questions
             ***********************************************************************************/
            ?>
            <? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>
                <? if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'): ?>
                    <?= $arQuestion["HTML_CODE"] ?>
                <? else: ?>
                    <? if (is_array( $arResult["FORM_ERRORS"] ) && array_key_exists( $FIELD_SID, $arResult['FORM_ERRORS'] )): ?>
                        <span class = "error-fld" title = "<?= $arResult["FORM_ERRORS"][$FIELD_SID] ?>"><?= $arResult["FORM_ERRORS"][$FIELD_SID] ?></span>
                    <? endif; ?>
                    <?if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'textarea'):?>
                        <textarea name = "form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" placeholder="<?= $arQuestion["CAPTION"] ?><? if ($arQuestion["REQUIRED"] == "Y"): ?>*<? endif; ?>" <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM']?>><?=$arResult['arrVALUES']['form_textarea_4']?></textarea>
                    <?else:?>
                        <input type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>" name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE']?>_<?=$arQuestion['STRUCTURE'][0]['ID']?>" <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM']?> placeholder="<?= $arQuestion["CAPTION"] ?><? if ($arQuestion["REQUIRED"] == "Y"): ?>*<? endif; ?>" value="<?=$arResult['arrVALUES']['form_'.$arQuestion['STRUCTURE'][0]['FIELD_TYPE'].'_'.$arQuestion['STRUCTURE'][0]['ID']]?>"/>
                    <?endif?>
                <? endif; ?>
            <? endforeach; ?>
            <?if($arResult["isUseCaptcha"] == "Y")
            {?>
            <div>
                <input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" />
                <input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" />
            </div>
            <?
            } // isUseCaptcha
            ?>
            <div class="clear"></div>
            <div class="form_text"><?=$arResult['arForm']['DESCRIPTION']?></div>


            <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
            <?if ($arResult["F_RIGHT"] >= 15):?>
                <input type="hidden" name="web_form_apply" value="Y" />
            <?endif;?>
            <?=$arResult["FORM_FOOTER"]?>

        <?endif;?>
    </div>
<? $this->EndViewTarget(); ?>