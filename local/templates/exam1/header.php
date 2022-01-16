<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?=SITE_CHARSET?>" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?$APPLICATION->ShowHead();
	use Bitrix\Main\Page\Asset; // Подключение с использованием ядра D7
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/reset.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css'); 
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/owl.carousel.css');

	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/scripts.js");

Asset::getInstance()->addString('<link rel="icon" type="image/vnd.microsoft.icon" href="'.SITE_TEMPLATE_PATH.'/images/favicon.ico" />');
Asset::getInstance()->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'/images/favicon.ico" />');
?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
					<?if((intval(date("H")) >= 9) && (intval(date("H")) <= 18)):?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
					<?else:?>
					<a href="mailto:store@store.ru" class="phone">store@store.ru</a>
					<?endif?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
					<form action="<?=SITE_TEMPLATE_PATH?>/search/" method="get" class="main-frm-search">
						<input type="hidden" name="tags" value="" />
						<input type="hidden" name="how" value="r" />
						<input type="text" name="q" placeholder="Поиск">
						<button type="submit"></button>
					</form>
                    <nav class="menu-block">
					<ul>

<?
global $USER;
if ($USER->IsAuthorized()):
	$arGroups = CUser::GetUserGroup($USER->GetID()); // массив групп, в которых состоит текущий пользователь
	$id = $USER->GetID();
	$rsUser = CUser::GetByID($id);
	$arUser = $rsUser->Fetch();
?>
							<li><a href="<?=SITE_TEMPLATE_PATH?>/login/user.php"><? echo $arUser[NAME]." ".$arUser[LAST_NAME]."&nbsp;[".$arUser[LOGIN]."]";?></a></li>
							<li><a href="<?=SITE_TEMPLATE_PATH?>/login/?logout=yes">Выйти</a></li>
<?else:?>

							<li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
								<form name="form_auth" action="<?=SITE_TEMPLATE_PATH?>/login/" method="post" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
								<input type="hidden" name="AUTH_FORM" value="Y" />
								<input type="hidden" name="TYPE" value="AUTH" />
								<input type="hidden" name="backurl" value="<?=SITE_TEMPLATE_PATH?>/login/" />
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" name="USER_LOGIN" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" name="USER_PASSWORD" placeholder="Пароль"></div>
									<div class="frm-row"><a href="<?=SITE_TEMPLATE_PATH?>/login/?forgot_password=yes" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/login/?register=yes">Зарегистрироваться</a></li>
<?endif?>
						</ul>


                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->


        <!-- nav -->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_hor_top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_hor_top"
	),
	false
);?>
        <!-- /nav -->

<? if ($APPLICATION->GetCurPage() !== '/local/templates/exam1/'): ?>
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s2",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
);?>
            </div>
        </div>
        <!-- /breadcrumbs -->
<?else:?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
			<p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
			</p>

						<!-- index column -->
		                <div class="cnt-section index-column">
		                    <div class="col-wrap">

		                        <!-- main actions box -->
		                        <div class="column main-actions-box">
		                        	<div class="title-block">
		                                <h2>Новинки</h2>
		                                 <hr>
		                            </div>
		                              <div class="items-wrap">
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?SITE_DIR?>img/new01.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?SITE_DIR?>img/new02.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title-block att">
		                                            Угловой диван!
		                                        </div>
		                                        <br>
		                                        <div class="inner-block">
		                                            <a href="" class="photo-block">
		                                                <img src="<?SITE_DIR?>img/new03.jpg" alt="">
		                                            </a>
		                                            <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
		                                            <a href="" class="btn-arr"></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <a href="" class="btn-next">Все новинки</a>
		                        </div>
		                        <!-- /main actions box -->
		                        <!-- main news box -->
		                        <div class="column main-news-box">
		                            <div class="title-block">
		                                <h2>Новости</h2>
		                            </div>
		                            <hr>
		                            <div class="items-wrap">
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="item-wrap">
		                                    <div class="item">
		                                        <div class="title"><a href="">29 августа 2012</a>
		                                        </div>
		                                        <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <a href="" class="btn-next">Все новости</a>
		                        </div>
		                        <!-- /main news box -->

		                    </div>
		                </div>
		                <!-- /index column -->

	                    <!-- afisha box -->
		                <div class="cnt-section afisha-box">
		                    <div class="section-title-block">
		                        <h2 class="second-ttile">Ближайшие мероприятия</h2>
		                        <a href="" class="btn-next">все мероприятия</a>
		                    </div>
		                    <hr>
		                    <div class="items-wrap">
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="item-wrap">
		                            <div class="item">
		                                <div class="title"><a href="">29 августа 2012, Москва</a>
		                                </div>
		                                <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <!-- /afisha box -->
                    </div>
                </div>
                <!-- /content -->

                <!-- side -->
                <div class="side">
                    <!-- side anonse -->
                    <div class="side-block side-anonse">
                        <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
                        <div class="item">
                            <p>Клиенты предпочитают все больше эко-материалов.</p>
                        </div>
                    </div>
                    <!-- /side anonse -->
                    <!-- side wrap -->
                    <div class="side-wrap">
                        <div class="item-wrap">
                            <!-- side action -->
                            <div class="side-block side-action">
                                <img src="<?SITE_DIR?>img/side-action-bg.jpg" alt="" class="bg">
                                <div class="photo-block">
                                    <img src="<?SITE_DIR?>img/side-action.jpg" alt="">
                                </div>
                                <div class="text-block">
                                    <div class="title">Акция!</div>
                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                    </p>
                                </div>
                                <a href="" class="btn-more">подробнее</a>
                            </div>
                            <!-- /side action -->
                        </div>

						<!-- footer rew slider box -->
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"left-news", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Отзывы",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "POSITION",
			1 => "COMPANY",
			2 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "reviews",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "POSITION",
			1 => "COMPANY",
			2 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Отзывы",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "left-news",
		"SEF_FOLDER" => "/local/templates/exam1/rew/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#.html",
		)
	),
	false
);?>
						<!-- / footer rew slider box --> 


                    </div>
                    <!-- /side wrap -->
                </div>
                <!-- /side -->
            </div>
            <!-- /content box -->
        </div>
        <!-- /page -->
        <div class="empty"></div>
    </div>
    <!-- /wrap -->
<? endif; ?> 