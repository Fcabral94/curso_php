<?php
/*Imaginese que tiene un array con precios de productos [4,5,2,1,5].
Por la inflación dichos precios deben actualizarse cada semana. Generar
 un script que sume .50 centavos a cada valor de dicho array. */

 $precios = array(4,5,2,1,5);
 $dollar = "$ ";
 foreach($precios as $value) {
     echo $dollar; 
     echo $value + 0.50;
     echo '<br>';
    }