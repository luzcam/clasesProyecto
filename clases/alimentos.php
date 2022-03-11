<?php
class Alimentos{
    private $nombre;
    private $metPreparacion;
    private $precio;

    public function __construct($nombre,$metPreparacion,$precio){
        $this->nombre=$nombre;
        $this->metPreparacion=$metPreparacion;
        $this->precio=$precio;
    }
    public function MostrarAlimento(){
        //Mostrar las características del alimento
        return "{$this->nombre}{$this->metPreparacion}{$this->precio}";
    }
    public function Agregar(){
        //Agregar un nuevo alimento
    }
    public function Eliminar(){
        //Eliminar un alimento ya agregado
    }
    public function Modificar(){
        //Modificar un alimento ya agregado
    }
}
?>