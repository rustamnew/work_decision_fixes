<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
?>
<section class="bolg py-70-70 searchpage-section">
	<div class="container">
		
		<?if($arResult["SEARCH"]):?>
			<h2><?=$arParams["PAGER_TITLE"];?></h2>
		<?else:?>
			<h2><?=$arParams["SEARCH_FAIL"];?></h2>
		<?endif;?>

		<?foreach($arResult["SEARCH"] as $arItem):?>
			<div class="services-section-item">
				<div class="item-content">
					<h5><a href="<?=$arItem["URL"];?>"><?=$arItem["TITLE_FORMATED"];?></a></h5>
					<p><?=$arItem["BODY_FORMATED"];?></p>
				</div>
			</div>
		<?endforeach;?>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"] == "Y") echo $arResult["NAV_STRING"];?>
	</div>
</section>

