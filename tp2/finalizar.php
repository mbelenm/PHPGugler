<?php
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
    <?php include_once("/opt/lampp/htdocs/PHPGugler/tp2/includes/php/cabecera.php"); ?>
    <?php session_destroy(); ?>  
    <div>
        <fieldset>
            <button type="button" onclick="location.href='paso1.php'">
                Presione aqui para volver al inicio
            </button>
        </fieldset>
    </div>
    <?php include_once("/opt/lampp/htdocs/PHPGugler/tp2/includes/php/pie.php"); ?>
</body>
</html>

