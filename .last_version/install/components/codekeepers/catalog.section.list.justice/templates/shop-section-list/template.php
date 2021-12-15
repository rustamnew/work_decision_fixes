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

<div class="shop-page py-100">
	<div class="container">
		<div class="row">
			<?foreach($arResult["SECTIONS"] as $arItem):?>
				<div class="col-md-3">
					<div class="shop-item">
						<a href="<?=$arItem["SECTION_PAGE_URL"]?>" >
							<div class="item-img">
								<img class="img-fluid" src="<?=$arItem["PICTURE"]["SRC"]?>" alt="01 Shop">
							</div>
						</a>

						<div class="item-text text-center">
							<a href="<?=$arItem["SECTION_PAGE_URL"]?>" class="open-item-shop"><h4><?=$arItem["NAME"]?></h4></a>
						</div>
					</div>
				</div>
			<?endforeach;?>	
			
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<div class="col-md-12">
					<?=$arResult["NAV_STRING"]?>
				</div>
			<?endif;?>
		</div>
	</div>
</div>