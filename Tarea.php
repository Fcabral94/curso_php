<?php

$value = $_GET['name'];
echo 'El nombre ingresado es: '.$value;
echo '<br>';
if ($value == "pedro") {
    echo "es un crack";
} else {
    echo "todavia le falta";
}
