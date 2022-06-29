<?php

class Contacto
{
    CONST TIPO_TELEFONO = 1;
    CONST TIPO_EMAIL = 2;

    private $_tipo;
    private $_valor;

    public function __construct($tipo, $valor)
    {
        $this->_tipo = $tipo;
        $this->_valor = $valor;
    }

    public function getTipo()
    {
        return $this->_tipo;
    }

    public function getValor()
    {
        return $this->_valor;
    }
    //Validar que contenga al menos 10 dígitos y separado por guiones
    public function validar($tipo,$valor)
    {
        if ($tipo != self::TIPO_TELEFONO && $tipo != self::TIPO_EMAIL) {
            return false;
        }else{
            if($tipo == self::TIPO_TELEFONO){
                //Validar que contenga al menos 10 dígitos y separado por guiones
                if(!preg_match("/^[0-9]{10}$/", $valor)){
                    return false;
                }else{
                    return true;
                }                

            }elseif($tipo == self::TIPO_EMAIL){
                if(!filter_var($valor, FILTER_VALIDATE_EMAIL)){
                    return false;
                }else{
                    return true;
                };
            }
        }
    }
    //Metodos para visulizar constantes
    public function verConstanteTelefono(){
        return self::TIPO_TELEFONO;
    }
    public function verConstanteEmail(){
        return self::TIPO_EMAIL;
    }
}

// $oContacto = new Contacto(1, "1234567890");

// echo $oContacto->verConstante();

// echo $oContacto->validar(1, "18234567890");


?>