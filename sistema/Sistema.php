<?php 
require_once("autoload.php");

$objUsuario = new Usuario();

//FUNCION PARA AGREGAR USUARIOS
//$insert = $objUsuario->inserUsaurio("Apolinar",7451368244,"apolinarronez@gmail.com");
//echo $insert;

//Funcion para mostrar los usuarios como un array
$users = $objUsuario->getUsario();
print_r("<pre>");// <pre></pre> esta etiqueta funciona como una estructura para que el array no se vea culero
print_r($users);
print_r("</pre>");

$updateUsert = $objUsuario->updateUsert(1, "apolinar", 7561230082, "polo@gmail.com");
echo $updateUsert;

$user = $objUsuario->getUser(1);
print_r("<pre>");// <pre></pre> esta etiqueta funciona como una estructura para que el array no se vea culero
print_r($user);
print_r("</pre>");

$delete = $objUsuario->deluser(2);
echo $delete;
?>	  	 