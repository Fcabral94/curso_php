<?php

/*tarea
1 realizar un script que calcule el promedio de loe numeros de un array
2 realizar un script que devuelva el mayor numero de un array
3 realizar un script que me devuelva el menot valor de un array
no se puede usar funcion primitivas de php */

$numeros = array(1, 4, 7, 5, 3, 9, 1, 5, 6, 10,4,6);
$sum = 0;
$totalnumeros = 0;
foreach ($numeros as $value) {
    $sum = $value + $sum;
    $totalnumeros++;
}
echo $sum / $totalnumeros;

echo '<br>';

$mayor = 0;
foreach ($numeros as $value) {
    if ($mayor < $value) {
        $mayor = $value;
    }
}
echo $mayor;

echo '<br>';


foreach ($numeros as $value) {
    if ($mayor > $value) {
        $mayor = $value;
    }
}
echo $mayor;

echo '<br>';

echo $totalnumeros/2;