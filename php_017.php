<?php
//Operadores lógicos
//TRUE equivale a 1 y FALSE equivale a 0
//AND (&& o and): devuelve true si ambas son verdaderas
//OR (|| o or): devuelve true si una de las dos es verdadera
//NOT(!): Invierte el valor

$a = 5; //true porque es distinto de 0 
$b = 0; //false
$c = 10; //verdadero
//AND lógico
echo "AND lógico (&&): ". "<br>";
//echo (int)($a && $b) ."<br>";
//echo ($a && $c) ."<br>";
if (("$a && $b" == true)){
    echo "Es true";
}else{
    echo "Es false";
};

//operador ternario
$resultado = ($a && $b) ? "Es true " : "Es false";
echo $resultado. "<br>";

//OR (||)
 echo "OR lógico (||)";
 echo ($a || $b) . "<br>";
 echo ($a || $c) . "<br>";
 echo (int)($b || 0) . "<br>";

 //operador ternario
 $resultado1 = ($a || $b) ? "Es true " : "Es false";
echo $resultado1. "<br>";

 //NOT (!)
 echo "NOT lógico (!): <br>";
 echo $a."<br>";
 echo (int)!$a. "<br>";
 echo $b."<br>";
 echo !$b. "<br>";