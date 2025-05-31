<?php
 require'admin/dbcon.php';
 $database=mysqli_query($con, "select * from preference_settings WHERE `sno`='1'");
$data=mysqli_fetch_array($database);
$password=$_POST['password'];
$status="Active";
 $ipaddress = getenv("REMOTE_ADDR") ;

echo"server password:";
echo"$data[password]";
echo"<br>";
echo"<br>";
echo"Enter Password:";
echo"$password";

echo"<br>";
echo"<br>";

if ($password==$data['password']) {
//  echo"Login Sucessfully";
$sql = "INSERT INTO `web_login`( `ip_address`, `status`) VALUES ('$ipaddress','$status')";

if (mysqli_query($con, $sql)) {
    echo "Product added successfully!";
 header("Location: website/index.php");
} else {
     header("Location: index.php");

}
} else {
echo"Login Failed";
 header("Location: index.php");
}


?>