//Optimizar el php_27, poniendo las estilos en una etiqueta style aparte.
<?php
echo"<style> 
        .table-container{
        border: 2px solid green; 
        border-colapse:collapse;
        margin: 3px auto;
        }

        .cell{
            border: 1px solid green;
            padding :5px;
        }
    </style>";


for ($i = 1; $i <=10; $i++){
   echo "<table class='table-container'> <tr> <th colspan='5'> tabla del $i </th> </tr>";
    for($j = 0; $j <=10; $j++){
        $res = $j * $i;
        echo "<tr>
            <td class='cell'>$i</td>
            <td class='cell'>x</td>
            <td class='cell'>$j</td>
            <td class='cell'>$res</td>
        </tr>";
    }
    echo "</table><br>";
}