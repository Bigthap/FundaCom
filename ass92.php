<?php
    $base = $_POST['base'];
    $rounds = $_POST['rounds'];
    for($i = 1;$i <= $rounds;$i++){
        echo "Multiplication " . $base . " x 12". "<br>";
        for($j = 1;$j <= 12;$j++){
            $bxj = $base * $j;
            echo $base . " x " . $j . " = " . $bxj . "<br>";
        }
        $base++;
        echo "<br>";
    }
?>