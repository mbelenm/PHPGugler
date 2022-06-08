<?php


session_start();
echo "Continuas en session <br> ";
echo "Titulo de pagina: ".$_SESSION['titulo_pagina']."<br>";
echo "Texto: ".$_SESSION['color_pagina']."<br>";
echo session_id();

?>