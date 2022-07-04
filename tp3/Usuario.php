<?php
ini_set("display_errors", "on");
class Usuario
{
    private $_nombre;
    private $_contrasenia;

    public function __construct($nombre, $contrasenia)
    {
        $this->_nombre = $nombre;
        $this->_contrasenia = $contrasenia;
    }

    
    public function validarContrasenia()
    {
        if(preg_match("/^[a-zA-ZñÑ0-9]{6,25}$/", $this->_contrasenia)){
            return true;
        }else{
            return false;
        }
    }

    //setter
    public function setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function setContrasenia($contrasenia)
    {
        $this->_contrasenia = $contrasenia;
    }


    public function  getContraseniaEnmascarada()
    {
    
        $contrasenia =  preg_replace(array('/./'), '*', $this->_contrasenia);
        return $contrasenia;
    }


    //




    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getContrasenia()
    {
        return $this->_contrasenia;
    }

    //Metodo toString
    public function __toString()
    {
        return $this->_nombre . " - " . $this->_contrasenia;
    }
}

// $oUsuario1 = new Usuario("maycol22","Espectriñ222o9");
// $pass = $oUsuario1->getContrasenia();
// echo $pass;
// echo $oUsuario1->validarContrasenia($pass);
// echo $pass;
// echo $oUsuario1->getContraseniaEnmascarada($pass);
// echo $pass;







?>