<?php
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;
    $discount = 0;
    if ($total > 1000) {
        $discount = $total * 0.1;
    }

    echo "<h3>Product Details</h3>";
    echo "Name : $name<br>";
    echo "Price : $price<br>";
    echo "Quantity : $quantity<br><br>";
    echo "Total Price: $total<br>";
    echo "Discount Price: $discount<br>";
    echo "Net Price : " . ($total - $discount) . "<br>";
?>