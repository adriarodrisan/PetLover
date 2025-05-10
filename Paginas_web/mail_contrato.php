<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;
function enviarCorreoContrato($correo,$nombre,$apellido,$dni,$direccion,$telefono,$nombre_animal,$especie,$raza,$sexo,$compromisos){
//Configuracion del DOMPDF
$dompdf = new Dompdf();
//Contenido del PDF
$html = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Contrato de Adopción de Animal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
            text-transform: uppercase;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }
        .signature {
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <h1>Contrato de Adopción de Animal</h1>

    <p><strong>Entre:</strong></p>
    <p><strong>$nombre</strong>, con domicilio en $direccion, identificado con $dni, en adelante “el Adoptante”,</p>
    <p><strong>y</strong></p>
    <p><strong>Adrià Rodriguez Sanchez</strong>, con domicilio en Calle Rajolers 14, identificado con 47572321h, en adelante “el Cedente”,</p>

    <p><strong>Se acuerda lo siguiente:</strong></p>

    <p class='section-title'>PRIMERO: OBJETO DEL CONTRATO</p>
    <p>El Cedente entrega en adopción y el Adoptante acepta a $nombre_animal, un(a) $especie, $raza, de aproximadamente [edad] años/meses, sexo $sexo, en adelante “el Animal”.</p>

    <p class='section-title'>SEGUNDO: CONDICIONES DE LA ENTREGA</p>
    <ol>
        <li>El Cedente declara que entrega al Animal en buen estado de salud, salvo las condiciones indicadas: [detallar si hay enfermedades, tratamientos, etc.].</li>
        <li>El Adoptante declara haber sido informado sobre el estado de salud, carácter y necesidades del Animal.</li>
    </ol>

    <p class='section-title'>TERCERO: COMPROMISOS DEL ADOPTANTE</p>
    <ol>
        <li>Brindar al Animal alimentación adecuada, atención veterinaria y un entorno seguro.</li>
        <li>No utilizar al Animal para peleas, reproducción comercial, experimentación ni actividades ilegales.</li>
        <li>No abandonar al Animal. En caso de no poder hacerse cargo, deberá comunicarlo al Cedente.</li>
        <li>Permitir al Cedente, previo aviso, realizar visitas o requerir información sobre el estado del Animal.</li>
    </ol>

    <p class='section-title'>CUARTO: CLÁUSULA DE REVERSIÓN</p>
    <p>En caso de incumplimiento de lo pactado, el Cedente podrá solicitar la devolución inmediata del Animal, sin necesidad de reembolso alguno.</p>

    <p class='section-title'>QUINTO: DATOS DEL ANIMAL</p>
    <ul>
        <li><strong>Nombre:</strong> ______________________________</li>
        <li><strong>Especie y raza:</strong> _________________________</li>
        <li><strong>Edad aproximada:</strong> _______________________</li>
        <li><strong>Sexo:</strong> _________________________________</li>
        <li><strong>Vacunas aplicadas:</strong> ______________________</li>
        <li><strong>Observaciones:</strong> __________________________</li>
    </ul>

    <p class='section-title'>SEXTO: JURISDICCIÓN</p>
    <p>Para cualquier controversia derivada del presente contrato, las partes se someten a los tribunales de [Ciudad o Jurisdicción].</p>

    <p>Y en prueba de conformidad, firman por duplicado, a un solo efecto, en [Ciudad], a los [día] días del mes de [mes] de [año].</p>
<div class='signature'>

    <p><strong>Firma del Cedente:</strong></p>
    <div style='border: 1px solid #000; width: 300px; height: 100px; margin-bottom: 10px;'></div>
    <p>Nombre: _____________________________<br>
    DNI: ___________________________</p>

    <p><strong>Firma del Adoptante:</strong></p>
    <div style='border: 1px solid #000; width: 300px; height: 100px; margin-bottom: 10px;'></div>
    <p>Nombre: _____________________________<br>
    DNI: ___________________________</p>
</div>
</body>
</html>
";
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
    $mail->addAddress($correo, $nombre);

    $mail->isHTML(true);                              
    $mail->Subject = "Contrato de $nombre_animal";
    $mail->Body    = "pruebas de envio de contrato";
    $mail->addAttachment($tempFile, 'documento.pdf');
    $mail->send();
    unlink($tempFile);
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
}