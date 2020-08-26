<?php
$numeros = array(1,2,3,4,5);
foreach ($numeros as $valor) {
    echo $valor;
    echo '<br>'; 
}
echo '<br>'; 
$numeros = [1,2,3,4,5];
foreach ($numeros as $valor) {
    echo $valor +200;
    echo '<br>'; 
}
echo '<br>'; 
$sumatotal = 0;
$numeros = [1,2,3,4,5];
foreach ($numeros as $valor)
{
    $sumatotal = $valor + $sumatotal;
} 
echo $sumatotal;
echo '<br>';

$valortotal = 0 ;
$numeros = [1,2,3,4,5];
foreach ($numeros as $valor)
{
    $valortotal = 1 + $valortotal;
}
echo  $valortotal;



/*tarea
1 realizar un script que calcule el promedio de loe numeros de un array
2 realizar un script que devuelva el mayor numero de un array
3 realizar un script que me devuelva el menot valor de un array
no se puede usar funcion primitivas de php 