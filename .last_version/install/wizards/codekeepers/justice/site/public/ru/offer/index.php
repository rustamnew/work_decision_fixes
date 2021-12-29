<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("image", SITE_TEMPLATE_PATH."/assets/images/header/06_header.jpg");
$APPLICATION->SetTitle("Публичная оферта");
?>
<section class="py-100">
	<div class="container">
		<?$APPLICATION->IncludeFile(SITE_DIR."include/offer.php", 
			array(), 
			array("MODE" => "html"));?>
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>