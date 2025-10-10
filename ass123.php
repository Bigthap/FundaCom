<html>  
    <body>
            <h2 style="text-align:left;">COMPANY INCOME</h2>
            <form method="post" action="ass123_result.php">
            <?php for($i = 0; $i < (int)$_GET['n']; $i++){ ?>
                Month <?= $i + 1 ?>
                <input type="text" name="income[]" />
                <br>
            <?php } ?>
                <p>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="cancel" value="Cancel">
                </p>
            </form>
    </body>
</html>
