<?php
    $ID = $_POST['ID'];
    $Type = $_POST['Type'];
    $soup = $_POST['soup'];
    echo "<h2>Noodle Order Summary</h2>";
    echo "Order ID $ID<br>";
    echo "Noodle Type $Type<br>";
    echo "Noodle Soup $soup<br>";
    foreach ($_POST["topping"] as $topping){
        echo "Noodle Toppings $topping<br>";
    }

?>