<?php

require 'dbcon.php';
$sno=$_REQUEST['id'];





$soa ="DELETE FROM `marquee` WHERE  sno='$_REQUEST[id]'";
	$s0lr = mysqli_query($con,$soa);   

    
        if($s0lr == TRUE)
        {   
			 header("Location: th-marque.php");

		}
		else
		{
		$_SESSION['error']="Exchange Failed Please Try Again Later";
			echo '<script type="text/javascript">window.location.href="../viewco.php";</script>';
		}
		


?>