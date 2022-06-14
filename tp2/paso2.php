<?php
ini_set("display_errors", "on");
session_start();

$_SESSION["nombreUsuario"] = $_POST["nombreUsuario"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["apellido"] = $_POST["apellido"];
$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["tipoDocumento"] = $_POST["tipoDocumento"];
$_SESSION["numeroDocumento"] = $_POST["numeroDocumento"];
$_SESSION["sexo"] = $_POST["sexo"];
$_SESSION["nacionalidad"] = $_POST["nacionalidad"];



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
        <h2>Informacion de Contacto:</h2>
            <form action="paso3.php" method="post" enctype="multipart/form-data">
                Correo Electronico: <input type="email" name="email" id="email"><br>
                Telefono: <input type="tel" name="telefono" id="telefono"><br>
                Celular: <input type="tel" name="celular" id="celular"><br>
                Domicilio: <input type="text" name="domicilio" id="domicilio"><br>
                Provincia: 
                <select name="provincia" id="provincia">
                    <option value="entreRios">Entre Rios</option>
                    <option value="santaFe">Santa Fe</option>
                    <option value="corrientes">Corrientes</option>
                    <option value="buenosAires">Buenos Aires</option>
                </select><br>
                Localidad: <input type="text" name="localidad" id="localidad"><br>
                
                <button type="button" onclick="location.href='paso1.php'">anterior</button>

                <input type="submit" value="siguiente" name="bt_siguiente">


            </form>
    </div>
    <?php include_once("/opt/lampp/htdocs/PHPGugler/tp2/includes/php/pie.php"); ?>




</body>
</html>