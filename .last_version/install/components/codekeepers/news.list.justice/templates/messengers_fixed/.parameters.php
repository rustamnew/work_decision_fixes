<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"LIST_POSITION" => Array(
		"NAME" => GetMessage("LIST_POSITION"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"LEFT" => GetMessage("LEFT"),
			"RIGHT" => GetMessage("RIGHT"),
		),
	),
	"LIST_SHOW" => Array(
		"NAME" => GetMessage("LIST_SHOW"),
		"TYPE" => "CHECKBOX",
	),
	"SCROLLUP" => Array(
		"NAME" => GetMessage("SCROLLUP"),
		"TYPE" => "CHECKBOX",
	),
);
?>
