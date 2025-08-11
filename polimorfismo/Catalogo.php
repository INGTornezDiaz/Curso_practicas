<?php
require_once ("ClasMesa.php");

$objCama = new Producto("cama",10500);
$arrInfoProducto = $objCama->getInfoProducto();

print_r('<pre>');
print_r($arrInfoProducto);
print_r('<pre>');

$objMueble = new Mueble("Closet",22500,"Casita","Blanco","Madera","Disponible");
$arrInfoMueble = $objMueble->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMueble);
print_r('<pre>');

$objMesa = new Mesa("Mesa de noche",500,"Nochesita","Azul","Madera","3mt.");
$objMesa->setForma("Redonda");
$arrInfoMesa = $objMesa->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMesa);
print_r('<pre>');
?>