<?php
$price = 3200;
$percent = 70;
$rpercent = $percent / 100;
$discount = $price * $rpercent;
$fprice = $price - $discount;
echo "Product price = $price <br>";
echo "Percent on sale = $percent% <br><br>";
echo "Discount price = $discount <br>";
echo "Final price = $fprice <br>";
