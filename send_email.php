<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_GET['message']);

    // Email details
    $to = "megijakalnina4@gmail.com"; 
    $subject = "New Contact Form Submission";
    $body = "Email: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
