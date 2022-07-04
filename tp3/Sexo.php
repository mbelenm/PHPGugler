<?php

class Sexo
{
    private $_idSexo;
    private $_descripcion;
    
    public function __construct($idSexo, $descripcion)
    {
        $this->_idSexo = $idSexo;
        $this->_descripcion = $descripcion;
    }
    
    public function getIdSexo()
    {
        return $this->_idSexo;
    }
    
    public function getDescripcion()
    {
        return $this->_descripcion;
    }
    
    //toString
    public function __toString()
    {
        return $this->_idSexo . " - " . $this->_descripcion;
    }

    //array  dos objetos de la clase Sexo
    public static function getSexos()
    {
        return array(
            new Sexo('M', 'Masculino'),
            new Sexo('F', 'Femenino'),
        );



}


}
?>