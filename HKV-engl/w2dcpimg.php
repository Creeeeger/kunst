<?php

//////////////////////////////////////////////////////////////////////////////////////////
///
/// SIQUANDO Shop 9
/// SIQUANDO GmbH & Co. KG
/// Autor: Volker Sauer, Am Bugapark 183, 45899 Gelsenkirchen
///
/// $Id: captcha_image.ccml 172 2016-04-26 20:10:25Z  $
///
//////////////////////////////////////////////////////////////////////////////////////////

@ini_set('default_charset','ISO-8859-1');
include('./assets/w2dcpcls.php');

$cap=new captchas();
$cap->imagespath='./images/';
$cap->datapath='./assets/plugindata/';
$cap->getpicture($_GET['id']);

?>
