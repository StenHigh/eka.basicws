<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
$sapi_type = php_sapi_name();
if ($sapi_type=="cgi")
header("Status: 404");
else
header("HTTP/1.1 404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 - HTTP not found");
?>
    <div class="error_404">
        <div class="center_box">
            <div class="error_404_text">
                Страница не найдена<br/>
                <a href="<?=SITE_DIR?>">Перейти на главную страницу</a>
            </div>
        </div>
    </div> <!-- .advert_napravl -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>