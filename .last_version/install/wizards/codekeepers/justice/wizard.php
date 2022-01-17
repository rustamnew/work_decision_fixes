<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/install/wizard_sol/wizard.php");

class SelectSiteStep extends CSelectSiteWizardStep
{
	function InitStep()
	{
		parent::InitStep();

		$wizard =& $this->GetWizard();
		$wizard->solutionName = "justice";
	}
}

	
class SelectTemplateStep extends CSelectTemplateWizardStep
{
	function InitStep()
	{
		parent::InitStep();
		// ��������� ��� - ��������� ����� (���������� ����� ���� - ��� ��� �� ���)
		$this->SetNextStep("site_settings");
	}

	function OnPostForm()
	{
		parent::OnPostForm();
	}

	function ShowStep()
	{
		$wizard =& $this->GetWizard();

		$templatesPath = WizardServices::GetTemplatesPath($wizard->GetPath()."/site");
		$arTemplates = WizardServices::GetTemplates($templatesPath);

		if (empty($arTemplates))
			return;

		// ������������� ������ ��-���������
		$wizard->SetVar("templateID", "justice");

		$templateID = $wizard->GetVar("templateID");

		if(isset($templateID) && array_key_exists($templateID, $arTemplates)){

			$defaultTemplateID = $templateID;
			$wizard->SetDefaultVar("templateID", $templateID);

		} else {

			$defaultTemplateID = COption::GetOptionString("main", "wizard_template_id", "", $wizard->GetVar("siteID"));
			if (!(strlen($defaultTemplateID) > 0 && array_key_exists($defaultTemplateID, $arTemplates)))
			{
				if (strlen($defaultTemplateID) > 0 && array_key_exists($defaultTemplateID, $arTemplates))
					$wizard->SetDefaultVar("templateID", $defaultTemplateID);
				else
					$defaultTemplateID = "";
			}
		}

		CFile::DisableJSFunction();

		$this->content .= '<div id="solutions-container" class="inst-template-list-block">';

		foreach ($arTemplates as $templateID => $arTemplate)
		{
			// ������� ������ ���� ������, ��������� ��-���������
			// ��������� �� ����������
			if($templateID !== $defaultTemplateID) continue;

			if ($defaultTemplateID == "")
			{
				$defaultTemplateID = $templateID;
				$wizard->SetDefaultVar("templateID", $defaultTemplateID);
			}

			$this->content .= '<div class="inst-template-description">';
			$this->content .= $this->ShowRadioField("templateID", $templateID, Array("id" => $templateID, "class" => "inst-template-list-inp"));
			if ($arTemplate["SCREENSHOT"] && $arTemplate["PREVIEW"])
				$this->content .= CFile::Show2Images($arTemplate["PREVIEW"], $arTemplate["SCREENSHOT"], 150, 150, ' class="inst-template-list-img"');
			else
				$this->content .= CFile::ShowImage($arTemplate["SCREENSHOT"], 150, 150, ' class="inst-template-list-img"', "", true);

			$this->content .= '<label for="'.$templateID.'" class="inst-template-list-label">'.$arTemplate["NAME"].'<p>'.$arTemplate["DESCRIPTION"].'</p></label>';
			$this->content .= "</div>";

		}

		$this->content .= '</div>';
	}

}

/*class SelectThemeStep extends CSelectThemeWizardStep
{

}*/

class SiteSettingsStep extends CSiteSettingsWizardStep
{
	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = "justice";
		parent::InitStep();

		$templateID = $wizard->GetVar("templateID");
		$themeID = $wizard->GetVar($templateID."_themeID");

		$siteLogo = $this->GetFileContentImgSrc(WIZARD_SITE_PATH."include/company_name.php", "/bitrix/wizards/bitrix/justice/site/templates/justice/lang/".LANGUAGE_ID."/logo.gif");
		if (!file_exists(WIZARD_SITE_PATH."include/logo.gif"))
			$siteLogo = "/bitrix/wizards/bitrix/justice/site/templates/justice/lang/".LANGUAGE_ID."/logo.gif";
			
