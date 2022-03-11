<?php
class catAlimento{
    private $nombre;
    private $area;
    private $tipoCocina;

    public function __construct($nombre,$area,$tipoCocina){
        $this->nombre=$nombre;
        $this->area=$area;
        $this->tipoCocina;   
    }
    public function Mostrar_catAlimento(){
        //Mostrar las características del categoria
        return "{$this->nombre}{$this->area}{$this->tipoCocina}";
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