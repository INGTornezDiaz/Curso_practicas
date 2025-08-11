<?php 
require_once ("ClassUsuario.php");

$objusuariouno = new Usuario("Apolinar Tornez", "apolinartornez45@gmail.com", "admin");


echo $objusuariouno->getperfil();

$objusuariouno->setcambiarclave("123456");
echo "<br><br>";
echo $objusuariouno->getperfil();

?>