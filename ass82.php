<?php
$Start = $_POST['Start'];
$End = $_POST['End'];
$IB = $_POST['IB'];

echo "<table border=1>
        <tr>
            <th>The Square Of</th>
            <th>Result</th>
        </tr>";

for($i=$Start; $i<=$End; $i=$i+$IB){
    echo "<tr>
            <td>$i</td>
            <td>".($i*$i)."</td>
          </tr>";
}
echo "</table>";
?>
