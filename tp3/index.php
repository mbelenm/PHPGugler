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

    private function __validar($tipo,$valor)
    {
        if ($tipo != 1 && $tipo != 2) {
            return false;
        }else{
            if($tipo == 1){
                //Validar que contenga al menos 10 dígitos y separado por guiones
                if(!preg_match("/^[0-9]{10}$/", $valor)){
                    return false;
                }else{
                    return true;
                }                

            }elseif($tipo == 2){
                if(!filter_var($valor, FILTER_VALIDATE_EMAIL)){
                    return false;
                }else{
                    return true;
                };
            }
        }
    }

    public function verConstante(){
        return self::TIPO_TELEFONO;
    }
}

$oContacto = new Contacto(1, "1234567890");

echo $oContacto->verConstante();


?>



