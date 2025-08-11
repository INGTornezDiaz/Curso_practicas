<?php  
class Operacion{
	public $cantidaduno = 0;
	public $cantidaddos = 0;
	public $resultado = 0;

	function __construct($intcant1, $intcant2){

		$this->cantidaduno = $intcant1;
		$this->cantidaddos = $intcant2;
	}
	public function getSuma(){
		$this->resultado = $this->cantidaduno + $this->cantidaddos;
		return $this->resultado;
	}
	public function getResta(){
		$this->resultado = $this->cantidaduno - $this->cantidaddos;
		return $this->resultado;
	}
	public function getMultiplicacion(){
		$this->resultado = $this->cantidaduno * $this->cantidaddos;
		return $this->resultado;
	}
	public function getDivision(){
		$this->resultado = $this->cantidaduno / $this->cantidaddos;
		return $this->resultado;
	}
}
?>   