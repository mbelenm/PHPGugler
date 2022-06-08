<?php
session_start();
// var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo $_SESSION['titulo_pagina']; 
        ?>
    </title>
</head>
<body>
    <a href="cerrar_session.php">Cerrar Session</a><br>
    <a href="continuar_session.php">Continuar en Session</a><br>
    
</body>
</html>