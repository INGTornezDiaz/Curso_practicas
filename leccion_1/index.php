<?php 
	require_once ("ClassOperacion.php"); ///require_once detiene el proceso si un archivo falla a diferencia de include

	///Uso de metodos atraves de objetos en pocas palabras reutilizar
	$operacion1 = new Operacion(10,2);
	$operacion2 = new Operacion(100,3);

	$totalSuma = $operacion1->getSuma();
	echo "Total suma:".$totalSuma;
	echo "<br>";

	$totalResta = $operacion1->getResta();
	echo "Total resta:".$totalResta;
	echo "<br>";

	$totalMultiplicacion = $operacion1->getMultiplicacion();
	echo "Total multiplicacion:".$totalMultiplicacion;
	echo "<br>";

	$totalDivicion = $operacion1->getDivision();
	echo "Total division:".$totalDivicion;
	echo "<br><br>";

	$totalSuma = $operacion2->getSuma();
	echo "Total suma:".$totalSuma;
	echo "<br>";

	$totalResta = $operacion2->getResta();
	echo "Total resta:".$totalResta;
	echo "<br>";

	$totalMultiplicacion = $operacion2->getMultiplicacion();
	echo "Total multiplicacion:".$totalMultiplicacion;
	echo "<br>";

	$totalDivicion = $operacion2->getDivision();
	echo "Total division:".$totalDivicion;
	echo "<br>";
?>