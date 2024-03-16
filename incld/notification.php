<?php
function sendSubscriptionNotification($email) {
    // Set your notification details
    $to = "nillymae07@gmail.com"; // Email address where you want to receive the notification
    $subject = "New Subscription";
    $message = "A new user with email: $email has subscribed to your service.";

    // Set additional headers
    $headers = "From: nillymae07@gmail.com" . "\r\n" .
               "Reply-To: nillymae07@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the notification email
    $result = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if($result) {
        echo "Notification email sent successfully.";
    } else {
        echo "Failed to send notification email.";
    }
}

// Example usage:
$email = "user@example.com"; // Replace this with the user's email
sendSubscriptionNotification($email);
?>