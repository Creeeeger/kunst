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
<link rel="stylesheet" type="text/css" href="../shared/assets/sf.css" />
<link rel="stylesheet" type="text/css" href="../shared/assets/sd.css" />
<link rel="stylesheet" type="text/css" href="../shared/assets/sc.css" />
<link rel="canonical" href="http://engl.kunstvermittlung.haerle.art/datenschutzformular.php" />
<script src="../shared/assets/jquery.js"></script>
<script src="../shared/assets/navigation.js"></script> 
<script src="../shared/assets/common.js"></script>
<script src="../shared/assets/tallinnslider.js"></script>
</head>

<body>

<nav class="sqrnav">

<a href="#" class="sqrnavshow">Navigation ffnen</a>
<a href="#" class="sqrnavhide">Navigation schlieen</a>
	
<ul>
	
<li class="sqrnavhome"><a href="./index.html"><span>Startseite</span></a></li>

	
<li><a href="./ueber-uns/index.html"><span>&Uuml;ber mich</span></a>
</li>
<li><a href="./unsere-leistung/index.html"><span>Meine Leistung</span></a>
</li>
<li><a href="./netzwerk/index.html"><span>Netzwerk</span></a>
</li>
<li><a href="./kunst-als-kapitalanlage/index.html"><span>Kapitalanlage</span></a>
</li>
<li><a href="./ausstellungen/index.html"><span>Ausstellungen</span></a>
</li>
<li><a href="./kontakt-und-impressum/index.html"><span>Kontakt</span></a>
</li>
<li><a href="https://engl.haerle-kunstvermittlung.com/"><span>| englisch |</span></a>
</li>
</ul>
</nav>

<div class="sqrmainarea">
<div class="sqrmainshadow">

<header data-autoprogress="5">
<div id="headercontainer">

<img src="../shared/images/s2dlogo.jpg" alt="" />
<div id="eyecatcherwait"></div>
</div>

</header>

<div class="sqrmaincontainer">
<article class="content sqrcontent">
<div>
<div class="sqrpara">
<div id="sqrbreadcrumbs">

Sie sind hier:

<a href="./index.html">Startseite</a>

</div>
</div>
<div class="sqrpara">
<h1>Datenschutzformular</h1>
</div>
<div class="sqrpara">
<h2 id="133425aef70a8b102">zur Nutzung Ihrer Rechte</h2>
<p style=""><br/>Bitte verwenden Sie dieses Formular ausschlie&szlig;lich zur Nutzung Ihrer Datenschutzrechte.<br/>Hier empfehle ich in beiderseitigem Interesse die ausschlie&szlig;lich schriftliche Kommunikation.<br/>Verwenden Sie f&uuml;r alle anderen Formen der Kontaktaufnahme mein &gt; Kontaktformular.<br/><br/>Mit diesem Formular k&ouml;nnen Sie mir auch &Auml;nderungen Ihrer Daten wie eMail-Adresse oder Postadresse mitteilen.<br/><br/>Zur Dokumentation wird die Kommunikation &uuml;ber Information, Berichtigung und Widerspruch zum Datenschutz &uuml;ber dieses Formular 5 Jahre lang bei mir archiviert.<br/></p>
</div>
<div class="sqrpara">
<?php
	srand((double)microtime() * 1000000);
	$fgwCaptchaId2 = rand(0, 32000);
?>

<form method="POST" action="./w2dfgw.php" class="sqrform sqrformcheck" enctype="application/x-www-form-urlencoded" data-captchaurl="./w2dcpchk.php">

<input type="hidden" name="fgwemail" value="133425aef70a96905"/>
<input type="hidden" name="fgwsubject" value="Feedback-Formular"/>
<input type="hidden" name="fgwreturnurl" value="./vielen-dank.html"/>
<div>
<label class="sqrforml" for="sqrform-133425aef70a96905-4">Vorname:</label>
<input class="sqrformr" type="text" id="sqrform-133425aef70a96905-4" name="vname" value=""  />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aef70a96905-5">Nachname:</label>
<input class="sqrformr" type="text" id="sqrform-133425aef70a96905-5" name="nname" value=""  />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aef70a96905-6">E-Mail:&nbsp;*</label>
<input class="sqrformr" type="email" id="sqrform-133425aef70a96905-6" name="email" value="" required="required" />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aef70a96905-7">Ort (mit PLZ):&nbsp;*</label>
<input class="sqrformr" type="text" id="sqrform-133425aef70a96905-7" name="ortmitplz" value="" required="required" />
</div>
<div>
<label class="sqrforml" for="sqrform-133425aef70a96905-8">Anfrage | Korrektur | Widerspruch zu Ihren Daten:&nbsp;*</label>
<textarea class="sqrformr" id="sqrform-133425aef70a96905-8" name="anfragekorrekturwiderspruchzuihrendaten" required="required"></textarea>
</div>
<div>
<label class="sqrforml">Sicherheitscode:</label>
<label class="sqrformr">
<img src="./w2dcpimg.php?id=<?php echo($fgwCaptchaId2); ?>" alt="" width="120" height="30"  />
</label>
</div>
<div>
<label for="sqrform-133425aef70a96905-captcha" class="sqrforml">Sicherheitscode wiederholen:&nbsp;*</label>
<input type="text" class="sqrformr" id="sqrform-133425aef70a96905-captcha" name="fgwcaptchacode" maxlength="6" required="required" />
<input type="hidden" name="fgwcaptchaid" value="<?php echo($fgwCaptchaId2); ?>"/>
<input type="hidden" name="fgwuid" value="133425aef70a96905"/>
</div>
<div>
<p class="sqrformr">* Pflichtfelder, die ausgefllt werden mssen.</p>
</div>

<div>
  <input type="submit" value="absenden" />
</div>

</form></div>
<div class="sqrpara">
<a class="sqrbutton sqrprevpage" href="haftungsausschluss.html"><span>Haftungsausschluss</span></a>
</div>
</div>
</article>
</div>
</div>
</div>

<footer>
<div class="sqrcommonlinks">
<a href="./impressum.html">Impressum</a>
<a href="./cookies.html">Cookies</a>
<a href="./datenschutz.html">Datenschutz</a>
<a href="./haftungsausschluss.html">Haftungsausschluss</a>
<a href="./datenschutzformular.php">Datenschutzformular</a>
</div>
<div class="sqrfootertext">
(c) H&auml;rle 2025</div>
</footer>

</body>

</html>
