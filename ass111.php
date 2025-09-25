<?php
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$Weight1 = $_POST['Weight1'];
$Weight2 = $_POST['Weight2'];
function cal($p, $w){
    if($p == 'Domestic'){
        if($w < 5){
            $kpc = 10;
        }else{
            $kpc = 15;
        }
        $sc = $kpc * $w;
    }else{
        if($w < 5){
            $kpc = 100;
        }else{
            $kpc = 150;
        }
        $sc = $kpc * $w;
    }
    echo "Shipping option = $p<br>";
    echo "Weight = $w kg.<br>";
    echo "Shipping cost = $sc bath<br>";
}
echo "<h3>========== Package 1 ==========</h3>";
cal($p1, $Weight1);
echo "<h3>========== Package 2 ==========</h3>";
cal($p2, $Weight2);
?>