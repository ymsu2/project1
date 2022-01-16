<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
<?$APPLICATION->ShowHead();?> 
<?
	use Bitrix\Main\Page\Asset; // Подключение с использованием ядра D7
//	Asset::getInstance()->addCss('https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500');
//	Asset::getInstance()->addString("<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500'>");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/fonts/icomoon/style.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/magnific-popup.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/jquery-ui.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/owl.theme.default.min.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-datepicker.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/mediaelementplayer.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/animate.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/fonts/flaticon/font/flaticon.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/fl-bigmug-line.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/aos.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css'); 

	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-migrate-3.0.1.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-ui.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/popper.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/mediaelement-and-player.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.countdown.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap-datepicker.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/aos.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?$APPLICATION->ShowPanel();?>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

	<div class="border-bottom bg-white top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-md-6">
				<p class="mb-0">
				<a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span>
				<span class="d-none d-md-inline-block ml-2">
<!--1-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/header/index_phone.php"
	)
);?> 
				</span>	</a>
				<a href="#"><span class="text-black fl-bigmug-line-email64"></span>
				<span class="d-none d-md-inline-block ml-2">
<!--2-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/header/index_email.php"
	)
);?> 
				</span>	</a>
				</p> 
			</div>
			<div class="col-6 col-md-6 text-right">
<!--3-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/header/index_social.php"
	)
);?> 
			</div>
		</div>
	</div>

    </div>

    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
			<h1 class=""><a href="<?SITE_DIR?>" class="h5 text-uppercase text-black"><strong>
<!--4-->
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_TEMPLATE_PATH."/include/header/index_title.php"
	)
);?> 
</strong></a>
			</h1>
	</div>
	<div class="col-4 col-md-4 col-lg-8">
		<nav class="site-navigation text-right text-md-right" role="navigation">
		<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
			<a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
		</div>
<!-- 5 МЕНЮ-->
<?$APPLICATION->IncludeComponent(
		"bitrix:menu", 
	"menu_top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_top"
	),
	false
);?>
<!-- конец МЕНЮ-->
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
<!-- навигационная цепочка для внутренних страниц-->
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
);?>
<? endif; ?> 
            </div>
