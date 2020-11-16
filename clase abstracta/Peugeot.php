<?php
require_once "Auto.php";

 class Peugeot extends Auto
{
    public function acelerar() : string {
        return "cricricri"; 
}
}
$peugeot = new Peugeot ("peugeot");
echo $peugeot->acelerar();
