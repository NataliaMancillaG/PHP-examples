<?php
//Vaiable centilela y contador
//Programa que escribe número de uno a 500 y se repite hasta que aparece un multiplo de 7. Pero como mucho se repite 8 veces

$slir = false;
$i = 0;
//primera forma
while ($salir == false && $i<8){
    $num =rand(1, 500);
    echo($num. "<br>");
    $i++;
    if (($num % 7) == 0){
        $salir = true;
    }
}
//segunda forma
$slir2 = false;
$j = 0;
while ($salir2 == false && $j<8){
    $num =rand(1, 500);
    echo($num. "<br>");
    $j++;
    $salir2 =($num % 7 == 0);
}