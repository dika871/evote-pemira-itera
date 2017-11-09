<?php
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->write(12,'Hello World! Hello World! Hello World! Hello World!');
$pdf->Output(); ?>
