<?php
    function hi($in){
        for($i = 0;$i <= $in;$i++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<h2>COMPANY INCOME GRAPH</h2>";

     foreach ($_POST["income"] as $income){
        hi($income);
    }

?>