<?php
require_once "Pokemons.php";

class Charmander extends Pokemons
{
    public function realizarAtaque(): string
    {
        return "Charmanderrrrrrrrrr";
    }
}
$charma = new Charmander(3,"charmander","fuego");
echo $charma->realizarAtaque();