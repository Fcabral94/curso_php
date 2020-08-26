<?php
/*Genera un array numérico de al menos 5 elementos aleatoriamente haciendo uso de la función mt_rand()
Recorre el bucle y muestralo por pantalla.*/

$random = array (mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000),mt_rand(0,1000));
foreach ($random as $value) {
     echo $value;
     echo '<br>';

}