<?php

require 'dbcon.php';
$sno=$_REQUEST['id'];
$product_id=$_REQUEST['product_id'];




$soa ="DELETE FROM `product_images` WHERE  id='$_REQUEST[id]'";
	$s0lr = mysqli_query($con,$soa);   

    
        if($s0lr == TRUE)
        {   
			 header("Location: add-image.php?id=$product_id");

		}
		else
		{
		$_SESSION['error']="Exchange Failed Please Try Again Later";
			echo '<script type="text/javascript">window.location.href="../viewco.php";</script>';
		}
		

?>