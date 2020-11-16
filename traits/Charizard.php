<?php
require_once "Pokemons.php";
class Charizard
{
    use PokemonsTrait;

    public function realizarAtaque(): string
    {
        return "chariiiiiiiiii";
    }
}







$chari = new Charizard;
echo $chari->realizarAtaque();