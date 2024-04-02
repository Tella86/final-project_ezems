<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve email from the form submission
    $email = $_POST["email"];

    // Your email address where you want to receive notification
    $to = "ezems.developers@gmail.com";

    // Email subject
    $subject = "New Subscription";

    // Email message
    $message = "A new user subscribed with the email: $email";

    // Additional headers
    $headers = "From: ezems.developers@gmail.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email notification
    if (mail($to, $subject, $message, $headers)) {
        // If email sent successfully, return HTTP status 200
        http_response_code(200);
        echo "Subscription successful!";
    } else {
        // If email sending failed, return HTTP status 500
        http_response_code(500);
        echo "Subscription failed. Please try again later.";
    }
} else {
    // If request method is not POST, return HTTP status 405 (Method Not Allowed)
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
