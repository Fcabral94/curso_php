<?php
/*
Esta es la funciona abreviada del "if/else"
donde declaramos que si el apelldio es "cabral" nos deolvera "Esta loco"
Si el apellido es otro nos devolvera "no esta loco"

*/
$apellido = $_GET['apellido'];
$result = ($apellido == "cabral") ? "Esta loco" : 'no esta loco';
echo $result;

echo '<br>';

$apellido2 = $_GET['apellido2'];
if ($apellido2 == "tolosa") {
    echo "es chaqquin";
}else {
    echo "no es chaquin";
}
