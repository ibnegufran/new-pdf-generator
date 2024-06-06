<?php
require('fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->SetMargins(15,20,10);

$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(130,10,'Sales Person',0,0);

$pdf->SetFont('Arial','',38);
$pdf->Cell(50,10,'Estimate',0,1);

$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(96,96,96);

$pdf->Cell(70,6,'Business Name',0,1);
$pdf->Cell(70,6,'Nizampur',0,1);
$pdf->Cell(70,6,'Bhiwandi Maharashtra 421302',0,1);
$pdf->Cell(70,6,'India',0,1);

$pdf->Cell(70,15,'',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(120,6,'Bill To',0,0);
$pdf->Cell(40,6,'Estimate Number',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'EST-111',0,1);

$pdf->Cell(70,5,'',0,1);

$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(96,96,96);

$pdf->Cell(120,6,'Customer Name',0,0);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,6,'Estimate Date',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'8 May 2024',0,1);

$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(96,96,96);

$pdf->Cell(120,6,'Nizampur',0,1);
$pdf->Cell(120,6,'Bhiwandi Maharashtra 421302',0,1);


$pdf->SetFont('Arial','',11);

$pdf->Cell(120,6,'India',0,0);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,5,'Expiry Date',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,5,'8 May 2024',0,1);

$pdf->Cell(120,15,'',0,1);

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(96,96,96);

$pdf->Cell(100,10,'Item Name ',0,0,'L',true);
$pdf->Cell(30,10,'Quantity',0,0,'C',true);
$pdf->Cell(30,10,'Rate',0,0,'C',true);
$pdf->Cell(30,10,'Amout',0,1,'C',true);

$pdf->SetFont('Arial','',12);

$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,255,255);
$pdf-> SetDrawColor(160,160,160);

$pdf->Cell(100,10,'Item 1 ','B',0,'L');
$pdf->Cell(30,10,'1','B',0,'C');
$pdf->Cell(30,10,'120','B',0,'C');
$pdf->Cell(30,10,'120.00','B',1,'C');


$pdf->Cell(100,10,'Item 2 ','B',0,'L');
$pdf->Cell(30,10,'1','B',0,'C');
$pdf->Cell(30,10,'240','B',0,'C');
$pdf->Cell(30,10,'240.00','B',1,'C');

$pdf->SetFont('Arial','',12);

$pdf->Cell(135,10,'',0);
$pdf->Cell(30,10,'Subtotal',0);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(17.5,10,'360.00',0,1,'R');

$pdf->Cell(135,10,'',0);
$pdf->Cell(30,10,'',0);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(17,10,'0.00',0,1,'R');

$pdf->SetFont('Arial','',12);

$pdf->Cell(135,10,'',0);
$pdf->Cell(30,10,'Total',0,0,'C');
$pdf->SetFont('Arial','B',12);

$pdf->Cell(17,10,'360.00',0,1,'R');


$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(128,128,128);
$pdf->Ln(15);

$pdf->Cell(135,7,'Notes',0,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',12);

$pdf->Cell(135,7,'Feel free to contact us to get more details.',0,1);

$pdf->Ln(20);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(128,128,128);

$pdf->Cell(135,7,'Terms & Conditions',0,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',12);

$pdf->Cell(135,7,'This estimate is valid only if accepted on or before the expiry date.',0,1);



$pdf->Output('mypdf.pdf','I');









?>



















