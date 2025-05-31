<!DOCTYPE html>
<html>
<head>
  <title>Cashfree - Signature Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body onload="document.frm1.submit()">


<?php 
$mode = "TEST"; //<------------ Change to TEST for test server, PROD for production
  require'../../admin/dbcon.php';
extract($_POST);
  $secretKey = "TEST3f21ad35e5b1e562f436420bf3af83f73c4272d3";
  $postData = array( 
  "appId" => $appId, 
  "orderId" => $orderId, 
  "orderAmount" => $orderAmount, 
  "orderCurrency" => $orderCurrency, 
  "orderNote" => $orderNote, 
  "customerName" => $customerName, 
  "customerPhone" => $customerPhone, 
  "customerEmail" => $customerEmail,
  "returnUrl" => $returnUrl, 
  "notifyUrl" => $notifyUrl,
);
$sql ="INSERT INTO `payment`(`transaction_time`,`transaction_status`,`reference_id`,`message`,`payment_mode`,`name`, `email`, `amount`, `mobile`, `order_id`) VALUES ('','','','','','$customerName','$customerEmail','$orderAmount','$customerPhone','$orderId')";
		$log_qr = mysqli_query($con,$sql); 
ksort($postData);
$signatureData = "";
foreach ($postData as $key => $value){
    $signatureData .= $key.$value;
}
$signature = hash_hmac('sha256', $signatureData, $secretKey,true);
$signature = base64_encode($signature);

if ($mode == "PROD") {
  $url = "https://www.cashfree.com/checkout/post/submit";
} else {
  $url = "https://test.cashfree.com/billpay/checkout/post/submit";
}

?>
  <form action="<?php echo $url; ?>" name="frm1" method="post">
      <p>Please wait.......</p>
      <input type="hidden" name="signature" value='<?php echo $signature; ?>'/>
      <input type="hidden" name="orderNote" value='<?php echo $orderNote; ?>'/>
      <input type="hidden" name="orderCurrency" value='<?php echo $orderCurrency; ?>'/>
      <input type="hidden" name="customerName" value='<?php echo $customerName; ?>'/>
      <input type="hidden" name="customerEmail" value='<?php echo $customerEmail; ?>'/>
      <input type="hidden" name="customerPhone" value='<?php echo $customerPhone; ?>'/>
      <input type="hidden" name="orderAmount" value='<?php echo $orderAmount; ?>'/>
      <input type ="hidden" name="notifyUrl" value='<?php echo $notifyUrl; ?>'/>
      <input type ="hidden" name="returnUrl" value='<?php echo $returnUrl; ?>'/>
      <input type="hidden" name="appId" value='<?php echo $appId; ?>'/>
      <input type="hidden" name="orderId" value='<?php echo $orderId; ?>'/>
  </form>
</body>
</html>
