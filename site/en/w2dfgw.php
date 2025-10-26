<?php

//////////////////////////////////////////////////////////////////////////////////////////
///
/// SIQUANDO Shop 9
/// SIQUANDO GmbH & Co. KG
/// Autor: Volker Sauer, Am Bugapark 183, 45899 Gelsenkirchen
///
/// $Id: formgateway.ccml 654 2020-08-31 19:26:48Z volker $
///
//////////////////////////////////////////////////////////////////////////////////////////

function postvars($key) {

	// Liefert die POST-Variablen

	if (isset($_POST[$key])) {
		return ($_POST[$key]);
	}
	else {
		return ("");
	}
}

function my_quoted_printable_encode($input) {

	// MIME-Encoding

    $line_max = 76;
	$hex = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
	$lines = explode("\n", $input);
	$eol = "\n";
	$escape = "=";
	$output = "";

	for ($j=0;$j<count($lines);$j++) {
		$line = $lines[$j];
		$linlen = strlen($line);
		$newline = "";
		for($i = 0; $i < $linlen; $i++) {
			$c = substr($line, $i, 1);
			$dec = ord($c);
			if ( ($dec == 32) && ($i == ($linlen - 1)) ) {
				$c = "=20";
			} elseif ( ($dec == 61) || ($dec==46) || ($dec < 32 ) || ($dec > 126) ) {
				$h2 = floor($dec/16); $h1 = floor($dec%16);
				$c = $escape.$hex["$h2"].$hex["$h1"];
			}
			if ( (strlen($newline) + strlen($c)) >= $line_max ) {
				$output .= $newline.$escape.$eol;
				$newline = "";
			}
			$newline .= $c;
		}
		$output .= $newline;
		if ($j<count($lines)-1) $output .= $eol;
	}
	return trim($output);
}

function createHTMLMail() {

	// erzeugt eine HTML-Mail

	reset($_POST);

	$i=1;

	$mymail="";

	// Header

	$mymail.= "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n";
	$mymail.= "<html>\n";
	$mymail.= "<head>\n";

	$mymail.="<META http-equiv=Content-Type content=text/html; charset=iso-8859-1>\n";

	$mymail.= "</head>\n";
	$mymail.= "<body bgcolor=\"#ffffff\" text=\"#333333\" link=\"#333333\">\n";

	$mymail.= "<style>\n";
	$mymail.= "  td {font-family : Tahoma, Verdana, Geneva, Arial, Helvetica, sans-serif; font-size : 11px; color : #333333; }\n";
	$mymail.= "</style>\n";
	$mymail.="<table width=100% border=0 cellpadding=4>\n";

	$mymail.="<tr>";
	$mymail.='<td colspan=2><strong>Folgende Mitteilung wurde an Sie gesandt:</strong></td>'."\n";
	$mymail.="</tr>\n";

	while (list($key, $val) = each ($_POST))
	{
		switch ($key)
		{
			case "x":
			case "y":
			case "fgwemail":
			case "fgwsubject":
			case "fgwreturnurl":
			case "fgwcaptchacode":
			case "fgwcaptchaid":
			case "fgwuid":
				break;
	   		default:
				$mymail.="<tr>";
				$mymail.="<td><strong>".$key.":</strong></td>\n";
				$mymail.="<td width=100%>".$val."</td>\n";
				$mymail.="</tr>\n";
		}
	}

	$mymail.="</table>\n";

	return $mymail;
}

function createTextMail() {

	reset($_POST);

	$mymail="";
	while (list($key, $val) = each ($_POST))
	{
		switch ($key)
		{
			case "x":
			case "y":
			case "fgwemail":
			case "fgwsubject":
			case "fgwreturnurl":
			case "fgwcaptchacode":
			case "fgwcaptchaid":
			case "fgwuid":
				break;
	   		default:
				$mymail.=$key.": ";
				$mymail.=$val."\n\n";
		}
	}

	$mymail.="\n\n";

	return $mymail;
}

