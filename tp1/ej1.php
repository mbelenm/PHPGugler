<?php

echo "Trabajo practiico N°1<br/><br/> Ejercicio N°1 - Año bisiesto<br/><br/><br/>";

$bisiesto = false;

function anioBisiesto($anio, &$bisiesto){
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


anioBisiesto(2020,$bisiesto);
if ($bisiesto == true){
    print("El año es bisiesto");
}else{
    print("El año no es bisiesto");
}


?>