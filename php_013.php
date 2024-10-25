<?php
//unset: Elimina una variable o array respetando el ámbito de dicha variable.
$var1 = 4;
if(isset($var1)){
    print("La variable var1 está configurada y no es NULL. Su valor es:".$var1);
}else{
    print("La variable var1 no esta configurada");
}
unset($var1);
echo"<br>";
if(isset($var1)){
    print("La variable var1 está configurada y no es NULL. Su valor es:".$var1);
}else{
    print("La variable var1 no esta configurada");
}