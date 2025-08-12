<?php
abstract class Persona
{
	protected $dni;
	protected $nombre;
	protected $edad;

	public function __construct($dni, $nombre, $edad)
	{
		$this->dni = $dni;
		$this->nombre = $nombre;
		$this->edad = $edad;
	}

	public function getdatospersonales()
	{
		$datos = "
		<h2>DATOS PERSONALES</h2>
		DNI: {$this->dni}<br>
		NOMBRE: {$this->nombre}<br>
		EDAD: {$this->edad}<br>
		";
		return $datos;
	}
}
?>




