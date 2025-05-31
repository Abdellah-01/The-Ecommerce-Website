<?php
require '../admin/dbcon.php';

if(isset($_POST['sno']) && isset($_POST['action'])) {
    $sno = $_POST['sno'];
    $action = $_POST['action'];
    
    // Get current quantity and price
    $query = "SELECT qty, price, total_price FROM temp_cart WHERE sno='$sno'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    
    $currentQty = $row['qty'];
    $unitPrice = $row['price'];
    $newQty = $currentQty;
    
    if($action == 'increase') {
        $newQty = $currentQty + 1;
    } elseif($action == 'decrease' && $currentQty > 1) {
        $newQty = $currentQty - 1;
    }
    
    $newTotalPrice = $unitPrice * $newQty;
    
    // Update the database
    $updateQuery = "UPDATE temp_cart SET qty='$newQty', total_price='$newTotalPrice' WHERE sno='$sno'";
    if(mysqli_query($con, $updateQuery)) {
        // Get updated data
        $updated_row = mysqli_query($con, "SELECT * FROM temp_cart WHERE sno='$sno'");
        $updated_data = mysqli_fetch_assoc($updated_row);
        
        echo json_encode([
            'success' => true,
            'new_price' => number_format($updated_data['total_price'], 2),
            'new_qty' => $updated_data['qty']
        ]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>