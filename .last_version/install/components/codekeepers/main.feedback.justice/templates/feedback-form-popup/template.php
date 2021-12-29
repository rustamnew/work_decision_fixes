<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?
$nameReq;
$phoneReq;
$messageReq;
foreach($arParams["REQUIRED_FIELDS"] as $item):?>
	<?if($item === "NAME") {
		$nameReq = true;
	}?>

	<?if($item === "PHONE") {
		$phoneReq = true;
	}?>

	<?if($item === "MESSAGE") {
		$messageReq = true;
	}?>
<?endforeach;?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="summonedForm" id="feedback-form-popup">
<?=bitrix_sessid_post()?>
	<a href="#" class="summonedFormClose" id="summonedFormClose" onClick="closeFancybox(event)">×</a>
	<h5><?echo GetMessage("FORM_SUBTITLE")?></h5>
	<?
		if(!empty($arResult["ERROR_MESSAGE"])) {
			foreach($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}?>
		
		<div class="mf-ok-text">&nbsp;<?=$arResult["OK_MESSAGE"]?></div>
	
	<input class="summonedFormInputName" type="text" name="user_name" placeholder="<?echo GetMessage("YOUR_NAME")?>" <?if($nameReq):?>required<?endif;?>>
	<input class="summonedFormInputEmail" type="text" name="user_phone" placeholder="<?echo GetMessage("YOUR_PHONE")?>" <?if($phoneReq):?>required<?endif;?>>
	<textarea class="summonedFormInputMessage" name="MESSAGE" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" <?if($messageReq):?>required<?endif;?>></textarea>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="mf-captcha">
			<div class="captcha_col">
				<input type="hidden" name="captcha_sid_popup" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
			</div>

			<div class="captcha_col">
				<input type="text" name="captcha_word_popup" size="30" maxlength="50" value="" placeholder="<?=GetMessage("ENTER_CODE")?>" required>
			</div>
		</div>
	<?endif;?>


	<input type="hidden" name="FORM_PAGE" value="<?$APPLICATION->ShowTitle()?>">
	<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
	
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="summonedFormInputSubmit">
</form>




