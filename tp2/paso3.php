<?php
ini_set("display_errors", "on");
session_start();
if(isset($_POST['bt_siguiente_2'])){
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["celular"] = $_POST["celular"];
    $_SESSION["domicilio"] = $_POST["domicilio"];
    $_SESSION["provincia"] = $_POST["provincia"];
    $_SESSION["localidad"] = $_POST["localidad"];
    $_SESSION["telefono"] = $_POST["telefono"];
}

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
            Nombre de Usuario: <?php echo $_SESSION["nombreUsuario"] ?><br>
            Apellido: <?php echo $_SESSION["apellido"] ?><br>
            Nombre: <?php echo $_SESSION["nombre"] ?><br>
            Tipo de Documento: <?php echo $_SESSION["tipoDocumento"] ?><br>
            Numero de Documento: <?php echo $_SESSION["numeroDocumento"] ?><br>
            Genero: <?php echo $_SESSION["sexo"] ?><br>
            Nacionalidad: <?php echo $_SESSION["nacionalidad"] ?><br>

        </fieldset><br>       
    </div>
    <div>
        <fieldset>
            <legend>Informacion de Contacto</legend>
            Correo Electronico: <?php echo $_SESSION["email"] ?><br>
            Celular: <?php echo $_SESSION["celular"] ?><br>
            Telefono: <?php echo $_SESSION["telefono"] ?><br>
            Domicilio: <?php echo $_SESSION["domicilio"] ?><br>
            Provicia: <?php echo $_SESSION["provincia"] ?><br>
            Localidad: <?php echo $_SESSION["localidad"] ?><br>
        </fieldset><br>
    </div>
    <div>
        <button type="button" onclick="location.href='paso2.php'">anterior</button>
        <button type="button" onclick="location.href='finalizar.php'">guardar</button>
    </div>
    <?php include_once("includes/php/pie.php"); ?>
</body>
</html>