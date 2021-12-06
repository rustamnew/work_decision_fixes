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

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
	<?=bitrix_sessid_post()?>
	<div class="row">
		<div class="col-md-6">
			<div class="quote-item">
				<input type="text" name="user_name" placeholder="<?echo GetMessage("YOUR_NAME")?>" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="quote-item">
				<input type="email" name="user_email" placeholder="<?echo GetMessage("YOUR_EMAIL")?>" required>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="quote-item">
				<div class="quote-item">
					<textarea name="MESSAGE" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" required><?=$arResult["MESSAGE"]?></textarea>
				</div>
			</div>
		</div>
		
		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<div class="col captcha">
				<div class="mf-captcha">
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
					<input type="text" name="captcha_word" size="30" maxlength="50" value="">
				</div>
			</div>
		<?endif;?>

		<div class="col-md-12">
			<div class="quote-item">
				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn-1">
			</div>
		</div>
	</div>
</form>



