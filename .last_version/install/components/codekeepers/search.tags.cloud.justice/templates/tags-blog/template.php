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

<div class="widget">
	<div class="widget-title">
		<h3><?=$arParams["TITLE"]?></h3>
	</div>
	<div class="widget-body">
		<div class="tags">
			<ul>
				<?foreach ($arResult["SEARCH"] as $key => $res):?>
					<li><a href="<?=$res["URL"]?>"><?=$res["NAME"]?></a></li>
				<?endforeach;?>
			</ul>
		</div>
	</div>
</div>


