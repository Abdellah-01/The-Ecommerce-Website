<?php 
include_once '../admin/dbcon.php';

session_start();


if (isset($_POST["submit"]))
 {



    $customer_fname =$_POST['customer_fname'];
    $customer_lname =$_POST['customer_lname'];
    $customer_mobile =$_POST['customer_mobile'];
    $customer_email =$_POST['customer_email'];
    $billing_address =$_POST['billing_address'];
    $billing_address2 =$_POST['billing_address2'];
    $city =$_POST['city'];
    $zipcode =$_POST['zipcode'];
    $country =$_POST['country'];
    $email =$_POST['email'];
    $order_id =$_POST['order_id'];
    $status="Yet To Place Order";
     $total_order=0;
                     $res=mysqli_query($con,"select * from temp_cart WHERE email='$email'");
                            $total_order=mysqli_num_rows($res);

$i = 0;

while ($i < $total_order) {

 $a="product_id$i";
$a="$_POST[$a]";

 $b="product_title$i";
$b=mysqli_real_escape_string($con, $_REQUEST[$b]);

 $c="price$i";
$c="$_POST[$c]";

 $d="catagory_name$i";
$d="$_POST[$d]";

 $e="sub_catagory_name$i";
$e="$_POST[$e]";

 $f="qty$i";
$f="$_POST[$f]";

 $g="varient$i";
$g="$_POST[$g]";

$h="total_price$i";
$h="$_POST[$h]";

$sql="INSERT INTO `orders`(`total_price`,`varient`,`customer_fname`, `customer_lname`, `customer_mobile`, `customer_email`, `billing_address`, `billing_address2`, `city`, `zipcode`, `country`, `email`, `order_id`, `product_id`, `product_title`, `qty`, `price`, `catagory_name`, `sub_catagory_name`, `status`, `order_status`, `inserted_date`) VALUES
('$h','$g','$customer_fname','$customer_lname','$customer_mobile','$customer_email','$billing_address','$billing_address2','$city','$zipcode','$country','$email','$order_id','$a','$b','$f','$c','$d','$e','$status','',NOW())";
echo "<br>";
echo "<br>";
echo "<br>";
      $log_qr = mysqli_query($con, $sql);


$i+=1;


}
if($log_qr == TRUE)
        {   ?>
            <script>
        location.replace("payment-confirmation.php?id=<?php echo "$order_id";  ?>");
      </script>
      <?php
            
        }
        else
        {
        $_SESSION['error']="class information Updated Failed";
            echo '<script type="text/javascript">window.location.href="../view_subject.php";</script>';
        }
}


        
?>

 
