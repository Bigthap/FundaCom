<?php
    $num = [15, 40, 60, 12, 34];
    $max = 0;
    $index = 0;
    $number = count($num);

    for($i = 0;$i < $number;$i++){
        if($num[$i] > $max){
            $max = $num[$i];
            $index = $i;
        }
    }
    for($j = 0;$j < $number;$j++){
        echo "$num[$j]<br>";
    }
    echo "<br>Max number = $max";
    echo "<br>Index = $index";
?>