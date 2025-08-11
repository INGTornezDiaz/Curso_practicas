<?php 
require_once("ClassEmpleado.php");

$objEmpleado = new Empleado(78978,"Polo",25);
$objEmpleado->setpuesto("Administrador")

echo $objEmpleado->getdatospersonales();
echo "Puesto :".$objEmpleado->getpuesto();
?>