<?php

function validarEmail(&$email){
    $email = trim($_POST["email"]);
    /* Para buscar un caracter con preg_match() el caracter a buscar debe estar entre "/ /". */
    if (preg_match("/@/",$email)){
        return true;
    }else{
        return false;
    };
}




?>
