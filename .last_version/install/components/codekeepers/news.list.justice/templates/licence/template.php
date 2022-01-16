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
<section class="case-study py-100-70">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"]?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>
		<div class="row licence-list">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				
				<div class="col-md-6 col-lg-4">
					<div class="case-study-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-fancybox="gallery" data-src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" data-caption="<?=$arItem["NAME"]?>">
						<span></span>
						<div class="img-box">
							<img class="img-fluid gallery-item-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Case Study">
						</div>
						<div class="hover-box">
							<div class="text-box">
								<h4><a href="#"><?=$arItem["NAME"]?></a></h4>
							</div>
						</div>
					</div>
				</div>
			<?endforeach;?>	
		</div>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<div class="col-md-12">
				<?=$arResult["NAV_STRING"]?>
			</div>
		<?endif;?>
	</div>
</section>