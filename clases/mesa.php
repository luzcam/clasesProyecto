<?php
class Mesa{
    private $numero;
    private $cantidadPersonas;

    public function __construct($numero,$cantidadPersonas){
        $this->numero=$numero;
        $this->cantidadPersonas=$cantidadPersonas;
    }
    public function mostrarMesa{
        return "{$this->numero} {$this->cantidadPersonas}";
    }

}
?>