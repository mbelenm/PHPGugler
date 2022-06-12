<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['titulo_pagina'] ?></title>
</head>
<body bgcolor="<?php echo $_SESSION['color_fondo'] ?>">
    <?php
        echo "<font color='{$_SESSION['color_fuente']}'>";
        echo "Se ha destruido la session actual.";
        echo "</font>"
    ?>
</body>
</html>

<?php
    session_destroy();
?>