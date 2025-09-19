<?php
    $rd = $_POST['rd'];
    $sub = $_POST['sub'];
    $num = $_POST['num'];

    $date = date("d M Y");
    $hours = ceil($num);
    if($hours <= 4){
        $charge = $sub * 0.5;
    }elseif($hours <= 8){
        $charge = $sub * 0.7;
    }else{
        $charge = $sub * 1;
    }
    $total = $sub + $charge;
    $sub2 = number_format($sub,2);
    
    echo "<h3>Charge for late car return</h3>";
    echo "Return date = $date<br>";
    echo "Rent ID = $rd<br>";
    echo "Subtotal = $sub2 bath<br>";
    echo "Numbers of late hours = $hours hours<br>";
    echo "Charges = " . number_format($sub,2) . " bath" . "<br>";
    echo "<h3>" . "Total = " . number_format($total,2) . " baht" . "</h3>";

?>