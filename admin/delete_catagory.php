<?php

require 'dbcon.php';

$soa ="DELETE FROM `catagory` WHERE  sno='$_REQUEST[id]'";
	$s0lr = mysqli_query($con,$soa);   

    
        if($s0lr == TRUE)
        {   
			$_SESSION['success']="Withdrawl request successfully You will credited with in 24 hours";
			echo '<script type="text/javascript">
			window.location.href="category-list.php";</script>"';
		}
		else
		{
		$_SESSION['error']="Exchange Failed Please Try Again Later";
			echo '<script type="text/javascript">window.location.href="../viewco.php";</script>';
		}
		


?>