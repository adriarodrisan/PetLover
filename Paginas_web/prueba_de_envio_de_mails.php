<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf\Dompdf;
use Dompdf\Dompdf\Options;
//Configuracion del DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
//Contenido del PDF
$html = '<h1>Este es el PDF</h1> <p>Generado con dompdf</p>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$tempFile = tempnam(sys_get_temp_dir(), 'pdf'). '.pdf';
file_put_contents($tempFile, $dompdf->output());
$mail = new PHPMailer(true);
try {
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
    $mail->Subject = 'este es una prueba de envio de correos con pdf';
    $mail->Body    = 'pruebas de envio con pdf';
    $mail->addAttachment('temp.pdf', 'documento.pdf');
    $mail->send();
    echo 'Mensaje enviado';
    unlink ($tempFile);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
