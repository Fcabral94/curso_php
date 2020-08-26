<?php
/*Realizar un script que elimine el ultimo elemento de un array.
Por ejemplo [4,5,7] => [4,5]*/

$numeros = array(2,3,4,5,6,7,8);
unset($numeros[6]);
var_dump($numeros);

