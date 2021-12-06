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

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="col-md-6 col-lg-4">
		<div class="item-careers" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<h4><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h4>
			<ul>
				<li class="active"><?=$arItem["PROPERTIES"]["employment"]["VALUE"];?></li>
				<li><?=$arItem["PROPERTIES"]["city"]["VALUE"];?></li>
			</ul>
			<p><?=$arItem["PREVIEW_TEXT"]?></p>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link"><?echo GetMessage("READ_MORE")?></a>
		</div>
	</div>
<?endforeach;?>	
