<?php
abstract class Pokemons{
    public $numero;
    public $nombre;
    public $tipo;
    public function __construct($numero,$nombre,$tipo)
    {
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }
    public abstract function realizarAtaque():string;
}