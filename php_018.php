<?php
//if normal y con operador ternario
$a = 8;
$b = 5;
if ($a > $b){
    echo "$a es mayor que $b"."<br>";
}else{
    echo "$a es menor que $b";
}

//if con operador ternario. ? es "entonces" y : "sino"
$resultado = ($a > $b) ? "$a es mayor que $b con ternario " : "$a es menor que $b con ternario";
echo $resultado;