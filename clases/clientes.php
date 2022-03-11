<?php 
class Cliente {
    private $usuario;
    private $clave;
    private $nombres;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaNacimento;
    private $email;
    private $telefono1;
    private $telefono2;

    public function __construct($usuario, $clave, $nombres, $apellidoPaterno, $apellidoMaterno,$fechaNacimiento,$email,$telefono1,$telefono2)
    {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->nombres = $nombres;
        $this->apellidoPaterno =$apellidoPaterno;
        $this->apellidoMaterno=$apellidoMaterno;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->email=$email;
        $this->telefono1=$telefono1;
    }

    public function NombreCompleto{
        return "{$this->nombres} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
    public function IniciarSesion($usuario,$clave){
        /*Iniciar sesión
    }

    
}

?>