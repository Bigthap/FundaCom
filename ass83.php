<?php
    $Luck = $_POST['Luck'];
    $Random = $_POST['Random'];
    $i = 1;
    $a = 0;
    echo "<h2>Random Guess Game</h2>"; 
    echo "<h3>$Random - Random numbers</h3>"; 

    while($i <= $Random){
        $r = rand(1,99);
        echo "no.". $i ." - $r<br>";
        if($r==$Luck){
            $a = $r;
            $i++;
        }else{
            $i++;
        }
    }
    if($a==$Luck){
        echo "<h3>Hooley -- Happy Number is $a";
    }
    else{
        echo "<h3>Sorry -- Try Again</h3>";
    }
?>