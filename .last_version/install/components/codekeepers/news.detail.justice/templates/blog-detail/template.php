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
	<div class="col-md-12">
		<div class="blog-item">
			<div class="img-box">
				<a class="open-post">
					<img class="img-fluid" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="01 Blog">
				</a>
				<?if($arResult["IBLOCK_SECTION_ID"]):?>
					<ul>
						<li>
							<?
							$res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
							if($ar_res = $res->GetNext()) {?>
								<a href="<?=$ar_res["SECTION_PAGE_URL"];?>"><?echo $ar_res["NAME"];?></a>
							<?}?>
						</li>
					</ul>
				<?endif;?>
			</div>
			<div class="text-box">
				<?if($arResult["TAGS"]):?>
					<ul class="tags-list">
						<?
						$string = $arResult["TAGS"];
						$string_array = explode(', ', $string);
						$array_tags = array_slice($string_array, 0, $array_length);
						?>
						<?foreach($array_tags as $item):?>
							<li><a href="<?=SITE_DIR?>blog/?tags=<?=$item;?>"><?=$item;?></a></li>
						<?endforeach;?>	
					</ul>
				<?endif;?>
				<span class="blog-date"><?echo FormatDateFromDB($arResult["DATE_CREATE"], 'SHORT');?></span>
				<h5><?=$arResult["NAME"]?></h5>
				<p><?=$arResult["DETAIL_TEXT"]?></p>
			</div>
		</div>
	</div>
</div>