<?php

class Provincia
{
    private $_idProvincia;
    private $_descripcion;
    
    public function __construct($idProvincia, $descripcion)
    {
        $this->_idProvincia = $idProvincia;
        $this->_descripcion = $descripcion;
    }
    
    public function getIdProvincia()
    {
        return $this->_idProvincia;
    }
    
    public function getDescripcion()
    {
        return $this->_descripcion;
    }
    
    
}

?>