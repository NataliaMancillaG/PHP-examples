<?php
$a = 20;
$b = 20;

if ($a > $b){
    print($a. "A es mayor que B y su valor es:" . $a);
}else{
    if ($a < $b){
        print($b. "B es mayor que A y su valor es:" . $b); 
    }else{
        print("A y B son iguales y vale:" . $a);
    }
}

//elseif
if ($a > $b){
    print($a. "A es mayor que B y su valor es:" . $a);
}elseif ($a < $b){
    print($b. "B es mayor que A y su valor es:" . $b); 
}else{
    print("A y B son iguales y vale:" . $a);
}