<!--Trasformamos el siguiente for en un bucle
WHILE: tiene la condición antes de entrar en el bucle -->
<?php
//for($i = 1; $i <=100; $i++){
//    echo "$i, ";    
//}

$i = 1;
while($i <= 100){
    echo $i. " ";
    $i++;
}

//DO: la condición se ejecuta al final.
echo "<br> Con bucle DO <br>";
$j = 1;
do{
    echo $j. " ";
    $j++;
}while($j <= 100);