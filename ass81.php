<?php
$BaseValue = $_POST['BaseValue'];
$i = 1;
while($i <= 12){
    echo $BaseValue . " x " . $i . " = " . $BaseValue * $i . "<br>";
    $i++;
}
?>