<?php
    $row = $_POST['row'];
    $layer = $_POST['layer'];
    for($i = 1;$i <= $layer;$i++){
        for($j = 1;$j <= $row;$j++){
            for($k = 1;$k <= $j;$k++){
                echo "*";
            }
            echo "<br>";
        }
    }
?>