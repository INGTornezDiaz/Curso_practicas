<?php
//Interfaces con php
require_once("Operacion.php");

interface op_basicas {
	public function op_basicas(float $cant1, float $cant2, string $operacion);
}

class clacular implements Operacion,op_basicas{

	public function raizCuadrada(float $numero):float
	{
		$total = sqrt($numero);
		return $total;
	}

	public function potencia(int $numero, int $potencia):int
	{
		$total = pow($numero,$potencia);
		return $total;
	}

	public function op_basicas(float $cant1, float $cant2, string $operacion)
	{
		if($operacion == "+")
		{
			$result = $cant1 + $cant2;
		} elseif ($operacion == "-") {
			$result = $cant1 - $cant2;
		} elseif ($operacion == "*") {
			$result = $cant1 * $cant2;
		} elseif ($operacion == "/") {
			$result = $cant1 / $cant2;
		}else{
			$result = "Operacion no realizada";
		}
		return $result;



	}
}
?>