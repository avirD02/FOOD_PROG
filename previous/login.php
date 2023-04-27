<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signup</title>
<link type="text/css" rel="stylesheet" href="loginstyle.css" />
<script type="text/javascript" >
 
</script>
</head>

<body>
<div class="contaner">
<h1> Sign  In </h1>
	
    		<form method="post" action="" >
       <div class="box"> 	
            <input type="text" name="t1" id="t1" required="required" placeholder="Enter Your Phone Number" />
          
	</div>
	<div class="box">
    	
        	<input type="password" name="t2" id="t2" required="required" placeholder="Enter Your Password" />
           
	</div>

			<button type="submit" class="b1" name="b1">Sign In</button>
   			
    		</form>
</div>

<?php
$con=mysqli_connect("localhost","root","","delivery") or die("Error in connection");
$statement=mysqli_query($con,"select * from customer");
while($rs=mysqli_fetch_assoc($statement))
{
if(isset($_REQUEST["b1"]))
{ echo "<script> alert('Hello'); </script>";
  $mbn=$_REQUEST["t1"];
  $psw=md5($_REQUEST["t2"]);	
  $rs=mysqli_query($con2,"select * from regno where phone_number='".$mbn."' and password='".$psw."'");
  if($rs==true)
  {
 		
		if(isset($_REQUEST["b1"]))
		{
		session_start();
		$_SESSION["nxt"]=$_REQUEST["t1"];
		header("location:inserted.php");
		}

	  }
	  
	  
	else{
		
		echo "not inserted";
		
		}

	}
}
?>
</body>
</html>