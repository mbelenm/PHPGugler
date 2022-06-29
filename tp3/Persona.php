<?php
ini_set("display_errors", "on");

require_once'TipoDocumento.php';
require_once'Sexo.php';
require_once'Provincia.php';
require_once'Usuario.php';
require_once'Contacto.php';

class Persona{
    private $_apellido;
    private $_nombre;
    private $_numeroDocumento;
    private $_tipoDocumento;
    private $_sexo;
    private $_usuario;
    private $_nacionalidad;
    private $_email;
    private $_telefono;
    private $_celular;
    private $_domicilio;
    private $_provincia;
    private $_localidad;
    
    
    
    public function __construct()
    {
        $oTipoDocumento = new TipoDocumento("DNI","descripciopn");
        $this->_nombre = " ";
        $this->_apellidos = " ";
        $this->_numeroDocumento = 0;
        $this->_tipoDocumento = $oTipoDocumento;
        
    }

    public function getTipoDocumento(){
        return $this->_tipoDocumento;
    }
    
    
}


$oPersona1 = new Persona();
echo $oPersona1->getTipoDocumento();

?>

<!-- •
Atributos privados:
◦_apellido tipo String.
◦_nombre tipo String.
◦_numeroDocumento tipo int.
◦_tipoDocumento tipo TipoDocumento.
◦_sexo tipo Sexo.
◦_usuario tipo Usuario.
◦_nacionalidad tipo String.
◦_email tipo Contacto.
◦_telefono tipo Contacto.
◦_celular tipo Contacto.
◦_domicilio tipo String.
◦_provincia tipo Provincia.
◦_localidad tipo String. -->