<?php
$allbox = 250;
$maxbox = 50;
$timeperround = 30;
$round = $allbox / $maxbox;
$time = $round * $timeperround;

echo "Number of all boxes : $allbox <br>";
echo "Number of rounds : $round <br>";
echo "Time : $time minutes <br>";
?>