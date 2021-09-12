<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["PHONE_REGISTRATION"])
{
	CJSCore::Init('phone_auth');
}
?>

<div class="form-register">

<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>

<?if($arResult["SHOW_FORM"]):?>

<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
	<?if ($arResult["BACKURL"] <> ''): ?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">
	<b><?=GetMessage("AUTH_CHANGE_PASSWORD")?></b>


<?if($arResult["PHONE_REGISTRATION"]):?>

				<?echo GetMessage("sys_auth_chpass_phone_number")?>

					<input type="text" value="<?=htmlspecialcharsbx($arResult["USER_PHONE_NUMBER"])?>" class="bx-auth-input" disabled="disabled" />
					<input type="hidden" name="USER_PHONE_NUMBER" value="<?=htmlspecialcharsbx($arResult["USER_PHONE_NUMBER"])?>" />

			<label class="starrequired" for="sys_auth_chpass_code">* <?echo GetMessage("sys_auth_chpass_code")?></label>
				<input id="sys_auth_chpass_code" type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="bx-auth-input" autocomplete="off" />

<?else:?>
			<div><label class="starrequired" for="auth_login">* <?=GetMessage("AUTH_LOGIN")?></label>
				<input id="auth_login" type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="bx-auth-input" /></div>
<?
	if($arResult["USE_PASSWORD"]):
?>
			<div><label for="sys_auth_changr_pass_current_pass" class="starrequired">* <?echo GetMessage("sys_auth_changr_pass_current_pass")?></label>
			<input id="sys_auth_changr_pass_current_pass" type="password" name="USER_CURRENT_PASSWORD" maxlength="255" value="<?=$arResult["USER_CURRENT_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" /></div>

<?
	else:
?>
			<div><label class="starrequired" for="auth_checkword">* <?=GetMessage("AUTH_CHECKWORD")?></label>
				<input id="auth_checkword" type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="bx-auth-input" autocomplete="off" /></div>

<?
	endif
?>
<?endif?>
	<div><label class="starrequired" for="auth_new_pass">* <?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></label>
		<input id="auth_new_pass" type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" /></div>
<?if($arResult["SECURE_AUTH"]):?>
				<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
				</noscript>
<script type="text/javascript">
document.getElementById('bx_auth_secure').style.display = 'inline-block';
</script>
<?endif?>
				<div><label class="starrequired" for="new_pass_confirm">* <?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></label>
					<input id="new_pass_confirm" type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" /></div>

		<?if($arResult["USE_CAPTCHA"]):?>

					<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
				<label class="starrequired" for="sys_auth_captcha">* <?echo GetMessage("system_auth_captcha")?></label>
				<input id="sys_auth_captcha" type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />

		<?endif?>
		<input type="submit" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>" />
</form>

<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>

<?if($arResult["PHONE_REGISTRATION"]):?>

<script type="text/javascript">
new BX.PhoneAuth({
	containerId: 'bx_chpass_resend',
	errorContainerId: 'bx_chpass_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?=CUtil::PhpToJSObject([
			'signedData' => $arResult["SIGNED_DATA"]
		])?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_chpass_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_chpass_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_chpass_resend"></div>

<?endif?>

<?endif?>

<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>

</div>
