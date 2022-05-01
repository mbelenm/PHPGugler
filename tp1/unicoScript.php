<?php

/* Función para validar si un año es bisiesto. */

function anioBisiesto(&$fecha,&$bisiesto){
    /* Convierto la fecha en variables con las que pueda trabajar */
    $separador = "/";
    $arregloDMA = explode($separador,$fecha);
    $anio = $arregloDMA[2];    
    /* Verifico si el año de la fecha ingresada es un año bisiesto */
    if (($anio%100==0) && ($anio%400==0)){
        $bisiesto = true;
        return $bisiesto;
    }else if ($anio%4 == 0){
        $bisiesto = true;
        return $bisiesto;
    }else{
        $bisiesto = false;
        return $bisiesto;
    }
}

/* Función para validar si una fecha es correcta. */

function verificarFecha(&$fecha,&$valido){
    $separador = "/";
    $arregloDMA = explode($separador,$fecha);
    $dia = $arregloDMA[0];
    $mes = $arregloDMA[1];
    $anio = $arregloDMA[2];
    // return $dia;
    // return $mes;
    // return $anio;
    if ((($dia >= 01) && ($dia <= 29) && ($dia != 00)) && ($mes == 02)){
        $valido = true;
        return $valido;
    }elseif ((($dia >= 01) && ($dia <= 31) && ($dia != 00)) && (($mes >= 01) && ($mes <=12))) {
        $valido = true;
        return $valido;
    }else{
        $valido = false;
        return $valido;
    }
}

/* Preguntar porque no funciona solamente pasando la fecha */

/* BODY */

$fecha = "10/10/2022";

verificarFecha($fecha,$valido);

if ($valido == true){
    echo "fecha valida";
}else{
    echo "fecha invalida";
}

echo "<br/>";


anioBisiesto($fecha,$bisiesto);
if ($bisiesto == true){
    echo "la fecha ingresada es un año bisesto";
}else{
    echo "la fecha ingresada no es un año bisiesto";
}



?>