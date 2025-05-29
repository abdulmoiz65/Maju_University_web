<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json'); // Set JSON header

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['feedback']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@jinnah.edu'; // Your SMTP username
            $mail->Password = 'B^484286185295at';   // Your SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender and Recipient
            $mail->setFrom('no-reply@jinnah.edu', 'Feedback Form');
            $mail->addAddress('no-reply@jinnah.edu', 'Feedback Team');

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = 'New Feedback Submission';
            $mail->Body    = "<p><strong>Name:</strong> $name</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Feedback:</strong><br>$message</p>";
            $mail->AltBody = "Name: $name\nEmail: $email\nFeedback:\n$message";

            $mail->send();

            echo json_encode(['success' => true, 'message' => 'Your feedback has been successfully sent. Thank you!']);
        } catch (Exception $e) {
            error_log('Mailer Error: ' . $mail->ErrorInfo);
            echo json_encode(['success' => false, 'message' => 'Failed to send email. Please try again later.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Please fill out all fields.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
