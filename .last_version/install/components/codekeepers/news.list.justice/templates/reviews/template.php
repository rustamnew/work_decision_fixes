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
<?
$i = 0;
?>
<section class="testimonial py-100">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title text-center">
					<h2><?=$arParams["NAME"]?></h2>
					<h3><?=$arParams["TITLE"];?></h3>
					<p><?=$arParams["SUBTITLE"]?></p>
				</div>
			</div>
		</div>
		<div class="owl-testimonial-3 owl-carousel owl-theme">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="box-item">
					<div class="text-box">
						<p><?=$arItem["PREVIEW_TEXT"]?></p>

						<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-reviews<?=$i?>" href="javascript:;">
							<?=GetMessage("BUTTON_DETAIL");?>
						</a>
					</div>
					<div class="clients-talk">
						<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
							<div class="img-box">
								<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
							</div>
						<?endif;?>
						
						<div class="info">
							<h5><?=$arItem["NAME"]?></h5>
							<span><?=$arItem["PROPERTIES"]["position"]["VALUE"];?></span>
						</div>
					</div>

					<div class="testimonial_popup content_fancybox_modal" style="display: none;" id="hidden-content-reviews<?=$i?>">
						<div class="text-box">
							<p><?=$arItem["DETAIL_TEXT"]?></p>
						</div>
						<div class="clients-talk">
							<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
								<div class="img-box">
									<img class="img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="01 Testimonials">
								</div>
							<?endif;?>
							
							<div class="info">
								<h5><?=$arItem["NAME"]?></h5>
								<span><?=$arItem["PROPERTIES"]["position"]["VALUE"];?></span>
							</div>
						</div>
					</div>
				</div>
				<?$i = $i + 1;?>
			<?endforeach;?>	
		</div>
	</div>
</section>

