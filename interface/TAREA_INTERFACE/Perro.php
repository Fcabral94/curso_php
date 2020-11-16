<?php
require_once "Animales.php";
class Perro implements Animales
{
    public function hacerRuido()
    {
        echo "Guau";
    }
}
$lito = new Perro();
$lito->hacerRuido();