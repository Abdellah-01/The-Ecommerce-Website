<?php 
include('../admin/dbcon.php');
$sqs=mysqli_query($con, "select * from orders WHERE `order_id`='".$_REQUEST['id']."'");
$data=mysqli_fetch_array($sqs);

include_once '../admin/dbcon.php';
#connection string
 
 #retrieve file title

$customer_fname = $data["customer_fname"];
$customer_lname = $data["customer_lname"];
$customer_mobile = $data["customer_mobile"];
$customer_email = $data["customer_email"];
$billing_address = $data["billing_address"];
$billing_address2 = $data["billing_address2"];
$city = $data["city"];
$zipcode = $data["zipcode"];
$country = $data["country"];
$order_id = $data["order_id"];



$sql = "SELECT SUM(total_price) AS total FROM orders WHERE order_id='$_REQUEST[id]'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$sum = $row['total'];
// echo " ₹$sum";
} else {
// echo "₹0";
}


 
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Vijayas Handicrafts Angadi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <br>
    <div class="container fluid">
      <!-- <h1 align="center">Pay Your Due</h1> -->
      <!-- <div class="alert alert-info">
        <strong>Note: </strong> Please insert your <span class="label label-info">Secret_key</span> in request and response files.
      </div> -->
     <!--  <div class="alert alert-info">
        <strong>Note: </strong> Please change <span class="label label-info">$mode</span> to "TEST" in request.php if using Test appId/secretKey credentials. Access test credentials <a href="https://test.gocashfree.com/merchant/pg#api-key">here</a> and production credentials <a href="https://merchant.cashfree.com/merchant/pg#api-key">here</a>.
      </div> -->
      <form id="redirectForm" method="post" action="demo_payment/request.php">
        <div class="form-group">
          <!--label>App ID:</label><br-->
          <input class="form-control" type="hidden" name="appId" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)" value="TEST1005295533ffafdce7b219e296e455925001" >
        </div>
        <div class="form-group">
          <!--label>Order ID:</label--><br>
          <input class="form-control" type="hidden" name="orderId" placeholder="Enter Order ID here (Ex. order00001)" value="<?php  echo "$order_id"; ?>" >
        </div>
        <div class="form-group">
          <label>Order Amount:</label><br>
          <input class="form-control" name="orderAmount" readonly value="<?php echo "$sum";  ?>" placeholder="Enter Order Amount here (Ex. 100)"/>
        </div>
        <div class="form-group">
          <!--label>Order Currency:</label><br-->
          <input class="form-control" type="hidden" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/>
        </div>
        <div class="form-group">
          <!-- <label>Order Note:</label><br> -->
          <input class="form-control" type="hidden" name="orderNote" value="" placeholder="Enter Order Note here (Ex. Test order)"/>
        </div>    
        <div class="form-group">
          <label>Name:</label><br>
          <input class="form-control" name="customerName" readonly value="<?php echo "$customer_fname $customer_lname";  ?>" placeholder="Enter your name here (Ex. John Doe)"/>
        </div>
        <div class="form-group">
          <label>Email:</label><br>
          <input class="form-control" name="customerEmail" readonly value="<?php echo "$customer_email";  ?>" placeholder="Enter your email address here (Ex. Johndoe@test.com)"/>
        </div>
        <div class="form-group">
          <label>Phone:</label><br>
          <input class="form-control" name="customerPhone" readonly value="<?php echo "$customer_mobile";  ?>" placeholder="Enter your phone number here (Ex. 9999999999)"/>
        </div>
        <div class="form-group">
          <!--label>Return URL:</label><br-->
          <input class="form-control" type="hidden" name="returnUrl" value="http://localhost/abdur/website/demo_payment/response.php" placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)"/>
        </div> 

        <div class="form-group">
          <!--label>Notify URL:</label><br-->
          <input class="form-control" type="hidden" name="notifyUrl" placeholder="Enter the URL to get server notificaitons (Ex. www.example.com)"/>
        </div>
        <button type="submit" class="btn btn-primary btn-block" value="Pay">Pay Now</button>
        <br> 
        <br>
      </form>
    </div>
    <br>    
    <br>    
    <br>    
    <br>    
  </body>
</html>

