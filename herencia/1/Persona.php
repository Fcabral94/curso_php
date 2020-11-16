<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function get_nombre()
    {
        return $this->nombre;
    }
    public function get_apellido()
    {
        return $this->apellido;
    }
    public function get_edad()
    {
        return $this->edad;
    }
}
