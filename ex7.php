<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $destination = $_POST['destination'];
    $memberstatus = $_POST['member'];
    if($destination == 'Asia'){
        if($number >= 10){
            $pertraveler = 1500;
        }
        elseif($number >= 5){
            $pertraveler = 2000;
        }
        else{
            $pertraveler = 2500;
        }
    }
    elseif($destination == 'Europe'){
        if($number >= 10){
            $pertraveler = 3000;
        }
        elseif($number >= 5){
            $pertraveler = 3500;
        }
        else{
            $pertraveler = 4000;
        }
    }
    // ถ้าเลือก Insurance
    if (isset($_POST['Insurance'])) {
        $Insurance = $_POST['Insurance']; // จะได้ค่า "3"
    }
    else{
        $Insurance = 0;
    }

    // ถ้าเลือก water
    if (isset($_POST['Travelpass'])) {
        $Travelpass = $_POST['Travelpass']; // จะได้ค่า "2"
    }
    else{
        $Travelpass = 0;
    }
    // ถ้าเลือก water
    if (isset($_POST['Airporttransfer'])) {
        $Airporttransfer = $_POST['Airporttransfer']; // จะได้ค่า "2"
    }
    else{
        $Airporttransfer = 0;
    }
    // ถ้าเลือก water
    if (isset($_POST['Onedaycitytour'])) {
        $Onedaycitytour = $_POST['Onedaycitytour']; // จะได้ค่า "2"
    }
    else{
        $Onedaycitytour = 0;
    }
    $extra = ($Insurance * $number) + ($Travelpass * $number) + ($Airporttransfer * $number) + ($Onedaycitytour * $number);

    $total = $number * $pertraveler;
    $discount = $total * $memberstatus;
    $netprice = ($total - $discount) + $extra;

    echo "<h3>Travel</h3>";
    echo "Name: " . $name . "<br><br>";

    echo "Travel price: " . $total . "<br>";
    echo "Discount price: " . $discount . "<br>";
    echo "Extra price: " . $extra . "<br>";
    echo "Final price: " . $netprice . "<br>";
?>