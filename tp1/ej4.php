<?php

/* esta linea me muestra los errores en la pantalla */
ini_set("display_errors", "on");


/* Función para procesar la información personal de un usuario. */
$personas = array(
    array(
        'apellido' => 'Romero', 
        /* clave        valor    */
        'nombre' => 'Fernando',
        'tipo_documento' => 'dni',
        'numero_documento' => 42601837,
        'fecha_nacimiento' =>
        '13/07/2000'
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

function verPersona($personas){
    foreach ($personas as $claves => $valores) {
        echo 'La clave del array es ' . $claves . '</br>';
        

    }
    foreach ($valores as $unaClave => $unValor) {
        echo 'La clave es ' . $unaClave . ' y contiene el valor de ' . $unValor . '</br>';
    }
}

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
        }
        /* punto a hasta aca */

        
    
    }
    
}


/* BODY */
procesoInfo($personas);







/* 
*El nombre y apellido no deberán tener espacios en blanco extras ni al principio ni al final, y deberán estar todo en minúsculas excepto la primera letra.
*La edad se deberá calcular en base a la fecha de nacimiento obtenida. En el caso de no ser válida el valor que se deberá mostrar será dos guiones “--”.
*El tipo de documento deberá estar todo en mayúsculas.
*La fecha de nacimiento en el caso de no ser correcta, deberá ser reemplazada por el texto “(Fecha no válida)”. 
*/
?>