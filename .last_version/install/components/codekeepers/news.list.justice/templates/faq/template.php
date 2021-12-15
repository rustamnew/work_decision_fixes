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
<section class="faqs py-100-70">
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
	
		<div class="row faq" id="faqSite">
			<?if($arParams["EXPAND"] == 'Y'):?>
				<div class="col">
				<?$i = 0;?>
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						
						<div class="faq-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<h5 class="question-header" id="<?=$i;?>">
								<button class="click collapsed" type="button" data-toggle="collapse" data-target="#faq<?=$i;?>" aria-expanded="false" aria-controls="faqOne">
									<?=$arItem["NAME"]?>
									<i class="fas fa-angle-right"></i>
								</button>
							</h5>
							<div id="faq<?=$i;?>" class="answer collapse" aria-labelledby="faq_<?=$i;?>" data-parent="#faqSite">
								<p class="about-text"><?=$arItem["PREVIEW_TEXT"]?></p>
							</div>
						</div>

						<?$i++;?>
					<?endforeach;?>
				</div>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
					<div class="col-md-12">
						<?=$arResult["NAV_STRING"]?>
					</div>
				<?endif;?>
			<?elseif ($arParams["EXPAND"] == 'N' || $arParams["EXPAND"] == false):?>
				<div class="col-lg-6">
					<?for ($i = 0; $i <= count($arResult["ITEMS"]) - 1; $i++) {
						if($i % 2 == 0):?>
							<?
							$this->AddEditAction($arResult["ITEMS"][$i]['ID'], $arResult["ITEMS"][$i]['EDIT_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"][$i]["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arResult["ITEMS"][$i]['ID'], $arResult["ITEMS"][$i]['DELETE_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"][$i]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>

							<div class="faq-box" id="<?=$this->GetEditAreaId($arResult["ITEMS"][$i]['ID']);?>">
								<h5 class="question-header" id="<?=$i;?>">
									<button class="click collapsed" type="button" data-toggle="collapse" data-target="#faq<?=$i;?>" aria-expanded="false" aria-controls="faqOne">
										<?=$arResult["ITEMS"][$i]["NAME"]?>
										<i class="fas fa-angle-right"></i>
									</button>
								</h5>
								<div id="faq<?=$i;?>" class="answer collapse" aria-labelledby="faq_<?=$i;?>" data-parent="#faqSite">
									<p class="about-text"><?=$arResult["ITEMS"][$i]["PREVIEW_TEXT"]?></p>
								</div>
							</div>
						<?endif;
					}?>
				</div>
				<div class="col-lg-6">
					<?for ($i = 0; $i <= count($arResult["ITEMS"]) - 1; $i++) {
						if($i % 2 == 1):?>
							<?
							$this->AddEditAction($arResult["ITEMS"][$i]['ID'], $arResult["ITEMS"][$i]['EDIT_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"][$i]["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arResult["ITEMS"][$i]['ID'], $arResult["ITEMS"][$i]['DELETE_LINK'], CIBlock::GetArrayByID($arResult["ITEMS"][$i]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>

							<div class="faq-box" id="<?=$this->GetEditAreaId($arResult["ITEMS"][$i]['ID']);?>">
								<h5 class="question-header" id="faq_<?=$i;?>">
									<button class="click collapsed" type="button" data-toggle="collapse" data-target="#faq<?=$i;?>" aria-expanded="false" aria-controls="faqOne">
										<?=$arResult["ITEMS"][$i]["NAME"]?>
										<i class="fas fa-angle-right"></i>
									</button>
								</h5>
								<div id="faq<?=$i;?>" class="answer collapse" aria-labelledby="faq_<?=$i;?>" data-parent="#faqSite">
									<p class="about-text"><?=$arResult["ITEMS"][$i]["PREVIEW_TEXT"]?></p>
								</div>
							</div>
						<?endif;
					}?>

				</div>
			<?endif;?>
		</div>
	</div>
</section>
