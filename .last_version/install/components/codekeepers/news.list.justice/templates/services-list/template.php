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

<section class="practice-area py-100-70 services-section-block" >
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
		<div class="row">
			<?

			$iblock_id = $arParams["IBLOCK_ID"];
			$arSelect = array("UF_*");
			$arFilter = Array('IBLOCK_ID'=>$iblock_id, 'GLOBAL_ACTIVE'=>'Y');
			$list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true, $arSelect);

			while($ar_result = $list->GetNext()){?>
				<?$path = CFile::GetPath($ar_result["UF_ICON"]);?>
				<?$section_link = $ar_result["SECTION_PAGE_URL"];?>

				<?if (stristr($path, '.svg')):?>
					<?
					$img_file = $path;
					$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
					if($svg['id']){
						$img_grup = $img_file.'#'.$svg['id'];
					}
					$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
					?>
				<?endif;?>

				<div class="col-md-6 col-lg-4">
					<div class="practice-area-item services-section-block-item">
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
							<h4><?=$ar_result["NAME"]?></h4>
							<ul>
								<?
								$count = 0;
								$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL", "EDIT_LINK", "DELETE_LINK");
								$arFilter = Array("IBLOCK_ID"=>$iblock_id, "IBLOCK_SECTION_ID"=> $ar_result["ID"],"GLOBAL_ACTIVE"=>"Y");
								$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);

								while($ob = $res->GetNextElement() and $count < $arParams["NEWS_COUNT"]) {
									$arFields = $ob->GetFields();
									$count = $count + 1;?>
									<li><a href="<?=$arFields["DETAIL_PAGE_URL"]?>"><?=$arFields["NAME"]?></a></li>
								<?}?>
							</ul>
							<a href="<?=$section_link;?>"><?echo GetMessage("READ_MORE")?></a>
						</div>
					</div>
				</div>
			<?}?>
		</div>
	</div>
</section>



		





