//Hacer un programa que muestre las tablas de multiplicar. Debe haber un encabezado h3 como titulo de cada tabla
<?php
//BUCLES ANIDADOS
for ($i = 1; $i <=10; $i++){
    echo "<h3>Tabla de $i</h3>";
    for($j = 0; $j <=10; $j++){
        $resultado = $j * $i;
        echo "$j * $i = $resultado <br>";
    }
}

