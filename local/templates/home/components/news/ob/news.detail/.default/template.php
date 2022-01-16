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
<? 
$links 		= "";
$price 		= "";
$deal_priority 	= "";
$num_floors	= "";
$total_area 	= "";
$num_bahtrrooms = "";
$garage_avail 	= "";
$photo_glr		= "";
$add_files			= "";

foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):
	if($arProperty["NAME"] == "Ссылки на внешние ресурсы"):
if(is_array($arProperty["DISPLAY_VALUE"]))   
				foreach($arProperty["DISPLAY_VALUE"] as $value)	{
					$links .= '<a href="http://'.$value.'" target="_blank">'.$value.'</a><br />';
  				} 
				// $links = implode('</br>', $arProperty["DISPLAY_VALUE"]);
			else
				$links = '<a href="http://'.$arProperty["DISPLAY_VALUE"].'" target="_blank">'.$arProperty["DISPLAY_VALUE"].'</a>';
	endif;
	if($arProperty["NAME"] == "Цена, руб.")	$price = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Количество этажей") $num_floors = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Общая площадь, м2") $total_area = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Количество санузлов") $num_bahtrrooms = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Наличие гаража") $garage_avail = $arProperty["DISPLAY_VALUE"];
	if($arProperty["NAME"] == "Приоритетная сделка") $deal_priority = $arProperty["DISPLAY_VALUE"];
endforeach;
if($arResult['PROPERTIES']['PHOTOGALLERY']['VALUE']){
		$photos = [];
		foreach ($arResult['PROPERTIES']['PHOTOGALLERY']['VALUE'] as $key => $photoId) {
			$arPhoto = CFile::ResizeImageGet($photoId, ["width" => 500, "height" => 500], BX_RESIZE_IMAGE_EXACT, true, false, false, 100);
			$arPhotoBig = CFile::ResizeImageGet($photoId, ["width" => 500, "height" => 500], BX_RESIZE_IMAGE_PROPORTIONAL, true, false, false, 100);
			$photos[] = ['SRC'=>$arPhoto['src'], 'SRC_BIG' => $arPhotoBig['src'], 'ALT'=>$arResult['PROPERTIES']['PHOTOGALLERY']['DESCRIPTION'][$key]];
		}
		//И сохраняем в кеш только нужные данные
		$arResult['GALLARY_PHOTOS'] = $photos;
		$this->__component->SetResultCacheKeys(['GALLARY_PHOTOS']);
}
if($arResult['PROPERTIES']['ADD_FILES']['VALUE']){
		$i=0;
		foreach ($arResult['PROPERTIES']['ADD_FILES']['VALUE'] as $key => $fileId) {
			$i++;
			$arfiles = CFile::GetPath($fileId);
			$add_files .='<a href="http://'.$_SERVER['HTTP_HOST'].$arfiles.'" target="_blank">Приложение '.$i.'</a><br />';
		}
}
?>
<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Детальное описание</span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
			  <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?echo $price;?> руб.</strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">

              <div class="slide-one-item home-slider owl-carousel">

				<div><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
<?
$this->setFrameMode(true);
if($arResult['GALLARY_PHOTOS']) { //А есть ли вообще картинки
	foreach ($arResult['GALLARY_PHOTOS'] as $key => $photo) {
	echo '<div>'; 
	echo '<a href="'.$photo['SRC_BIG'].'" class="img-fluid" data-caption="'.$photo['ALT'].'">';
	echo '<img src="'.$photo['SRC'].'" alt="'.$photo['ALT'].'" class="img-fluid">';
	echo '</a>';
	echo '</div>';
	}
}
?>
              </div>
            </div>

            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?echo $price;?> руб.</strong>
                </div>

                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
					  <span class="property-specs">Этажей</span>
                    <span class="property-specs-number"><?echo $num_floors;?><sup></sup></span>
                  </li>
                  <li>
					  <span class="property-specs">Санузлов</span>
                    <span class="property-specs-number"><?echo $num_bahtrrooms;?></span>
                  </li>
                  <li>
					  <span class="property-specs">Площадь</span>
                    <span class="property-specs-number"><?echo $total_area;?></span>
                  </li>
                </ul>
                </div>
              </div>


              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Дата обновления</span>
                  <strong class="d-block"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Количество санузлов</span>
                  <strong class="d-block"><?echo $num_bahtrrooms;?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Наличие гаража</span>
                  <strong class="d-block"><?echo $garage_avail;?></strong>
                </div>
              </div>
              <h2 class="h4 text-black">Детальное описание </h2>
              <p><?echo $arResult["DETAIL_TEXT"];?></p>

              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Галерея изображений</h2>
                </div>
<?
$this->setFrameMode(true);
if($arResult['GALLARY_PHOTOS']) { //А есть ли вообще картинки
	foreach ($arResult['GALLARY_PHOTOS'] as $key => $photo) {
	echo '<div class="col-sm-6 col-md-4 col-lg-3 mb-4">'; 
	echo '<a href="'.$photo['SRC_BIG'].'" class="image-popup gal-item" data-caption="'.$photo['ALT'].'">';
	echo '<img src="'.$photo['SRC'].'" alt="'.$photo['ALT'].'" class="img-fluid">';
	echo '</a>';
	echo '</div>';
	}
}
?>
              </div>
				<h2 class="h4 text-black">Ссылки на внешние ресурсы</h2>
				<p><?echo $links;?></p>
				<h2 class="h4 text-black">Дополнительные материалы</h2>
				<p><?echo $add_files;?></p>

            </div>
          </div>

          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>

        </div>
      </div>
    </div>

	<div style="clear:both"></div>
	<br />

	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
	?>
		<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;