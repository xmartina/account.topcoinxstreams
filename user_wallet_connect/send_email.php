<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendEmailToAdmin($username, $wallet_name) {
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'mail.capitalcoin.online';
        $mail->SMTPAuth = true;
        $mail->Username = 'wallet.connect@capitalcoin.online';
        $mail->Password = '+C@ppy126';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email content
        $mail->setFrom('wallet.connect@capitalcoin.online', 'Wallet Connect');
        $mail->addAddress('admin@capitalcoin.online', 'Admin');
        $mail->Subject = 'New Wallet Connect Request';
        $mail->Body = "A new wallet connect request has been submitted by $username for $wallet_name.";

        $mail->send();
    } catch (Exception $e) {
        error_log("Email could not be sent. Error: {$mail->ErrorInfo}");
    }
}
?>