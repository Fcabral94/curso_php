<?php
require_once "Pokemons.php";

class Pikachu extends Pokemons
{
    public function realizarAtaque(): string
    {
        return "Pikachuuuuuuuuuuuu";
    }
}
$pika = new Pikachu(1,"Pikachu","electrico");
echo $pika->realizarAtaque();