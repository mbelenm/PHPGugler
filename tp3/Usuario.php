<?php

class Usuario
{
    private $_nombre;
    private $_contrasenia;

    public function __construct($nombre, $contrasenia)
    {
        $this->_nombre = $nombre;
        $this->_contrasenia = $contrasenia;
    }

    //Metodo para validar contraseña con al menos 6 caracteres y un numero y una letra
    public function validarContrasenia($contrasenia)
    {
        if (strlen($contrasenia) < 6) {
            return false;
        } else {
            if (!preg_match("/[0-9]/", $contrasenia)) {
                return false;
            } else {
                if (!preg_match("/[a-z]/", $contrasenia)) {
                    return false;
                } else {
                    if (!preg_match("/[A-Z]/", $contrasenia)) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }
        }
    }


    public function  getContraseniaEnmascarada($contrasenia)
    {
        $this->_contrasenia = $contrasenia;
        $contrasenia = str_repeat("*", strlen($contrasenia));
        return $contrasenia;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getContrasenia()
    {
        return $this->_contrasenia;
    }
}






?>