		$wizard->SetDefaultVars(
			Array(
				"siteLogo" => $siteLogo,
				"sitePhone" => "+7 9600 52-30-51", 
				"siteSlogan" => $this->GetFileContent(WIZARD_SITE_PATH."include/company_slogan.php", GetMessage("WIZ_COMPANY_SLOGAN_DEF")),
				"siteCopy" => $this->GetFileContent(WIZARD_SITE_PATH."include/copyright.php", GetMessage("WIZ_COMPANY_COPY_DEF")),
				"siteMetaDescription" => GetMessage("wiz_site_desc"),
				"siteMetaKeywords" => GetMessage("wiz_keywords"), 
			)
		);	
	}

	function ShowStep()
	{
		$wizard =& $this->GetWizard();
				
		$siteLogo = $wizard->GetVar("siteLogo", true);


		/*$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("WIZ_COMPANY_LOGO").'</div>';
		$this->content .= CFile::ShowImage($siteLogo, 209, 61, "border=0 vspace=15");
		$this->content .= "<br />".$this->ShowFileField("siteLogo", Array("show_file_info" => "N", "id" => "site-logo"))."</div>";*/

		/*$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">�������</div>';
		$this->content .= $this->ShowInputField("textarea", "sitePhone", Array("id" => "site-phone", "class" => "wizard-field", "rows"=>"1"))."</div>";*/

		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("WIZ_COMPANY_SLOGAN").'</div>';
		$this->content .= $this->ShowInputField("textarea", "siteSlogan", Array("id" => "site-slogan", "class" => "wizard-field", "rows"=>"3"))."</div>";

		$this->content .= '<div class="wizard-upload-img-block"><div class="wizard-catalog-title">'.GetMessage("WIZ_COMPANY_COPY").'</div>';
		$this->content .= $this->ShowInputField("textarea", "siteCopy", Array("id" => "site-copy", "class" => "wizard-field", "rows"=>"3"))."</div>";


		$firstStep = COption::GetOptionString("main", "wizard_first" . substr($wizard->GetID(), 7)  . "_" . $wizard->GetVar("siteID"), false, $wizard->GetVar("siteID"));

		$styleMeta = 'style="display:block"';
		if($firstStep == "Y") $styleMeta = 'style="display:none"';
		
		$this->content .= '
		<div  id="bx_metadata" '.$styleMeta.'>
			<div class="wizard-input-form-block">
				<div class="wizard-metadata-title">'.GetMessage("wiz_meta_data").'</div>
				<div class="wizard-upload-img-block">
					<label for="siteMetaDescription" class="wizard-input-title">'.GetMessage("wiz_meta_description").'</label>
					'.$this->ShowInputField("textarea", "siteMetaDescription", Array("id" => "siteMetaDescription", "class" => "wizard-field", "rows"=>"3")).'
				</div>';
			$this->content .= '
				<div class="wizard-upload-img-block">
					<label for="siteMetaKeywords" class="wizard-input-title">'.GetMessage("wiz_meta_keywords").'</label><br>
					'.$this->ShowInputField('text', 'siteMetaKeywords', array("id" => "siteMetaKeywords", "class" => "wizard-field")).'
				</div>
			</div>
		</div>';
		
		if($firstStep == "Y")
		{
			$this->content .= $this->ShowCheckboxField("installDemoData", "Y",
				(array("id" => "install-demo-data", "onClick" => "if(this.checked == true){document.getElementById('bx_metadata').style.display='block';}else{document.getElementById('bx_metadata').style.display='none';}")));
			$this->content .= '<label for="install-demo-data">'.GetMessage("wiz_structure_data").'</label><br />';

		}
		else
		{
			$this->content .= $this->ShowHiddenField("installDemoData","Y");
		}

		$formName = $wizard->GetFormName();
		$installCaption = $this->GetNextCaption();
		$nextCaption = GetMessage("NEXT_BUTTON");
	}

	function OnPostForm()
	{
		$wizard =& $this->GetWizard();
		$res = $this->SaveFile("siteLogo", Array("extensions" => "gif,jpg,jpeg,png,svg", "max_height" => 210, "max_width" => 60, "make_preview" => "Y"));
//		COption::SetOptionString("main", "wizard_site_logo", $res, "", $wizard->GetVar("siteID")); 
	}
}

class DataInstallStep extends CDataInstallWizardStep
{
	function CorrectServices(&$arServices)
	{
		$wizard =& $this->GetWizard();
		if($wizard->GetVar("installDemoData") != "Y")
		{
			
		}
	}
}

