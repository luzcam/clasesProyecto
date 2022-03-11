<?php
class Reservacion{
    private $nombreCliente;
    private $telefono;
    private $numPersonas;
    private $dia;
    private $hora;
    private $fechaActual;

    public function __construct($nombreCliente, $telefono, $numPersonas,$dia,$hora,$fechaActual){
        $this->nombreCliente=$nombreCliente;
        $this->telefono=$telefono;
        $this->numPersonas=$numPersonas;
        $this->dia=$dia;
        $this->hora=$hora;
        $this->fechaActual=$fechaActual;
    }
    public function mostrarReservación{
        return "{$this->nombreCliente} {$this->telefono} {$this->numPersonas} {$this->dia} {$this->hora}";
    }
    public function Agregar(){
        //Agregar nueva reservación
    }
    public function Modificar(){
        //Modificar reservación
    }
    public function Cancelar(){
        //Cancelar reservacion
    }

}
?>