<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    $mail = new PhPMailer();
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'petlovercomtact@gmail.com';                     
    $mail->Password   = 'okzk slcy nsas vkrb';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                           
    $mail->setFrom('petlovercomtact@gmail.com', 'petlover');
    $mail->addAddress('arodriguez@institutmvm.cat', 'Adria');

    $mail->isHTML(true);                              
    $mail->Subject = 'este es una prueba de envio de correos';
    $mail->Body    = 'pruebas de envio';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}