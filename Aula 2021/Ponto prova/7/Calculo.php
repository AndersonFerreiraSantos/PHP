<?php

$N1 = $_GET['N1'];
$N2 = $_GET['N2'];

$op = $_GET['operacao'];

if($op == 0){
    $resultado = $N1 + $N2;
    echo "O resultado da sua soma é: $resultado";
}
if($op == 1){
    $resultado = $N1 - $N2;
    echo "O resultado da sua subtração é: $resultado";
}
if($op == 2){
    $resultado = $N1 * $N2;
    echo "O resultado da sua multiplicação é: $resultado";
    
}


if($op == 3){
    $resultado = $N1 / $N2;
    echo "O resultado da sua divisão é: $resultado";
}


?>