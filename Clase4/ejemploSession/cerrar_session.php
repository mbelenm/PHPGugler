<?php

session_start();
echo "Antes de destruir la sesion";
echo session_id();



session_destroy();
echo "Session destruida";
echo session_id();

?>