<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Process</title>
<link type="text/css" rel="stylesheet" href="../addtocartstyle.css"/>
</head>


<?php 
session_start();
$cid=$_SESSION["nxt"];


$con4=mysqli_connect("localhost","root","","delivery") or die("Error in connection");
if($_REQUEST["b1"])
{   $price=0;
    $pname="";
    $envp=array();
	$name=array();
	$qunty=array();
	
   if(!empty($_REQUEST["ch1"]))
	{ 
	  $qty=$_REQUEST["quantity1"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["ch1"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[0]=$k['price'];
		 $pname.=$k['pname'];
		 $name[0]=$k['pname'];
		 $qunty[0]=$qty;
	  }
	}

	  if(!empty($_REQUEST["sp2"]))
	{ 
	  $qty=$_REQUEST["quantity2"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["sp2"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[1]=$k['price'];
		$pname.=$k['pname'];
		$name[1]=$k['pname'];
		$qunty[1]=$qty;
	  }
	}

		if(!empty($_REQUEST["cdp3"]))
	{ 
	  $qty=$_REQUEST["quantity3"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["cdp3"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[2]=$k['price'];
		$pname.=$k['pname'];
		$name[2]=$k['pname'];
		$qunty[2]=$qty;
	  }
	}
	    
	 if(!empty($_REQUEST["ccb4"]))
	{ 
	  $qty=$_REQUEST["quantity4"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["ccb4"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[3]=$k['price'];
		$pname.=$k['pname'];
		 $name[3]=$k['pname'];
		 $qunty[3]=$qty;
	  }
	}
 
	 if(!empty($_REQUEST["cs5"]))
	{ 
	  $qty=$_REQUEST["quantity5"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["cs5"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[4]=$k['price'];
		$pname.=$k['pname'];
		$name[4]=$k['pname'];
		$qunty[4]=$qty;
	  }
	}	 

	 if(!empty($_REQUEST["fnc6"]))
	{ 
	  $qty=$_REQUEST["quantity6"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["fnc6"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[5]=$k['price'];
		$pname.=$k['pname'];
		$name[5]=$k['pname'];
		$qunty[5]=$qty;
	  }
	}
	
	 if(!empty($_REQUEST["cb7"]))
	{ 
	  $qty=$_REQUEST["quantity7"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["cb7"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[6]=$k['price'];
		$pname.=$k['pname'];
		$name[6]=$k['pname'];
		$qunty[6]=$qty;
	  }
	}

	 if(!empty($_REQUEST["hcc8"]))
	{ 
	  $qty=$_REQUEST["quantity8"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["hcc8"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[7]=$k['price'];
		$pname.=$k['pname'];
		$name[7]=$k['pname'];
		$qunty[7]=$qty;
	  }
	}
	
	 if(!empty($_REQUEST["cchb9"]))
	{ 
	  $qty=$_REQUEST["quantity9"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["cchb9"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[8]=$k['price'];
		$pname.=$k['pname'];
		$name[8]=$k['pname'];
		$qunty[8]=$qty;
	  }
	}
	
	 if(!empty($_REQUEST["os10"]))
	{ 
	  $qty=$_REQUEST["quantity10"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["os10"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[9]=$k['price'];
		$pname.=$k['pname'];
		$name[9]=$k['pname'];
		$qunty[9]=$qty;
	  }
	}
	
	 if(!empty($_REQUEST["pef11"]))
	{ 
	  $qty=$_REQUEST["quantity11"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["pef11"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[10]=$k['price'];
		$pname.=$k['pname'];
		 $name[10]=$k['pname'];
		 $qunty[10]=$qty;
	  }
	}

	 if(!empty($_REQUEST["scp12"]))
	{ 
	  $qty=$_REQUEST["quantity12"];
	 
	  $rs=mysqli_query($con4,"select price, pname from itemid where pid='".$_REQUEST["scp12"]."'");
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$qty*$k['price'];
	    $envp[11]=$k['price'];
		 $pname.=$k['pname'];
		 $name[11]=$k['pname'];
		 $qunty[11]=$qty;
		
	
	  }
	}
	
	
	//$dc=100;
	echo "<h1 class='a2'>ORDER info :</h1>";
	echo "<div class='a1'>";
    echo "<table cellspacing='10' cellpadding='10'>";
	$o=(rand(10,500000));
	echo "<tr><td> Your Order ID =</td><td>".$o."</td></tr>";
	
	$i=0;
	$k=array();
	foreach($envp as $v) 
	{
		$k[$i++]=$v;
	}
	$k1=array();
	$i=0;
	foreach($qunty as $v) 
	{
		$k1[$i++]=$v;
	}
	
	$i=0;
	$nm=null;
	 foreach($name as $a)
	{ if($nm!=null)
	    $nm.=",".$a;
	  else
	    $nm.=$a;
		echo "<tr><td> product name &nbsp;:&nbsp;</td> <td> ".$a."</td> <td>Quantity &nbsp;:</td> <td>".$k1[$i]."</td><td>Product Price &nbsp;:&nbsp;</td> <td>".$k[$i++]."</td></tr>";
		

	}
	

	/*foreach($envp as $v) 
	{  echo "<tr><td>Product Price&nbsp;:</td> <td>" .$v."</td></th>";
	
	}*/
	
/*	echo "<tr><td> Delivery Charge &nbsp;:&nbsp;</td><td>".$dc."</td></tr>";
	$withdc=$price+$dc;*/
	echo " <tr><td>&nbsp; &nbsp;</td> <td>Total Price &nbsp;: &nbsp;" .$price."</td></tr>";
	echo "</table>";
	echo "&nbsp;Select your payment method:&nbsp;<select name='payment' class='s1'> <option value='1'>Cash On Delivery</option> </select> <br>";
	echo "<br>";
	
	echo"</div>";
	
	
	 $tm=date("H:i:s");
	 echo "<script> alert(".$tm.");</script>";
	 $t3=0;

	$dp=mysqli_query($con4,"select mobile_number from deliveryboy");
	if($a1=mysqli_fetch_assoc($dp))
	{
		$dm=$a1['mobile_number'];
		
	$bil=mysqli_query($con4,"insert into bill values(".$cid.",'".$o."','".$nm."',".$price.",".$dm.",'".$tm."',".$t3.")");

	}
	
	echo "<a href='place_order.php' class='a1'> <button type='submit' class='e2' name='e2' id='e2'>Place your order</button> </a> <br>";
	

	
	
	
	
	
	
	
}

?>

<!--/*if(isset($_REQUEST["download"]))
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
*/ -->

<body>
</body>
</html>