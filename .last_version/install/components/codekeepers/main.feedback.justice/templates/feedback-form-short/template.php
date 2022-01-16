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
	{?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?}?>

	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="feedback-form-short">
		<?=bitrix_sessid_post()?>
		<div class="subscribe-item">
			<input type="text" name="user_name" placeholder="<?echo GetMessage("YOUR_NAME")?>" required>
		</div>

		<div class="subscribe-item">
			<input type="text" name="user_phone" placeholder="<?echo GetMessage("YOUR_PHONE")?>" required>
		</div>

		<div class="subscribe-item">
			<textarea name="MESSAGE" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" required></textarea>
		</div>

		<?if($GLOBALS['global_info']['captcha_show']):?>
			<div class="captcha-wrap">
				<div class="g-recaptcha" id="recaptcha_short"></div>
			</div>
		<?endif;?>

		<div class="subscribe-item">
			<input type="hidden" name="FORM_PAGE" value="<?=$arParams["FORM_PAGE"]?>">
			<input type="hidden" name="FORM_SECTION" value="<?=$arParams["FORM_SECTION"]?>">
			<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
			
			<input type="submit" name="submit" value="<?=$arParams['SUBMIT_TEXT']?>" class="btn-1">
		</div>
	</form>
