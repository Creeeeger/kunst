<?php

//////////////////////////////////////////////////////////////////////////////////////////
///
/// SIQUANDO Shop 9
/// SIQUANDO GmbH & Co. KG
/// Autor: Volker Sauer, Am Bugapark 183, 45899 Gelsenkirchen
///
/// $Id: captcha_checker.ccml 172 2016-04-26 20:10:25Z  $
///
//////////////////////////////////////////////////////////////////////////////////////////

@ini_set('default_charset','ISO-8859-1');
include('./assets/w2dcpcls.php');

$fgwcaptchaid = $_POST['id'];
$fgwcaptchacode = $_POST['code'];

$captcha=new captchas();
$captcha->datapath='./assets/plugindata/';
if ($captcha->checkticket($fgwcaptchaid,$fgwcaptchacode, false))
	die('ok');

$captcha->removeticket($fgwcaptchaid);
srand((double)microtime()*1000000);
echo rand(0,32000);

?>
