<?php
    $times = $_POST['times'];
    $one = 0;
    $two = 0;
    $three = 0;
    for($i = 1;$i <= $times;$i++){
        $rand = rand(1,3);
        echo "Random number #$i ==> $rand <br>";
        if($rand == 1){
            $one++;
        }elseif($rand == 2){
            $two++;
        }else{
            $three++;
        }
    }
    echo "<br><br>";
    echo "Count for 1 = $one times(s) <br>";
    echo "Count for 1 = $two times(s) <br>";
    echo "Count for 1 = $three times(s) <br>";
?>