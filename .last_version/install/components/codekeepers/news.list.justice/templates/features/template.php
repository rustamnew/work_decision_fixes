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

<section class="features">
	<div class="container">
		<div class="features-box">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<li class="features-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["PROPERTIES"]["link"]["VALUE"];?>">
						<?$path = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);?>

						<?if (stristr($path, '.svg')):?>
							<div class="features-image">
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);
								?>
							</div>
						<?else:?>
							<div class="features-image">
								<img src="<?echo CFile::GetPath($arItem["PROPERTIES"]["icon"]["VALUE"]);?>">
							</div>
						<?endif;?>

						<div class="item-text">
							<span><?=$arItem["NAME"];?></span>
							<h4><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h4>
							<p><?=$arItem["PROPERTIES"]["description"]["VALUE"];?></p>
						</div>
					</a>		
				</li>
			<?endforeach;?>
		</div>
	</div>
</section>