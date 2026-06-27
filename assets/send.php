<?php

// -----------------------------
//  BASIC SPAM PROTECTION
// -----------------------------
if (!empty($_POST['website'])) {
    // Honeypot field filled = bot
    exit;
}

// -----------------------------
//  SANITISE INPUTS
// -----------------------------
$depot   = isset($_POST['depot']) ? strtolower(trim($_POST['depot'])) : '';
$name    = isset($_POST['name']) ? trim($_POST['name']) : '';
$email   = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone   = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// -----------------------------
//  DEPOT → EMAIL ROUTING
// -----------------------------
$emails = [
    'sthelens'  => 'sthelens@autosafetycentre.com',
    'haydock'   => 'haydock@autosafetycentre.com',
    'widnes'    => 'widnes@autosafetycentre.com',
    'prescot'   => 'prescot@autosafetycentre.com',
    'ormskirk'  => 'ormskirk@autosafetycentre.com'
];

// Default fallback (optional)
$to = isset($emails[$depot]) ? $emails[$depot] : 'info@autosafetycentre.com';

// -----------------------------
//  BUILD EMAIL CONTENT
// -----------------------------
$subject = "New enquiry from Auto Safety Centre ($depot depot)";

$body = "New enquiry received from the $depot depot contact form:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message\n\n";
$body .= "----------------------------------\n";
$body .= "Submitted from AutoSafetyCentre.com\n";

// Headers
$headers  = "From: noreply@autosafetycentre.com\r\n";
$headers .= "Reply-To: $email\r\n";

// -----------------------------
//  SEND EMAIL
// -----------------------------
mail($to, $subject, $body, $headers);

// -----------------------------
//  REDIRECT TO THANK YOU PAGE
// -----------------------------
header("Location: /assets/thankyou.html");

exit;

?>