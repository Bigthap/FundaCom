<?php
    $stlist['dave'] = "75";
    $stlist['shawn'] = "80";
    $stlist['sarah'] = "77";
    $stlist['jessy'] = "65";
    $stlist['mona'] = "85";

    foreach ($stlist as $stname => $sts){
        echo "Student name = $stname<br>";
        echo "Score = $sts<br>";

        if ($sts >= 80){
            echo "Result = gets A<br><br>";
        }else{
            echo "Result = NOT gets A<br><br>";
        }
    }
?>