class FinishStep extends CFinishWizardStep
{
	function ShowStep()
	{
		if (!defined("WIZARD_SITE_DIR")) die();
		require($_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."include/iblock_id_link.php");
		global $DB, $DBType, $APPLICATION;
		$codekeepers_block_id;
		foreach ($codekeepers_block_id as $key => $value) {
			if($key!="element_id" && $key!="requests_1" && $key!="requests_2" && $key!="requests_3" && $key!="requests_4" && $key!="requests_5" && $key!="requests_6" && $key!="requests_9" && $key!="requests_7"){
				$string_req='a:8:{s:6:"UNIQUE";s:1:"Y";s:15:"TRANSLITERATION";s:1:"Y";s:9:"TRANS_LEN";i:100;s:10:"TRANS_CASE";s:1:"L";s:11:"TRANS_SPACE";s:1:"-";s:11:"TRANS_OTHER";s:1:"-";s:9:"TRANS_EAT";s:1:"Y";s:10:"USE_GOOGLE";s:1:"N";}';
				$string_req_1='a:8:{s:6:"UNIQUE";s:1:"N";s:15:"TRANSLITERATION";s:1:"Y";s:9:"TRANS_LEN";i:100;s:10:"TRANS_CASE";s:1:"L";s:11:"TRANS_SPACE";s:1:"-";s:11:"TRANS_OTHER";s:1:"-";s:9:"TRANS_EAT";s:1:"Y";s:10:"USE_GOOGLE";s:1:"N";}';
				$tovar_1 = $DB->Query("UPDATE b_iblock_fields SET IS_REQUIRED = 'Y' WHERE IBLOCK_ID = '".$value."' AND FIELD_ID = 'SECTION_CODE'");
				$tovar_1 = $DB->Query("UPDATE b_iblock_fields SET DEFAULT_VALUE = '".$string_req."' WHERE IBLOCK_ID = '".$value."' AND FIELD_ID = 'SECTION_CODE'");
				$tovar_1 = $DB->Query("UPDATE b_iblock_fields SET IS_REQUIRED = 'Y' WHERE IBLOCK_ID = '".$value."' AND FIELD_ID = 'CODE'");
				$tovar_1 = $DB->Query("UPDATE b_iblock_fields SET DEFAULT_VALUE = '".$string_req_1."' WHERE IBLOCK_ID = '".$value."' AND FIELD_ID = 'CODE'");
			}
		}
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."news\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."price\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."price\sale\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."projects\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."services\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."specialists\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."stock\index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));


		
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR.".htaccess"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_DIR" => WIZARD_SITE_DIR));




		$FORM_ID_PHP_VALUE = $DB->Query("SELECT MAX(ID) FROM b_event_message");
		$FORM_ID_PREM=$FORM_ID_PHP_VALUE->GetNext();
		$FORM_ID = (int)$FORM_ID_PREM["MAX(ID)"] + 1;


		$file = fopen($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/codekeepers.justice/install/db/install_.sql", 'r');
        $text_old = fread($file, filesize($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/codekeepers.justice/install/db/install_.sql"));
        $wizard =& $this->GetWizard();
		$text_old = str_replace('site_id', $wizard->GetVar("siteID"), $text_old);
        $text_old = str_replace('form_id', $FORM_ID, $text_old);
        fclose($file);
        $file = fopen($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/codekeepers.justice/install/db/install.sql", 'w');
        fwrite($file, $text_old);
        fclose($file);

        $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/codekeepers.justice/install/db/install.sql");

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/contacts/index.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/inc/blocks/form.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/bitrix/templates/justice/footer.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/bitrix/templates/justice/components/codekeepers/catalog.element.justice/catalog_detail/template.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/bitrix/templates/justice/components/codekeepers/news.detail.justice/sale/template.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/bitrix/templates/justice/components/codekeepers/news.justice/specialists/news.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));

		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/bitrix/templates/justice/components/codekeepers/news.justice/specialists/section.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));
		
		$iblockXMLFile = $_SERVER["DOCUMENT_ROOT"].WIZARD_SITE_DIR."/bitrix/templates/justice/components/codekeepers/news.list.justice/sale/template.php"; 
		CWizardUtil::ReplaceMacros($iblockXMLFile, array("FORM_ID" => $FORM_ID));
		

		$wizard =& $this->GetWizard();
		if ($wizard->GetVar("proactive") == "Y")
			COption::SetOptionString("statistic", "DEFENCE_ON", "Y");

		$siteID = WizardServices::GetCurrentSiteID($wizard->GetVar("siteID"));
		$rsSites = CSite::GetByID($siteID);
		$siteDir = "/";
		if ($arSite = $rsSites->Fetch())
			$siteDir = $arSite["DIR"];

		$wizard->SetFormActionScript(str_replace("//", "/", $siteDir."/?finish"));

		$this->CreateNewIndex();

		COption::SetOptionString("main", "wizard_solution", $wizard->solutionName, false, $siteID);
		
		$this->content .=
			'<table class="wizard-completion-table">
				<tr>
					<td class="wizard-completion-cell">'
						.GetMessage("FINISH_STEP_CONTENT").
					'</td>
				</tr>
			</table>';

		if ($wizard->GetVar("installDemoData") == "Y")
			$this->content .= GetMessage("FINISH_STEP_REINDEX");
	}
}
?>