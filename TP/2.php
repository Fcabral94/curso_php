<?php
/*2- Realizar un script que transforme un string separado por comas en un array e imprimirlo.
Por ejemplo '2,1,4,5,2' => [2,1,4,5,2].
Ayuda: puede utilizar la funcion explode() de php*/

$numeros = "2,3,4,5,6,7,8";
$array = explode(",",$numeros);
var_dump($array);
echo count($array);