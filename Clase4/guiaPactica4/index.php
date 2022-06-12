<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proceso_formulario.php" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"><br>
        e-mail: <input type="email" name="email" id="email"><br>
        Pagina Web: <input type="url" name="paginaWeb" id="paginaWeb"><br>
        Comentario: <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea><br>
        <input type="submit" value="enviar" name="bt_enviar" id="bt_enviar"><br>
    </form>
</body>
</html>