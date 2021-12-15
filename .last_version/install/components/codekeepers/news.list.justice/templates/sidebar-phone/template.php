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

<?$path = CFile::GetPath($arItem['PROPERTIES']['icon']['VALUE']);?>


<?if($arResult["ACTIVE"] == 'Y'):?>
	<div class="call-back" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="call-back-icon">
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
				<img src=<?echo CFile::GetPath($arItem["PROPERTIES"]["icon"]["VALUE"]);?>>
			<?endif;?>
		</div>
		<h5><?=$arItem["NAME"]?></h5>

		<?if($GLOBALS['global_info']['contacts_phone_show']):?>
			<p><?=$GLOBALS['global_info']['contacts_phone1'];?></p>
			<p><?=$GLOBALS['global_info']['contacts_phone2'];?></p>
		<?endif;?>

		<a href="<?=$arItem["PROPERTIES"]["url"]["VALUE"];?>" class="<?if(!$arItem["PROPERTIES"]["url"]["VALUE"]):?>summonFormButton <?endif;?>btn-1 btn-3"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a>
	</div>
<?endif;?>