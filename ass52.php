<?php
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$member = $_POST['member'];
$paid = $_POST['paid'];
$memberpercen = $member / 100;
$total = $price * $quantity;
$discount = $total * $memberpercen;
$final = $total - $discount;
$change = $paid - $final;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        /* table {
            border-collapse: collapse;
        } */
        td, th {
            border: 1px solid black;
            /* padding: 6px 12px; */
        }
    </style>
</head>
    <body>
        <h3>Receipt</h3>
        <table>
            <tr>
                <td>Price</td>
                <td><?= $price ?> Baht</td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><?= $quantity ?> Unit</td>
            </tr>
            <tr>
                <td>Member Discount</td>
                <td><?= $member ?> %</td>
            </tr>
            <tr>
                <td>Paid Amount</td>
                <td><?= $paid ?> Baht</td>
            </tr>
        </table>
        <br>
            <div>
                Total Price: <?= $total ?> Baht<br>
                Discount Price: <?= $discount ?> Baht<br>
                Net Price: <?= $final ?> Baht<br>
                Change: <?= $change ?> Baht
            </div>
        <h3>Thank You ...</h3>
    </body>
</html>

