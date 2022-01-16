<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
    <!-- footer -->
    <footer class="footer">
        <div class="inner-wrap">
            <nav class="main-menu">
                <div class="item">
                    <div class="title-block">О магазине</div>
                    <ul>
<?
$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom", 
	array(
		"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "bottom",
		"DELAY" => "N"
	),
	false
);
?>
                    </ul>
                </div>
                <div class="item">
                    <div class="title-block">Каталог товаров</div>
                    <ul>
                        <li><a href="">Кухни</a>
                        </li>
                        <li><a href="">Гарнитуры</a>
                        </li>
                        <li><a href="">Спальни и матрасы</a>
                        </li>
                        <li><a href="">Столы и стулья</a>
                        </li>
                        <li><a href="">Раскладные диваны</a>
                        </li>
                        <li><a href="">Кресла</a>
                        </li>
                        <li><a href="">Кровати и кушетки</a>
                        </li>
                        <li><a href="">Тумобчки и прихожие</a>
                        </li>
                        <li><a href="">Аксессуары</a>
                        </li>
                        <li><a href="">Каталоги мебели</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="contacts-block">
                <div class="title-block"><?=GetMessage("CONTACT_INFO")?></div>
                <div class="loc-block">
                    <div class="address">ул. Летняя, стр.12, офис 512</div>
                    <div class="phone">
<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/local/templates/exam1/include/inc-phon.php"
	)
);?> 
                    </div>
                </div>
                <div class="main-soc-block">
                    <a href="" class="soc-item">
                        <img src="<?SITE_DIR?>img/icons/soc01.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?SITE_DIR?>img/icons/soc02.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?SITE_DIR?>img/icons/soc03.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?SITE_DIR?>img/icons/soc04.png" alt="">
                    </a>
                </div>
                <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</body>
</html>