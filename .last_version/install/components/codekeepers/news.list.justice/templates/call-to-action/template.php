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


<section class="contact py-100" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
	<div class="overlay"></div>
	<div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="sec-title text-center">
					<h3><?=$arItem["NAME"]?></h3>
					<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
					<a class="<?if(!$arItem["PROPERTIES"]["url"]["VALUE"]):?>summonFormButton <?endif;?>btn-1" href="<?=$arItem["PROPERTIES"]["url"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
				</div>
			</div>
		</div>
	</div>
</section>