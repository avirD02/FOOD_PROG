<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome to join us</title>
<link type="text/css" rel="stylesheet" href="deliveryboystyle.css" />
</head>

<body>
<div class="contaner1">
 <center><h1> REGISTER YOUR SELF </h1></center>


<form method="post" action="deliveryboyentry.php" name="f1" id="f1">
<table cellspacing="10" cellpadding="10">
<tr> <td><label><b>Enter Your Mobile Number&nbsp;</b></label></td><td> <input type="text" name="dmobile" id="t1" placeholder="10 digit" required="required" maxlength="10" /> </td>
<td><label><b>Enter Your Email Id &nbsp;</b></label></td><td><input type="email" name="t2" id="t2" placeholder="abc@gmail.com" /></td></tr>
<tr><td><label><b>Enter Your First Name &nbsp;</b></label></td><td><input type="text" name="t3" id="t3" placeholder="Enter here" /> </td> 
<td><label><b>Enter Your Last Name &nbsp;</b></label></td><td><input type="text" name="t4" id="t4" placeholder="Enter here" /></td> </tr>

<tr><td><label><b>Your Current location &nbsp;</b></label></td><td><input type="text" name="t5" id="t5" placeholder="Enter here" /></td>

<td><label><b>Enter Your Password &nbsp;</b></label></td><td><input type="password" name="t6" id="t6" placeholder="10 digit max" /></td></tr>

<tr> <td > </td>  <td><input type="submit"  class="bt1" name="b2" id="b2" value="SUBMIT">  </td>  </tr>
</table> 	
</form>
</div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","delivery") or die("Error in connection");
if(isset($_REQUEST["b2"]) and strlen($_REQUEST["dmobile"])>=10 )
{
$mbn1=$_REQUEST["dmobile"];
$eid=$_REQUEST["t2"];
$fnm=$_REQUEST["t3"];
$lnm=$_REQUEST["t4"];
$loca=$_REQUEST["t5"];
$psw=md5($_REQUEST["t6"]);

$rs=mysqli_query($con,"insert into deliveryboy values('".$mbn1."','".$eid."','".$fnm."','".$lnm."','".$loca."','".$psw."')");
if($rs==true)
	{
	header("location:deliveryboy2.php");
		
	}
	else
	{
		echo "Not Inserted...";
		
	
	}
}

?>