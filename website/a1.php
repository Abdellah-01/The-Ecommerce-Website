state<?php
 $ipaddress = getenv("REMOTE_ADDR") ;

?>
<form action="checkout_save_product.php" method="post">
<?php
require '../admin/dbcon.php';
$count_query = "SELECT COUNT(*) as total_rows FROM temp_cart where email='$ipaddress'";
$result = mysqli_query($con, $count_query);
$words = mysqli_fetch_assoc($result);


$i =0;


while($i < $words['total_rows']){


$sqls=mysqli_query($con, "select * from temp_cart WHERE email='$ipaddress' " );
while($rsow=mysqli_fetch_array($sqls))


{ 

?>
<input type="hidden" name="product_id<?php echo "$i"; ?>" value="<?php echo "$rsow[product_id]"; ?>">
<input type="hidden" name="product_title<?php echo "$i"; ?>" value="<?php echo "$rsow[product_title]"; ?>">
<input type="hidden" name="varient<?php echo "$i"; ?>" value="<?php echo "$rsow[varient]"; ?>">
<input type="hidden" name="qty<?php echo "$i"; ?>" value="<?php echo "$rsow[qty]"; ?>">

<input type="hidden" name="price<?php echo "$i"; ?>" value="<?php echo "$rsow[price]"; ?>">
<input type="hidden" name="catagory_name<?php echo "$i"; ?>" value="<?php echo "$rsow[catagory_name]"; ?>">
<input type="hidden" name="sub_catagory_name<?php echo "$i"; ?>" value="<?php echo "$rsow[sub_catagory_name]"; ?>">
<input type="hidden" name="email" value="<?php echo "$ipaddress"; ?>">


 <?php
// Step 2: Retrieve the last serial number from the database
$sql = "SELECT MAX(sno) AS last_serial FROM orders";
$result = $con->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$lastSerial = $row["last_serial"];
} else {
$lastSerial = 0; // If no records exist yet
}

// Step 3: Increment the last serial number to generate a new one
$newSerial = $lastSerial + 1;

// Step 4: Use the new serial number as the product ID for the new product
$newProductId = "ORDER" . str_pad($newSerial, 6, "0", STR_PAD_LEFT);?>
<input type="hidden" name="order_id" value="<?php echo "$newProductId"; ?>">
<?php 
$i +=1;}
?>

<br>
<?php  }?>
<button class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-cente" name="submit">CheckOut</button></form>
 