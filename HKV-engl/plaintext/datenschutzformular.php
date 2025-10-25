<?php @ini_set('default_charset','ISO-8859-1'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Datenschutzformular</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<meta http-equiv="content-language" content="de">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="expires" content="0">
<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" lang="de" content="">
<meta name="generator" content="SIQUANDO Shop 11 (#3837-5594)">
<link rel="canonical" href="http://engl.kunstvermittlung.haerle.art/datenschutzformular.php" >
<link rel="stylesheet" type="text/css" href="./assets/s.css">
<script type="text/javascript" src="./assets/jq.js"></script>
</head>

<body>
<p>
						<strong>Sie sind hier:</strong> <a href="./index.html">Startseite</a><br>
			<strong>Weiter zu:</strong>
							<a href="./ueber-uns/index.html">&Uuml;ber mich</a>
							<a href="./unsere-leistung/index.html">Meine Leistung</a>
							<a href="./netzwerk/index.html">Netzwerk</a>
							<a href="./kunst-als-kapitalanlage/index.html">Kapitalanlage</a>
							<a href="./ausstellungen/index.html">Ausstellungen</a>
							<a href="./kontakt-und-impressum/index.html">Kontakt</a>
							<a href="./-englisch-/index.html">| englisch |</a>
						<br>
			<strong>Allgemein:</strong>
<a href="./impressum.html">Impressum</a>
<a href="./cookies.html">Cookies</a>
<a href="./datenschutz.html">Datenschutz</a>
<a href="./haftungsausschluss.html">Haftungsausschluss</a>
<a href="./datenschutzformular.php">Datenschutzformular</a>
<br>

<br>

</p>

<h1>Datenschutzformular</h1>

	<h2>zur Nutzung Ihrer Rechte</h2>

	<p><br>Bitte verwenden Sie dieses Formular ausschlie&szlig;lich zur Nutzung Ihrer Datenschutzrechte.<br>Hier empfehle ich in beiderseitigem Interesse die ausschlie&szlig;lich schriftliche Kommunikation.<br>Verwenden Sie f&uuml;r alle anderen Formen der Kontaktaufnahme mein &gt; Kontaktformular.<br><br>Mit diesem Formular k&ouml;nnen Sie mir auch &Auml;nderungen Ihrer Daten wie eMail-Adresse oder Postadresse mitteilen.<br><br>Zur Dokumentation wird die Kommunikation &uuml;ber Information, Berichtigung und Widerspruch zum Datenschutz &uuml;ber dieses Formular 5 Jahre lang bei mir archiviert.<br></p>
		<h2></h2>

	<!-- $Id: form.ccml 24 2014-06-01 16:22:30Z volker $ -->

<?php
	srand((double)microtime() * 1000000);
	$fgwCaptchaId2 = rand(0, 32000);
?>

<script type="text/javascript">
//<![CDATA[
var validate, required, captcha, nocaptcha, first;
/*  */
var fgwCaptchaId2 = <?php echo $fgwCaptchaId2; ?>;
/*  */
var http_obj = null;

function check2() {
	validate = false;
	required = false;
	captcha = false;
	nocaptcha = false;
	first = null;
	var pattern = /.*\@.*\..*/;
	/*  */
		/*  */
		/*  */
	/*  */
		/*  */
		/*  */
	/*  */
		/*  */
		/*  */
	/*  */
		/*  */
		/*  */
	/*  */
		/*  */
		/*  */
	/*  */
		/* */
		if ((pattern.test(document.sendform2.email.value)) == false) {
			validate = true;
			if (!first)
				first = 'email';
		}
		/*  */
		/*  */
			/*  */
			if (document.sendform2.email.value == "") {
				document.sendform2.email.className = 'txh';
				if (!first)
					first = 'email';
				required = true;
			} else
				document.sendform2.email.className = 'tx';
			/*  */
			/*  */
			/*  */
			/*  */
		/*  */
	/*  */
		/*  */
		/*  */
			/*  */
			if (document.sendform2.ortmitplz.value == "") {
				document.sendform2.ortmitplz.className = 'txh';
				if (!first)
					first = 'ortmitplz';
				required = true;
			} else
				document.sendform2.ortmitplz.className = 'tx';
			/*  */
			/*  */
			/*  */
			/*  */
		/*  */
	/*  */
		/*  */
		/*  */
			/*  */
			if (document.sendform2.anfragekorrekturwiderspruchzuihrendaten.value == "") {
				document.sendform2.anfragekorrekturwiderspruchzuihrendaten.className = 'txh';
				if (!first)
					first = 'anfragekorrekturwiderspruchzuihrendaten';
				required = true;
			} else
				document.sendform2.anfragekorrekturwiderspruchzuihrendaten.className = 'tx';
			/*  */
			/*  */
			if (document.sendform2.anfragekorrekturwiderspruchzuihrendaten.value == "") {
				document.sendform2.anfragekorrekturwiderspruchzuihrendaten.className = 'txh';
				if (!first)
					first = 'anfragekorrekturwiderspruchzuihrendaten';
				required = true;
			} else
				document.sendform2.anfragekorrekturwiderspruchzuihrendaten.className = 'tx';
			/*  */
			/*  */
			/*  */
		/*  */
	/*  */

	/*  */
	if (document.sendform2.fgwcaptchacode.value) {
		if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.indexOf("Opera") == -1) {
			try {
				http_obj = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
				try {
					http_obj = new XMLHttpRequest();
				} catch(e) {

				}
			}
		} else
			http_obj = new XMLHttpRequest();

		if (!http_obj)
			return;

		var query = 'id=' + fgwCaptchaId2 + '&code=' + document.sendform2.fgwcaptchacode.value ;
		http_obj.open('post', './w2dcpchk.php', true);
		http_obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http_obj.setRequestHeader("Content-length", query.length);
		http_obj.setRequestHeader("Connection", "close");
		http_obj.onreadystatechange = check_result2;
		http_obj.send(query);
	} else {
		document.sendform2.fgwcaptchacode.className = 'txh';
		http_obj = null;
		nocaptcha = true;
		check_result2();
	}
	/*  */
}

