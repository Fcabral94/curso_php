<?php
/* 
crear un script que dado un parametro llamado $numero que se pasa por URL
te de devuelve si es par o impar

*/
$value = $_GET['value'];
if (is_numeric($value))

     echo "$value es un numero";
 else {
    echo "$value no es un numero";
    die();
}
echo '<br>';
if ($value % 2 == 0) {
    echo "y es par";
} else {
    echo "y es impar";
}
