<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
    "main" => Array(
        "NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
        "STAGES" => Array(
            "site_create.php",
            "files.php",
            "template.php",
            "settings.php",
        ),
    ),
	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"news.php",
			"articles.php",
			"vacancies.php",
			"catalog.php",
			"file.php",
			"form.php",
			"picture.php",
		),
	)
);
?>