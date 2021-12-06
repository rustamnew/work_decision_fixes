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

<section class="provide">
	<div class="container-fluid" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="row">
			<div class="col-md-6">
				<div class="text-box">
					<div class="sec-title">
						<h2><?=$arItem["NAME"]?></h2>
						<h3><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h3>
						<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
					</div>
					<div class="content-box">
						<div class="content-item">
							<div class="content-item-icon">
								<?$path = CFile::GetPath($arItem['PROPERTIES']['feature1_icon']['VALUE']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$img_file = $path;

									$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
									if($svg['id']){
										$img_grup = $img_file.'#'.$svg['id'];
									}

									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
									print_r($svg_file);
									?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="box">
								<h4><?=$arItem["PROPERTIES"]["feature1_title"]["VALUE"];?></h4>
								<p><?=$arItem["PROPERTIES"]["feature1_subtitle"]["VALUE"];?></p>
							</div>
						</div>
						<div class="content-item">
							<div class="content-item-icon">
								<?$path = CFile::GetPath($arItem['PROPERTIES']['feature2_icon']['VALUE']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$img_file = $path;

									$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
									if($svg['id']){
										$img_grup = $img_file.'#'.$svg['id'];
									}

									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
									print_r($svg_file);
									?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="box">
								<h4><?=$arItem["PROPERTIES"]["feature2_title"]["VALUE"];?></h4>
								<p><?=$arItem["PROPERTIES"]["feature2_subtitle"]["VALUE"];?></p>
							</div>
						</div>
						<div class="content-item">
							<div class="content-item-icon">
								<?$path = CFile::GetPath($arItem['PROPERTIES']['feature3_icon']['VALUE']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$img_file = $path;

									$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
									if($svg['id']){
										$img_grup = $img_file.'#'.$svg['id'];
									}

									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
									print_r($svg_file);
									?>
								<?else:?>
									<img src=<?=$path?>>
								<?endif;?>
							</div>
							<div class="box">
								<h4><?=$arItem["PROPERTIES"]["feature3_title"]["VALUE"];?></h4>
								<p><?=$arItem["PROPERTIES"]["feature3_subtitle"]["VALUE"];?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img-box" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
					<div class="img-provide"></div>

					<?if($arItem["PROPERTIES"]["counter_show"]["VALUE"] == 'Y'):?>
						<div class="statistic-owl owl-carousel owl-theme">
							<div class="statistic-item">
								<div class="statistic-item-icon">
									<?$path = CFile::GetPath($arItem['PROPERTIES']['counter1_icon']['VALUE']);?>

									<?if (stristr($path, '.svg')):?>
										<?
										$img_file = $path;

										$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
										if($svg['id']){
											$img_grup = $img_file.'#'.$svg['id'];
										}

										$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
										print_r($svg_file);
										?>
									<?else:?>
										<img src=<?=$path?>>
									<?endif;?>
								</div>
							
								<div class="content-box">
									<span class="counter"><?=$arItem["PROPERTIES"]["counter1_number"]["VALUE"];?></span>
									<div class="name-content"><?=$arItem["PROPERTIES"]["counter1_title"]["VALUE"];?></div>
								</div>
								<p><?=$arItem["PROPERTIES"]["counter1_description"]["VALUE"];?></p>
							</div>


							<div class="statistic-item">
								<div class="statistic-item-icon">
									<?$path = CFile::GetPath($arItem['PROPERTIES']['counter2_icon']['VALUE']);?>

									<?if (stristr($path, '.svg')):?>
										<?
										$img_file = $path;

										$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
										if($svg['id']){
											$img_grup = $img_file.'#'.$svg['id'];
										}

										$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
										print_r($svg_file);
										?>
									<?else:?>
										<img src=<?=$path?>>
									<?endif;?>
								</div>

								<div class="content-box">
									<span class="counter"><?=$arItem["PROPERTIES"]["counter2_number"]["VALUE"];?></span>
									<div class="name-content"><?=$arItem["PROPERTIES"]["counter2_title"]["VALUE"];?></div>
								</div>
								<p><?=$arItem["PROPERTIES"]["counter2_description"]["VALUE"];?></p>
							</div>
						</div>
					<?endif;?>
				</div>
			</div>
		</div>
	</div>

	<?if($arItem["PROPERTIES"]["video_show"]["VALUE"] == 'Y'):?>
		<div class="presentation-box">
			<a href="<?=SITE_DIR.$arItem["PROPERTIES"]["video_url"]["VALUE"];?>" class="pulse" data-lity>
				<i class="fas fa-play"></i>
			</a>
		</div>
	<?endif;?>
</section>
