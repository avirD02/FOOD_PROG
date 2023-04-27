<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
/*session_start();
$cid=$_SESSION["nxt"];
$con4=mysqli_connect("localhost","root","","delivery") or die("Error in connection");
$dp=mysqli_query($con4,"select mobile_number from deliveryboy");
if(isset($_REQUEST["download"]))
{
  
 include_once("fpdf/fpdf.php");
 //Create a new PDF file
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("ORDER info");


    //$pdf->Image('../pdfw/img/csilogo.jpg',10,6,30);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(30,10,'For the love of food',0,0,'C');
    $pdf->Ln(10);
	$pdf->SetX(80);
	
	

//Fields Name position
$Y_Fields_Name_position = 50;
//Table position, under Fields Name
$Y_Table_Position = 50;

$dp=mysqli_query($con4,"select * from bill where customer_phone=".$cid);

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(132,202,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(30,6,'customer phone numbe',1,0,'L',1);
$pdf->SetX(45);
$pdf->Cell(60,6,'order id',1,0,'L',1);
$pdf->SetX(125);
$pdf->Cell(70,6,'items name',1,0,'L',1);
$pdf->SetX(155);
$pdf->Cell(35,6,'items price',1,0,'R',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',12);

while($rs=mysqli_fetch_assoc($dp))
{

$Y_Table_Position+=6;
$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(30,6,$rs['customer_phone'],1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(45);
$pdf->MultiCell(60,6,$rs['order_id'],1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(30,6,$rs['product_name'],1,'R');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(155);
$pdf->MultiCell(35,6,$rs['product_price'],1,'R');
}
ob_clean();
$pdf->Output();
}


?>*/

</body>
</html>