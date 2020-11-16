<?php
abstract class Auto
{
    public $modelo;
    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }
    abstract public function acelerar(): string;
}
