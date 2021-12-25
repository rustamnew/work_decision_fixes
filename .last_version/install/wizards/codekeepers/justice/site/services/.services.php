<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php", // Copy bitrix files
			"template.php", // Install template
			//"theme.php", // Install theme
			"group.php", // Install group
			"settings.php",
		),
	),

	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"main_settings.php",
			"messengers.php",
			"about.php",
			"banner_main.php",
			"blog.php",
			"call-to-action.php",
			"contacts.php",
			"discount.php",
			"discounts.php",
			"faq.php",
			"features.php",
			"features_under.php",
			"goods.php",
			"licence.php",
			"partners.php",
			"projects.php",
			"reviews.php",
			"sidebar-phone.php",
			"stats.php",
			"team.php",
			"timeline.php",
			"timeline-block.php",
			"vacancies.php",
			"why-us.php",
			"services.php",
			"feedback.php",
		),
	),
);
?>

