<?php
    $Distance = $_POST['Distance'];
    $Time = $_POST['Time'];
    $Change = $_POST['Change'];
    echo "<h2>Speed Calculator</h2>";
    function cal($d, $t, $c){
        if($c == 'Yes'){
            $s = ($d / $t) * 3.6;
            $s2 = 'km/h';
        }else{
            $s = $d / $t;
            $s2 = 'm/s';
        }
        echo "Distance = $d m.<br>";
        echo "Time = $t s.<br>";
        echo "Change Unit to km/h = $c<br>";
        echo "Speed = $s $s2";
    }
    cal($Distance, $Time, $Change);
?>