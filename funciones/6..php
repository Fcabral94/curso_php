<?php
$numero = $_GET ["numero"];
function calcularImpGanancia($sueldo){
    if ($sueldo>100000) {
        echo $sueldo *0.10;
        }
    else {
        echo 0;
    }
}
calcularImpGanancia($numero);
