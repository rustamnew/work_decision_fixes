<?
IncludeModuleLangFile(__FILE__);
class CJustice
{
	function ShowPanel()
	{

		if ($GLOBALS["USER"]->IsAdmin() && COption::GetOptionString("main", "wizard_solution", "", SITE_ID) == "justice")
		{
			$GLOBALS["APPLICATION"]->AddPanelButton(array(
				"HREF" => "/bitrix/admin/wizard_install.php?lang=".LANGUAGE_ID."&wizardName=codekeepers:justice&wizardSiteID=".SITE_ID."&".bitrix_sessid_get(),
				"ID" => "justice",
				"ICON" => "bx-panel-site-wizard-icon",
				"MAIN_SORT" => 2500,
				"TYPE" => "BIG",
				"SORT" => 10,	
				"ALT" => GetMessage("SCOM_BUTTON_DESCRIPTION"),
				"TEXT" => GetMessage("SCOM_BUTTON_NAME"),
				"MENU" => array(),
			));
		}


	}
}
CModule::AddAutoloadClasses(
	'codekeepers.justice',
	array(
		'CJusticeMain' => 'classes/general/CJusticeMain.php'
	)
)
?>