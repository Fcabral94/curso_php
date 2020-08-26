<?php
/*Realizar un script que transforme los valores de un array a un string.
Por ejemplo ['Sergio', 'Juan'] => 'Sergio - Juan'.
Ayuda: puede utilizar la función implode() de php.*/

$nombres = array("Franco","Sergio","Adriana","Valentina");
echo implode(",",$nombres);
