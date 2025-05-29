<?php
include('feedback.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format. Please try again.'); window.history.back();</script>";
        exit;
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sp23bscs0022@maju.edu.pk'; // Your email for SMTP
        $mail->Password = 'TxwEeols0022';            // Your email's password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set email headers
        $mail->setFrom('sp23bscs0022@maju.edu.pk', 'MAJU Feedback'); // Authenticated user's email
        $mail->addAddress('test2@maju.edu.pk', 'MAJU Official');    // Recipient's email
        $mail->addReplyTo($email, $name);                           // User's email for replies

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Feedback from ' . $name;
        $mail->Body    = "
            <h2>New Feedback Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Feedback:</strong></p>
            <p>$feedback</p>
        ";
        $mail->AltBody = "Name: $name\nEmail: $email\nFeedback:\n$feedback";

        // Send email
        $mail->send();
        echo "<script>alert('Feedback sent successfully!'); window.location.href = 'feedback_form.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>
