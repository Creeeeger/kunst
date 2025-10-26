<?php
@ini_set('default_charset', 'UTF-8');

$errors = [];
$success = false;
$firstName = '';
$lastName = '';
$email = '';
$cityAndPostalCode = '';
$requestDetails = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = trim((string)($_POST['first_name'] ?? ''));
    $lastName = trim((string)($_POST['last_name'] ?? ''));
    $email = trim((string)($_POST['email'] ?? ''));
    $cityAndPostalCode = trim((string)($_POST['city_postal_code'] ?? ''));
    $requestDetails = trim((string)($_POST['request_details'] ?? ''));
    $honeypot = trim((string)($_POST['website'] ?? ''));

    if ($honeypot !== '') {
        $errors[] = 'Das Formular wurde als automatisiert erkannt.';
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Bitte geben Sie eine gültige E-Mail-Adresse an.';
    }

    if ($cityAndPostalCode === '') {
        $errors[] = 'Bitte geben Sie Ihren Wohnort mit Postleitzahl an.';
    }

    if ($requestDetails === '') {
        $errors[] = 'Bitte beschreiben Sie Ihr Anliegen.';
    }

    if (!$errors) {
        $recipient = 'kontakt@haerle-kunstvermittlung.com';
        $subject = 'Datenschutz-Anfrage über die Website';

        $bodyLines = [
            'Eine neue Datenschutz-Anfrage wurde über die deutsche Website gesendet.',
            '',
            'Vorname: ' . ($firstName !== '' ? $firstName : '—'),
            'Nachname: ' . ($lastName !== '' ? $lastName : '—'),
            'E-Mail: ' . $email,
            'Ort / PLZ: ' . $cityAndPostalCode,
            '',
            'Anliegen:',
            $requestDetails,
        ];

        $headers = [
            'From: Härle Kunstvermittlung <kontakt@haerle-kunstvermittlung.com>',
            'Reply-To: ' . $email,
            'Content-Type: text/plain; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
            'X-Mailer: PHP/' . PHP_VERSION,
        ];

        $mailSent = @mail(
            $recipient,
            '=?UTF-8?B?' . base64_encode($subject) . '?=',
            implode("\n", $bodyLines),
            implode("\r\n", $headers)
        );

        if ($mailSent) {
            $success = true;
            $firstName = $lastName = $email = $cityAndPostalCode = $requestDetails = '';
        } else {
            $errors[] = 'Ihre Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es später erneut oder schreiben Sie direkt eine E-Mail.';
        }
    }
}
?><!DOCTYPE html>
<html lang="de">

<head>
<title>Datenschutzformular</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="" />
<meta name="description" content="" />
<meta name="keywords" lang="de" content="" />
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

<a href="#" class="sqrnavshow">Navigation öffnen</a>
<a href="#" class="sqrnavhide">Navigation schließen</a>
	
<ul>
	
<li class="sqrnavhome"><a href="./index.html"><span>Startseite</span></a></li>

	
<li><a href="./ueber-uns/index.html"><span>Über mich</span></a>
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
<li><a href="https://engl.haerle-kunstvermittlung.com/"><span>| Englisch |</span></a>
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
<p style=""><br/>Bitte verwenden Sie dieses Formular ausschließlich zur Wahrnehmung Ihrer Datenschutzrechte.<br/>Im Interesse beider Seiten empfehle ich, diese Anliegen ausschließlich schriftlich zu klären.<br/>Für alle anderen Formen der Kontaktaufnahme nutzen Sie bitte mein <a class="link" href="./kontakt-und-impressum/index.html">Kontaktformular</a>.<br/><br/>Mit diesem Formular können Sie mir auch Änderungen Ihrer Daten wie E-Mail-Adresse oder Postanschrift mitteilen.<br/><br/>Zur Dokumentation wird die Kommunikation über Auskunft, Berichtigung und Widerspruch zum Datenschutz über dieses Formular fünf Jahre lang archiviert.<br/></p>
</div>
<div class="sqrpara">
<?php if ($success) { ?>
<div class="sqrform sqrformnotice">
<p>Vielen Dank. Ihre Nachricht wurde erfolgreich versendet.</p>
</div>
<?php } else { ?>
<?php if ($errors) { ?>
<div class="sqrform sqrformnotice">
<ul>
<?php foreach ($errors as $error) { ?>
<li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<form method="POST" action="datenschutzformular.php" class="sqrform" enctype="application/x-www-form-urlencoded" novalidate>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-vorname">Vorname:</label>
<input class="sqrformr" type="text" id="privacy-form-vorname" name="first_name" value="<?php echo htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8'); ?>" autocomplete="given-name" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-nachname">Nachname:</label>
<input class="sqrformr" type="text" id="privacy-form-nachname" name="last_name" value="<?php echo htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8'); ?>" autocomplete="family-name" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-email">E-Mail: *</label>
<input class="sqrformr" type="email" id="privacy-form-email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required="required" autocomplete="email" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-ort">Ort (mit PLZ): *</label>
<input class="sqrformr" type="text" id="privacy-form-ort" name="city_postal_code" value="<?php echo htmlspecialchars($cityAndPostalCode, ENT_QUOTES, 'UTF-8'); ?>" required="required" autocomplete="address-level2" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-anliegen">Anfrage | Korrektur | Widerspruch zu Ihren Daten: *</label>
<textarea class="sqrformr" id="privacy-form-anliegen" name="request_details" required="required"><?php echo htmlspecialchars($requestDetails, ENT_QUOTES, 'UTF-8'); ?></textarea>
</div>
<div class="sqrformrow" style="display:none;">
<label for="privacy-form-website">Website</label>
<input type="text" id="privacy-form-website" name="website" tabindex="-1" autocomplete="off" />
</div>
<div class="sqrformrow">
<p class="sqrformr">* Pflichtfelder, die ausgefüllt werden müssen.</p>
</div>

<div class="sqrformrow">
  <input type="submit" value="Absenden" />
</div>

</form>
<?php } ?>
</div>
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
(c) Härle 2025</div>
</footer>

</body>

</html>
