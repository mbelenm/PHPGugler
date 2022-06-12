<?php

session_start();

$_SESSION['color_fondo']='red';
$_SESSION['color_fuente']='blue';
$_SESSION['titulo_pagina']='Trabajo con sessions en PHP';
$_SESSION['titulo_cuerpo_pagina']='Titulo de la pagina';
$_SESSION['texto_pagina']='Texto de la pagina';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['titulo_pagina'] ?></title>
</head>
<body>
    <a href="seguir_en_session.php">Seguir en session </a><br>
    <a href="destruir_la_session.php">Destruir la session</a><br>
</body>
</html>