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

<section class="about about-4 py-100">
	<div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="img-box">
					<div class="about-img">
						<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="03 About">
					</div>
					<?if($arItem["PROPERTIES"]["icon_show"]["VALUE"] == 'Y'):?>
						<div class="logo-box">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
						</div>
					<?endif;?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="text-box">
					<p><?=$arItem["PREVIEW_TEXT"]?></p>
					<a class="btn-1" href="<?=SITE_DIR.$arItem["PROPERTIES"]["url"]["VALUE"];?>"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="skills">
					<div class="skill-box">
						<div class="skill-top">
							<span class="name"><?=$arItem["PROPERTIES"]["stat1_title"]["VALUE"];?></span>
							<span class="number"><?=$arItem["PROPERTIES"]["stat1_percent"]["VALUE"];?>%</span>
						</div>
						<div class="skill-line">
							<div class="line" data-value="<?=$arItem["PROPERTIES"]["stat1_percent"]["VALUE"];?>%"></div>
						</div>
					</div>
					<div class="skill-box">
						<div class="skill-top">
							<span class="name"><?=$arItem["PROPERTIES"]["stat2_title"]["VALUE"];?></span>
							<span class="number"><?=$arItem["PROPERTIES"]["stat2_percent"]["VALUE"];?>%</span>
						</div>
						<div class="skill-line">
							<div class="line" data-value="<?=$arItem["PROPERTIES"]["stat2_percent"]["VALUE"];?>%"></div>
						</div>
					</div>
					<div class="skill-box">
						<div class="skill-top">
							<span class="name"><?=$arItem["PROPERTIES"]["stat3_title"]["VALUE"];?></span>
							<span class="number"><?=$arItem["PROPERTIES"]["stat3_percent"]["VALUE"];?>%</span>
						</div>
						<div class="skill-line">
							<div class="line" data-value="<?=$arItem["PROPERTIES"]["stat3_percent"]["VALUE"];?>%"></div>
						</div>
					</div>
					<div class="skill-box">
						<div class="skill-top">
							<span class="name"><?=$arItem["PROPERTIES"]["stat4_title"]["VALUE"];?></span>
							<span class="number"><?=$arItem["PROPERTIES"]["stat4_percent"]["VALUE"];?>%</span>
						</div>
						<div class="skill-line">
							<div class="line" data-value="<?=$arItem["PROPERTIES"]["stat4_percent"]["VALUE"];?>%"></div>
						</div>
					</div>
					<div class="skill-box">
						<div class="skill-top">
							<span class="name"><?=$arItem["PROPERTIES"]["stat5_title"]["VALUE"];?></span>
							<span class="number"><?=$arItem["PROPERTIES"]["stat5_percent"]["VALUE"];?>%</span>
						</div>
						<div class="skill-line">
							<div class="line" data-value="<?=$arItem["PROPERTIES"]["stat5_percent"]["VALUE"];?>%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>