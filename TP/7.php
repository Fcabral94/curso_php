<?php
/*Generar un Script que te devuelva la fecha y hora actual en formato d-m-Y H:S*/
date_default_timezone_set("America/Argentina/Buenos_Aires");
echo date("d "."M "."Y");
echo '<br>';
echo date("H:i:s");
