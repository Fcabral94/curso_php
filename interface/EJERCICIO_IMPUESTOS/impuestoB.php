<?php
require_once "Calculable.php";
class ImpuestoB implements Calculable
{
    public $ingreso;
   
    public function __construct($ingreso)
    {
        $this->ingreso = $ingreso;
        
    }
    public function calcularImpuesto()
    {
        return (30 * $this->ingreso) / 100 ;
    }
}
$ImpuestoB = new ImpuestoB(100);
var_dump($ImpuestoB->calcularImpuesto());
