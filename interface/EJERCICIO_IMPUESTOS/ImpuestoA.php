<?php
require_once "Calculable.php";
class ImpuestoA implements Calculable
{
    public $ingreso;

    public function __construct($ingreso)
    {
        $this->ingreso = $ingreso;
    }
    public function calcularImpuesto()
    {
        return (50 * $this->ingreso) / 100 ;
    }
}
$ImpuestoA = new ImpuestoA(100);
var_dump($ImpuestoA->calcularImpuesto());
