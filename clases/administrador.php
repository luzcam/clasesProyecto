<?php 
class Administrador {
    private $usuario;
    private $clave;
    private $nombres;
    private $apellidoPaterno;
    private $apellidoMaterno;

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

    public function AgregarEmpleado{
        /* Agregar empleado */
    }
    public function IniciarSesion($usuario,$clave){
        /*Iniciar sesión
    }
}

?>