<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? 'Contact Us Query';
    $message = $_POST['message'] ?? '';

    $to = "info@luckycarepackers.com";
    $email_subject = "Contact Us Form: " . $subject;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $email_subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
