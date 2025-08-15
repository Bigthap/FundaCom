<?php
$name = "Alex Domana";
$age = 45;
$weight = 85;
$height = 180;
$mheight = $height / 100;
$bmi = $weight / ($mheight * $mheight);

echo "Patient infomartion <br><br>";
echo "Name : $name <br>";
echo "Age : $age years old<br>";
echo "Height : $height cm.<br>";
echo "Weiht : $weight kg.<br><br>";
echo "BMI : $bmi <br>";
?>