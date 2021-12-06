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
<?if (!empty($arResult['SECTIONS'])):?>

<div class="widget">
	<div class="widget-title">
		<h3><?=$arParams["TITLE"]?></h3>
	</div>
	<div class="widget-body">
		<ul id="accordion" class="single-practice-areas-list accordion">
			<?foreach($arResult["SECTIONS"] as $arItem):?>
				<li>
					<div class="link">
						<a href="<?=$arItem["SECTION_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><i class="fa fa-chevron-right"></i>
					</div>
				
					<ul class="submenu" style="display: none">
						<?
						$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID"=>$arItem["IBLOCK_ID"], "IBLOCK_SECTION_ID"=> $arItem["ID"], "GLOBAL_ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
					
						while($ob = $res->GetNextElement()) {
							$arFields = $ob->GetFields();?>
							<li><a href="<?=$arFields["DETAIL_PAGE_URL"]?>"><?=$arFields["NAME"]?></a></li>
						<?}?>
					</ul>
				</li>
			<?endforeach;?>	
		</ul>
	</div>
</div>

<?endif;?>

