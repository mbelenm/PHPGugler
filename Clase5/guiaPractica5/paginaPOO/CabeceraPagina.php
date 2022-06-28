<?php

class CabeceraPagina{
    private $_titulo;
    private $_alineacionTitulo;
    private $_cabeceraPagina = "" ;
    /* Cuando cree el objeto $oCabeceraPagina le paso el titulo y la alineacion, esto puedo hacerlo gracias al constructor; los parametros que le paso al constructor son los mismo a los cuales asgino dentro de la misma funcion (1) */
    public function __construct($titulo, $alineacionTitulo)
    {
        $this->_titulo = $titulo;/* (1) */
        $this->_alineacionTitulo = $alineacionTitulo;/* (2) */
    }
    
    private function _armarCabeceraPagina()
    {
        $this->_cabeceraPagina= "<h1 align=".$this->_alineacionTitulo.">".$this->_titulo."</h1>";
    }
    
    public function mostrarCabecera(){
        $this->_armarCabeceraPagina();
        return $this->_cabeceraPagina;
    }

    public function __toString()
    {
        return $this->_titulo;
    }

}


?>