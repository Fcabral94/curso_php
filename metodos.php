<?php
class Auto
{
    public static function senda()
    {
        return 'soy una sendae estatico';
    }


    public function golcito()
    {
        return 'soy un golcito';
    }
}
echo Auto::senda();

$golcito = new Auto();


