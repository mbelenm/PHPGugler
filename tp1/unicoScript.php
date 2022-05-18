<?php
/* esta linea me muestra los errores en la pantalla */
ini_set("display_errors", "on");

/* vector de personas con registros*/
$personas = array(
    array(
        'apellido' => 'Romero', 
        /* clave        valor    */
        'nombre' => 'Fernando',
        'tipo_documento' => 'dni',
        'numero_documento' => 42601837,
        'fecha_nacimiento' => '13/07/2000'
    ),
    array(
        'apellido' => 'Febre ', 
        'nombre' => 'Yolanda Rosa ',
        'tipo_documento' => 'dni',
        'numero_documento' =>
        '10587664',
        'fecha_nacimiento' => '15/11/1948'
    ),
    array(
        'apellido' => 'Gomez', 
        'nombre' => 'IRMA',
        'tipo_documento' => 'lc',
        'numero_documento' => '5362812',
        'fecha_nacimiento' => '22/05/1918'
    ),
    array(
        'apellido' => 'Lissa ', 
        'nombre' => 'Romina ',
        'tipo_documento' => 'dni',
        'numero_documento' => '12385035',
        'fecha_nacimiento' => '13/05/1958'
    ),
    array(
        'apellido' => 'Friz', 
        'nombre' => 'Carlos Rolando',
        'tipo_documento' => 'dni',
        'numero_documento' => '14128874',
        'fecha_nacimiento' => '01/05/1961'
    ),
    array(
        'apellido' => 'Garzia', 
        'nombre' => 'Marta Camila',
        'tipo_documento' => 'dni',
        'numero_documento' => '17121841',
        'fecha_nacimiento' => '23/11/1964'
    ),
    array(
        'apellido' => 'Soñez', 
        'nombre' => 'Jorge Gonzalo',
        'tipo_documento' => 'dni',
        'numero_documento' => '13695121',
        'fecha_nacimiento' => '09/08/1959'
    ),
    array(
        'apellido' => 'PEREZ', 
        'nombre' => 'GISELA YANINA',
        'tipo_documento' => 'dni',
        'numero_documento' => '31486546',
        'fecha_nacimiento' => '25/03/1985'
    ),
    array(
        'apellido' => 'YNZA', 
        'nombre' => 'CARLA',
        'tipo_documento' => 'dni',
        'numero_documento' => '28302680',
        'fecha_nacimiento' => '30/01/1981'
    ),
    array(
        'apellido' => 'Martinez', 
        'nombre' => 'Antonia',
        'tipo_documento' => 'dni',
        'numero_documento' => '38054607',
        'fecha_nacimiento' => '27/04/1994'
    )
);

function procesoInfo(&$personas){
    foreach ($personas as $persona => $campos) {
        /* punto a */
        foreach($campos as $unCampo => $unValor){
            if ($unCampo == 'apellido') {
                $unValor = strtolower($unValor);
                $unValor = trim($unValor);
                $unValor = ucwords($unValor);
                echo $unValor.'<br />';
            }

            if ($unCampo == 'nombre') {
                $unValor = strtolower($unValor);
                $unValor = trim($unValor);
                $unValor = ucwords($unValor);
                echo $unValor.'<br />';
            }
            /* punto a hasta aca */
            
            /* punto b */
            if ($unCampo == 'fecha_nacimiento') {
                $fecha = $unValor;
                echo $fecha;
                // echo calcularEdad($fecha).'<br />';
            }
        }
    }
    
}





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

function calcularEdad(&$fecha){
    /* Configuro la zona horaria y declaro una variable con la fecha actual */
    date_default_timezone_set('America/Argentina/Buenos_Aires');    
    /* Creo una variable a la cual le asigno la fecha con formato de fecha UNIX para poder compararlas */
    $fechaActual = strtotime($DateAndTime = date('d/m/Y'));
    $fechaNacimiento = strtotime($fecha);
    /* Verifico que la fecha de nacimiento no sea mayor a la fecha actual */
    if($fechaActual > $fechaNacimiento){
        $fechaValor = true;
    }else{
        $fechaValor = false;
    }
    /* Calcular edad */
    if($fechaValor == true){
        $anioActual = date('d/m/Y');

        $arregloAnioActual = explode("/",$anioActual);
        $anioActual = $arregloAnioActual[2];/* Aplico exple() para quedarme con el año del string */
        $anioNacimiento = $fecha;
        $arregloAnioNacimiento = explode("/",$anioNacimiento);
        $anioNacimiento = $arregloAnioNacimiento[2];
        $edad = ($anioActual - $anioNacimiento);
        return $edad;
    }else{
        echo "Fecha no valida";
    }
}




/* Preguntar porque no funciona solamente pasando la fecha */
/* BODY */
procesoInfo($personas);

// $fecha = "10/04/1995";

// echo calcularEdad($fecha);

// echo "<br/>";


// verificarFecha($fecha,$valido);

// if ($valido == true){
//     echo "fecha valida";
// }else{
//     echo "fecha invalida";
// }

// echo "<br/>";


// anioBisiesto($fecha,$bisiesto);
// if ($bisiesto == true){
//     echo "la fecha ingresada es un año bisesto";
// }else{
//     echo "la fecha ingresada no es un año bisiesto";
// }


/* 
*El nombre y apellido no deberán tener espacios en blanco extras ni al principio ni al final, y deberán estar todo en minúsculas excepto la primera letra.
*La edad se deberá calcular en base a la fecha de nacimiento obtenida. En el caso de no ser válida el valor que se deberá mostrar será dos guiones “--”.
*El tipo de documento deberá estar todo en mayúsculas.
*La fecha de nacimiento en el caso de no ser correcta, deberá ser reemplazada por el texto “(Fecha no válida)”. 
*/

?>