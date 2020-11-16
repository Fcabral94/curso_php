<?php
require_once "FiguraGeometricaInterface.php";
class Circulo implements FiguraGeometrica
{

    public $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }
    public function calcularArea()
    {
        return 3.14*($this->radio * $this->radio);
    }
}
$circulo = new circulo(10);
var_dump($circulo->calcularArea());
