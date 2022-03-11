<?php
class catIngrediente{
    private $nombre;
    
    public function __construct($nombre){
        $this->nombre=$nombre;
    }
    public function MostrarcatIngrediente(){
        //Mostrar las características del categoria
        return "{$this->nombre}";
    }
    public function Agregar(){
        //Agregar una nueva categoria
    }
    public function Eliminar(){
        //Eliminar una categoria ya agregada
    }
    public function Modificar(){
        //Modificar una categoria ya agregada
    }
}
 ?>