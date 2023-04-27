<?php include_once("../pdfw/fpdf.php"); ?>
<?php include_once("../datacon/dataconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Hello
<?php
//Create a new PDF file
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("Polling Result");


    $pdf->Image('../pdfw/img/csilogo.jpg',10,6,30);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(30,10,'Computer Society of India, Kolkata Chapter',0,0,'C');
    $pdf->Ln(10);
	$pdf->SetX(80);
	$pdf->Cell(30,10,'Election Result',0,0,'C');  
    $pdf->Ln(80);
	

//Fields Name position
$Y_Fields_Name_position = 50;
//Table position, under Fields Name
$Y_Table_Position = 50;

$dt=new DataCon();
$st=$dt->datashow("select * from result");

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(132,202,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(30,6,'MEMBERID',1,0,'L',1);
$pdf->SetX(45);
$pdf->Cell(80,6,'NAME',1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(30,6,'POSITION',1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(35,6,'CUSTED VOTE',1,0,'R',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);

while($rs=mysqli_fetch_assoc($st))
{

$Y_Table_Position+=6;
$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(30,6,$rs['membership_id'],1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(80,6,$rs['name'],1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(125);
$pdf->MultiCell(30,6,$rs['position'],1,'R');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(155);
$pdf->MultiCell(35,6,$rs['totalvote'],1,'R');
}
ob_clean();
$pdf->Output();

?>

</body>
</html>