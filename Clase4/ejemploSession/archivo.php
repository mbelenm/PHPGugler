<?php

session_start();
$_SESSION['titulo_pagina']="ejemplo de session PHP";
$_SESSION['color_texto']="verde";

echo session_id();


?>