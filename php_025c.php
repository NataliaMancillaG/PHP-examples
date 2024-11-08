//Ejercicio con bucle centinela. Hay una variable que nos dice si nos salimos del bucle si se cumple una condición
// Programa que escribe números aleatorios  entre uno y quinientos y se pare cuando el número sea múltiplo de 7
<?php
$salir = false;
while(!$salir){
    $num = rand(1,500);
    echo "$num <br>";
    $salir = ($num%7 ==0 );
    //if ($num % 7 == 0){
    //    $salir = true;
    //}
}