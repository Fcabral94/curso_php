<?php
$animales = array("perros", "gatos", "loros", "elefantes", "hamsters");
var_dump($animales);
echo '<br>';

$cantidad = count($animales);

echo  "La cantidad de elementos del array es $cantidad";

echo '<br>';

$numeros = array(5, 1, 7, 8, 3);
asort($numeros);

echo "el array ordenado de menor a mayor es el siguiente ";
var_dump($numeros);

echo '<br>';
arsort($numeros);
echo "el array ordenado de menor a mayor es el siguiente ";
var_dump($numeros);

echo '<br>';
sort($numeros);
echo "el array ordenado de menor a mayor con su nueva key es";
var_dump($numeros);

echo '<br>';
rsort($numeros);
echo "el array ordenado de mayor a menor con su key nueva es";
var_dump($numeros);

echo '<br>';
echo "el valor minimo del array es ";
echo min($numeros);
echo '<br>';
echo "el valor max del array es ";
echo max ($numeros);
echo '<br>';

echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>'; 
echo "la suma del array es ";
echo array_sum($numeros);

echo '<br>'; 


foreach ($numeros as $valor) {
    echo $valor + 0.50;   
}





