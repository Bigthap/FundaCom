<?php
    $BKK = $_POST['BKK'];
    $CM = $_POST['CM'];
    $CB = $_POST['CB'];
    $PHT = $_POST['PHT'];
    $KK = $_POST['KK'];
    echo "<h3>ABC - Annual Sales</h3>";
    echo "Bangkok [$BKK]: ";for($i = 1;$i <= $BKK;$i++){
        echo "*";
    }echo "<br>";
    echo "Chiang Mai [$CM]: ";for($i = 1;$i <= $CM;$i++){
        echo "*";
    }echo "<br>";
    echo "Chonburi [$CB]: ";for($i = 1;$i <= $CB;$i++){
        echo "*";
    }echo "<br>";
    echo "Phuket [$PHT]: ";for($i = 1;$i <= $PHT;$i++){
        echo "*";
    }echo "<br>";
    echo "Khonkan [$KK]: ";for($i = 1;$i <= $KK;$i++){
        echo "*";
    }echo "<br>";
    $total = $BKK + $CM + $CB + $PHT + $KK;
    $average = $total / 5;
    echo "<h4>Total: " . $total . "</h4>";
    echo "<h4>Average: " . $average . "</h4>";

?>