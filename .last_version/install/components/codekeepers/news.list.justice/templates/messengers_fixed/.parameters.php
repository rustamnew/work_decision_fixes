<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"LIST_POSITION" => Array(
		"NAME" => GetMessage("LIST_POSITION"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"TOP_LEFT" => GetMessage("TOP_LEFT"),
			"TOP_RIGHT" => GetMessage("TOP_RIGHT"),
			"BOTTOM_LEFT" => GetMessage("BOTTOM_LEFT"),
			"BOTTOM_RIGHT" => GetMessage("BOTTOM_RIGHT"),
		),
	),
	"LIST_SHOW" => Array(
		"NAME" => GetMessage("LIST_SHOW"),
		"TYPE" => "CHECKBOX",
	),
);
?>
