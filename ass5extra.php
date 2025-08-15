<?php
    $GreenSquareLenght = $_POST['GreenSquareLenght'];
    $GreenSquareWidth = $_POST['GreenSquareWidth'];
    $OrangeSquareLenght = $_POST['OrangeSquareLenght'];
    $OrangeSquareWidth = $_POST['OrangeSquareWidth'];
    $BlueSquareLenght = $_POST['BlueSquareLenght'];
    $BlueSquareWidth = $_POST['BlueSquareWidth'];
    $PinkCicleRadius = $_POST['PinkCicleRadius'];
    $pi = 3.14;
    $GreenArea = $GreenSquareLenght * $GreenSquareWidth;
    $OrangeArea = ($OrangeSquareLenght * $OrangeSquareWidth) * 2;
    $BlueArea = $BlueSquareLenght * $BlueSquareWidth;
    $PinkArea = $pi * $PinkCicleRadius * $PinkCicleRadius;
    $TotalArea = $GreenArea - ($OrangeArea + $BlueArea + $PinkArea);
    echo "Green Area = $TotalArea";


?>