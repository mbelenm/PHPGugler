<?php
ini_set("display_errors", "on");


require_once 'CabeceraPagina.php';
require_once 'PiePagina.php';

$oCabeceraPagina = new CabeceraPagina('Mi página personal','center');

echo $oCabeceraPagina->mostrarCabecera();

$oPiePagina = new PiePagina('Apellidos, Nombres','https://www.apellidosnombres.com.ar','apellidosnombres@gmail.com','2009','2010','center');

echo $oPiePagina->mostrarPiePagina();


?>