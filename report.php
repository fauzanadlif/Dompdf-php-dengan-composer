<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml('Menggunakan Library Dompdf Untuk Membuat Report PDF dengan DOMPDf');
$dompdf->setPaper('A4','Landscape');
$dompdf->render();
$dompdf->stream('hasil_report.pdf');
?>