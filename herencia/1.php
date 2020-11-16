<?php
class Persona
{
    public $nombre;
    public $apellido;
    public $fecha_nac;
    public function __construct($nombre, $apellido, $fecha_nac)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nac = $fecha_nac;
    }

    function get_nombre()
    {
        return $this->nombre;
    }
    function get_apellido()
    {
        return $this->apellido;
    }
    function get_fecha_nac()
    {
        return $this->fecha_nac;
    }
}



class Empleado extends Persona
{ 
}

$oscar = new Empleado('Oscar','Perez','20/02/78' );
$gustavo = new Empleado('Gustavp','Bordagaray','20/01/62');
$pelado = new Empleado ('pelado','Boton','25/04/60');

echo $gustavo->get_apellido();

