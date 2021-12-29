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


<section class="history history-2 
<?if(!$arItem["PREVIEW_PICTURE"]["SRC"]):?>without_back<?endif;?> 
<?if($arItem["PROPERTIES"]["video_show"]["VALUE"] == 'N' || !$arItem["PROPERTIES"]["video_show"]["VALUE"]):?>without_video<?endif;?>">

	<div class="bg-section" id="<?=$this->GetEditAreaId($arItem['ID']);?>" <?if($arItem["PREVIEW_PICTURE"]["SRC"]):?> style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)" <?endif;?>>
		<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?> <div class="overlay"> </div><?endif;?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arItem["NAME"]?></h2>
					<h3><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h3>
					<p><?=$arItem["PROPERTIES"]["subtitle"]["VALUE"];?></p>
				</div>
			</div>
		</div>


		<?if($arItem["PROPERTIES"]["features_show"]["VALUE"] == 'Y'):?>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="history-2-item">
						<div class="history-2-item-image">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['features1_icon']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['features1_icon']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<??>>
							<?endif;?>
						</div>
					
						<div class="content">
							<h4><?=$arItem["PROPERTIES"]["features1_title"]["VALUE"];?></h4>
							<p><?=$arItem["PROPERTIES"]["features1_description"]["VALUE"];?></p>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-lg-3">
					<div class="history-2-item">
						<div class="history-2-item-image">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['features2_icon']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['features2_icon']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<??>>
							<?endif;?>
						</div>
					

						<div class="content">
							<h4><?=$arItem["PROPERTIES"]["features2_title"]["VALUE"];?></h4>
							<p><?=$arItem["PROPERTIES"]["features2_description"]["VALUE"];?></p>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-lg-3">
					<div class="history-2-item">
						<div class="history-2-item-image">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['features3_icon']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['features3_icon']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<??>>
							<?endif;?>
						</div>
					

						<div class="content">
							<h4><?=$arItem["PROPERTIES"]["features3_title"]["VALUE"];?></h4>
							<p><?=$arItem["PROPERTIES"]["features3_description"]["VALUE"];?></p>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-lg-3">
					<div class="history-2-item">
						<div class="history-2-item-image">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['features4_icon']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = CFile::GetPath($arItem['PROPERTIES']['features4_icon']['VALUE']);

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<??>>
							<?endif;?>
						</div>
					

						<div class="content">
							<h4><?=$arItem["PROPERTIES"]["features4_title"]["VALUE"];?></h4>
							<p><?=$arItem["PROPERTIES"]["features4_description"]["VALUE"];?></p>
						</div>
					</div>
				</div>
			</div>
		<?endif;?>

		<?if($arItem["PROPERTIES"]["video_show"]["VALUE"] == 'Y'):?>
			<div class="video-presentation" style="background-image: url(<?echo CFile::GetPath($arItem["PROPERTIES"]["video_background"]["VALUE"]);?>)">
				<div class="overlay"></div>
				<div class="presentation-box">
					<a href="<?=$arItem["PROPERTIES"]["video_url"]["VALUE"];?>" class="pulse" data-lity="">
						<i class="fas fa-play"></i>
					</a>
				</div>
			</div>
		<?endif;?>
	</div>
</section>
