<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Check if the registration form was submitted
if (isset($_POST['register'])) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bradoxoduor@gmail.com'; // Replace with your Gmail email address
        $mail->Password   = 'Nicole@5194';  // Replace with your Gmail password or app password
        $mail->SMTPSecure = 'tls'; // Use TLS
        $mail->Port       = 587;   // SMTP port

        // Sender and recipient
        $mail->setFrom('bradoxoduor@gmail.com', 'bradox oduor');
        $mail->addAddress($_POST['email']); // Use the email submitted through the form

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Registration Confirmation';
        $mail->Body    = 'Thank you for registering!';

        // Send the email
        $mail->send();
        echo 'Mail sent successfully!';
    } catch (Exception $e) {
        echo "Mail sending failed. Error: {$mail->ErrorInfo}";
    }
}
?>
