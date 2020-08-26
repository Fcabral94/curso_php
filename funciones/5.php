<?php
function calcularimpganancia($sueldo){
    if ($sueldo>100000) {
        echo $sueldo *0.10;
        }
    else {
        echo 0;
    }
}
calcularimpganancia(28000);