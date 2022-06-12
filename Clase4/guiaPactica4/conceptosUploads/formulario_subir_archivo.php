<?php

if (isset($_POST['bt_enviar'])){
    print ("Nombre del archivo: ".$_FILES['archivo']['name']."<br>");
    print ("El mime Type: ".$_FILES['archivo']['type']."<br>");
    print ("Nombre Temporal: ".$_FILES['archivo']['tmp_name']."<br>");
    print ("Error: ".$_FILES['archivo']['error']."<br>");
    print ("Tamaño: ".$_FILES['archivo']['size']."<br>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario_subir_archivo.php" enctype="multipart/form-data" method="POST">
        Seleccione un archivo: <input type="file" name="archivo" id="archivo"><br>
        <input type="submit" value="Enviar" name="bt_enviar" id="bt_enviar"><br>
    </form>

</body>
</html>