<?php
    $sumoftest = [];

    foreach($_POST['number'] as $row){
        $sum = 0;
        foreach($row as $column) {
            $sum += $column;
        }
        $sumoftest[] = ['total' => $sum];
    }
?>

<html>
    <body>
        <h2>Sum of student scores</h2>
        <?php foreach ($sumoftest as $i => $num) { ?>
            <h3> Row <?= $i + 1 ?> </h3>
            Total : <?= $num['total']?><br>
        <?php } ?>
    </body>
</html>