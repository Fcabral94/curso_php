<?php
class Fruta
{
    public $nombre;
    public $color;
    public $peso;
    public $precio;
    public function __construct($nombre, $color, $peso, $precio)
    {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->peso = $peso;
        $this->precio = $precio;
    }
    function get_nombre()
    {
        return $this->nombre;
      
    }
    function get_color()
    {
        return $this->color;
    }
    function get_peso()
    {
        return $this->peso;
    }    
    function get_precio()
    {
        return $this->precio;
    }
}


