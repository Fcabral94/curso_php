<?php
//repetir lo anterior pero utilizando un array, pero utilizansdo la funcion array rand
$rand = array(1,2,3,4,5,6);
function numerosRand ($rand){
return array_rand($rand,1);

}
echo numerosRand($rand);