function check_result2() {
	/*  */
	if (http_obj && http_obj.readyState == 4) {
		var response = http_obj.responseText;
		if (response == 'ok')
			document.sendform2.fgwcaptchacode.className = 'tx';
		else {
			document.sendform2.fgwcaptchacode.className = 'txh';
			document.sendform2.fgwcaptchacode.value = '';
			captcha = true;
			fgwCaptchaId2 = response;
			document.sendform2.fgwcaptchaid.value = response;
			document.getElementById('captchaimg2').src = './w2dcpimg.php?id=' + response;
			if (!first)
				first = 'fgwcaptchacode';
		}
	} else if (http_obj)
		return;
	/*  */

	var alerts = new Array();
	if (validate)
		alerts.push('Bitte geben Sie eine gültige E-Mail-Adresse ein.');
	if (required)
		alerts.push('Bitte füllen Sie alle Pflichtfelder aus.');
	if (captcha)
		alerts.push('Der Sicherheitscode ist falsch.');
	if (nocaptcha)
		alerts.push('Bitte füllen Sie den Sicherheitscode aus, dieser dient als Schutz vor Missbrauch.');

	if (alerts.length) {
		document.getElementById('myerror').innerHTML = alerts.join("<br />") + '<br />&nbsp;';
		if (first) {
			eval('document.sendform2.' + first + '.focus();');
			eval('document.sendform2.' + first + '.select();');
		}
	} else {
		document.sendform2.method = "POST";
		document.sendform2.action = "./w2dfgw.php";
		document.sendform2.submit();
		return true;
	}
}

//]]>
</script>

<form action="" name="sendform2" onsubmit="check2(); return false;" enctype="application/x-www-form-urlencoded">
<table cellpadding="0" cellspacing="5" class="formtab pluginwidth">
	<tr>
		<td colspan="2" class="h" id="myerror"></td>
	</tr>
	<tr style="display: none;">
		<td><input type="hidden" name="fgwemail" value="133425aef70a96905"/></td>
	</tr>
	<tr style="display: none;">
		<td><input type="hidden" name="fgwsubject" value="Feedback-Formular"/></td>
	</tr>
	<tr style="display: none;">
		<td><input type="hidden" name="fgwreturnurl" value="./vielen-dank.html"/></td>
	</tr>
<!--Text-->
	<tr>
		<td>Vorname</td>
		<td><input class="tx" type="text" name="vname" value="" /></td>
	</tr>
	<!--Text-->
	<tr>
		<td>Nachname</td>
		<td><input class="tx" type="text" name="nname" value="" /></td>
	</tr>
	<!--Text-->
	<tr>
		<td>E-Mail *</td>
		<td><input class="tx" type="text" name="email" value="" /></td>
	</tr>
	<!--Text-->
	<tr>
		<td>Ort (mit PLZ) *</td>
		<td><input class="tx" type="text" name="ortmitplz" value="" /></td>
	</tr>
	<!--Textarea-->
	<tr>
		<td valign="top">Anfrage | Korrektur | Widerspruch zu Ihren Daten *</td>
		<td><textarea cols="" rows="" class="tx" name="anfragekorrekturwiderspruchzuihrendaten"></textarea></td>
	</tr>
	<!--captcha-->
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>Sicherheitscode</td>
		<td><img id="captchaimg2" src="./w2dcpimg.php?id=<?php echo($fgwCaptchaId2); ?>" alt="" style="width: 120px; height: 30px; border: 0" /></td>
	</tr>
	<tr>
		<td>Sicherheitscode wiederholen *</td>
		<td>
			<input type="text" class="tx" name="fgwcaptchacode" maxlength="6" style="width: 80px; " />
		</td>
	</tr>
	<tr style="display: none;">
		<td><input type="hidden" name="fgwcaptchaid" value="<?php echo($fgwCaptchaId2); ?>"/></td>
	</tr>
	<tr style="display: none;">
		<td><input type="hidden" name="fgwuid" value="133425aef70a96905"/></td>
	</tr>
	<tr>
		<td colspan="2">* Pflichtfelder, die ausgefüllt werden müssen.</td>
	</tr>
</table>
<br />
<table cellpadding="0" cellspacing="5" class="completewidth">
	<tr>
		<td style="text-align: right">

			<input
								type="submit" value="absenden"
							/>

		</td>
	</tr>
</table>

</form>
	  <p><strong>Gehe zu:</strong>
    <a href="haftungsausschluss.html">Haftungsausschluss</a>   </p>
</body>

</html>
