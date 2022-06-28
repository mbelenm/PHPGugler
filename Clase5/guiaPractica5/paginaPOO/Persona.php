<?php

class Persona{
    private $_tipoDocumento;
    private $_numeroDocumento;
    private $_apellidos;
    private $_nombres;
    private $_domicilio;
    private $_telefono;
    private $_telefonoTrabajo;
    private $_telefonoMovil;
    private $_correoElectronico;
    private $_hermanos = array();

    public function cambiarDomicilio($domicilio){
        $this->_domicilio= $domicilio;
    }

    public function cambiarNumeroTelefono($telefono){
        $this->_telefonoMovil= $telefono;
    }

    public function cambiarNumeroTelefonoMovil($telefonoMovil){
        $this->_telefonoMovil= $telefonoMovil;
    }

    public function cambiarNumeroTelefonoTrabajo($telefonoTrabajo){
        $this->_telefonoTrabajo= $telefonoTrabajo;
    }

    public function cambiarCorreoElectronico($correoElectronico){
        $this->_correoElectronico= $correoElectronico;
    }

    public function agregarHermano(Persona $oHermano)
    {
        $this->_hermanos[] = $oHermano;
    }
    
    public function __toString()
    {
        return $this->_apellidos.",".$this->_nombres;
    }

}

$oPersona = new Persona();
$oPersona->cambiarDomicilio('J.D Peron 764');
$oPersona->cambiarNumeroTelefono('3442587473');
$oPersona->cambiarNumeroTelefonoMovil('3442587473');
$oPersona->cambiarNumeroTelefonoTrabajo('3442587473');
$oPersona->cambiarCorreoElectronico('maycolsantia@gmail.com');

$oHermanoPersona = new Persona();
$oPersona->agregarHermano($oHermanoPersona);
?>