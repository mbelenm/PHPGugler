<?php
ini_set("display_errors", "on");
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
   
    public function _validarTelefono($valor)
    {
        $valor = preg_replace('/[^0-9]+/', '', $valor);
        if (strlen($valor) == 10) {
            return true;
        } else {
            return false;
        }
    }






    public function _validarEmail($valor)
    {
        if (filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

	public function validar()
	{
		switch ($this->_tipo)
		{
			case self::TIPO_TELEFONO:
				return $this->_validarTelefono($this->_valor);
				break;

			case self::TIPO_EMAIL:
				return $this->_validarEmail($this->_valor);
				break;

			default:
				return false;
		}
	}
}







?>




<!--LA DIFERENCIA DE USO entre el constructor y los Setters es que La idea de los setters es poder modificar el estado interno de tu objeto, una vez que ya ha sido construido   -->