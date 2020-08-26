<?php
// crear una funcion que retorne el area de un triangulo 

function areaTriangulo($base,$altura){
   return ($base*$altura)/2;
}


//calcular area de un circulo
function areaCirculo($radio){
    return (3.14*$radio)*$radio;
}

//calcular el area de un cuadrado

function areaCuadrado($base,$altura){
    return $base*$altura;
}

//calcular area de un pentagono

function areaPentagono($perimetro,$apotema){
    return ($perimetro*$apotema)/2;
}
