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
$this->setFrameMode(true);?>
<div class="search-box">
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<input type="search" name="q" placeholder="<?=GetMessage("FORM_INPUT_PLACEHOLDER")?>">
		<button type="submit" name="s"><i class="fas fa-search"></i></button>
	</form>
	<i class="fas fa-times close-search"></i>
</div>

