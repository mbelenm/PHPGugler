<?php
ini_set("display_errors", "on");
session_start();

$_SESSION["email"] = $_POST["email"];
$_SESSION["telefono"] = $_POST["telefono"];
$_SESSION["celular"] = $_POST["celular"];
$_SESSION["domicilio"] = $_POST["domicilio"];
$_SESSION["provincia"] = $_POST["provincia"];
$_SESSION["localidad"] = $_POST["localidad"];

// echo $_SESSION["email"];
// echo $_SESSION["telefono"];
// echo $_SESSION["celular"];
// echo $_SESSION["domicilio"];
// echo $_SESSION["provincia"];
// echo $_SESSION["localidad"];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGU</title>
</head>
<body>
    <?php include_once("/opt/lampp/htdocs/PHPGugler/tp2/includes/php/cabecera.php"); ?>  

    <div>
        <h2>Informacion de Alta de Usuario</h2>




        
    </div>






    <?php include_once("/opt/lampp/htdocs/PHPGugler/tp2/includes/php/pie.php"); ?>


</body>
</html>