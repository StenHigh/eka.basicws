<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header_menu">
    <ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="parent"><span><?=$arItem["TEXT"]?></span>
				<ul>
		<?else:?>
			<li class="parent"><span><?=$arItem["TEXT"]?></span>
				<ul>
		<?endif?>
	<?else:?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <?if($arItem["SELECTED"]):?>
                    <?if($arItem['LINK']==$APPLICATION->GetCurDir()):?>
				        <li class="active"><span class="selected"><?=$arItem["TEXT"]?></span></li>
                    <?else:?>
                        <li class="active"><a class="selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                    <?endif;?>
                <?else:?>
				    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?endif;?>
			<?else:?>
                <?if($arItem["SELECTED"]):?>
                    <?if($arItem['LINK']==$APPLICATION->GetCurDir()):?>
                        <li class="active"><span class="selected"><?=$arItem["TEXT"]?></span></li>
                    <?else:?>
                        <li class="active"><a class="selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                    <?endif;?>
                <?else:?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?endif;?>
			<?endif?>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
    </ul>
</div>
<?endif?>