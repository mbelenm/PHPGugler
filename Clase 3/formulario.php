<?php
/* var_dump($_GET) es para ver todo el contenido */
// var_dump($_GET);

/* METODO _GET */
// echo "<br />"."Tipo de documento: ".$_GET["tipoDocumento"];
// echo "<br />"."Numero de documento: ".$_GET["nDocumento"];
// echo "<br />"."Apellidos: ".$_GET["apellidos"];
// echo "<br />"."Nombres: ".$_GET["nombres"];
// echo "<br />"."Domicilio: ".$_GET["domicilio"];
// echo "<br />"."Domicilio de trabajo: ".$_GET["domicilioTrabajo"];

// if ($_GET["sexo"]=="masculino") {
//     echo "<br />"."Sexo: Masculino";
// }elseif ($_GET["sexo"]=="femenino") {
//     echo "<br />"."Sexo: Femenino";
// }
// echo "<br />"."Fecha de Nacimiento: ".$_GET["fechaDeNacimiento"];
// echo "<br />"."Telefono: ".$_GET["telefono"];
// echo "<br />"."Telefono Movil: ".$_GET["telefonoMovil"];
// echo "<br />"."Telefono Trabajo: ".$_GET["telefonoTrabajo"];
// echo "<br />"."Localidad: ".$_GET["localidad"];
// echo "<br />"."Provincia: ".$_GET["provincia"];
// echo "<br />"."Pais: ".$_GET["pais"];
// echo "<br />"."Nacionalidad: ".$_GET["nacionalidad"];
// echo "<br />"."Correo Electronico: ".$_GET["email"];

/* METODO _POST */
echo "<br />"."Tipo de documento: ".$_POST["tipoDocumento"];
echo "<br />"."Numero de documento: ".$_POST["nDocumento"];
echo "<br />"."Apellidos: ".$_POST["apellidos"];
echo "<br />"."Nombres: ".$_POST["nombres"];
echo "<br />"."Domicilio: ".$_POST["domicilio"];
echo "<br />"."Domicilio de trabajo: ".$_POST["domicilioTrabajo"];

if ($_POST["sexo"]=="masculino") {
    echo "<br />"."Sexo: Masculino";
}elseif ($_POST["sexo"]=="femenino") {
    echo "<br />"."Sexo: Femenino";
}
echo "<br />"."Fecha de Nacimiento: ".$_POST["fechaDeNacimiento"];
echo "<br />"."Telefono: ".$_POST["telefono"];
echo "<br />"."Telefono Movil: ".$_POST["telefonoMovil"];
echo "<br />"."Telefono Trabajo: ".$_POST["telefonoTrabajo"];
echo "<br />"."Localidad: ".$_POST["localidad"];
echo "<br />"."Provincia: ".$_POST["provincia"];
echo "<br />"."Pais: ".$_POST["pais"];
echo "<br />"."Nacionalidad: ".$_POST["nacionalidad"];
echo "<br />"."Correo Electronico: ".$_POST["email"];

/* Validar fecha */

function validarFechaNacimiento(&$fechaDeNacimiento){
    $fechaDeNacimiento = trim($fechaDeNacimiento);
    if(strlen($fechaDeNacimiento)>10){
        return false;
    }else{
        $arregloFechaNacimiento = explode("/",$fechaDeNacimiento);
        if($arregloFechaNacimiento[0]>31 || $arregloFechaNacimiento[1]>12 || $arregloFechaNacimiento[2]>2010){
            return false;
        }
    }
    return true;
}


$fecha = $_POST["fechaDeNacimiento"];
echo validarFechaNacimiento($fecha);


// echo "nombre: ".$_REQUEST["nombre"];



?>

