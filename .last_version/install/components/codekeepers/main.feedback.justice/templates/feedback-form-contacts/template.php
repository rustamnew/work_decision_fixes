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

<div class="mfeedback">
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form-submit contact-form" id="feedback-form-contacts">
<?=bitrix_sessid_post()?>

	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}?>

	<input type="text" name="user_name" value="" class="name" placeholder="<?echo GetMessage("YOUR_NAME")?>" <?if($nameReq):?>required<?endif;?>>

	<input type="text" name="user_phone" value="" class="email" placeholder="<?echo GetMessage("YOUR_PHONE")?>" <?if($phoneReq):?>required<?endif;?>>

	<textarea name="MESSAGE" cols="40" rows="10" class="message" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" <?if($messageReq):?>required<?endif;?>></textarea>
	
	<?if($GLOBALS['global_info']['captcha_show']):?>
		<div class="captcha-wrap">
			<div class="g-recaptcha" id="recaptcha_contacts"></div>
		</div>
	<?endif;?>

	<div class="wrap-submit submit-form">
		<div class="wrap-btn">
			<input type="hidden" name="FORM_PAGE" value="<?=$arParams["FORM_PAGE"]?>">
			<input type="hidden" name="FORM_SECTION" value="<?=$arParams["FORM_SECTION"]?>">
			<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
			
			<input type="submit" name="submit" class="flat-button-arrow" value="<?=$arParams['SUBMIT_TEXT']?>"></input>
		</div>
	</div>
</form>
</div>