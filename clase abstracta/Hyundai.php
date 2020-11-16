<?php
require_once "Auto.php";

 class Hyundai extends Auto
{
    public function acelerar() : string {
        return "aaaaaaaaaaaatatatatatata"; 
}
}
$hyundai = new Hyundai('Hyundai');
echo $hyundai->acelerar();