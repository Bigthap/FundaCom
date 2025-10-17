<?php
    $test[0] = [10,9,9];
    $test[1] = [8,8,7];
    $sum = [0,0];


    for($i = 0;$i <= 1;$i++){
        for($j = 0;$j <= 2;$j++){
            $sum[$i] = $sum[$i] + $test[$i][$j];
        }
        $num_test = $i+1;
        echo "Sum of test ". $num_test . " = " . $sum[$i] . "<br>";
    }
?>