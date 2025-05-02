<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function enviarCorreosInicioSession($correo,$nombre){
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
    $mail->addAddress($correo, $nombre);

    $mail->isHTML(true);                              
    $mail->Subject = 'pruebas de envio de correos con el inicio de session';
    $mail->Body    = 'pruebas de envio';
    $mail->send();
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
}