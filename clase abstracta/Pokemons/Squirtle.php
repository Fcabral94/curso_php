<?php
require_once "Pokemons.php";

class Squirtle extends Pokemons
{
    public function realizarAtaque(): string
    {
        return "Squirtleeeee";
    }
}
$squirtle = new Squirtle(2,"squirtle","agua");
echo $squirtle->realizarAtaque();