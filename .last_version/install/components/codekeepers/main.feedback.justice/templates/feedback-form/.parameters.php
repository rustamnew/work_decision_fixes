<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(

    "REQUIRED_FIELDS" => Array(
            "NAME" => 'Обязательные поля', 
            "TYPE"=>"LIST", 
            "MULTIPLE"=>"Y", 
            "VALUES" => Array(
				"NONE_REQ" => '(все необязательные)', 
				"NAME" => 'Имя', 
				"PHONE" => "Телефон", 
				"SUBJECT" => "Тема",
				"MESSAGE" => "Сообщение"),
            "DEFAULT"=>"", 
            "COLS"=>25, 
            "PARENT" => "BASE",
    ),

);
?>