<?php
require_once "FiguraGeometricaInterface.php";
class Cuadrado implements FiguraGeometrica
{

    public $base;
   
    public function __construct($base)
    {
        $this->base = $base;
    
    }
    public function calcularArea()
    {
        return ($this->base * $this->base);
    }
}
$cuadrado = new Cuadrado(5);
var_dump($cuadrado->calcularArea());