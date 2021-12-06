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
	<?if($arParams["TITLE"]):?>
		<div class="widget-title">
			<h3><?=$arParams["TITLE"]?></h3>
		</div>
	<?endif;?>
	<div class="widget-body">
		<div class="follow">
			<ul class="icon">
				<?if($GLOBALS["global_info"]["social1_link"]):?>
					<?$path = CFile::GetPath($GLOBALS["global_info"]["social1_icon"]);?>

					<li>
						<a class="icon" href="<?=$GLOBALS["global_info"]["social1_link"];?>">
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
								<img src=<?echo $path;?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($GLOBALS["global_info"]["social2_link"]):?>
					<?$path = CFile::GetPath($GLOBALS["global_info"]["social2_icon"]);?>

					<li>
						<a class="icon" href="<?=$GLOBALS["global_info"]["social2_link"];?>">
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
								<img src=<?echo $path;?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($GLOBALS["global_info"]["social3_link"]):?>
					<?$path = CFile::GetPath($GLOBALS["global_info"]["social3_icon"]);?>

					<li>
						<a class="icon" href="<?=$GLOBALS["global_info"]["social3_link"];?>">
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
								<img src=<?echo $path;?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($GLOBALS["global_info"]["social4_link"]):?>
					<?$path = CFile::GetPath($GLOBALS["global_info"]["social4_icon"]);?>

					<li>
						<a class="icon" href="<?=$GLOBALS["global_info"]["social4_link"];?>">
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
								<img src=<?echo $path;?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>

				<?if($GLOBALS["global_info"]["social5_link"]):?>
					<?$path = CFile::GetPath($GLOBALS["global_info"]["social5_icon"]);?>

					<li>
						<a class="icon" href="<?=$GLOBALS["global_info"]["social5_link"];?>">
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
								<img src=<?echo $path;?>>
							<?endif;?>
						</a>
					</li>
				<?endif;?>
			</ul> 
		</div>
	</div>
</div>


