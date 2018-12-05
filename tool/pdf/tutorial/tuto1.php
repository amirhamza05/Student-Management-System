<?php
require('../fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'<h1>Hello World!<h1>');
$pdf->Output();
?>
