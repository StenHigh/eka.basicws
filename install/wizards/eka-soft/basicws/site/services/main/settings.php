<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
/*main settings*/
COption::SetOptionInt("main", "error_reporting", 32759);
COption::SetOptionString("main", "save_original_file_name", "Y");
COption::SetOptionString("main", "translit_original_file_name", "Y");
COption::SetOptionString("main", "gather_catalog_stat", "N");
COption::SetOptionString("main", "store_password", "N");
COption::SetOptionString("main", "use_encrypted_auth", "Y");
COption::SetOptionString("main", "new_user_registration", "N");
COption::SetOptionString("main", "captcha_registration", "Y");
COption::SetOptionString("main", "event_log_logout", "Y");
COption::SetOptionString("main", "event_log_login_success", "Y");
COption::SetOptionString("main", "event_log_login_fail", "Y");
COption::SetOptionString("main", "event_log_register", "Y");
COption::SetOptionString("main", "event_log_register_fail", "Y");
COption::SetOptionString("main", "event_log_password_request", "Y");
COption::SetOptionString("main", "event_log_password_change", "Y");
COption::SetOptionString("main", "event_log_user_edit", "Y");
COption::SetOptionString("main", "event_log_user_delete", "Y");
COption::SetOptionString("main", "event_log_user_groups", "Y");
COption::SetOptionString("main", "event_log_group_policy", "Y");
COption::SetOptionString("main", "event_log_module_access", "Y");
COption::SetOptionString("main", "event_log_file_access", "Y");
COption::SetOptionString("main", "event_log_task", "Y");
COption::SetOptionString("main", "site_stopped", "Y");
COption::SetOptionString("form", "SIMPLE", "N");
COption::SetOptionString("iblock", "use_htmledit", "Y");
COption::SetOptionString("iblock", "show_xml_id", "Y");
COption::SetOptionString("perfmon", "warning_log", "Y");
COption::SetOptionString("perfmon", "cache_log", "Y");
COption::SetOptionString("perfmon", "large_cache_log", "Y");
COption::SetOptionString("perfmon", "sql_log", "Y");
COption::SetOptionString("perfmon", "slow_sql_log", "Y");
COption::SetOptionString("search", "exclude_mask", "/bitrix/*;/404.php;/upload/*;/local/*;/include/*");
COption::SetOptionString("search", "agent_stemming", "Y");
COption::SetOptionString("search", "use_tf_cache", "Y");
COption::SetOptionString("search", "use_word_distance", "Y");
COption::SetOptionString("fileman", "different_set", "N");
COption::SetOptionString("fileman", "default_edit", "php");
COption::SetOptionString("fileman", "~script_files", "php,php3,php4,php5,php6,phtml,pl,asp,aspx,cgi,exe,ico,shtm,shtml,dll,fcg,fcgi,fpl,asmx,pht,py,psp");
COption::SetOptionInt("fileman", "cache_on", 1);
COption::SetOptionString("fileman", "use_translit_google", "");
COption::SetOptionString("fileman", "use_code_editor", "N");
COption::SetOptionString("fileman", "menutypes", "a:3:{s:4:\"left\";s:19:\"".GetMessage('BASICWS_MENUTYPES_LEFT')."\";s:3:\"top\";s:23:\"".GetMessage('BASICWS_MENUTYPES_TOP')."\";s:7:\"catalog\";s:25:\"".GetMessage('BASICWS_MENUTYPES_CATALOG')."\";}");
COption::SetOptionString("fileman", "propstypes", "a:5:{s:11:\"description\";s:16:\"".GetMessage('BASICWS_PROPSTYPES_DESCRIPTION')."\";s:8:\"keywords\";s:27:\"".GetMessage('BASICWS_PROPSTYPES_KEYWORDS')."\";s:5:\"title\";s:44:\"".GetMessage('BASICWS_PROPSTYPES_TITLE')."\";s:18:\"NOT_SHOW_NAV_CHAIN\";s:51:\"".GetMessage('BASICWS_PROPSTYPES_NOT_SHOW_NAV_CHAIN')."\";s:9:\"bodyClass\";s:42:\"".GetMessage('BASICWS_PROPSTYPES_BODYCLASS')."\";}");
COption::SetOptionString("fileman", "use_code_editor", "N");
/*end main settings*/
?>