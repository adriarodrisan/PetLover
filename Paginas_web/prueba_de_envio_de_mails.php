<?php
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

try {
    $mail = new PhPMailer();
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'petlovercomtact@gmail.com';                     //SMTP username
    $mail->Password   = 'okzk slcy nsas vkrb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                           
    //Recipients
    $mail->setFrom('petlovercomtact@gmail.com', 'petlover');
    $mail->addAddress('arodriguez@institutmvm.cat', 'Adria');
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'este es una prueba de envio de correos';
    $mail->Body    = 'pruebas de envio';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}