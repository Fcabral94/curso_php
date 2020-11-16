<?php
require_once "Calculable.php";
class ImpuestoC implements Calculable
{
    public $ingreso;
    
    public function __construct($ingreso)
    {
        $this->ingreso = $ingreso;
        
    }
    public function calcularImpuesto()
    {
        return (10* $this->ingreso) / 100 ;
    }
}
$ImpuestoC = new ImpuestoC(100);
var_dump($ImpuestoC->calcularImpuesto());