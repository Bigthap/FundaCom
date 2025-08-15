<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $destination = $_POST['destination'];
    $memberstatus = $_POST['member'];
    $tips = $_POST['tips'];
    if (isset($_POST['coffee'])) {
        $coffee = $_POST['coffee']; // จะได้ค่า "5"
    }
    else{
        $coffee = 0;
    }

    // ถ้าเลือก tea
    if (isset($_POST['tea'])) {
        $tea = $_POST['tea']; // จะได้ค่า "3"
    }
    else{
        $tea = 0;
    }

    // ถ้าเลือก water
    if (isset($_POST['water'])) {
        $water = $_POST['water']; // จะได้ค่า "2"
    }
    else{
        $water = 0;
    }

    $drink = $coffee + $tea + $water;

    if($destination == 'Asia'){
        $price = 2500;
    }
    else{
        $price = 5000;
    }
    if($memberstatus == 'Member'){
        $member = 0.1;
    }
    else{
        $member = 0;
    }
    if($tips > 0){
        $drink = 0;
    }
    $total = $number * $price;
    $discount = $total * $member;
    $tips = $total * $tips;
    $netprice = $total - $discount + $tips + $drink;

    echo "<h3>Travel Information Cost</h3>";
    echo "<table border =1>
        <tr>
            <td colspan=2>Travelers' Information</td>
        </tr>
        <tr>
            <td><p>Name</p></td>
            <td>$name </td>
        </tr>
        <tr>
            <td><p>Number</p></td>
            <td>$number </td>
        </tr>
        <tr>
            <td><p>Destination</p></td>
            <td>$destination </td>
        </tr>
        <tr>
            <td><p>Member Status</p></td>
            <td>$memberstatus </td>
        </tr>
        <tr>
            <td colspan=2>Travel Cost</td>
        </tr>
        <tr>
            <td><p>Total Price</p></td>
            <td>$ $total </td>
        </tr>
        <tr>
            <td><p>Discount Price</p></td>
            <td>$ -$discount </td>
        </tr>
        <tr>
            <td><p>Tips</p></td>
            <td>$ $tips </td>
        </tr>
        <tr>
            <td><p>Drink</p></td>
            <td>$ $drink </td>
        </tr>
        <tr>
            <td><p>Net Price</p></td>
            <td>$ $netprice </td>
        </tr>
    </table>";
    echo "<h3>Please pay within 3 days.</h3>";

?>