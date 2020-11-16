<?php
require_once "Animales.php";
class Vaca implements Animales
{
    public function hacerRuido()
    {
        echo "MUUUUUUU";
    }
}
$vaca = new Vaca();
$vaca->hacerRuido();