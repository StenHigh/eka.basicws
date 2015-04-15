<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<?if($page !== SITE_DIR && ERROR_404 !== "Y"):?>
    </div>
  <?$APPLICATION->ShowViewContent("center_box_down")?>
<?if(!CSite::InDir('/uslugi/')):?>
    </div>
    <?$APPLICATION->ShowViewContent("content_box_down")?>
<?endif?>
<?endif?>
<? $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"services-menu-footer",
	array(
		"ROOT_MENU_TYPE" => "catalog",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "360000000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		)
	),
	false
); ?>
        <footer>
            <div class="center_box" >
                <div class="footer_block_1">
                        <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_logo_inc.php", Array(),
                            Array(
                                "MODE"     => "php",
                                "NAME"     => GetMessage( "PAGE_INC" ),
                                "TEMPLATE" => "page_inc.php"
                            )
                        );?>
                    <div>
                        <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_address_inc.php", Array(),
                            Array(
                                "MODE"     => "php",
                                "NAME"     => GetMessage( "PAGE_INC" ),
                                "TEMPLATE" => "page_inc.php"
                            )
                        );?>
                    </div>
                </div>
                <div class="footer_block_2">
                    <div class="footer_phones">
                        <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_phones_inc.php", Array(),
                            Array(
                                "MODE"     => "php",
                                "NAME"     => GetMessage( "PAGE_INC" ),
                                "TEMPLATE" => "page_inc.php"
                            )
                        );?>
                    </div>
                    <div>
                        <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_graph_inc.php", Array(),
                            Array(
                                "MODE"     => "php",
                                "NAME"     => GetMessage( "PAGE_INC" ),
                                "TEMPLATE" => "page_inc.php"
                            )
                        );?>
                    </div>
                    <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_email_inc.php", Array(),
                        Array(
                            "MODE"     => "php",
                            "NAME"     => GetMessage( "PAGE_INC" ),
                            "TEMPLATE" => "page_inc.php"
                        )
                    );?>
                </div>
                <div class="footer_block_3">
                    <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_social_inc.php", Array(),
                        Array(
                            "MODE"     => "php",
                            "NAME"     => GetMessage( "PAGE_INC" ),
                            "TEMPLATE" => "page_inc.php"
                        )
                    );?>
                </div>
            </div>
        </footer> <!-- footer -->

        <div class="after_footer">
            <div class="center_box">
                <span>
                    <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_rights_reserved_inc.php", Array(),
                        Array(
                            "MODE"     => "php",
                            "NAME"     => GetMessage( "PAGE_INC" ),
                            "TEMPLATE" => "page_inc.php"
                        )
                    );?>
                </span>
                <?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_development_inc.php", Array(),
                    Array(
                        "SHOW_BORDER" => "N",
                        "MODE"     => "php",
                        "NAME"     => GetMessage( "PAGE_INC" ),
                        "TEMPLATE" => "page_inc.php"
                    )
                );?>
            </div>
        </div> <!-- .after_footer -->
<?if(!$USER->IsAdmin() || !in_array(5,$USER->GetUserGroupArray())){$APPLICATION->ShowHeadScripts();}?>
<?$APPLICATION->IncludeFile( SITE_DIR . "include/footer_metrics_inc.php", Array(),
    Array(
        "MODE"     => "php",
        "NAME"     => GetMessage( "PAGE_INC" ),
        "TEMPLATE" => "page_inc.php"
    )
);?>
</body>
</html>
