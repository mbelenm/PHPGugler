<?php

class TipoDocumento
{
    private $_idTipoDocumento;/// 1 2 3 
    private $_descripcion;/// dni lc le

    public function __construct($idTipoDocumento, $descripcion)
    {
        $this->_idTipoDocumento = $idTipoDocumento;
        $this->_descripcion = $descripcion;
    }
    
    public function getIdTipoDocumento()
    {   
        return $this->_idTipoDocumento;
    
        

    }

    public function getDescripcion()
    {

        return $this->_descripcion;


    }
    
    public function setIdTipoDocumento($idTipoDocumento)
    {
        $this->_idTipoDocumento = $idTipoDocumento;
    }

    public function setDescripcion($descripcion)
    {
        $this->_descripcion = $descripcion;
    }


    //Metodo toString
    public function __toString()
    {
        return $this->_idTipoDocumento . " - " . $this->_descripcion;
    }

}

?>