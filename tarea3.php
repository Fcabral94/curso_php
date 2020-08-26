<?php
$numeros = [1, 2, 3, 4, 5];

$suma = array_sum($numeros);
$total_numeros = count($numeros);
$media = $suma / $total_numeros ; 
echo $media;

echo '<br>';


echo max($numeros);

echo '<br>';


echo min($numeros);
