<?php 
class Empleado {
    private $usuario;
    private $clave;
    private $nombres;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaNacimiento;
    private $CURP;
    private $domicilio;
    private $horario;
    private $puesto;

    public function __construct($usuario, $clave, $nombres, $apellidoPaterno, $apellidoMaterno)
    {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->nombres = $nombres;
        $this->apellidoPaterno =$apellidoPaterno;
        $this->apellidoMaterno=$apellidoMaterno;
    }

    public function NombreCompleto{
        return "{$this->nombres} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
    public function IniciarSesion($usuario,$clave,$puesto){
        /*Iniciar sesión*/
    }
    public function tomarOrden(){
        //Tomar una orden
    }
    public function cancelarOrden(){
        //Cancelar orden
    }
    public function asignarMesa(){
        //Asignar mesa al mesero
    }
    public function prepararAlimentos(){
        //Preparar alimentos
    }
    public function aperturaCaja(){
        //Apertura de caja
    }
    public function cierreCaja(){
        //Cierre de caja
    }
    public function facturar(){
        //Facturar
    }
    public function Cobrar(){
        //Cobrar
    }

}

?>