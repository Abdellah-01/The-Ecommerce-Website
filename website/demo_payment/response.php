<!DOCTYPE html>
<html>
<head>
	<title>Cashfree - PG Response Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">Order Confirmation</h1>	

	<?php  
	require'../../admin/dbcon.php';
		 $secretkey = "TEST3f21ad35e5b1e562f436420bf3af83f73c4272d3";
		 $orderId = $_POST["orderId"];
		 $orderAmount = $_POST["orderAmount"];
		 $referenceId = $_POST["referenceId"];
		 $txStatus = $_POST["txStatus"];
		 $paymentMode = $_POST["paymentMode"];
		 $txMsg = $_POST["txMsg"];

		 $txTime = $_POST["txTime"];
		 $signature = $_POST["signature"];
		 $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
		 $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
		 $computedSignature = base64_encode($hash_hmac);

		 $final_sql ="UPDATE `payment` SET `transaction_status`='$txStatus',`payment_mode`='$paymentMode',`message`='$txMsg',`reference_id`='$referenceId',`transaction_time`='$txTime' WHERE order_id ='$orderId'";
		$log_qr = mysqli_query($con,$final_sql); 


$sql=mysqli_query($con, "select * from orders  WHERE order_id ='$orderId'  " );
while($row=mysqli_fetch_array($sql))
{ 

            // echo"$row[customer_email]";  

// $to =$row['customer_email'];
// $from="order@vijayashandicrafts.com";


// $subject = "Thanks for ordering in vijaya's handicrafts Angadi";
          
//  $message = "Thanks for ordering your order Id :$orderId";         
//          $header = "From:$from \r\n";
//          $header .= "Cc:@gmail.com  \r\n";
//          $header .= "MIME-Version: 1.0\r\n";
//          $header .= "Content-type: text/html\r\n";
         
//          $retval = mail ($to,$subject,$message,$header);
         
//          if( $retval == true ) {
//            // echo "Message sent successfully...";
 
       

//          }else {
//           // echo "Message could not be sent...";
//          }
//          $to ="sahubarsadhik051@gmail.com";
// $from="order@vijayashandicrafts.com";


// $subject = "Hello Admin You have New order";
          
//  $message = "Hello Admin You have New order and  order Id :$orderId";         
//          $header = "From:$from \r\n";
//          $header .= "Cc:@gmail.com  \r\n";
//          $header .= "MIME-Version: 1.0\r\n";
//          $header .= "Content-type: text/html\r\n";
         
//          $retval = mail ($to,$subject,$message,$header);
         
//          if( $retval == true ) {
//           //  echo "Message sent successfully...";
 
       

//          }else {
//           // echo "Message could not be sent...";
//          }
 	
	 
if ($txStatus =='SUCCESS') {
	echo "SUCCESS";

 $finasql ="UPDATE `orders` SET `order_status`='$txStatus',`status`='Order Confirmed' WHERE order_id ='$orderId'";
		$logs_qr = mysqli_query($con,$finasql);

		$delete_cart ="DELETE FROM `temp_cart`  WHERE email ='$row[email]'";
		$delete_cart_qr = mysqli_query($con,$delete_cart);

?>
<script>
        location.replace("../payment-success.php");
      </script>
	  <?php

// echo "$finasql";
} else {
	echo "FAILED";
 $finasql ="UPDATE `orders` SET `status`='$txStatus' WHERE order_id ='$orderId'";
		$logs_qr = mysqli_query($con,$finasql); 
		?>
<script>
        location.replace("../payment-failure.php");
      </script>
	  <?php

}
}


		 if ($signature == $computedSignature) {
	 ?>
	<div class="container"> 
	<div class="panel panel-success">
	  <div class="panel-heading">Signature Verification Successful</div>
	  <div class="panel-body">
	  	<!-- <div class="container"> -->
	 		<table class="table table-hover">
			    <tbody>
			      <tr>
			        <td>Order ID</td>
			        <td><?php echo $orderId; ?></td>
			      </tr>
			      <tr>
			        <td>Order Amount</td>
			        <td><?php echo $orderAmount; ?></td>
			      </tr>
			      <tr>
			        <td>Reference ID</td>
			        <td><?php echo $referenceId; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Status</td>
			        <td><?php echo $txStatus; ?></td>
			      </tr>
			      <tr>
			        <td>Payment Mode </td>
			        <td><?php echo $paymentMode; ?></td>
			      </tr>
			      <tr>
			        <td>Message</td>
			        <td><?php echo $txMsg; ?></td>
			      </tr>

<!-- 			    
<script>
        location.replace("../orders.php");
      </script> -->

	
			     
			      <tr>
			        <td>Transaction Time</td>
			        <td><?php echo $txTime; ?></td>
			      </tr>
			    </tbody>
			</table>
		<!-- </div> -->

	   </div>
	</div><a href="../index.php">Back to home page</a>
	</div>
	 <?php   
	  	} else {
	 
	 ?>
	<div class="container"> 
	<div class="panel panel-danger">
	  <div class="panel-heading">Signature Verification failed</div>
	  <div class="panel-body">
	  	<!-- <div class="container"> -->
	 		<table class="table table-hover">
			    <tbody>
			      <tr>
			        <td>Order ID</td>
			        <td><?php echo $orderId; ?></td>
			      </tr>
			      <tr>
			        <td>Order Amount</td>
			        <td><?php echo $orderAmount; ?></td>
			      </tr>
			      <tr>
			        <td>Reference ID</td>
			        <td><?php echo $referenceId; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Status</td>
			        <td><?php echo $txStatus; ?></td>
			      </tr>
			      <tr>
			        <td>Payment Mode </td>
			        <td><?php echo $paymentMode; ?></td>
			      </tr>
				  <tr>
			        <td>Email</td>
			        <td><?php echo $customerEmail; ?></td>
			      </tr>
				  <tr>
			        <td>Email</td>
			        <td><?php echo $data['customerEmail']; ?></td>
			      </tr>
			      <tr>
			        <td>Message</td>
			        <td><?php echo $txMsg; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Time</td>
			        <td><?php echo $txTime; ?></td>
			      </tr>
			    </tbody>
			</table>
		<!-- </div> --><a href="../index.php">Back to home page</a>
	  </div>	
	</div>	
	</div>
	
	<?php	



	 	}
	 ?>

</body>
</html>



