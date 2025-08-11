<?php 
require_once("ClassTienda.php");

$objProducto = new Tienda();

$objProducto->setProducto("Mono",2000,10);

echo $objProducto->setProducto();
?>