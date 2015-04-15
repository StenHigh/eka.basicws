<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="menu_block">
    <div class="center_small_box">
        <ul>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["SELECTED"]):?>
        <?if($arItem['LINK']==$APPLICATION->GetCurDir()):?>
            <li class="active"><span class="selected"><?=$arItem["TEXT"]?></span></li>
        <?else:?>
            <li class="active"><a class="selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endif;?>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
<?endforeach?>
        </ul>
    </div>
</div> <!-- .menu_block -->
<?endif?>
