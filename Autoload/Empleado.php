<?php
require_once("Persona.php");

class Cliente extends Persona
{
	private $credito;
	private $mensaje;

	public function __construct($dni, $nombre, $edad)
	{
		parent::__construct($dni, $nombre, $edad);
	}

	public function setcredito($credito)
	{
		$this->credito = $credito;
	}

	public function getcredito()
	{
		return $this->credito;
	}

	public function setMensaje($mensaje)
	{
		$this->mensaje = $mensaje;
	}

	public function getMensaje()
	{
		return $this->mensaje;
	}
}

spl_autoload_register(function($class){
	require_once __DIR__ . "/" . $class . ".php";
});