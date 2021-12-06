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

<div class="row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="blog-item">
				<div class="img-box">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="open-post">
						<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Blog">
					</a>

					<?
					$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
					if($ar_res = $res->GetNext()) {?>
						<ul>
							<li><a href="<?=$ar_res["SECTION_PAGE_URL"]?>"><?=$ar_res["NAME"];?></a></li>
						</ul>
					<?}
					?>
				</div>
				<div class="text-box">
					<span class="blog-date"><?echo FormatDateFromDB($arItem["DATE_CREATE"], 'SHORT');?></span>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="title-blog">
						<h5><?=$arItem["NAME"]?></h5>
					</a>
					<p><?=$arItem["PREVIEW_TEXT"]?></p>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link"><?echo GetMessage("READ_MORE")?></a>
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
