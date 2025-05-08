<?php
use Dompdf\Dompdf;
use Dompdf\Options;

//Configuracion del DOMPDF
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
//Contenido del PDF
$html = '<h1>Este es el PDF</h1> <p>Generado con dompdf';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
//renderizar de HTML a PDF
$dompdf->render();
$pdfOutput = $dompdf->output();
file_put_contents('temp.pdf', $pdfOutput);
//aqui la guardo en una variable
?>