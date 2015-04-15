<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"USE_SHARE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_USE_SHARE"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"VALUE" => "Y",
		"DEFAULT" =>"N",
		"REFRESH"=> "Y",
	),
    "LIST_IMG_WIDTH" => Array(
        "NAME" => "width of the image in the list",
        "TYPE" => "STRING",
        "VALUE" => "",
        "DEFAULT" =>300,
    ),
    "LIST_IMG_HEIGHT" => Array(
        "NAME" => "height of the image in the list",
        "TYPE" => "STRING",
        "VALUE" => "",
        "DEFAULT" =>191,
    ),
    "DETAIL_MORE_PHOTOS_WIDTH" => Array(
        "NAME" => "width of the more image in the detail",
        "TYPE" => "STRING",
        "VALUE" => "",
        "DEFAULT" =>960,
    ),
    "DETAIL_MORE_PHOTOS_HEIGHT" => Array(
        "NAME" => "height of the more image in the detail",
        "TYPE" => "STRING",
        "VALUE" => "",
        "DEFAULT" =>454,
    ),
);
?>