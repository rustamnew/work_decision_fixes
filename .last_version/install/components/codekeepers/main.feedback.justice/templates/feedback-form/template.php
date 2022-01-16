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



<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}?>



<div class="mf-ok-text">&nbsp;<?=$arResult["OK_MESSAGE"]?></div>


<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="feedback-form">
	<?=bitrix_sessid_post()?>
	<div class="row">
		<div class="col-md-6">
			<div class="quote-item">
				<input type="text" name="user_name" placeholder="<?echo GetMessage("YOUR_NAME")?>" <?if($nameReq):?>required<?endif;?>>
			</div>
		</div>
		<div class="col-md-6">
			<div class="quote-item">
				<input type="text" name="user_phone" placeholder="<?echo GetMessage("YOUR_PHONE")?>" <?if($phoneReq):?>required<?endif;?>>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="quote-item">
				<div class="quote-item">
					<textarea name="MESSAGE" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" <?if($messageReq):?>required<?endif;?>><?=$arResult["MESSAGE"]?></textarea>
				</div>
			</div>

			<?if($GLOBALS['global_info']['captcha_show']):?>
				<div class="captcha-wrap">
					<div class="g-recaptcha" id="recaptcha_mainform"></div>
				</div>
			<?endif;?>
		</div>


		<div class="col-md-12">
			<div class="quote-item">
				<input type="hidden" name="FORM_PAGE" value="<?=$arParams["FORM_PAGE"]?>">
				<input type="hidden" name="FORM_SECTION" value="<?=$arParams["FORM_SECTION"]?>">
				<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
				
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn-1">
			</div>
		</div>
	</div>
</form>



