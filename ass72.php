<?php
$name = $_POST['name'];
$Gender = $_POST['Gender'];
$Height = $_POST['Height'];
$Weight = $_POST['Weight'];
$hmeter = $Height / 100;
$bmi = $Weight / ($hmeter * $hmeter);
if ($bmi < 18.5) {
    $status = "Underweight";
}
elseif ($bmi < 25) {
    $status = "Normal Weight";

}
elseif ($bmi < 30) {
    $status = "Overweight";
}
else {
    $status = "Obese";
}
echo "<h3>Your BMI</h3>";
echo "Name: $name<br>";
echo "Gender: $Gender<br><br>";
echo "Weight: $Weight Kg.<br>";
echo "Height: $Height Cm.<br>";
echo "BMI: $bmi<br>";
echo "<h3>Classification: $status</h3>";
?>