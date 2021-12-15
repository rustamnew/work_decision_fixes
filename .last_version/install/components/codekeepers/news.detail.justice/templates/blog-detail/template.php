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

<?if($arResult["TAGS"]):?>
	<?
	$string = $arResult["TAGS"];
	$string_array = explode(', ', $string);
	$string_done = "";
	$max_length = 60;

	foreach($string_array as $item) {
		if (iconv_strlen($string_done . $item) < $max_length) {
			if ($string_done) {
				$string_done .=", " . $item;
			} else {
				$string_done .= $item;
			}
		}
	}
	?>
<?endif;?>

<div class="row">
	<div class="col-md-12">
		<div class="blog-item">
			<div class="img-box">
				<a class="open-post">
					<img class="img-fluid" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="01 Blog">
				</a>
				<?if($arResult["TAGS"]):?>
					<ul>
						<li><a><?=$string_done;?></a></li>
					</ul>
				<?endif;?>
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
				<span class="blog-date"><?echo FormatDateFromDB($arResult["DATE_CREATE"], 'SHORT');?></span>
				<h5><?=$arResult["NAME"]?></h5>
				<p><?=$arResult["DETAIL_TEXT"]?></p>
			</div>
		</div>
	</div>
</div>