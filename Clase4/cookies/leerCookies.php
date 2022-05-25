<?php

// var_dump($_COOKIE);

if($_COOKIE["color"]=="blanco" || $_COOKIE["color"]=="negro"){
    echo "tenes cookies correctas";
}else{
    setcookie("color","",time()+(60*60*24*30));
    echo "adulteraste las cookies";
}

?>