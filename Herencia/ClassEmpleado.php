<?php 
require_once ("ClassPersona.php");

class Empleado extends Persona{

	protected $strpuesto;

	function __construc(int $dpi, string $nombre, int $edad){

		parent::__construc($dpi, $nombre, $edad);
	}

	public function setpuesto(string $puesto){
		$this->strpuesto = $puesto;
	}
	public function getpuesto():string {
		return $this->strpuesto;
	}

}

?>