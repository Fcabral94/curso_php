<?php
require_once "FiguraGeometricaInterface.php";
class Triangulo implements FiguraGeometrica
{

    public $base;
    public $altura;
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea()
    {
        return ($this->base * $this->altura) / 2;
    }
}
$triangulo = new triangulo(5,9);
var_dump($triangulo->calcularArea());