<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Stripe\Terminal\Location;

// required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["message"])) {

    $mail = new PHPMailer(true);

    $email = $_POST["email"];
    $name = $_POST["name"];

    try {

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ezems.developers@gmail.com';
        $mail->Password = 'glgu ktrc jcgf jety ';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('ezems.developers@gmail.com', 'EZEMS');
        $mail->addAddress($_POST["email"]);
        $mail->addReplyTo('ezems.developers@gmail.com', 'EZEMS');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Reaching Out!';
        $mail->Body = "
            <p>Dear $name,</p>
            <p>Thank you for reaching out to us! We appreciate the time you took to share your feedback and inquiries with EZEMS. Your input is valuable to us, and we are committed to providing you with the best possible experience.</p>

            <p>Our team is currently reviewing your message, and we will get back to you as soon as possible. If your inquiry is time-sensitive, rest assured that we are working diligently to address it promptly.</p>

            <p>In the meantime, feel free to explore our website for additional resources. If you have any urgent matters, please don't hesitate to contact us directly at (254) 101086123.</p>

            <p>Once again, thank you for choosing EZEMS. We look forward to assisting you and appreciate your continued support.</p>
            <p>Best regards,</p>
            <p>EZEMS</p>
        ";

        $mail->send();
        echo "
            <script>
            alert('Message was sent successfully. Thank your for reaching us!');
            document.location.href = 'index.php';
            </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
header("location:../m.php");
