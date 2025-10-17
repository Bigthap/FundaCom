<html>  
    <body>
            <h2 style="text-align:left;">Sum of student scores</h2>
            <form method="post" action="ass133_result.php">
            <?php for($i = 0; $i < (int)$_GET['t']; $i++){ ?>
                <h3> Test <?= $i + 1 ?> </h3>
                <?php for($j = 0; $j < (int)$_GET['c']; $j++){ ?>
                    Course <?= $j + 1 ?>
                    <input type="text" name="number[<?= $i ?>][<?= $j ?>]" /><br>
                <?php } ?>
            <?php } ?>
                <p>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="cancel" value="Cancel">
                </p>
            </form>
    </body>
</html>
