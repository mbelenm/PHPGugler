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
        'fecha_nacimiento' => '13/77/2000'
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

/* Función para validar si un año es bisiesto. */

function anioBisiesto($fecha){
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

function verificarFecha($fecha){
    $arregloDMA = explode("/",$fecha);
    $dia = $arregloDMA[0];
    $mes = $arregloDMA[1];
    $anio = $arregloDMA[2];

    if ((($dia >= 01) && ($dia <= 29) && ($dia != 00)) && ($mes == 02) && (($anio <= date("Y")&&($anio <= 110)))){
        
        return true;

    }elseif ((($dia >= 01) && ($dia <= 31) && ($dia != 00)) && (($mes >= 01) && ($mes <=12))&&(($anio <= date("Y")&&($anio <= 110)))){

        return true;

    }else{

        return false;

    }
}

/* Función para calcular edad de la persona */

function calcularEdad($fecha){
    
    $fechaActual = date('d/m/Y');
    $fechaActual = explode("/",$fechaActual);
    
    $anioActual = $fechaActual[2];
    
    $fechaNacimiento = $fecha;
    $fechaNacimiento = explode("/",$fecha);
    
    $anioNacimiento = $fechaNacimiento[2];

    if (verificarFecha($fecha) == true){
        
        $edad = ($anioActual - $anioNacimiento);
        return $edad;

    }else{
        return false;
    }
}


function procesarInfo ($personas){
    foreach ($personas as $dato){
        $apellido = $dato['apellido'];
        $nombre = $dato['nombre'];
        $fechaNacimientoRegistro = $dato['fecha_nacimiento'];
        $tipo = $dato['tipo_documento'];
        $documento = $dato['numero_documento'];

        /* Nombre sin espacios en blanco y todo en minuscula excepto la primera letra */
        $apellido = strtolower($apellido);
        $apellido = trim($apellido);
        $apellido = ucwords($apellido);

        /* Apellido sin espacios en blanco y todo en minuscula excepto la primera letra */        
        $nombre = strtolower($nombre);
        $nombre = trim($nombre);
        $nombre = ucwords($nombre);
        
        /* Tipo de documento en mayusculas */
        $tipoDocumento = strtoupper($tipo);

        if (calcularEdad($fechaNacimientoRegistro) == false) {
            echo "$apellido, $nombre de $edadPersona años de edad y documento ($tipoDocumento) [$documento] nacido en la fecha $fechaNacimientoRegistro. <br />"
        }

        // echo "$apellido, $nombre de $edadPersona años de edad y documento ($tipoDocumento) [$documento] nacido en la fecha $fechaNacimientoRegistro. <br />";
    }
}


/* BODY */


procesarInfo($personas);



?>