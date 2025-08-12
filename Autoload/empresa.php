<?php

//require_once ("ClassEmpleado.php");
//require_once ("ClassCliente.php");

require_once ("Autoload.php");

$objEmpleado = new Empleado(78978,"Andres Perez",25);
$objEmpleado->setpuesto("Admininstrador");
$objEmpleado->setMensaje("BIENVENIDO AL SISTEMA");

echo $objEmpleado->getDatosPersonales();
echo $objEmpleado->getMensaje();
echo "Puesto: " .$objEmpleado->getpuesto();

echo "<br><br><br>";
$objCliente = new Cliente(78978,"Andres Perez",25);
$objCliente->setcredito(1500.50);
echo $objCliente->setMensaje("BIENVENIDO CLIENTE");

echo $objCliente->getMensaje();
echo $objCliente->getDatosPersonales();
echo "Credito: " .$objCliente->getcredito();


?>