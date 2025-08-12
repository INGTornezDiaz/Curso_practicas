<?php 
require_once("autoload.php");

$objUsuario = new Usuario();

$insert = $objUsuario->inserUsaurio("Apolinar",7451368244,"apolinarronez@gmail.com");
echo $insert;
?>  