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

<section class="practice-area py-100-70 services-sections-block" >
	<div class="container">
		<div class="row" >
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"];?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>

		<?$countButton = 1;?>
		<ul class="services-sections-list">
			<?foreach($arResult["SECTIONS"] as $arItem):?>
				<li><a href="<?=$arItem["SECTION_PAGE_URL"]?>" class="btn-1 services-section-button<?if($countButton === 1):?> active<?endif;?>" data-number="<?=$countButton?>" ><?=$arItem["NAME"]?></a></li>
				<?$countButton = $countButton + 1;?>
			<?endforeach;?>	
		</ul>


		<div class="services-sections-block-rows">
			<?$countRow = 1;?>
			<?foreach($arResult["SECTIONS"] as $arItem):?>
				<div class="row services-sections-row<?if($countRow === 1):?> active<?endif;?>" data-number-row="<?=$countRow?>">
					<?
					$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL", "PREVIEW_TEXT");
					$arFilter = Array("IBLOCK_ID"=>$arItem["IBLOCK_ID"], "IBLOCK_SECTION_ID"=> $arItem["ID"], "GLOBAL_ACTIVE"=>"Y");
					$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
				
					while($ob = $res->GetNextElement()) {
						$arFields = $ob->GetFields();?>
						<div class="col-md-6 col-lg-4">
							<a href="<?=$arFields["DETAIL_PAGE_URL"]?>">
								<div class="practice-area-item services-sections-block-item">
									<?
									$_res = CIBlockElement::GetByID($arFields["ID"]);
									if($item = $_res->GetNext()) {
										$props = CIBlockElement::GetByID($arFields["ID"])->GetNextElement()->GetProperties();?>
										
										
										<?$path = CFile::GetPath($props["icon"]["VALUE"]);?>

										<?
										$img_file = $path;
										$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
										if($svg['id']){
											$img_grup = $img_file.'#'.$svg['id'];
										}
										$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
										?>

										<?if (stristr($path, '.svg')):?>
											<div class="practice-area-image">
												<?print_r($svg_file);?>
											</div>
										<?else:?>
											<div class="practice-area-image">
												<img src="<?$path?>" alt="icon">
											</div>
										<?endif;?>
				
										<div class="content">
											<h4><?=$arFields["NAME"]?></h4>
											<p>
												<?if($arParams["TEXT_LENGTH"]):?>
													<?if(iconv_strlen($arFields["PREVIEW_TEXT"]) > $arParams["TEXT_LENGTH"]):?>
														<?=mb_substr($arFields["PREVIEW_TEXT"], 0, $arParams["TEXT_LENGTH"] ).'...'?>
													<?else:?>
														<?=$arFields["PREVIEW_TEXT"];?>
													<?endif;?>
												<?else:?>
													<?=$arFields["PREVIEW_TEXT"];?>
												<?endif;?>
											</p>
										</div>
									<?}?>
								</div>
							</a>
						</div>
					<?}?>
				</div>
				<?$countRow = $countRow + 1;?>
			<?endforeach;?>
		<div>
	</div>
</section>
