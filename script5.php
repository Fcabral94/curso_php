<?php
/*
switch en un condicional que nos permite asignar varios "nombres"
y depende cual sea el asignado va a devolver su echo 
si no esta definido en "case"   dara la respuesta definida en "default"

*/
$nombre = $_GET['nombre'];
switch ($nombre) {
    case "sergio":
        echo "es el teacher";
        break;
    case "adri";
        echo "es mamu";
        break;
     case "vale";
        echo "es la novia de conejo";
        break;
    default:
        echo "no lo conozco";
        break;
}
