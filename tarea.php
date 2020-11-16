<?php

class Articulo
{
        public $nombre;
        public $precio;
        public $descripcion;
        public $ubicacion;

        function __construct($nombre, $precio, $descripcion, $ubicacion)
        {
                $this->nombre = $nombre;
                $this->precio = $precio;
                $this->descripcion = $descripcion;
                $this->ubicacion = $ubicacion;
        }

        function get_nombre()
        {
                return $this->nombre;
        }
        function get_precio()
        {
                return $this->precio;
        }
        function get_descripcion()
        {
                return $this->descripcion;
        }
        function get_ubicacion()
        {
                return $this->ubicacion;
        }
}

$lampara = new Articulo("h4", "300", "lampara alta y baja", "estanteria 3");
$parlante = new Articulo("parlante", "2500", "6x9", "estantedia 5");
$creeled = new Articulo("creeled", "2700", "cree led", "mostrador 2");
$funda = new Articulo("funda asientos", "4700", "funda para asiento universal", "pared atras");
$paragolpe = new Articulo("paragolpe delataro", "3600", "paragolpe delantero senda", "estanteria 8");

var_dump($lampara->get_nombre());
