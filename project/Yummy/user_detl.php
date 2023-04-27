<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php



$con=mysqli_connect("localhost","root","","delivery") or die("Error in connection");

if(isset($_REQUEST["b2"]))//and !empty($_REQUEST["t1"]) and !empty($_REQUEST["t2"])and !empty($_REQUEST["t3"])and !empty($_REQUEST["t4"])and !empty($_REQUEST["t5"])and !empty($_REQUEST["t6"]))
{
$mbn1=$_REQUEST["custp"];
echo "<script> alert(".$mbn1.");</script>";
$eid=$_REQUEST["t2"];
$fnm=$_REQUEST["t3"];
$lnm=$_REQUEST["t4"];
$loca=$_REQUEST["t5"];
$psw=md5($_REQUEST["t6"]);
echo "insert into customer1 values(".$mbn1.",'".$eid."','".$fnm."','".$lnm."','".$loca."','".$psw."')";
$rs=mysqli_query($con,"insert into customer1 values(".$mbn1.",'".$eid."','".$fnm."','".$lnm."','".$loca."','".$psw."')");
if($rs==true)
	{
		
		session_start();
		$_SESSION["nxt"]=$mbn;
		header("location:login.php");
		
	}
	else
	{
		echo "Not Inserted...";
		
	
	}
}



?>

</body>
</html>