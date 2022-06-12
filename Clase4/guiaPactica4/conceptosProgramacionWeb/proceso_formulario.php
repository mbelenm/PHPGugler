<?php
require_once('validar_formulario.php');

echo "<br>Nombre: ".$_POST["nombre"];

if (validarEmail($_POST["email"])){
    echo "<br>Correo Electronico: ".$_POST["email"];
}else{
    echo "<br>Correo electronico incorrecto.";
}

echo "<br>Pagina Web: ".$_POST["paginaWeb"];
echo "<br>Comentario: ".$_POST["comentario"];

?>