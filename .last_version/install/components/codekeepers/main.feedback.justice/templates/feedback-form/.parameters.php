<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(

    "REQUIRED_FIELDS" => Array(
            "NAME" => '������������ ����', 
            "TYPE"=>"LIST", 
            "MULTIPLE"=>"Y", 
            "VALUES" => Array(
				"NONE_REQ" => '(��� ��������������)', 
				"NAME" => '���', 
				"PHONE" => "�������", 
				"SUBJECT" => "����",
				"MESSAGE" => "���������"),
            "DEFAULT"=>"", 
            "COLS"=>25, 
            "PARENT" => "BASE",
    ),

);
?>