function createMimeMail() {
	global $inner;

	$mymime="This is a multi-part message in MIME format.\n\n";

	//////////////////////////////////////////////////////////////////////////
	//
	// nderungen File Upload
	// etor e.K. 31.07.2008
	// START
	//

	// Uploads
	if (count($_FILES)) {
		$mymimeuploads = '';
		foreach($_FILES as $upload)
			if ($upload['error'] == UPLOAD_ERR_OK && is_uploaded_file($upload['tmp_name'])) {
				$mymimeuploads.="----WEB2DATEGATEWAY\n";
				$mymimeuploads.="Content-Type: ".$upload['type'].";\n\tname=\"".$upload['name']."\"\n";
				$mymimeuploads.="Content-Transfer-Encoding: base64\n";
				$mymimeuploads.="Content-Disposition: attachment;\n\tfilename=\"".$upload['name']."\"\n\n";
				$mymimeuploads.=chunk_split(base64_encode(file_get_contents($upload['tmp_name'])), 76, "\n")."\n";
				$inner = "INNER";
			}
	}

	// Falls Upload verschachteln
	if ($inner) {
		$mymime.="----WEB2DATEGATEWAY\n";
		$mymime.="Content-Type: multipart/alternative;\n\tboundary=\"--INNERWEB2DATEGATEWAY\"\n\n";
	}

	// Text und HTML Teil, ggf. innerhalb eines weiteren multiparts
	$mymime.="----".$inner."WEB2DATEGATEWAY\n";
	$mymime.="Content-Type: text/plain;\n\tcharset=\"iso-8859-1\"\n";
	$mymime.="Content-Transfer-Encoding: quoted-printable\n\n";
	$mymime.=my_quoted_printable_encode(createTextMail())."\n";
	$mymime.="----".$inner."WEB2DATEGATEWAY\n";
	$mymime.="Content-Type: text/html;\n\tcharset=\"iso-8859-1\"\n";
	$mymime.="Content-Transfer-Encoding: quoted-printable\n\n";
	$mymime.=my_quoted_printable_encode(createHTMLMail())."\n";
	$mymime.="----".$inner."WEB2DATEGATEWAY--\n";

	// Falls verschachtelt, Uploads einfgen und Ende vom usseren Multipart
	if ($inner) {
		$mymime .= $mymimeuploads;
		$mymime.="----WEB2DATEGATEWAY--\n";
	}

	//
	// ENDE
	//////////////////////////////////////////////////////////////////////////

	return $mymime;
}

function deSlash(&$element) {

	// Fr Stripslash

	$element=stripslashes($element);
}

// Hauptprogramm

@ini_set('default_charset','ISO-8859-1');

//////////////////////////////////////////////////////////////////////////
//
// nderungen Email
// etor e.K. 29.04.2009
//

$fgwemailuid=postVars("fgwemail");

//
//////////////////////////////////////////////////////////////////////////

$fgwsubject=postVars("fgwsubject");
$fgwreturnurl=postVars("fgwreturnurl");
$fgwuid=postVars("fgwuid");
$fgwcaptchaid=postVars('fgwcaptchaid');
$fgwcaptchacode=postVars('fgwcaptchacode');

$whitelist=array('133425aef70a96905' => 'kontakt@haerle-kunstvermittlung.com');
$captchauids=array('133425aef70a96905');

//////////////////////////////////////////////////////////////////////////
//
// nderungen Email
// etor e.K. 29.04.2009
//

$fgwemail = isset($whitelist[$fgwemailuid]) ? $whitelist[$fgwemailuid] : null;

//
//////////////////////////////////////////////////////////////////////////

if ($fgwemail!='nomail@kaufrausch.de') {

	if (in_array($fgwuid,$captchauids)) {
		include('./assets/w2dcpcls.php');
		$captcha=new captchas();
		$captcha->datapath='./assets/plugindata/';
		if (!$captcha->checkticket($fgwcaptchaid,$fgwcaptchacode)) {
			die("ERROR: BAD CAPTCHA");
		}
	}

	//////////////////////////////////////////////////////////////////////////
	//
	// nderungen Email
	// etor e.K. 29.04.2009
	//

	if (!$fgwemailuid) {
		die ("ERROR: NO RETURN-EMAIL-ADDRESS-UID");
	}

	if (!$fgwemail) {
		die("ERROR: ILLEGAL RETURN-EMAIL-ADDRESS-UID");
	}

	//
	//////////////////////////////////////////////////////////////////////////

	if (!$fgwreturnurl) {
		die ("ERROR: NO RETURN-URL");
	}

	$from = $fgwemail;
	$reply_to = null;
	if (isset($_POST['email'])) {
		$email = trim($_POST['email']);
		$regex = '/^((\"[^\"\f\n\r\t\v\b]+\")|([\w\!\#\$\%\&\'\*\+\-\~\/\^\`\|\{\}]+(\.[\w\!\#\$\%\&\'\*\+\-\~\/\^\`\|\{\}]+)*))@((\[(((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9]))\.((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9]))\.((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9]))\.((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9])))\])|(((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9]))\.((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9]))\.((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9]))\.((25[0-5])|(2[0-4][0-9])|([0-1]?[0-9]?[0-9])))|((([A-Za-z0-9\-])+\.)+[A-Za-z\-]+))$/D';
		if (preg_match($regex, $email)) {
			$reply_to = $email;
		}
	}

	@mail ($fgwemail, $fgwsubject, createMimeMail(),
		"From: $from\n" .
		($reply_to ? "Reply-To: $reply_to\n" : '') . 
		"MIME-Version: 1.0\n" . 
		"Content-Type: multipart/".(isset($inner) ? 'mixed' : 'alternative').";\n" . 
		"\tboundary=\"--WEB2DATEGATEWAY\"\n" . 
		"X-Mailer: SIQUANDO Web Gateway Version 1.1");
}

header("Location: ".$fgwreturnurl);

?>
