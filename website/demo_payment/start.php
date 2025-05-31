

<!DOCTYPE html>
<html>
  <head>
    <title>Cashfree-PG TestForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <br>
    <div class="container fluid">
      <h1 align="center">Pay Your Due</h1>
      <!-- <div class="alert alert-info">
        <strong>Note: </strong> Please insert your <span class="label label-info">Secret_key</span> in request and response files.
      </div> -->
     <!--  <div class="alert alert-info">
        <strong>Note: </strong> Please change <span class="label label-info">$mode</span> to "TEST" in request.php if using Test appId/secretKey credentials. Access test credentials <a href="https://test.gocashfree.com/merchant/pg#api-key">here</a> and production credentials <a href="https://merchant.cashfree.com/merchant/pg#api-key">here</a>.
      </div> -->
      <form id="redirectForm" method="post" action="request.php">
        <div class="form-group">
          <!--label>App ID:</label><br-->
          <input class="form-control" type="hidden" name="appId" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)" value="TEST1005295533ffafdce7b219e296e455925001" >
        </div>
        <div class="form-group">
          <!--label>Order ID:</label--><br>
          <input class="form-control" type="hidden" name="orderId" placeholder="Enter Order ID here (Ex. order00001)" value="<?php echo(rand(0000001,1000000));
 ?>" >
        </div>
        <div class="form-group">
          <label>Due Amount:</label><br>
          <input class="form-control" name="orderAmount" readonly value="100" placeholder="Enter Order Amount here (Ex. 100)"/>
        </div>
        <div class="form-group">
          <!--label>Order Currency:</label><br-->
          <input class="form-control" type="hidden" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/>
        </div>
        <div class="form-group">
          <label>Order Note:</label><br>
          <input class="form-control" type="test" name="orderNote" value="" placeholder="Enter Order Note here (Ex. Test order)"/>
        </div>    
        <div class="form-group">
          <label>Name:</label><br>
          <input class="form-control" name="customerName" readonly value="sahubar sadhik" placeholder="Enter your name here (Ex. John Doe)"/>
        </div>
        <div class="form-group">
          <label>Email:</label><br>
          <input class="form-control" name="customerEmail" readonly value="sahubarsadhik051@gmail.com" placeholder="Enter your email address here (Ex. Johndoe@test.com)"/>
        </div>
        <div class="form-group">
          <label>Phone:</label><br>
          <input class="form-control" name="customerPhone" readonly value="8428189193" placeholder="Enter your phone number here (Ex. 9999999999)"/>
        </div>
        <div class="form-group">
          <!--label>Return URL:</label><br-->
          <input class="form-control" type="hidden" name="returnUrl" value="http://localhost/cashfree paymentgateway/response.php" placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)"/>
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

