<?php
require "Persona.php";

class Empleado extends Persona
{}


$franco = new Empleado('Franco',"Cabrl",26);
$sergio = new Empleado('Sergio',"Cabral",30);

print_r ($franco);   