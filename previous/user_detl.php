<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

/*$k=$_REQUEST["t1"];
$k1=$_REQUEST["t2"];
echo $k;*/

$con=mysqli_connect("localhost","root","","delivery") or die("Error in connection");
//$statement=mysqli_query($con,"select * from customer");
//while($rs=mysqli_fetch_assoc($statement))


if(isset($_REQUEST["b2"]))//and !empty($_REQUEST["t1"]) and !empty($_REQUEST["t2"])and !empty($_REQUEST["t3"])and !empty($_REQUEST["t4"])and {!empty($_REQUEST["t5"])and !empty($_REQUEST["t6"]))
{
$mbn=$_REQUEST["t1"];
$eid=$_REQUEST["t2"];
$fnm=$_REQUEST["t3"];
$lnm=$_REQUEST["t4"];
$loca=$_REQUEST["t5"];
$psw=md5($_REQUEST["t6"]);

$rs=mysqli_query($con,"insert into customer values('".$mbn."','".$eid."','".$fnm."','".$lnm."','".$loca."','".$psw."')");
if($rs==true)
	{
		/*echo "Inserted....";*/
		//if(isset($_REQUEST["b2"]))
		//{
		//session_start();
		//$_SESSION["nxt"]=$_REQUEST["t1"];
		header("location:login.php");
		//}
	}
	else
	{
		echo "Not Inserted...";
		
	
	}
}




?>

</body>
</html>