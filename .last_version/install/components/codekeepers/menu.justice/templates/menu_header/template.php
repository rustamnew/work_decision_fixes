<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<?foreach($arResult as $item):
		if($arParams["MAX_LEVEL"] == 1 && $item["DEPTH_LEVEL"] > 1) 
			continue;?>
	<?endforeach?>

	<div class="nav-bar-link" id="open-nav-bar-menu">
		<ul class="level-1">
			<?foreach($arResult as $arItem):?>
				<?if (!empty($arItem['subitems'])):?>
					<li class="has-menu">
						<a href="#"><?=$arItem["TEXT"]?></a>
						<ul class="level-2">
							<?foreach($arItem['subitems'] as $subItem):?>
								<li><a href="<?=$subItem["LINK"]?>"><?=$subItem["TEXT"]?></a></li>
							<?endforeach;?>
						</ul>
					</li>
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?endif;?>
			<?endforeach;?>
		</ul>
	</div>
<?endif?>