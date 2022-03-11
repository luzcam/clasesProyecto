<?php
class Ingrediente{
    private $nombre;
    private $unidadDeMedida;
    private $cantAlmacen;
    private $precio;

    public function __construct(){
        $this->nombre=$nombre;
        $this->unidadDeMedida=$unidadDeMedida();
        $this->cantAlmacen=$cantAlmacen;
        $this->precio=$precio;
    }
    public function MostrarIngrediente(){
        //Mostrar las características del ingrediente
        return "{$this->nombre}{$this->unidadDeMedida}{$this->cantAlmacen}{$this->precio}";
    }
    public function Agregar(){
        //Agregar un nuevo ingrediente
    }
    public function Eliminar(){
        //Eliminar un ingrediente ya agregado
    }
    public function Modificar(){
        //Modificar un ingrediente ya agregado
    }
}
?>