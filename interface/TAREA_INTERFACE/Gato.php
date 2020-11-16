<?php
require_once "Animales.php";
class Gato implements Animales
{
    public function hacerRuido()
    {
        echo "MIAUUUUUUUUU";
    }
}
$salomon = new Gato();
$salomon->hacerRuido();