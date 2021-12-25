<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if(!CModule::IncludeModule("iblock")) return;

use \Bitrix\Main\Config\Option;

if(!CModule::IncludeModule("iblock"))
	return;

$arTypes = Array(
	Array(
		"ID" => "banners",
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 1,
		"LANG" => Array(),
	),
	Array(
		"ID" => "catalog",
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 2,
		"LANG" => Array(),
	),
	Array(
		"ID" => "content",
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 3,
		"LANG" => Array(),
	),
	Array(
		"ID" => "settings",
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 5,
		"LANG" => Array(),
	),
	Array(
		"ID" => "requests",
		"SECTIONS" => "Y",
		"IN_RSS" => "N",
		"SORT" => 6,
		"LANG" => Array(),
	),
	
);

$arLanguages = Array();
$rsLanguage = CLanguage::GetList($by, $order, array());
while($arLanguage = $rsLanguage->Fetch())
	$arLanguages[] = $arLanguage["LID"];

$iblockType = new CIBlockType;
foreach($arTypes as $arType)
{
	$dbType = CIBlockType::GetList(Array(),Array("=ID" => $arType["ID"]));
	if($dbType->Fetch())
		continue;

	foreach($arLanguages as $languageID)
	{
		WizardServices::IncludeServiceLang("type.php", $languageID);

		$code = strtoupper($arType["ID"]);
		$arType["LANG"][$languageID]["NAME"] = GetMessage($code."_TYPE_NAME");
		$arType["LANG"][$languageID]["ELEMENT_NAME"] = GetMessage($code."_ELEMENT_NAME");

		if ($arType["SECTIONS"] == "Y")
			$arType["LANG"][$languageID]["SECTION_NAME"] = GetMessage($code."_SECTION_NAME");
	}

	$iblockType->Add($arType);
}

Option::set('iblock','combined_list_mode','Y');
?>