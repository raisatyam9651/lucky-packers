<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $shifting_from = $_POST['shifting_from'] ?? '';
    $shifting_to = $_POST['shifting_to'] ?? '';
    $shifting_type = $_POST['shifting_type'] ?? '';
    $message = $_POST['message'] ?? '';

    $to = "info@luckycarepackers.com";
    $subject = "Quick Inquiry Form: " . $name;
    $body = "Name: $name\nEmail: $email\nMobile: $mobile\nShifting From: $shifting_from\nShifting To: $shifting_to\nShifting Type: $shifting_type\n\nMessage:\n$message";
    $headers = "From: " . ($email ? $email : "no-reply@luckycarepackers.com");

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
