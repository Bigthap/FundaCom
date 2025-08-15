<?php
$maxmin = $_POST['maxmin'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
if ($maxmin == 1) {
    $showmaxmin = 'Minimum';
    if ($number1 < $number2) {
        $result = $number1;
    } else {
        $result = $number2;
    }
} else {
    $showmaxmin = 'Maximum';
    if ($number1 > $number2) {
        $result = $number1;
    } else {
        $result = $number2;
    }
}

    echo "<h3>Minimum or Maximum</h3>";
    echo "Option menu: $maxmin<br><br>";
    echo "Number 1: $number1<br>";
    echo "Number 2: $number2<br><br>";
    echo "$showmaxmin Number: $result";
?>