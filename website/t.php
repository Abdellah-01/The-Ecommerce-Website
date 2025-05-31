<?php
include '../admin/dbcon.php';

// Correct SQL query to get distinct collection names
$sql = "SELECT DISTINCT collection_name FROM feature_products";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { 
        echo htmlspecialchars($row['collection_name']) . "<br>";
    }
} else {
    echo "No collections found";
}

// Close connection (optional, as PHP will close it automatically at script end)
mysqli_close($con);
?>