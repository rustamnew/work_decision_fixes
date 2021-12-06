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


<section class="about py-100" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="img-box">
					<div class="about-img">
						<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 About">
					</div>

					<?if($arItem["PROPERTIES"]["case_show"]["VALUE"] == 'Y'):?>
						<div class="case-about">
							<div class="case-about-image">
								<?$path = CFile::GetPath($arItem['PROPERTIES']['case_icon']['VALUE']);?>

								<?if (stristr($path, '.svg')):?>
									<?
									$img_file = CFile::GetPath($arItem['PROPERTIES']['case_icon']['VALUE']);

									$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
									if($svg['id']){
										$img_grup = $img_file.'#'.$svg['id'];
									}

									$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
									print_r($svg_file);
									?>
								<?else:?>
									<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["case_icon"]["VALUE"]);?>>
								<?endif;?>
							</div>

							<div class="counter"><?=$arItem["PROPERTIES"]["case_number"]["VALUE"];?></div>
							<h5><?=$arItem["PROPERTIES"]["case_title"]["VALUE"];?></h5>
						</div>
					<?endif;?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="text-box">
					<div class="sec-title">
						<h2><?=$arItem["NAME"];?></h2>
						<h3><?=$arItem["PROPERTIES"]["title"]["VALUE"];?></h3>
						<p>
							<?if ($arParams["DISPLAY_ALTERNATIVE"] == 'Y'):?>
								<?=$arItem["DETAIL_TEXT"]?>
							<?else:?>
								<?=$arItem["PREVIEW_TEXT"]?>
							<?endif;?>
						</p>
					</div>

					<div class="row">
						<?if ($arParams["DISPLAY_ALTERNATIVE"] != 'Y'):?>
							<div class="col-sm-6">
								<a class="btn-1" href="<?=SITE_DIR?>about/"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
							</div>
						<?endif;?>
						<div class="col-sm-6 d-flex align-items-center">
							<img class="img-fluid sign-about" src="<?echo CFile::GetPath($arItem["PROPERTIES"]["sign"]["VALUE"]);?>" alt="Sign About">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

