<?php
$secretKey = "6LcM524qAAAAAA0qUGxoOfeCzCy1wM4fZdm7UL77";
$response = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];

$verifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIp";
$responseKeys = json_decode(file_get_contents($verifyUrl), true);

if(intval($responseKeys["success"]) !== 1) {
    echo "Please complete the CAPTCHA";
} else {
    // Process form (e.g., send email)
}
?>
