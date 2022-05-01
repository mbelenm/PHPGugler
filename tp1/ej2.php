<?php
/* No declaro varialbes ya que todas las funciones en PHP tienen ambito global*/

include('ej1.php'); /* Utilizo la funcion 'include()' para importar la funcion que hice en el ej1 */

echo "Trabajo practiico N°1<br/><br/> Ejercicio N°2 - Fechas<br/><br/><br/>";

$cadena = "29/04/2022";


/*Utilizo explode() para separar el string y trabajarlo como un array */
/* Creo una funcion para que ingrese fecha en string y devuelva elementos de array */

function convertirFecha(&$cadena,&$separador,&$dia,&$mes,&$anio){
    $separador = "/";
    $arregloDMA = explode($separador,$cadena);
    $dia = $arregloDMA[0];
    $mes = $arregloDMA[1];
    $anio = $arregloDMA[2];
}

function verificarFecha($dia,$mes,&$verificado){
    if ((($dia <= 29) && ($dia >= 01) && ($dia != 00)) && ($mes == 02)){
        $verificado = true;
        return $verificado;
    }elseif ((($dia <= 31) && ($dia >= 01) && ($dia != 00)) && (($mes <=12) && ($mes >= 01))) {
        $verificado = true;
        return $verificado;
    }
    
}

/*IMPLEMENTATION*/
convertirFecha($cadena,$separador,$dia,$mes,$anio);

verificarFecha($dia,$mes,$verificado);

anioBisiesto($anio,$bisiesto);

/*BODY*/

if (($verificado == true) && ($bisiesto == true)){
    echo "La fecha es correcta y su año es bisiesto";
}elseif (($verificado == true) && ($bisiesto == false)) {
    echo "La fecha es correcta y su año no es bisiesto";
}elseif ($verificado == false) {
    echo "La fecha no es correcta";
}


?>