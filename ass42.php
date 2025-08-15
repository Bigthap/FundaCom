<?php
$name = $_POST['name'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Height = $_POST['Height'];
$Weight = $_POST['Weight'];
$hmeter = $Height / 100;
$bmi = $Weight / ($hmeter * $hmeter);

echo "<h3>Your BMI</h3>";
echo "Name: $name<br>";
echo "Gender: $Gender<br>";
echo "Age: $Age years old<br>";
echo "Height: $hmeter meter<br>";
echo "Weight: $Weight kilogram<br>";
echo "BMI: $bmi<br>";

?>