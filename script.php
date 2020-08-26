<?php

/* de esta menara se pueda hace comentarios 
sob re 
varias 
linass */

$nombre = "perrolito"; //todas las variables iniciasn con el signo $ . el iguel asigna una variable
$nombre = "hola " . $nombre; //el punto concatena string
echo $nombre . PHP_EOL;
echo '<br>';    //hace un salto de pagina 

function restar($n1, $n2)
{    //definicion de la funcion
    return $n1 - $n2;
}
print restar(4, 6);
echo '<br>';  //hace un salto de pagina

function multiplicar($n1, $n2)
{    //definicion de la funcion
    return $n1 * $n2;
}
print multiplicar(4, 6);
echo '<br>'; //hace un salto de pagina

function dividir($n1, $n2)
{    //definicion de la funcion
    return $n1 / $n2;
}
print dividir(4, 6);
echo '<br>';

$autos = ["206", "senda", "corsa"]; //el array entre corchetes declara los autos 
var_dump($autos);
echo '<br>';

echo 'Autos con precios';
echo '<br>';
foreach ($autos as $key => $value) {    //por cada valor del array ejecuta un precio
    echo $value . ' $gato';
    echo '<br>';
}

//---------------------------------------------------------------------------
$value = "M";
if ($value == "F") {
    echo "el value es F";
} else {
    echo "el value no es S";
}
