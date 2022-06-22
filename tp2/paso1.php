<?php
// ini_set("display_errors", "on");
session_start();
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
    <?php include_once("includes/php/cabecera.php"); ?>
    <div>
        <fieldset>
            <legend>Informacion Personal</legend>
            <form action="paso2.php" method="post" enctype="multipart/form-data">
                Nombre de Usuario: <input type="text" name="nombreUsuario" id="nombreUsuario"><br>
                Contraseña: <input type="password" name="password" id="password"><br>
                Apellido: <input type="text" name="apellido" id="apellido"><br>
                Nombre: <input type="text" name="nombre" id="nombre"><br>
                Tipo de Documento: 
                <select name="tipoDocumento" id="tipoDocumento">
                    <option value="dni">DNI</option>
                    <option value="lc">LC</option>
                    <option value="le">LE</option>
                </select><br>
                Numero de Documento: <input type="text" name="numeroDocumento" id="numeroDocumento"><br>

                Sexo:<br>
                Masculino 
                <input type="radio" name="sexo" value="masculino" id="masculino"><br>
                Femenino 
                <input type="radio" name="sexo" value="femenino" id="femenino"><br>

                Nacionalidad: <input type="text" name="nacionalidad" id="nacionalidad"><br>
                <input type="submit" value="siguiente" name="bt_siguiente_1">
            </form>
        </fieldset>
    </div>
    <?php include_once("includes/php/pie.php"); ?>
</body>
</html>

