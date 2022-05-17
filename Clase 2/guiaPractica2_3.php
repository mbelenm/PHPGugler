<?php

/* 10) – Escriba un script PHP que utilice la función date('Y-m-d') para obtener la fecha actual y utilizando la función explode() cambie el formato de la fecha a dd/mm/yyyy, muestre la fecha con formato por pantalla. */

function fecha (){
    $fecha = date('d/m/Y');
    return $fecha;
}

echo fecha();
