<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Биржа недвижимости");
$APPLICATION->SetPageProperty("description", "Объявления");
$APPLICATION->SetTitle("Объявления");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"ob", 
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
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Объявления",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "NUM_BATHROOMS",
			1 => "NUMFLOORS",
			2 => "GARAGE_AVAIL",
			3 => "TOTAL_AREA",
			4 => "DEAL_PRIORITY",
			5 => "LINKS",
			6 => "PRICE",
			7 => "COD",
			8 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "NUM_BATHROOMS",
			1 => "NUMFLOORS",
			2 => "GARAGE_AVAIL",
			3 => "TOTAL_AREA",
			4 => "DEAL_PRIORITY",
			5 => "LINKS",
			6 => "PRICE",
			7 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Объявления",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "ACTIVE_FROM",
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
		"COMPONENT_TEMPLATE" => "ob",
		"CATEGORY_IBLOCK" => array(
			0 => "9",
		),
		"CATEGORY_CODE" => "CATEGORY",
		"CATEGORY_ITEMS_COUNT" => "5",
		"CATEGORY_THEME_5" => "list",
		"SEF_FOLDER" => "/ads/",
		"CATEGORY_THEME_9" => "list",
		"CATEGORY_THEME_13" => "list",
		"FILTER_NAME" => "arrFilter",
		"FILTER_FIELD_CODE" => array(
			0 => "CREATED_BY",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#.html",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>