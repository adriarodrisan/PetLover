<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$correo = trim($_POST['correo']);
$nombre = trim($_POST['nombre']);
$mensaje = trim($_POST['mensaje']);
try {
    $mail = new PHPMailer();
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
    $mail->Subject = "Gracias por Contactar con nosotros";
    $mail->Body    = 'En breve contactaremos con usted';
    $mail->send();
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
try {
    $mail = new PHPMailer();
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'petlovercomtact@gmail.com';                     
    $mail->Password   = 'okzk slcy nsas vkrb';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                           
    $mail->setFrom('petlovercomtact@gmail.com', 'petlover');
    $mail->addAddress("petlovercomtact@gmail.com", 'admin');

    $mail->isHTML(true);                              
    $mail->Subject = "Nueva entrada en el formulario de contacto";
    $mail->Body    = "El usuario se llama $nombre\n
                      Con el mensaje es:
                      $mensaje";
    $mail->send();
    header("Location: ./Home_Petlover.php");
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
