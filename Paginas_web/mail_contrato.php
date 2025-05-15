<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;
function enviarCorreoContrato($correo,$nombre,$apellido,$dni,$direccion,$telefono,$nombre_animal,$especie,$raza,$edad,$sexo,$compromisos){
    $fechaHoy = new DateTime();
    $dia = $fechaHoy->format('d');
    $mes = $fechaHoy->format('m');
    $año = $fechaHoy->format('Y');
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
        font-family: 'Quicksand', sans-serif;
        background-color: #fff8f0;
        margin: 40px;
        line-height: 1.6;
        color: #6d4c41;
    }

    h1 {
        text-align: center;
        text-transform: uppercase;
        color: #d2691e;
        border-bottom: 2px dashed #ff9966;
        padding-bottom: 10px;
        margin-bottom: 30px;
        letter-spacing: 1px;
    }

    .section-title {
        font-weight: bold;
        margin-top: 24px;
        color: #8d6e63;
        background-color: #ffe5b4;
        padding: 6px 10px;
        border-left: 5px solid #ff9966;
        border-radius: 4px;
    }
        p {
        font-size: 14.5px;
        margin: 10px 0;
    }

    ol {
        padding-left: 20px;
        margin-top: 10px;
    }

    li {
        margin-bottom: 6px;
    }

    ul {
        padding-left: 20px;
        list-style: none;
    }
<body>

    <h1>Contrato de Adopción de Animal</h1>

    <p><strong>Entre:</strong></p>
    <p><strong>$nombre $apellido</strong>, con domicilio en $direccion, identificado con $dni, en adelante “el Adoptante”,</p>
    <p><strong>y</strong></p>
    <p><strong>Adrià Rodriguez Sanchez</strong>, con domicilio en Calle Rajolers 14, identificado con 47572321h, en adelante “el Cedente”,</p>

    <p><strong>Se acuerda lo siguiente:</strong></p>

    <p class='section-title'>PRIMERO: OBJETO DEL CONTRATO</p>
    <p>El Cedente entrega en adopción y el Adoptante acepta a $nombre_animal, un(a) $especie, $raza, de aproximadamente $edad, sexo $sexo, en adelante “el Animal”.</p>

    <p class='section-title'>SEGUNDO: CONDICIONES DE LA ENTREGA</p>
    <ol>
        <li>El Cedente declara que entrega al Animal en buen estado de salud.</li>
        <li>El Adoptante declara haber sido informado sobre el estado de salud, carácter y necesidades del Animal.</li>
    </ol>

    <p class='section-title'>TERCERO: COMPROMISOS DEL ADOPTANTE</p>
    <ol>
        <li>$compromisos</li>
        <li>No utilizar al Animal para peleas, reproducción comercial, experimentación ni actividades ilegales.</li>
        <li>No abandonar al Animal. En caso de no poder hacerse cargo, deberá comunicarlo al Cedente.</li>
        <li>Permitir al Cedente, previo aviso, realizar visitas o requerir información sobre el estado del Animal.</li>
    </ol>

    <p class='section-title'>CUARTO: CLÁUSULA DE REVERSIÓN</p>
    <p>En caso de incumplimiento de lo pactado, el Cedente podrá solicitar la devolución inmediata del Animal, sin necesidad de reembolso alguno.</p>

    <p class='section-title'>QUINTO: DATOS DEL ANIMAL</p>
    <ul>
        <li><strong>Nombre:</strong>$nombre_animal</li>
        <li><strong>Especie y raza:</strong>$especie , $raza</li>
        <li><strong>Edad aproximada:</strong> $edad</li>
        <li><strong>Sexo:</strong> $sexo</li>
        <li><strong>Vacunas aplicadas:</strong> Las necesarias pasa su edad</li>
    </ul>

    <p class='section-title'>SEXTO: JURISDICCIÓN</p>
    <p>Para cualquier controversia derivada del presente contrato, las partes se someten a los tribunales de Barcelona.</p>

    <p>Y en prueba de conformidad, firman por duplicado, a un solo efecto, en Barcelona, a los $dia días del mes de $mes de $año.</p>
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
$dompdf->setPaper('A4', 'portrait');
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
    $mail->Body    = "Necesitamos que Imprimas este contrato, Lo Firmes y lo escanes para enviarnos-lo para que demos el vistobueno en para el contrato";
    $mail->addAttachment($tempFile, "Contrato_{$nombre_animal}.pdf");
    $mail->send();
    unlink($tempFile);
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
}