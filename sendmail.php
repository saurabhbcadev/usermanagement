<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 's9955037382@gmail.com'; //sender mail
$mail->Password = 'tmtccacmyohgbwpl';// app password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('s9955037382@gmail.com'); //sender mail
$mail->addAddress($_POST['email']);
$mail->isHTML(true);

$mail->Subject = 'Verify Email';
$mail->Body = '<h2>Please Click on the given link and Enter OTP to verify your email. </h2><br> Verification Link :- http://localhost/skyline/verify.php?id='.$sid .' <br><br>Your OTP for Verification is <b> ' . $otp;
$mail->send();
?>