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
        $errors[] = 'The form submission appears to be automated.';
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please provide a valid email address.';
    }

    if ($cityAndPostalCode === '') {
        $errors[] = 'Please enter your city and postal code.';
    }

    if ($requestDetails === '') {
        $errors[] = 'Please describe your request.';
    }

    if (!$errors) {
        $recipient = 'kontakt@haerle-kunstvermittlung.com';
        $subject = 'Privacy request via website';

        $bodyLines = [
            'A new privacy request was submitted via the English website.',
            '',
            'First name: ' . ($firstName !== '' ? $firstName : '—'),
            'Last name: ' . ($lastName !== '' ? $lastName : '—'),
            'Email: ' . $email,
            'City / Postal code: ' . $cityAndPostalCode,
            '',
            'Request details:',
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
            $errors[] = 'Your request could not be sent. Please try again later or write an email directly.';
        }
    }
}
?><!DOCTYPE html>
<html lang="en">

<head>
<title>Privacy form</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="" />
<meta name="description" content="" />
<meta name="keywords" lang="en" content="" />
<link rel="stylesheet" type="text/css" href="../shared/assets/sf.css" />
<link rel="stylesheet" type="text/css" href="../shared/assets/sd.css" />
<link rel="stylesheet" type="text/css" href="../shared/assets/sc.css" />
<link rel="canonical" href="/en/privacy-form.php" />
<script src="../shared/assets/jquery.js"></script>
<script src="../shared/assets/layout.js"></script>
<script src="../shared/assets/navigation.js"></script>
<script src="../shared/assets/common.js"></script>
<script src="../shared/assets/tallinnslider.js"></script>
</head>

<body data-lang="en" data-root="." data-page="privacy-form" data-lang-switch="../de/datenschutzformular.php">

<nav class="sqrnav" data-layout="nav"></nav>

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
<h1>Privacy form</h1>
</div>
<div class="sqrpara">
<h2 id="133425aef70a8b102">Exercise your rights</h2>
<p style=""><br/>Please use this form exclusively to exercise your data protection rights.<br/>In the interest of both parties, I recommend handling these matters in writing only.<br/>For all other enquiries, please use my <a class="link" href="./contact-and-legal-notice/index.html">contact form</a>.<br/><br/>You can also use this form to inform me of changes to your data, such as your email or postal address.<br/><br/>For documentation purposes, communication regarding information, rectification, or objections to data processing submitted via this form is archived for five years.<br/></p>
</div>
<div class="sqrpara">
<?php if ($success) { ?>
<div class="sqrform sqrformnotice">
<p>Thank you. Your request has been sent successfully.</p>
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
<form method="POST" action="privacy-form.php" class="sqrform" enctype="application/x-www-form-urlencoded" novalidate>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-first-name">First name:</label>
<input class="sqrformr" type="text" id="privacy-form-first-name" name="first_name" value="<?php echo htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8'); ?>" autocomplete="given-name" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-last-name">Last name:</label>
<input class="sqrformr" type="text" id="privacy-form-last-name" name="last_name" value="<?php echo htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8'); ?>" autocomplete="family-name" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-email">Email: *</label>
<input class="sqrformr" type="email" id="privacy-form-email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required="required" autocomplete="email" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-city">City and postal code: *</label>
<input class="sqrformr" type="text" id="privacy-form-city" name="city_postal_code" value="<?php echo htmlspecialchars($cityAndPostalCode, ENT_QUOTES, 'UTF-8'); ?>" required="required" autocomplete="address-level2" />
</div>
<div class="sqrformrow">
<label class="sqrforml" for="privacy-form-request">Request | correction | objection regarding your data: *</label>
<textarea class="sqrformr" id="privacy-form-request" name="request_details" required="required"><?php echo htmlspecialchars($requestDetails, ENT_QUOTES, 'UTF-8'); ?></textarea>
</div>
<div class="sqrformrow" style="display:none;">
<label for="privacy-form-website">Website</label>
<input type="text" id="privacy-form-website" name="website" tabindex="-1" autocomplete="off" />
</div>
<div class="sqrformrow">
<p class="sqrformr">* Mandatory fields that must be completed.</p>
</div>

<div class="sqrformrow">
  <input type="submit" value="Submit" />
</div>

</form>
<?php } ?>
</div>
<div class="sqrpara">
<a class="sqrbutton sqrprevpage" href="disclaimer.html"><span>Disclaimer</span></a>
</div>
</div>
</article>
</div>
</div>
</div>

<footer data-layout="footer"></footer>

</body>

</html>
