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
					<h3><?=$arParams["TITLE"];?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>

		<div class="owl-case-study owl-carousel owl-theme">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="projects-owl-wrap">
					<div class="case-study-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<span></span>
						<div class="img-box">
							<img class="img-fluid gallery-item-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Case Study">
						</div>
						<div class="hover-box">
							<div class="text-box">
								<div class="tags">
									<?
									$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
									if($ar_res = $res->GetNext()) {?>
										<a href="<?=$ar_res["SECTION_PAGE_URL"]?>"><?=$ar_res["NAME"];?></a></li>
									
									<?}
									?>
								</div>

								<h4><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h4>
							</div>
						</div>
					</div>

					<div class="text-box text-center">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="projects-owl-item-title"><p><?=$arItem["NAME"]?></p></a>
						<?$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
						if($ar_res = $res->GetNext()) {?>
							<a href="<?=$ar_res["SECTION_PAGE_URL"]?>" class="projects-owl-item-subtitle"><?=$ar_res["NAME"];?></a></li>
						<?}?>
					</div>
				</div>

			<?endforeach;?>
		</div>
	</div>
</section>
