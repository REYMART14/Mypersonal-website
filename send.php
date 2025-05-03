<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure you have installed PHPMailer via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Basic SMTP setup
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'alastrareymart@gmail.com'; // Replace with your Gmail
        $mail->Password = 'Penguin011222'; // Replace with your app password or Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name); // Sender's email
        $mail->addAddress('alastrareymart@gmail.com'); // Recipient's email

        // Content
        $mail->isHTML(false); // Plain text email
        $mail->Subject = 'New message from your portfolio site';
        $mail->Body    = "You have received a new message from $name <$email>:\n\n$message";

        // Send the email
        $mail->send();

        // Redirect after successful email send
        header("Location: https://m.me/alastrareymart14");
        exit();
    } catch (Exception $e) {
        // Handle errors
        echo "<script>alert('Message failed to send. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    // Redirect back to your form page
    header("Location: http://localhost//myWebinfo/personalweb.php");
    exit();
}
?>
