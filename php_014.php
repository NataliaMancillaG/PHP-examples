<?php
//EXPRESIONES ARITMÉTICAS
//No es necesario inicializar variables en PHP, sin embargo, es muy  buena practica. Las variables no inicializadas tiene un valor  predeterminado de acuerdo a su tipo des


$a = 20;
$b = 3;

$resultado = 0;

//SUMA
$resultado = $a + $b;
echo "$a + $b es $resultado <br>";

//RESTA
$resultado = $a - $b;
echo "$a - $b es $resultado <br>";

//PRODUCTO
$resultado = $a * $b;
echo "$a * $b es $resultado <br>";

//DIVISION
$resultado = $a / $b;
echo "$a / $b es $resultado <br>";

//DIVISION ENTERA
$resultado = (int)($a / $b);
echo "(int)($a / $b) es $resultado <br>";

//MODULO es el resto de la division
$resultado = $a % $b;
echo "El resto de dividir $a entre $b es $resultado <br>";

//Incrementos - Decrementos----------------------------------------------
//Post-Incremento: devuelve el valor y luego lo incrementa
$resultado = $a++; //$resultado = $a; $a =$a + 1;
echo "El valor de a con post-incrementa es: $a. El valor de resultado es $resultado <br>";

//Pre-incremento
$resultado = ++$a; //1º $a = $a + 1; 2º $resultado = $a
echo "El valor de a con pre-incrementa es: $a. El valor de resultado es $resultado <br>";

//post-decremento
$a = 20;
$resultado = $a--; //resultado =20; a=19
echo "EL valor de a con post-decremento es: $a. El valor de resultado es $resultado <br>";

//Pre-decremento
$a = 20;
$resultado = --$a; //resultado =19; a=19
echo "EL valor de a con pre-decremento es: $a. El valor de resultado es $resultado <br>";

//Asignacion con operadores
$a = 20;
$a += 10;//$a = $a + 10;
echo "El valor de a es $a <br>";
$a -= 10;
echo "El valor de a es $a <br>";