<?php

require_once ("ClassEmpleado.php");
require_once ("ClassCliente.php");

$objEmpleado = new Persona(78978,"Andres Perez",25);
//objEmpleado->setpuesto("Admin");

echo $objEmpleado->getDatosPersonales(); 
?>