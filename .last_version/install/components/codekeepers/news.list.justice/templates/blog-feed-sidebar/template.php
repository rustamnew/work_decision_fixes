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
<div class="widget">
	<div class="widget-title">
		<h3><?=$arParams["TITLE"]?></h3>
	</div>
	<div class="news-box">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="news-item">
				<div class="news-img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
				<div class="item-content">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="title-blog">
						<h5><?=$arItem["NAME"]?></h5>
					</a>

					<span><a href="#"><?echo FormatDateFromDB($arItem["DATE_CREATE"], 'SHORT');?></a></span>
				</div>
			</div>
		<?endforeach;?>
	</div>
</div>