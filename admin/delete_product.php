<?php

require 'dbcon.php';

$soa ="DELETE FROM `product` WHERE  product_id='$_REQUEST[id]'";
	$s0lr = mysqli_query($con,$soa);   


	$soa1 ="DELETE FROM `product_images` WHERE  product_id='$_REQUEST[id]'";
	$s0lr1 = mysqli_query($con,$soa1);   

	$soa2 ="DELETE FROM `variant` WHERE  product_id='$_REQUEST[id]'";
	$s0lr2 = mysqli_query($con,$soa2);   

    
        if($s0lr == TRUE)
        {   
			$_SESSION['success']="Withdrawl request successfully You will credited with in 24 hours";
			echo '<script type="text/javascript">
			window.location.href="product-list.php";</script>"';
		}
		else
		{
		$_SESSION['error']="Exchange Failed Please Try Again Later";
			echo '<script type="text/javascript">window.location.href="../viewco.php";</script>';
		}
		


?>