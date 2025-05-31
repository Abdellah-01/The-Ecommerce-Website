<?php
// feather_products.php
session_start();
include 'dbcon.php';

// Initialize message
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get form data
        $collection_name = mysqli_real_escape_string($con, $_POST['collection_name'] ?? '');
        $view_link = mysqli_real_escape_string($con, $_POST['view_link'] ?? '');
        $product_ids = $_POST['product_id'] ?? [];

        // Validate inputs
        if (empty($collection_name)) {
            throw new Exception("Collection name is required");
        }

        if (empty($view_link)) {
            throw new Exception("Please select a view link");
        }

        if (empty($product_ids)) {
            throw new Exception("Please select at least one product");
        }

        // Begin transaction
        mysqli_begin_transaction($con);

        // Insert into feature_products table for each selected product
        foreach ($product_ids as $product_id) {
            $product_id = mysqli_real_escape_string($con, $product_id); // Sanitize as string
            
            $insert_query = "INSERT INTO feature_products 
                            (view_link, collection_name, product_id) 
                            VALUES (?, ?, ?)";
            
            $stmt = mysqli_prepare($con, $insert_query);
            mysqli_stmt_bind_param($stmt, "sss", $view_link, $collection_name, $product_id);
            $insert_result = mysqli_stmt_execute($stmt);
            
            if (!$insert_result) {
                throw new Exception("Error inserting product: " . mysqli_error($con));
            }
        }

        // Commit transaction
        mysqli_commit($con);
        
        // Set success message
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Selected products have been saved successfully!'
        ];
        
        // Redirect to prevent form resubmission
        header("Location: th-featured-products.php");
        exit();

    } catch (Exception $e) {
        // Rollback transaction on error
        mysqli_rollback($con);
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => $e->getMessage()
        ];
    }
}

// Display message if exists
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content -->
    <!-- Add SweetAlert for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Your existing form HTML goes here -->

    <!-- Notification script -->
    <script>
    <?php if (!empty($message)): ?>
        Swal.fire({
            icon: '<?php echo $message['type']; ?>',
            title: '<?php echo $message['type'] === 'success' ? 'Success!' : 'Error!'; ?>',
            text: '<?php echo $message['text']; ?>',
            confirmButtonColor: '#3085d6',
        });
    <?php endif; ?>
    </script>
</body>
</html>