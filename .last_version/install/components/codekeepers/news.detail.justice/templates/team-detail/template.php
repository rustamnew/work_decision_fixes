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
<section class="single-advisors py-100">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="advisors-box">
					<div class="img-box">
						<img class="img-fluid" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="01 advisors">

						<div class="img-box-hover">
							<ul>
								<?if($arResult["PROPERTIES"]["link_Vk"]["VALUE"]):?>
									<li><a href="<?=SITE_DIR.$arResult["PROPERTIES"]["link_Vk"]["VALUE"];?>"><i class="fab fa-vk"></i></a></li>
								<?endif;?>

								<?if($arResult["PROPERTIES"]["link_Instagram"]["VALUE"]):?>
									<li><a href="<?=SITE_DIR.$arResult["PROPERTIES"]["link_Instagram"]["VALUE"];?>"><i class="fab fa-instagram"></i></a></li>
								<?endif;?>

								<?if($arResult["PROPERTIES"]["link_Facebook"]["VALUE"]):?>
									<li><a href="<?=SITE_DIR.$arResult["PROPERTIES"]["link_Facebook"]["VALUE"];?>"><i class="fab fa-facebook-f"></i></a></li>
								<?endif;?>

								<?if($arResult["PROPERTIES"]["link_Twitter"]["VALUE"]):?>
									<li><a href="<?=SITE_DIR.$arResult["PROPERTIES"]["link_Twitter"]["VALUE"];?>"><i class="fab fa-twitter"></i></a></li>
								<?endif;?>

								<?if($arResult["PROPERTIES"]["link_Youtube"]["VALUE"]):?>
									<li><a href="<?=SITE_DIR.$arResult["PROPERTIES"]["link_Youtube"]["VALUE"];?>"><i class="fab fa-youtube"></i></a></li>
								<?endif;?>
							</ul>
						</div>
					</div>
					<div class="text-box text-center">
						<h5><?=$arResult["NAME"]?></h5>
						<span><?=$arResult["PROPERTIES"]["speciality"]["VALUE"];?></span>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="introduction-advisors">
					<p><?=$arResult["DETAIL_TEXT"]?></p>
					
					<p><?=$arResult["PREVIEW_TEXT"]?></p>

					<?if($arResult["PROPERTIES"]["skill_show"]["VALUE"] == 'Y'):?>
						<h3><?=$arResult["PROPERTIES"]["skill_title"]["VALUE"];?></h3>
						<div class="skills">

							<?if($arResult["PROPERTIES"]["skill1name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill1name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill1value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill1value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill2name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill2name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill2value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill2value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill3name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill3name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill3value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill3value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill4name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill4name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill4value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill4value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>

							<?if($arResult["PROPERTIES"]["skill5name"]["VALUE"]):?>
								<div class="skill-box">
									<div class="skill-top">
										<span class="name"><?=$arResult["PROPERTIES"]["skill5name"]["VALUE"];?></span>
										<span class="number"><?=$arResult["PROPERTIES"]["skill5value"]["VALUE"];?>%</span>
									</div>
									<div class="skill-line">
										<div class="line" data-value="<?=$arResult["PROPERTIES"]["skill5value"]["VALUE"];?>%"></div>
									</div>
								</div>
							<?endif;?>
						</div>
					<?endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
