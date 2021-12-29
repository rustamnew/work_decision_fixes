<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<section class="py-100">
	<div class="container">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "sect", 
                "AREA_FILE_SUFFIX" => "inc", 
                "AREA_FILE_RECURSIVE" => "Y", 
                "EDIT_TEMPLATE" => "default.php" 
            )
        );?>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>