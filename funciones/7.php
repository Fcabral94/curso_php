<?php
//crear una funcion que simule el arrojar un dado, es decir que devuelva el valor entre 1y 6

function dadoRandom()
{
    echo mt_rand(1,6);
}

dadoRandom();
