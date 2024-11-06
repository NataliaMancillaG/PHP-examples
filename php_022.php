<?php
//BUCLE FOR
//Imprimir del uno al 100
for($i = 1; $i <=100; $i++){
    echo '$i, ';    
}
for($i = 1; $i <=100; $i++){
    ($i == 100) ? "echo ($i. ' .')" : "echo '$i, '";
}