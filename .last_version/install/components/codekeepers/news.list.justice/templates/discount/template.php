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

<?$arItem = $arResult["ITEMS"][0];?>

<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


<section class="testimonial-and-subscribe py-100"  style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
	<div class="overlay"></div>

	<div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="row" style="justify-content: center">
			<div class="col-lg-6">
				<div class="subscribe">
					<div class="sec-title">
						<h3><?=$arItem["NAME"]?></h3>
					</div>

					<div class="form-short-wrap">
						<?$APPLICATION->IncludeComponent("codekeepers:main.feedback.justice", "feedback-form-short", Array(
							"AJAX_MODE" => "N",
							"AJAX_OPTION_SHADOW" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_TYPE" => "N",
							"COMPONENT_TEMPLATE" => ".default",
							"USE_CAPTCHA" => "Y",
							"OK_TEXT" => GetMessage("FORM_OK_TEXT"),
							"REQUIRED_FIELDS" => array(
								0 => "NAME",
								1 => "PHONE",
								2 => "MESSAGE",
							),
							"EVENT_MESSAGE_ID" => array(
								0 => "#FORM_ID#"
							),
							"SUBMIT_TEXT" => $arItem["PROPERTIES"]["text"]["VALUE"],
							"FORM_PAGE" => $arParams["FORM_PAGE"],
							"FORM_SECTION" => $arParams["FORM_SECTION"],
							"FORM_TYPE" => $arParams["FORM_TYPE"],
							),
							false
						);?>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>