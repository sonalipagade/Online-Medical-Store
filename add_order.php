<?php

// Database connection
$dsn = 'mysql:host=localhost;dbname=PharmEasy';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start();
    if (isset($_POST['order'])) {
        $orders = json_decode($_POST['order'], true);
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d");
        foreach ($orders as $order) {
            $user_id =  $_SESSION['user_id'];
            $id = $order['itemId'];

            $stmt = $db->query("SELECT * FROM item WHERE item_id = '$id'");
            $itemData = $stmt->fetch(PDO::FETCH_ASSOC);
            $item_id = $itemData['item_id'];

            // echo "<script>alert('Data received: $user_id');</script>";
            $quantity = $order['quantity'];
            if ($quantity == 0) {
                return;
            } else {
                
                // Prepare SQL statement with placeholders
                $sql = "INSERT INTO orders (user_id, item_id, order_quantity, order_date) VALUES (:user_id, :item_id, :order_quantity, :order_date)"; // Add missing closing parenthesis
                $stmt = $db->prepare($sql);
                
                // Bind parameters to prevent SQL injection
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':order_quantity', $quantity);
                $stmt->bindParam(':item_id', $item_id);
                $stmt->bindParam(':order_date', $date);
                
                // Execute the statement
                $stmt->execute();
                
                // echo "Record inserted successfully for product: $product \n";

            }
        }
        
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>