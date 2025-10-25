<?php @ini_set('default_charset','ISO-8859-1'); ?><!DOCTYPE html>
<html lang="de">

<head>
<title>Datenschutzformular</title>
<meta charset="ISO-8859-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="" />
<meta name="description" content="" />
<meta name="keywords" lang="de" content="" />
<meta name="generator" content="SIQUANDO Shop 11 (#3837-5594)" />
<link rel="stylesheet" type="text/css" href="../assets/sf.css" />
<link rel="stylesheet" type="text/css" href="../assets/sd.css" />
<link rel="stylesheet" type="text/css" href="../assets/sc.css" />
<script src="../assets/jquery.js"></script>
<script src="../assets/navigation.js"></script> 
<script src="../assets/common.js"></script>
<script src="../assets/tallinnslider.js"></script>
</head>

<body>

<nav class="sqrnav">

<a href="#" class="sqrnavshow">Navigation öffnen</a>
<a href="#" class="sqrnavhide">Navigation schließen</a>
	
<ul>
	
<li class="sqrnavhome"><a href="../index.html"><span>Startseite</span></a></li>

	
<li><a href="http://kunstvermittlung.haerle.art"><span>Kunstvermittlung</span></a>
</li>
<li><a href="../kontakt/index.html"><span>Handy-Direktkontakt</span></a>
</li>
</ul>
</nav>

<div class="sqrmainarea">
<div class="sqrmainshadow">

<header data-autoprogress="5">
<div id="headercontainer">

<img src="../images/plg.jpg" alt="" />
<div id="eyecatcherwait"></div>
</div>

</header>

<div class="sqrmaincontainer">
<article class="content sqrcontent">
<div>
<div class="sqrpara">
<h1>Datenschutzformular</h1>
</div>
<div class="sqrpara">
<h2 id="133425aee10f2ca1d">zur Nutzung Ihrer Rechte</h2>
<p style="">Bitte verwenden Sie dieses Formular ausschlie&szlig;lich zur Nutzung Ihrer Datenschutzrechte.<br/>Hier empfehle ich in beiderseitigem Interesse die ausschlie&szlig;lich schriftliche Kommunikation.<br/>Verwenden Sie f&uuml;r alle anderen Formen der Kontaktaufnahme mein &gt; Kontaktformular.<br/><br/>Mit diesem Formular k&ouml;nnen Sie mir auch &Auml;nderungen Ihrer Daten wie eMail-Adresse oder Postadresse mitteilen.<br/><br/>Zur Dokumentation wird die Kommunikation &uuml;ber Information, Berichtigung und Widerspruch zum Datenschutz &uuml;ber dieses Formular 5 Jahre lang bei mir archiviert.</p>
</div>
<div class="sqrpara">
<h2 id="133425aee10f32c1e">Anfrage, Korrektur und Widerspruch</h2>
<?php
	srand((double)microtime() * 1000000);
	$fgwCaptchaId2 = rand(0, 32000);
?>

<form method="POST" action="../w2dfgw.php" class="sqrform sqrformcheck" enctype="application/x-www-form-urlencoded" data-captchaurl="../w2dcpchk.php">

<input type="hidden" name="fgwemail" value="133425aee10f32c1e"/>
<input type="hidden" name="fgwsubject" value="Feedback-Formular"/>
<input type="hidden" name="fgwreturnurl" value="./datenschutzformular/index.php"/>
<div>
<label class="sqrforml" for="sqrform-133425aee10f32c1e-4">Vorname:</label>
<input class="sqrformr" type="text" id="sqrform-133425aee10f32c1e-4" name="vname" value=""  />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aee10f32c1e-5">Nachname:</label>
<input class="sqrformr" type="text" id="sqrform-133425aee10f32c1e-5" name="nname" value=""  />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aee10f32c1e-6">E-Mail:&nbsp;*</label>
<input class="sqrformr" type="email" id="sqrform-133425aee10f32c1e-6" name="email" value="" required="required" />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aee10f32c1e-7">Nachricht:</label>
<textarea class="sqrformr" id="sqrform-133425aee10f32c1e-7" name="nachricht" ></textarea>
</div>
<div>
<label class="sqrforml">Sicherheitscode:</label>
<label class="sqrformr">
<img src="../w2dcpimg.php?id=<?php echo($fgwCaptchaId2); ?>" alt="" width="120" height="30"  />
</label>
</div>
<div>
<label for="sqrform-133425aee10f32c1e-captcha" class="sqrforml">Sicherheitscode wiederholen:&nbsp;*</label>
<input type="text" class="sqrformr" id="sqrform-133425aee10f32c1e-captcha" name="fgwcaptchacode" maxlength="6" required="required" />
<input type="hidden" name="fgwcaptchaid" value="<?php echo($fgwCaptchaId2); ?>"/>
<input type="hidden" name="fgwuid" value="133425aee10f32c1e"/>
</div>
<div>
<p class="sqrformr">* Pflichtfelder, die ausgefüllt werden müssen.</p>
</div>

<div>
  <input type="submit" value="absenden" />
</div>

</form></div>
</div>
</article>
</div>
</div>
</div>

<footer>
<div class="sqrcommonlinks">
<a href="../impressum.html">Impressum</a>
<a href="../cookies.html">Cookies</a>
<a href="../datenschutz.html">Datenschutz</a>
<a href="../haftungsausschuss.html">Haftungsausschuss</a>
</div>
<div class="sqrfootertext">
(c) 2022 | Dagmar Haerle | D- Freiberg am Neckar | Gr&uuml;nlandstr. 1 | +49 - (0) 172 731460</div>
</footer>

</body>

</html>
