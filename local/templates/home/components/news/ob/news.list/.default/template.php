<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="row justify-content-center site-section-title">
              <h2>Новые предложения для Вас</h2>
            </div>
          </div>
        </div>
<div class="row justify-content-center mb-5">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
				<figure>
				<img
						class="img-fluid"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" 
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/>
				</figure>
<? 
$links 		= "";
$price 		= "";
$deal_priority 	= "";
$num_floors	= "";
$total_area 	= "";
$num_bahtrrooms = "";
$garage_avail 	= "";
foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):
	if($arProperty["NAME"] == "Ссылки на внешние ресурсы"):
			if(is_array($arProperty["DISPLAY_VALUE"]))  
				$links = implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			else
				$links = $arProperty["DISPLAY_VALUE"];
	endif;
	if($arProperty["NAME"] == "Цена, руб.")	$price = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Количество этажей") $num_floors = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Общая площадь, м2") $total_area = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Количество санузлов") $num_bahtrrooms = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Наличие гаража") $garage_avail = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Приоритетная сделка") $deal_priority = $arProperty["DISPLAY_VALUE"];
endforeach;
?>

				<div class="prop-text">
					<div class="inner">
						<span class="price rounded"><?echo $price;?></span>
						<h3 class="title"><?echo $arItem["NAME"]?></h3>
						<p class="location"><?echo $links;?></p>
					</div>

                <div class="prop-more-info">
                  <div class="inner d-flex">

                    <div class="col">
                      <span>Площадь:</span>
						<strong><?echo $total_area;?><sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Этажей:</span>
						<strong><?echo $num_floors;?></strong>
                    </div>
                    <div class="col">
                      <span>Санузлов:</span>
						<strong><?echo $num_bahtrrooms;?></strong>
                    </div>
                    <div class="col">
                      <span>Наличие гаража:</span>
						<strong><?echo $garage_avail;?></strong>
                    </div>

                  </div>
                </div>

				</div>
				</a>
			<?endif;?>
		<?endif?>
	</div>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

      </div>
    </div>