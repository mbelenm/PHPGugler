<?php

echo "Nombre: ".$_POST["nombre"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Practica 4</title>
</head>
<body>
    
    <form action="formulario4.php" method="post">
        Nombre: <input type="text" name="nombre" id=""><br>
        e-mail: <input type="email" name="correoElectronico" id=""><br>
        Pagina Web: <input type="url" name="paginaWeb" id=""><br>
        Comentario: <input type="text" name="comentario" id=""><br>
        <input type="submit" value="enviar" name="bt_enviar"><br>
    </form>


</body>
</html>