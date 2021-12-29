<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("image", SITE_TEMPLATE_PATH."/assets/images/header/07_header.jpg");
$APPLICATION->SetTitle("Политика конфиденциальности");
?>

<section class="py-100">
	<div class="container">
		<?$APPLICATION->IncludeFile(SITE_DIR."include/privacy.php", 
			array(), 
			array("MODE" => "html"));?>
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>