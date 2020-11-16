<?php
require_once "Banana.php";
require_once "Manzana.php";

class FrutaContoller
{
    public function index()
    {
        $listFrutas = [];

        $listFrutas[] = new Banana("banana","amarilla","2k","30");
        $listFrutas[] = new Manzana("manzana","roja","1k","40");
        var_dump($listFrutas);
    }
    

}
