<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $destination = $_POST['destination'];
    if($destination == 'Asia'){
        $price = 2500;
    }
    else{
        $price = 5000;
    }
    $memberstatus = $_POST['member'];
    if($memberstatus == 'Member'){
        $member = 0.1;
    }
    else{
        $member = 0;
    }
    $total = $number * $price;
    $discount = $total * $member;
    $netprice = $total - $discount;

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
            <td>$ $discount </td>
        </tr>
        <tr>
            <td><p>Net Price</p></td>
            <td>$ $netprice </td>
        </tr>
    </table>";
    echo "<h3>Please pay within 3 days.</h3>";

?>