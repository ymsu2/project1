<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<footer class="site-footer">
      <div class="container">
        <div class="row">
<!--14-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/footer/index_about.php"
	)
);?> 
<!-- старт МЕНЮ-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
<!--15-->
<!-- МЕНЮ-->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_footer", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "604800",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_footer"
	),
	false
);?><br>
              </div>
            </div>
          </div>
<!-- конец МЕНЮ-->
          <div class="col-lg-4 mb-5 mb-lg-0">
<!--16-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/footer/index_follow_us.php"
	)
);?> 
          </div>          
        </div>
        <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
        <p>
<!--17-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/footer/index_copyright.php"
	)
);?>
</p>
        </div>
        </div>
      </div>
    </footer>
  </div>
  </body>
</html>