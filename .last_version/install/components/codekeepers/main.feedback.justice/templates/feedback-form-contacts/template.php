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

<div class="mfeedback">
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form-submit contact-form">
<?=bitrix_sessid_post()?>

	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
	}?>

	<input type="text" name="user_name" value="" class=" name" placeholder="<?echo GetMessage("YOUR_NAME")?>" required>

	<input type="email" name="user_email" value="" class=" email" placeholder="<?echo GetMessage("YOUR_EMAIL")?>" required>

	<textarea name="MESSAGE" cols="40" rows="10" class="message" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" required></textarea>
	
	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="mf-captcha">
			<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
			<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
			<input type="text" name="captcha_word" size="30" maxlength="50" value="">
		</div>
	<?endif;?>

	<div class="wrap-submit submit-form">
		<div class="wrap-btn">
			<input type="submit" name="submit" class="flat-button-arrow" value="<?=$arParams['SUBMIT_TEXT']?>"></input>
		</div>
	</div>
</form>
</div>