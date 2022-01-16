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

<ul class="services-section-list">
	<?foreach($arResult["SECTIONS"] as $arItem):?>
		<li class="services-section-item">
			<a href="<?=$arItem["SECTION_PAGE_URL"]?>" class="item-image" style="background-image: url(<?=$arItem["PICTURE"]["SRC"]?>)"></a>

			<div class="item-content">
				<h5><a href="<?=$arItem["SECTION_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h5>
				<p><?=$arItem["DESCRIPTION"]?></p>
			</div>
		</li>
	<?endforeach;?>	
</ul>




