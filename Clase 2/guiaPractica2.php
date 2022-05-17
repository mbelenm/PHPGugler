<?php
echo "Guia practica de ejecicios de la clase 2 <br>";
/* 2) - Realice un script que defina un arreglo de nombre $dias_semana y al cual debemos asignar cada uno de los días de la misma comenzando por el Domingo. Recuerde utilizar etiquetas estándares. */

$diasSemana = array ('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

/* 3) - Edite el script anterior y agregue una nueva sentencia que muestre el contenido del arreglo con la construcción foreach. */

foreach($diasSemana as $unDia){
    echo 'Dia: '.$unDia.'<br/>';
}

/* 4) - Edite el script del punto 3 y agregue la función print_r() para ver el contenido y la
estructura del arreglo $dias_semana. */

// print_r($diasSemana);
echo "<br/>";

/* 5) - Edite el script del punto 4 y ordene el arreglo de forma ascendente y muestre en pantalla el contenido del mismo. */
/* Uso sort para ordenarlos */
sort($diasSemana);
foreach($diasSemana as $unDia){
    echo 'Dia: '.$unDia.'<br/>';
}
/* 6) - Edite el script del punto 4 y ordene el arreglo de forma descendiente y muestre en pantalla el contenido del mismo. */
/* Uso arsort() para ordenarlo de forma descendiente */
echo "<br/>";
arsort($diasSemana);
foreach($diasSemana as $unDia){
    echo 'Dia: '.$unDia.'<br/>';
}
echo "<br/>";












?>