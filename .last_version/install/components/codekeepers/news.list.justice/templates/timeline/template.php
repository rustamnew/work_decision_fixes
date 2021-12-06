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

<div class="history-line owl-carousel owl-theme">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="box-line">
			<div class="head">
				<h4><?=$arItem["NAME"]?></h4>
			</div>
			<div class="down">
				<span><?=$arItem["PROPERTIES"]["date"]["VALUE"];?></span>
			</div>
		</div>
	<?endforeach;?>	
</div>