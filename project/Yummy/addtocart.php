<html>
<title>add to cart</title>
<head></head>
<body>


<?php

include_once("../Connections/con2.php");
if($_REQUEST["b1"])
{   $price=0;
    $envp=array();
   if(!empty($_REQUEST["c1"]))
	{ 
	  $rs=mysqli_query($con2,"select price from pdtl where pid=".$_REQUEST["c1"]);
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$k['price'];
	    $envp[0]=$k['price'];
	    
	  }
	}
	 
	if(!empty($_REQUEST["c2"]))
	{
	 $rs=mysqli_query($con2,"select price from pdtl where pid=".$_REQUEST["c2"]);
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$k['price'];
	    $envp[1]=$k['price'];
		
	  }
	 
	}
	 
	 if(!empty($_REQUEST["c3"]))
	 {
	 $rs=mysqli_query($con2,"select price from pdtl where pid=".$_REQUEST["c3"]);
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$k['price'];
	    $envp[2]=$k['price'];
		
	  }
	 
	}
	 
	 
	 if(!empty($_REQUEST["c4"]))
	 {
	 $rs=mysqli_query($con2,"select price from pdtl where pid=".$_REQUEST["c4"]);
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$k['price'];
	    $envp[3]=$k['price'];
		
	  }
	 
	}
	 
	 if(!empty($_REQUEST["c5"]))
	 {
	 $rs=mysqli_query($con2,"select price from pdtl where pid=".$_REQUEST["c5"]);
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$k['price'];
	    $envp[4]=$k['price'];
		
	  }
	 
	}
	 
	 if(!empty($_REQUEST["c6"]))
	 {
	 $rs=mysqli_query($con2,"select price from pdtl where pid=".$_REQUEST["c6"]);
	  if($k=mysqli_fetch_assoc($rs))
	  { $price+=$k['price'];
	    $envp[5]=$k['price'];
		
	  }
	 
	}
	 
	
	 
	foreach($envp as $v) 
	{  echo " Individual Price " .$v;
	}
	echo " Total Price " .$price;
	
	 
	 
//while($k1=mysqli_fetch_assoc($rs))
{
	}

}


?>
<body>
</body>
</html>