//Poner bordes a la tablas anteriores
<?php
for ($i = 1; $i <=10; $i++){
   echo "<table style='border: 2px solid green;'> <tr> <th colspan='5'> tabla del $i </th> </tr>";
    for($j = 0; $j <=10; $j++){
        $res = $j * $i;
    }
    echo "</table>";
}

