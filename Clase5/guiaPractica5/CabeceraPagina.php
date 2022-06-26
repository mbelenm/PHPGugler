<?php

class CabeceraPagina{
    private $_titulo;
    private $_alineacionTitulo;
    private $_cabeceraPagina = '' ;

    public function __construct($titulo, $alineacionTitulo)
    {
        $this->_titulo = $titulo;
        $this->_alineacionTitulo = $alineacionTitulo;
    }
    
    private function _armarCabeceraPagina()
    {
        $this->_cabeceraPagina= "<h1 align=".$this->_alineacionTitulo.">".$this->_titulo."</h1>";
    }
    
    public function mostrarCabecera(){
        $this->_armarCabeceraPagina();
    }

}


?>