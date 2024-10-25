<?php
//funcion isset
//Comprueba si una variable está definida y no es NULL
//El valor NULL respresentanuna variable sin valor
$var1 = 4;
if(isset($var1)){
    print("La variable var1 está inicializada y no es NULL. Su valor es:".$var1);
}else{
    print("La variable var1 no esta inizializada");
}
echo "<br>";
$var2 = null;
if(isset($var2)){
    print("La variable var2 está inicializada y no es NULL. Su valor es:".$var1);
}else{
    print("La variable var2 no esta inizializada");
}