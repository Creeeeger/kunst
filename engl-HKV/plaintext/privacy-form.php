<?php @ini_set('default_charset','ISO-8859-1'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Privacy form</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<meta http-equiv="content-language" content="en">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta http-equiv="expires" content="0">
<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" lang="en" content="">
<meta name="generator" content="SIQUANDO Shop 11 (#3837-5594)">
<link rel="canonical" href="https://engl.haerle-kunstvermittlung.com/privacy-form.php" >
<link rel="stylesheet" type="text/css" href="./assets/s.css">
<script type="text/javascript" src="./assets/jq.js"></script>
</head>

<body>
<p>
						<strong>You are here:</strong> <a href="./index.html">></a><br>
			<strong>Weiter zu:</strong>
							<a href="./ueber-uns/index.html">About me</a>
							<a href="./unsere-leistung/index.html">My services</a>
							<a href="./netzwerk/index.html">About my network</a>
							<a href="./kunst-als-kapitalanlage/index.html">Art as an investment</a>
							<a href="./ausstellungen/index.html">Exhibitions (museums)</a>
							<a href="./kontakt-und-impressum/index.html">Contact and legal notice</a>
							<a href="https://haerle-kunstvermittlung.com/">| German |</a>
						<br>
			<strong>Allgemein:</strong>
<a href="./imprint.html">Imprint</a>
<a href="./cookies.html">Cookies</a>
<a href="./privacy.html">Privacy</a>
<a href="./disclaimer.html">Disclaimer</a>
<a href="./privacy-form.php">Privacy form</a>
<br>

<br>

</p>

<h1>Privacy form</h1>

	<h2>Exercise your rights</h2>

	<p><br>Please use this form exclusively to exercise your data protection rights.<br>In the interest of both parties, I recommend handling these matters in writing only.<br>For all other enquiries, please use my &gt; contact form.<br><br>You can also use this form to inform me of changes to your data, such as your email or postal address.<br><br>For documentation purposes, communication regarding information, rectification, or objections to data processing submitted via this form is archived for five years.<br></p>
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
		alerts.push('Der Security code ist falsch.');
		alerts.push('Bitte fllen Sie den Security code aus, dieser dient als Schutz vor Missbrauch.');
		<td>First name</td>
		<td>Last name</td>
		<td>Email *</td>
		<td>City and postal code *</td>
		<td valign="top">Request | correction | objection regarding your data *</td>
		<td>Security code</td>
		<td>Security code wiederholen *</td>
								type="submit" value="Submit"
	  <p><strong>Go to:</strong>
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
    <a href="disclaimer.html">Disclaimer</a>   </p>
</body>

</html>
