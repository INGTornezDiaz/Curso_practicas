<?php
///Clases y metodos abstractos
abstract class Persona{
	public $intdpi;
	public $strnombre;
	public $intedad;

	function __construc(int $dpi, string $nombre, int $edad){

	$this->intdpi = $dpi;
	$this->strnombre = $nombre;
	$this->intedad = $edad;

	}
	public function getdatospersonales() {
		$datos = "
		<H2>DATOS PERSONALES</H2>
		DPI: {$this->intdpi}<br>   
		NOMBRE: {$this->strnombre}<br>
		EDAD: {$this->intedad}<br>
		";
	}
    
}
?>





