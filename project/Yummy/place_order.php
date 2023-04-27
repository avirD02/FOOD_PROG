<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>thank to stay with us</title>
<link type="text/css" rel="stylesheet" href="../addtocartstyle.css"/>
</head>

<body>
<?php
session_start();
$cid=$_SESSION["nxt"];
echo "<h1 class='a2'> YOUR ORDER IS ARRIVED SOON </h1>";

echo "<div class='a1'>";
echo "<form method='post' action='place_order.php'><button type='submit' class='e2' name='download' id='download'>download your bill</button> </form>";

echo "<button type='submit' class='e2' name='exit' id='exit'>LOG OUT</button>";
echo "</div>";

$con4=mysqli_connect("localhost","root","","delivery") or die("Error in connection");
//$dp=mysqli_query($con4,"select mobile_number from deliveryboy");
if(isset($_REQUEST["download"]))
{
  
 include_once("fpdf/fpdf.php");
 //Create a new PDF file
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetTitle("ORDER info");


    //$pdf->Image('../pdfw/img/csilogo.jpg',10,6,30);
    // Arial bold 15
    $pdf->SetFont('Arial','B',30);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(40,10,'For the love of food',10,0,'C');
    $pdf->Ln(10);
	$pdf->SetX(80);
	
	
	 $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(10);
    // Title
	$pdf->Cell(30,10,' 5,Lala Lajpat Rai Sarani(Elgin Road),4th Floor, kolkata,West Bengal 700020 ',0,0,'C');  
    $pdf->Ln(80);
	
	

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
$pdf->SetX(10);
$pdf->Cell(45,6,'customer phone no.',1,0,'L',10);
$pdf->SetX(55);
$pdf->Cell(30,6,'order id',1,0,'L',1);
$pdf->SetX(85);
$pdf->Cell(80,6,'items name',1,0,'L',1);
$pdf->SetX(160);
$pdf->Cell(30,6,'items price',1,0,'R',1);
$pdf->Ln();


//Now show the 3 columns
$pdf->SetFont('Arial','',12);

while($rs=mysqli_fetch_assoc($dp))
{

$Y_Table_Position+=10;
$pdf->SetY($Y_Table_Position);
$pdf->SetX(10);
$pdf->MultiCell(45,10,$rs['customer_phone'],1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(55);
$pdf->MultiCell(30,10,$rs['order_id'],1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(85);
$pdf->MultiCell(75,10,$rs['product_name'],1,'R');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(30,10,$rs['product_price'],1,'R');
}
ob_clean();
$pdf->Output();
}



if(isset($_REQUEST["exit"]))
{
session_destroy();
}

?>
</body>
</html>