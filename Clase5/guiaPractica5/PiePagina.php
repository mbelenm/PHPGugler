<?php

class PiePagina
{
    private $_autor;
    private $_webAutor;
    private $_emailAutor;
    private $_anioDesde;
    private $_anioHasta;
    private $_alineacion;
    private $_piePagina;

    public function __construct($autor,$webAutor,$emailAutor,$anioDesde,$anioHasta,$alineacion)
    {
        $this->_autor= $autor;
        $this->_webAutor= $webAutor;
        $this->_emailAutor= $emailAutor;
        $this->_anioDesde= $anioDesde;
        $this->_anioHasta= $anioHasta;
        $this->_alineacion= $alineacion;
    }

    private function _armarPiePagina()
    {
        $this->_piePagina = "<p align='".$this->_alineacion."'> &copy;".$this->_anioDesde." - ".$this->_anioHasta." ".$this->_autor."<br/>".$this->_webAutor." / ".$this->_emailAutor."</p>";
    }

    public function mostrarPiePagina()
    {
        $this->_armarPiePagina();
        return $this->_piePagina;
    }
}

?>