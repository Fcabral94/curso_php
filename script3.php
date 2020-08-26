<?php  
/*
En este scrip si el auto es "206" imprime "es un peugeot"
Si el auto es un "megane" imprime "es un renault"
Si le ponemos otra cosa nos dara un "no se que auto es"

la funcion $_GET te toma el valor cel valor que le pasas como parametro en la url 
en este caso serian "206", "megane",etc

*/

$auto = $_GET['auto'];   
if ($auto == "206") {
echo "es un peugeot";
} elseif ($auto == "megane") {
 echo "es un renault";
} else {
echo "no se que auto es";
}

