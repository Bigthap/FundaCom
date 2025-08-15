<?php
    $FenceLenght = $_POST['FenceLenght'];
    $FenceWidth = $_POST['FenceWidth'];
    $TreePrice = $_POST['TreePrice'];
    $Wage = $_POST['Wage'];
    $trees = ($FenceLenght + $FenceWidth) * 2;
    $totaltreesprice = $trees * $TreePrice;
    $total = $totaltreesprice + $Wage;
    
    echo "<h3>Building the Fence Line Trees</h3>";
    echo "Fence's Lenght: $FenceLenght<br>";
    echo "Fence's Width: $FenceWidth<br>";
    echo "Tree's Price: $TreePrice<br>";
    echo "Labor Wage: $Wage<br><br>";
    echo "Number of Trees: $trees<br>";
    echo "Total Price: $total<br>";

?>