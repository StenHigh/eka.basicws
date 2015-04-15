<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
if($APPLICATION->GetCurPage(false) == SITE_DIR){
    $isMain = true;
    $isInner = false;
}else{
    $isMain = false;
    $isInner = true;
}
$page = $APPLICATION->GetCurPage(false);
$dir = $APPLICATION->GetCurDir();
?><!DOCTYPE html>
<html>
<meta lang="<?=LANGUAGE_ID?>" charset="<?=LANG_CHARSET;?>" />
<head>
    <link rel="icon" type="image/png" href="<?SITE_DIR?>favicon.png" />
    <link rel="apple-touch-icon" href="<?SITE_DIR?>apple-touch-favicon.png"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/"."css/styles.css");?>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/"."js/jquery-1.9.1.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/"."js/scripts.js")?>

    <?$APPLICATION->ShowCSS();?>
    <?$APPLICATION->ShowHeadStrings()?>
    <?if($USER->IsAdmin()){$APPLICATION->ShowHeadScripts();}?>
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>

    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body <?=$APPLICATION->ShowProperty('bodyClass')?>>
<?$APPLICATION->ShowPanel()?>
<header>
    <div class="center_box">
        <?if($isMain):?>
            <span class="logo_header"></span>
        <?else:?>
            <a href="<?=SITE_DIR?>" class="logo_header"></a>
        <?endif?>
        <a href="#" class="header_zakaz"><?=GetMessage("h_callback") //TODO вынести?></a>
        <div class="header_phones">
            <? $APPLICATION->IncludeFile( SITE_DIR . "include/header_phone_inc.php", Array(),
                Array(
                    "MODE"     => "php",
                    "NAME"     => GetMessage( "PAGE_INC" ),
                    "TEMPLATE" => "page_inc.php"
                ) );
            ?>
        </div>
        <? $APPLICATION->IncludeComponent( "bitrix:menu", "main-menu",
            Array(
                "ROOT_MENU_TYPE"        => "top",     // Тип меню для первого уровня
                "MAX_LEVEL"             => "2",        // Уровень вложенности меню
                "CHILD_MENU_TYPE"       => "left",     // Тип меню для остальных уровней
                "USE_EXT"               => "N",        // Подключать файлы с именами вида .тип_меню.menu_ext.php
                "DELAY"                 => "N",        // Откладывать выполнение шаблона меню
                "ALLOW_MULTI_SELECT"    => "N",        // Разрешить несколько активных пунктов одновременно
                "MENU_CACHE_TYPE"       => "A",        // Тип кеширования
                "MENU_CACHE_TIME"       => "360000",     // Время кеширования (сек.)
                "MENU_CACHE_USE_GROUPS" => "N",        // Учитывать права доступа
                "MENU_CACHE_GET_VARS"   => "",         // Значимые переменные запроса
            )
        ); ?>
        <?$APPLICATION->IncludeComponent(
	"bitrix:search.title",
	".default",
	array(
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "title-search",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "RETAIL",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "150",
		"SHOW_PREVIEW" => "Y",
		"PREVIEW_WIDTH" => "75",
		"PREVIEW_HEIGHT" => "75",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"PAGE" => "#SITE_DIR#search/index.php",
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "10",
		"ORDER" => "date",
		"USE_LANGUAGE_GUESS" => "Y",
		"CHECK_DATES" => "Y",
		"SHOW_OTHERS" => "Y",
		"CATEGORY_0_TITLE" => "Услуги",
		"CATEGORY_0" => array(
			0 => "iblock_CATALOG",
		),
		"CATEGORY_0_iblock_news" => array(
			0 => "all",
		),
		"CATEGORY_1_TITLE" => "Форумы",
		"CATEGORY_1" => array(
			0 => "forum",
		),
		"CATEGORY_1_forum" => array(
			0 => "all",
		),
		"CATEGORY_2_TITLE" => "Каталоги",
		"CATEGORY_2" => array(
			0 => "iblock_books",
		),
		"CATEGORY_2_iblock_books" => "all",
		"CATEGORY_OTHERS_TITLE" => "Прочее",
		"CATEGORY_0_iblock_CATALOG" => array(
			0 => "9",
		)
	),
	false
);?>
    </div>
</header>
<?if($isMain):?>
<div class="home_pic_box">
</div> <!-- .home_pic_box -->
<?endif?>

<? $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"services-menu",
	array(
		"ROOT_MENU_TYPE" => "catalog",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "360000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		)
	),
	false
); ?>



<?$APPLICATION->ShowViewContent("content_box_up")?>
<?if(!CSite::InDir('/uslugi/')):?>
<div class="content_box">
<?endif;?>
    <?if($isInner && ERROR_404 !== "Y"): //TODO вынести вкл.область?>
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1"
    ),
        false,
        array(
            "HIDE_ICONS" => "Y"
        )
    );
    ?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left-menu",
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
    <h1><?$APPLICATION->ShowTitle(false)?></h1>
    <?$APPLICATION->ShowViewContent("center_box_up")?>
    <div class="center_box">
<?endif?>