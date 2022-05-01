<?php

/* Partiendo de que la fecha recibida por parámetro debe ser una fecha válida, y que no puede ser una fecha posterior a la fecha actual, se deberá calcular la edad de una persona en base a la fecha recibida como parámetro de la función. */

/* Configuro la zona horaria y declaro una variable con la fecha actual */
 

/* Creo una variable a la cual le asigno la fecha con formato de fecha UNIX para poder compararlas */


function calcularEdad(&$fechaDeNacimiento){

    date_default_timezone_set('America/Argentina/Buenos_Aires');    
    $DateAndTime = date('d-m-Y'); 
    
    $fechaActual = strtotime($DateAndTime);

    $fechaNacimiento = strtotime($fechaDeNacimiento);

    /* Verifico que la fecha de nacimiento no sea mayor a la fecha actual */
    if($fechaActual > $fechaNacimiento){
        $fechaValida = true;
    }else{
        $fechaValida = false;
    }
    /* Calcular edad */
    if($fechaValida == true){
        $anioActual = date('d-m-Y');
        $arregloAnioActual = explode("-",$anioActual);
        $anioActual = $arregloAnioActual[2];
        $anioNacimiento = $fechaDeNacimiento;
        $arregloAnioNacimiento = explode("-",$anioNacimiento);
        $anioNacimiento = $arregloAnioNacimiento[2];
        $edad = ($anioActual - $anioNacimiento);
        echo "La edad es de: $edad";
    }else{
        echo "Fecha no valida";
    }
    
}

$fechaDeNacimiento = '10-04-1996'; /* Ingrese fecha en formaro DD-MM-AAAA */
calcularEdad($fechaDeNacimiento);

?>