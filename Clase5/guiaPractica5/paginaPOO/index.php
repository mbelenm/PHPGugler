<?php
ini_set("display_errors", "on");


require_once 'CabeceraPagina.php';
require_once 'PiePagina.php';
/* CABECERA */                          /* ESTO ES EL CONSTRUCTOR */
$oCabeceraPagina = new CabeceraPagina('Mi página personal','center');

echo $oCabeceraPagina->mostrarCabecera();

/* PIE */                   /* ESTO ES EL CONSTRUCTOR */
$oPiePagina = new PiePagina('Santia, Marcos','https://www.apellidosnombres.com.ar','apellidosnombres@gmail.com','1996','2022','center');

echo $oPiePagina->mostrarPiePagina();


?>