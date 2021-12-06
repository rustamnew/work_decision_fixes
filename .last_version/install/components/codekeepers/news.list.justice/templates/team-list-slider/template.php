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

<section class="advisors py-100-70">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"];?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>
		
		<div class="owl-advisors owl-carousel owl-theme">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="advisors-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="advisors-box">
						<div class="img-box">
							<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="advisor">
							<div class="img-box-hover">
								<ul>
									<?if($arItem["PROPERTIES"]["link_Vk"]["VALUE"]):?>
										<li><a href="<?=$arItem["PROPERTIES"]["link_Vk"]["VALUE"];?>"><i class="fab fa-vk"></i></a></li>
									<?endif;?>

									<?if($arItem["PROPERTIES"]["link_Instagram"]["VALUE"]):?>
										<li><a href="<?=$arItem["PROPERTIES"]["link_Instagram"]["VALUE"];?>"><i class="fab fa-instagram"></i></a></li>
									<?endif;?>

									<?if($arItem["PROPERTIES"]["link_Facebook"]["VALUE"]):?>
										<li><a href="<?=$arItem["PROPERTIES"]["link_Facebook"]["VALUE"];?>"><i class="fab fa-facebook-f"></i></a></li>
									<?endif;?>

									<?if($arItem["PROPERTIES"]["link_Twitter"]["VALUE"]):?>
										<li><a href="<?=$arItem["PROPERTIES"]["link_Twitter"]["VALUE"];?>"><i class="fab fa-twitter"></i></a></li>
									<?endif;?>

									<?if($arItem["PROPERTIES"]["link_Youtube"]["VALUE"]):?>
										<li><a href="<?=$arItem["PROPERTIES"]["link_Youtube"]["VALUE"];?>"><i class="fab fa-youtube"></i></a></li>
									<?endif;?>
								</ul>
							</div>
						</div>
						<div class="text-box text-center">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h5><?=$arItem["NAME"]?></h5></a>
							<span><?=$arItem["PROPERTIES"]["speciality"]["VALUE"];?></span>
						</div>
					</div>
				</div>
			<?endforeach;?>	
		</div>
	</div>
</section>



