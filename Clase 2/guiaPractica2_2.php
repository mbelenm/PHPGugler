<?php
/* 9) - Editar el script PHP del punto anterior y agregue una función que permita incrementar el valor de una variable pasada como parámetro por referencia. Dentro del mismo script deberá utilizar la función y mostrar el resultado por pantalla. */

function suma($numero1,$numero2){
    $resultado = ($numero1 + $numero2);
    return $resultado;
}

function resta($numero1,$numero2){
    $resultado = ($numero1 - $numero2);
    return $resultado;
}

function producto($numero1,$numero2){
    $resultado = ($numero1 * $numero2);
    return $resultado;
}

function cociente($numero1,$numero2){
    $resultado = ($numero1 / $numero2);
    return $resultado;
}

function incrementar(&$valor){
    $valor++;
    return $valor;
}

$a = 2;
$b = 4;

echo "La suma de $a y $b es: ".suma($a,$b)."<br />";
echo "La resta de $a y $b es: ".resta($a,$b)."<br />";
echo "El producto de $a y $b es: ".producto($a,$b)."<br />";
echo "El cociente entre $a y $b es: ".cociente($a,$b)."<br />";
echo "El incremento de $a es: ".incrementar($a)."<br/ >";
echo $a;

