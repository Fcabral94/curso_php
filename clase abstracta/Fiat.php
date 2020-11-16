<?php
require_once "Auto.php";

 class Fiat extends Auto
{
    public function acelerar() : string {
        return "rammmmmmmmmmmmmmmmmmm"; 
}
}
$fiat = new Fiat("fiat");
echo $fiat->acelerar();