<?php
$_SERVER["DOCUMENT_ROOT"]=dirname(__DIR__);
require_once 'TipoDocumento.php';
require_once 'Sexo.php';
require_once 'Provincia.php';
require_once 'Usuario.php';



$aTipoDocumento = array(
	new TipoDocumento(1, 'DNI'),
	new TipoDocumento(2, 'LC'),
	new TipoDocumento(3, 'LE'),
);

$aSexo = array(
	new Sexo('M', 'Masculino'),
	new Sexo('F', 'Femenino'),
);

$aProvincia = array(
	new Provincia(1,'Entre Ríos'),
	new Provincia(2,'Santa Fé'),
	new Provincia(3,'Córdoba'),
	new Provincia(4,'Buenos Aires'),
	new Provincia(5,'Catamarca'),
	new Provincia(6,'Corrientes'),
);