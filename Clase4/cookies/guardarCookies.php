<?php

echo "creo una cookie<br>";

$valor="blanco";
setcookie("color",$valor,time()+(60*60*24*30));

echo "cookie guardada en el navegador con exito.<br>";

?>