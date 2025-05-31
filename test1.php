<?php
require'admin/dbcon.php';

$ip_address = "192.168.1.100";

// Step 1: Validate IP address in web_login
$query1 = "SELECT `sno`, `ip_address`, `status` FROM `web_login` WHERE `ip_address` = ?";
$stmt1 = $con->prepare($query1);
$stmt1->bind_param("s", $ip_address);
$stmt1->execute();
$result1 = $stmt1->get_result();

if ($result1->num_rows > 0) {
    // Step 2: Get preference_settings
    $query2 = "SELECT `sno`, `heading`, `sub_heading`, `password`, `status` FROM `preference_settings`";
    $result2 = $con->query($query2);

    // Step 3: Check if status is Active in web_login
    $query3 = "SELECT `sno`, `ip_address`, `status` FROM `web_login` WHERE `ip_address` = ? AND `status` = 'Active'";
    $stmt3 = $con->prepare($query3);
    $stmt3->bind_param("s", $ip_address);
    $stmt3->execute();
    $result3 = $stmt3->get_result();

    if ($result3->num_rows > 0) {
        echo "Login";
    } else {
        echo "Failed";
   }
} else {
    echo "Failed";
    // ?>
 <!-- <script>
        location.replace("website/index.php");
      </script> -->
    <?php
}
?>

