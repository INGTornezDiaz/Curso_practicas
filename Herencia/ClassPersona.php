<?php
class Persona{
	public $intdpi;
	public $strnombre;
	public $intedad;

	function __construc(int $dpi, string $nombre, int $edad)
	{
	$this->intdpi = $dpi;
	$this->strnombre = $nombre;
	$this->intedad = $edad;
	}
	public function getdatospersonales(){
		$datos = "
		<H2>DATOS PERSONALES</H2>
		dpi: {$this->intdpi}<br>
		nombre: {$this->strnombre}<br>
		edad: {$this->intedad}<br>
		";
		return$datos;
	} 
    
 }

?>