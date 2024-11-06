<?php
//CADENAS. Su posicion inicial es 0
//FUNCIONES:
//strlen(): Devuelve la posición de una cadena
//strtolower(): convierte toda la cadena en minuscula
//strtoupper(): convierte toda la cadena en mayuscula
//strcmp(): Compara dos cadenas (sensible a mayusculas y minuscula)
//strcasecmp(): Compara dos cadenas (insensible a mayusculas y minuscula)
//substr(): extraer una parte de la cadena
//str_repeat(): repite el número de veces que se expecifican
//trim(): elimina los espacios en blonco al principio y al final de una cadena
//str_word_count()
//strrev(): invierte la cadena
//strpos(): Busca un texto dentro de una cadena y devuelve su posición
//str_renplace(): remplaza unos caracteres por otros

//Asignar "Hola mundo!" a una variable
$texto = "Hola mundo!";
//Contar el número de palabras
echo "Número de palabra de $texto: ".str_word_count($texto)."<br>";
//Invertir
echo "Invertir cadena:". strrev($texto)."<br>";
//Buscarel texto dentro de la cadena
echo "Posicion de 'Mundo'". strpos($texto, "Mundo")."<br>";
//Reemplazor 
echo "reemplazo de 'Mundo' por 'Dolly'". str_repeat("Mundo", "Dolly", $texto)."<br>";
//Longitud de la cadena
echo "Posición de la cadena". strlen($texto)."<br>";
//Pasar a minuscula
echo "Conbertir en mayusculas". strtolower($texto)."<br>";
//Pasar a mayuscula
echo "Conbertir en minusculas". strtoupper($texto)."<br>";
//Comparar cadenas sensible
echo "Comparación de 'Hola' y 'hola'". strcmp("Hola", "hola" ,$texto)."<br>";
//Comparar cadenas insensible
echo "Comparación de 'Hola' y 'hola'". strcasecmp("Hola", "hola" ,$texto)."<br>";
//Extraer cinco caractres a partir del carcter 5
//Comparar cadenas sensible
echo "subcadena de '$texto': ". substr($texto, 5, 3)."<br>";
//Repetir cadena
//Comparar cadenas sensible
echo "repetir 'Hola' tres veces". str_repeat("Hola ",3). "<br>";
//eliminar espacios en blanco
echo "Cadena sin espacios eliminados" . trim("      $texto       ");
//??
$texto2= "            Hola Mundo           ";
echo "Cadena sin espacios eliminados" . trim($texto2);