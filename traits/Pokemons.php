<?php

trait PokemonsTrait
{
    public $nombbre;
    public $tipo;
    public $numero;

    public function getTemporada()
    {
        return "Temoporada 2";
    }
    public abstract function realizarAtaque(): string;
}
    