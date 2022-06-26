<?php
/* Defino la clase */
class HolaMundo
{
    /* defino un atributo privado que contiene el mensaje */
    private $_saludo = 'Hola mundo!';

    /* defino un metodo para saludar */
    public function saludar(){
        return $this->_saludo;
    }

}

/* creo el objeto */
$oHolaMundo = new HolaMundo();
/* llamo al metodo */
echo $oHolaMundo->saludar();

?>